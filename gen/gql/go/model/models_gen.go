// Code generated by github.com/99designs/gqlgen, DO NOT EDIT.

package model

type App struct {
	Name       string       `json:"name"`
	Containers []*Container `json:"containers"`
	Replicas   int          `json:"replicas"`
	Routing    *Routing     `json:"routing"`
	Status     *AppStatus   `json:"status"`
}

type AppInput struct {
	Name       string            `json:"name"`
	Containers []*ContainerInput `json:"containers"`
	Replicas   int               `json:"replicas"`
	Routing    *RoutingInput     `json:"routing"`
}

type AppStatus struct {
	Replicas []*Replica `json:"replicas"`
}

type Container struct {
	Name  string                 `json:"name"`
	Image string                 `json:"image"`
	Args  []string               `json:"args"`
	Env   map[string]interface{} `json:"env"`
	Ports []*ContainerPort       `json:"ports"`
}

type ContainerInput struct {
	Name  string                 `json:"name"`
	Image string                 `json:"image"`
	Args  []string               `json:"args"`
	Env   map[string]interface{} `json:"env"`
	Ports []*ContainerPortInput  `json:"ports"`
}

type ContainerPort struct {
	Name   string `json:"name"`
	Number int    `json:"number"`
	Expose bool   `json:"expose"`
}

type ContainerPortInput struct {
	Name   string `json:"name"`
	Number int    `json:"number"`
	Expose bool   `json:"expose"`
}

type HTTPRoute struct {
	Name             string   `json:"name"`
	Port             int      `json:"port"`
	PathPrefix       *string  `json:"path_prefix"`
	RewriteURI       *string  `json:"rewrite_uri"`
	AllowOrigins     []string `json:"allow_origins"`
	AllowMethods     []string `json:"allow_methods"`
	AllowHeaders     []string `json:"allow_headers"`
	ExposeHeaders    []string `json:"expose_headers"`
	AllowCredentials *bool    `json:"allow_credentials"`
}

type HTTPRouteInput struct {
	Name             string   `json:"name"`
	Port             int      `json:"port"`
	PathPrefix       *string  `json:"path_prefix"`
	RewriteURI       *string  `json:"rewrite_uri"`
	AllowOrigins     []string `json:"allow_origins"`
	AllowMethods     []string `json:"allow_methods"`
	AllowHeaders     []string `json:"allow_headers"`
	ExposeHeaders    []string `json:"expose_headers"`
	AllowCredentials *bool    `json:"allow_credentials"`
}

type Log struct {
	Message string `json:"message"`
}

type LogOpts struct {
	Name         string `json:"name"`
	Container    string `json:"container"`
	Previous     *bool  `json:"previous"`
	TailLines    *int   `json:"tail_lines"`
	SinceSeconds *int   `json:"since_seconds"`
	Stream       *bool  `json:"stream"`
}

type Ref struct {
	Name string `json:"name"`
}

type Replica struct {
	Phase     string `json:"phase"`
	Condition string `json:"condition"`
	Reason    string `json:"reason"`
}

type Routing struct {
	Gateway    *string      `json:"gateway"`
	Hosts      []string     `json:"hosts"`
	HTTPRoutes []*HTTPRoute `json:"http_routes"`
}

type RoutingInput struct {
	Gateway    *string           `json:"gateway"`
	Hosts      []string          `json:"hosts"`
	HTTPRoutes []*HTTPRouteInput `json:"http_routes"`
}

type Task struct {
	Name        string       `json:"name"`
	Containers  []*Container `json:"containers"`
	Schedule    string       `json:"schedule"`
	Completions *int         `json:"completions"`
}

type TaskInput struct {
	Name        string            `json:"name"`
	Containers  []*ContainerInput `json:"containers"`
	Schedule    string            `json:"schedule"`
	Completions *int              `json:"completions"`
}
