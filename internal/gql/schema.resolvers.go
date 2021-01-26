package gql

// This file will be automatically regenerated based on the schema, any resolver implementations
// will be copied through when generating and any unknown code will be moved to the end.

import (
	"context"

	"github.com/99designs/gqlgen/graphql"
	"github.com/autom8ter/meshpaas/gen/gql/go/generated"
	"github.com/autom8ter/meshpaas/gen/gql/go/model"
	meshpaaspb "github.com/autom8ter/meshpaas/gen/grpc/go"
	"github.com/autom8ter/meshpaas/internal/helpers"
	"github.com/vektah/gqlparser/v2/gqlerror"
)

func (r *mutationResolver) UninstallApp(ctx context.Context, input model.AppRef) (*string, error) {
	_, err := r.client.UninstallApp(ctx, toAppRef(input))
	if err != nil {
		return nil, &gqlerror.Error{
			Message: err.Error(),
			Path:    graphql.GetPath(ctx),
		}
	}
	return nil, nil
}

func (r *mutationResolver) InstallApp(ctx context.Context, input model.AppInput) (*model.App, error) {
	resp, err := r.client.InstallApp(ctx, toAppInput(input))
	if err != nil {
		return nil, &gqlerror.Error{
			Message: err.Error(),
			Path:    graphql.GetPath(ctx),
		}
	}
	return gqlApp(resp), nil
}

func (r *mutationResolver) UpdateApp(ctx context.Context, input model.AppInput) (*model.App, error) {
	resp, err := r.client.UpdateApp(ctx, toAppInput(input))
	if err != nil {
		return nil, &gqlerror.Error{
			Message: err.Error(),
			Path:    graphql.GetPath(ctx),
		}
	}
	return gqlApp(resp), nil
}

func (r *mutationResolver) RollbackApp(ctx context.Context, input model.AppRef) (*model.App, error) {
	_, err := r.client.RollbackApp(ctx, toAppRef(input))
	if err != nil {
		return nil, &gqlerror.Error{
			Message: err.Error(),
			Path:    graphql.GetPath(ctx),
		}
	}
	return nil, nil
}

func (r *queryResolver) GetApp(ctx context.Context, input model.AppRef) (*model.App, error) {
	resp, err := r.client.GetApp(ctx, toAppRef(input))
	if err != nil {
		return nil, &gqlerror.Error{
			Message: err.Error(),
			Path:    graphql.GetPath(ctx),
		}
	}
	return gqlApp(resp), nil
}

func (r *queryResolver) ListApps(ctx context.Context, input model.ProjectRef) ([]*model.App, error) {
	resp, err := r.client.ListApps(ctx, &meshpaaspb.ProjectRef{Name: input.Name})
	if err != nil {
		return nil, &gqlerror.Error{
			Message: err.Error(),
			Path:    graphql.GetPath(ctx),
		}
	}
	var apps []*model.App
	for _, a := range resp.Apps {
		apps = append(apps, gqlApp(a))
	}
	return apps, nil
}

func (r *queryResolver) SearchTemplates(ctx context.Context, input model.Filter) ([]*model.AppTemplate, error) {
	resp, err := r.client.SearchTemplates(ctx, &meshpaaspb.Filter{
		Term:  input.Term,
		Regex: helpers.FromBoolPointer(input.Regex),
	})
	if err != nil {
		return nil, &gqlerror.Error{
			Message: err.Error(),
			Path:    graphql.GetPath(ctx),
		}
	}
	var templates []*model.AppTemplate
	for _, t := range resp.Templates {
		templates = append(templates, gqlAppTemplate(t))
	}
	return templates, nil
}

// Mutation returns generated.MutationResolver implementation.
func (r *Resolver) Mutation() generated.MutationResolver { return &mutationResolver{r} }

// Query returns generated.QueryResolver implementation.
func (r *Resolver) Query() generated.QueryResolver { return &queryResolver{r} }

type mutationResolver struct{ *Resolver }
type queryResolver struct{ *Resolver }
