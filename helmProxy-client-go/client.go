package helmProxy_client_go

import (
	"context"
	"fmt"
	helmProxypb "github.com/autom8ter/helmProxy/gen/grpc/go"
	"github.com/autom8ter/helmProxy/internal/logger"
	grpc_zap "github.com/grpc-ecosystem/go-grpc-middleware/logging/zap"
	grpc_validator "github.com/grpc-ecosystem/go-grpc-middleware/validator"
	grpc_prometheus "github.com/grpc-ecosystem/go-grpc-prometheus"
	"github.com/pkg/errors"
	"go.uber.org/zap"
	"golang.org/x/oauth2"
	"google.golang.org/grpc"
	"google.golang.org/grpc/credentials"
	"google.golang.org/grpc/metadata"
)

// Options holds configuration options
type Options struct {
	tokenSource oauth2.TokenSource
	metrics     bool
	logging     bool
	logPayload  bool
	creds       credentials.TransportCredentials
	idtoken     bool
}

// Opt is a single configuration option
type Opt func(o *Options)

// WithTransportCreds adds transport credentials to the client
func WithTransportCreds(creds credentials.TransportCredentials) Opt {
	return func(o *Options) {
		o.creds = creds
	}
}

// WithTokenSource uses oauth token add an authorization header to every outbound request
func WithTokenSource(tokenSource oauth2.TokenSource) Opt {
	return func(o *Options) {
		o.tokenSource = tokenSource
	}
}

// WithMetrics registers prometheus metrics
func WithMetrics(metrics bool) Opt {
	return func(o *Options) {
		o.metrics = metrics
	}
}

// WithLogging registers a logging middleware
func WithLogging(logging, logPayload bool) Opt {
	return func(o *Options) {
		o.logging = logging
		o.logPayload = logPayload
	}
}

// WithIDToken makes the client use the oauth id token(if it exists) instead of the oauth access token
func WithIDToken(idToken bool) Opt {
	return func(o *Options) {
		o.idtoken = idToken
	}
}

func unaryAuth(tokenSource oauth2.TokenSource, useIDToken bool) grpc.UnaryClientInterceptor {
	return func(ctx context.Context, method string, req, reply interface{}, cc *grpc.ClientConn, invoker grpc.UnaryInvoker, opts ...grpc.CallOption) error {
		ctx, err := toContext(ctx, tokenSource, useIDToken)
		if err != nil {
			return err
		}
		return invoker(ctx, method, req, reply, cc, opts...)
	}
}

func streamAuth(tokenSource oauth2.TokenSource, useIDToken bool) grpc.StreamClientInterceptor {
	return func(ctx context.Context, desc *grpc.StreamDesc, cc *grpc.ClientConn, method string, streamer grpc.Streamer, opts ...grpc.CallOption) (grpc.ClientStream, error) {
		ctx, err := toContext(ctx, tokenSource, useIDToken)
		if err != nil {
			return nil, err
		}
		return streamer(ctx, desc, cc, method, opts...)
	}
}

// NewClient creates a new gRPC helmProxy client
func NewClient(ctx context.Context, target string, opts ...Opt) (*Client, error) {
	if target == "" {
		return nil, errors.New("empty target")
	}
	dialopts := []grpc.DialOption{}
	var uinterceptors []grpc.UnaryClientInterceptor
	var sinterceptors []grpc.StreamClientInterceptor
	options := &Options{}
	for _, o := range opts {
		o(options)
	}
	if options.creds == nil {
		dialopts = append(dialopts, grpc.WithInsecure())
	} else {
		dialopts = append(dialopts, grpc.WithTransportCredentials(options.creds))
	}
	uinterceptors = append(uinterceptors, grpc_validator.UnaryClientInterceptor())

	if options.metrics {
		uinterceptors = append(uinterceptors, grpc_prometheus.UnaryClientInterceptor)
		sinterceptors = append(sinterceptors, grpc_prometheus.StreamClientInterceptor)
	}

	if options.tokenSource != nil {
		uinterceptors = append(uinterceptors, unaryAuth(options.tokenSource, options.idtoken))
		sinterceptors = append(sinterceptors, streamAuth(options.tokenSource, options.idtoken))
	}
	if options.logging {
		lgger := logger.New(true, zap.Bool("client", true))
		uinterceptors = append(uinterceptors, grpc_zap.UnaryClientInterceptor(lgger.Zap()))
		sinterceptors = append(sinterceptors, grpc_zap.StreamClientInterceptor(lgger.Zap()))

		if options.logPayload {
			uinterceptors = append(uinterceptors, grpc_zap.PayloadUnaryClientInterceptor(lgger.Zap(), func(ctx context.Context, fullMethodName string) bool {
				return true
			}))
			sinterceptors = append(sinterceptors, grpc_zap.PayloadStreamClientInterceptor(lgger.Zap(), func(ctx context.Context, fullMethodName string) bool {
				return true
			}))
		}
	}
	dialopts = append(dialopts,
		grpc.WithChainUnaryInterceptor(uinterceptors...),
		grpc.WithChainStreamInterceptor(sinterceptors...),
		grpc.WithBlock(),
	)
	conn, err := grpc.DialContext(ctx, target, dialopts...)
	if err != nil {
		return nil, err
	}
	return &Client{
		client: helmProxypb.NewHelmProxyServiceClient(conn),
	}, nil
}

// Client is a helmProxy gRPC client
type Client struct {
	client helmProxypb.HelmProxyServiceClient
}

func toContext(ctx context.Context, tokenSource oauth2.TokenSource, useIdToken bool) (context.Context, error) {
	token, err := tokenSource.Token()
	if err != nil {
		return ctx, errors.Wrap(err, "failed to get token")
	}

	if useIdToken {
		idToken := token.Extra("id_token")
		if idToken != nil {
			return metadata.AppendToOutgoingContext(
				ctx,
				"Authorization", fmt.Sprintf("Bearer %v", idToken.(string)),
			), nil
		}
	}
	return metadata.AppendToOutgoingContext(
		ctx,
		"Authorization", fmt.Sprintf("Bearer %v", token.AccessToken),
	), nil
}

// InstallApp installs an app/release in the given namespace
func (c *Client) InstallApp(ctx context.Context, input *helmProxypb.AppInput) (*helmProxypb.App, error) {
	return c.client.InstallApp(ctx, input)
}

// UninstallApp uninstalls an app/release from the given namespace
func (c *Client) UninstallApp(ctx context.Context, input *helmProxypb.AppRef) error {
	_, err := c.client.UninstallApp(ctx, input)
	return err
}

// UpdateApp updates an app/release in the given namespace
func (c *Client) UpdateApp(ctx context.Context, input *helmProxypb.AppInput) (*helmProxypb.App, error) {
	return c.client.UpdateApp(ctx, input)
}

// RollbackApp rolls the app/release back to the previous version in the given namespace
func (c *Client) RollbackApp(ctx context.Context, input *helmProxypb.AppRef) error {
	_, err := c.client.RollbackApp(ctx, input)
	return err
}

// SearchCharts searches for a local/cached helm chart
func (c *Client) SearchCharts(ctx context.Context, input *helmProxypb.ChartFilter) (*helmProxypb.Charts, error) {
	return c.client.SearchCharts(ctx, input)
}

// GetApp gets an app/release from the given namespace
func (c *Client) GetApp(ctx context.Context, input *helmProxypb.AppRef) (*helmProxypb.App, error) {
	return c.client.GetApp(ctx, input)
}

// SearchApps searches for apps/releases.
func (c *Client) SearchApps(ctx context.Context, input *helmProxypb.AppFilter) (*helmProxypb.Apps, error) {
	return c.client.SearchApps(ctx, input)
}

// GetHistory gets a list of previous versions for the app/release
func (c *Client) GetHistory(ctx context.Context, input *helmProxypb.HistoryFilter) (*helmProxypb.Apps, error) {
	return c.client.GetHistory(ctx, input)
}
