<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

namespace Meshpaas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * App is a stateless application
 *
 * Generated from protobuf message <code>meshpaas.App</code>
 */
class App extends \Google\Protobuf\Internal\Message
{
    /**
     * name of the application
     *
     * Generated from protobuf field <code>string name = 1 [(.validator.field) = {</code>
     */
    private $name = '';
    /**
     * containers are docker containers that run the application's business logic
     *
     * Generated from protobuf field <code>repeated .meshpaas.Container containers = 3 [(.validator.field) = {</code>
     */
    private $containers;
    /**
     * number of deployment replicas
     *
     * Generated from protobuf field <code>uint32 replicas = 8;</code>
     */
    private $replicas = 0;
    /**
     * gateway/service-mesh routing
     *
     * Generated from protobuf field <code>.meshpaas.Routing routing = 11 [(.validator.field) = {</code>
     */
    private $routing = null;
    /**
     * application authentication options
     *
     * Generated from protobuf field <code>.meshpaas.Authn authentication = 12 [(.validator.field) = {</code>
     */
    private $authentication = null;
    /**
     * image_pull_secret is the secret used to pull images from docker registry
     *
     * Generated from protobuf field <code>string image_pull_secret = 14;</code>
     */
    private $image_pull_secret = '';
    /**
     * status tracks the state of the application during it's lifecycle
     *
     * Generated from protobuf field <code>.meshpaas.AppStatus status = 20 [(.validator.field) = {</code>
     */
    private $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           name of the application
     *     @type \Meshpaas\Container[]|\Google\Protobuf\Internal\RepeatedField $containers
     *           containers are docker containers that run the application's business logic
     *     @type int $replicas
     *           number of deployment replicas
     *     @type \Meshpaas\Routing $routing
     *           gateway/service-mesh routing
     *     @type \Meshpaas\Authn $authentication
     *           application authentication options
     *     @type string $image_pull_secret
     *           image_pull_secret is the secret used to pull images from docker registry
     *     @type \Meshpaas\AppStatus $status
     *           status tracks the state of the application during it's lifecycle
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * name of the application
     *
     * Generated from protobuf field <code>string name = 1 [(.validator.field) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * name of the application
     *
     * Generated from protobuf field <code>string name = 1 [(.validator.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * containers are docker containers that run the application's business logic
     *
     * Generated from protobuf field <code>repeated .meshpaas.Container containers = 3 [(.validator.field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContainers()
    {
        return $this->containers;
    }

    /**
     * containers are docker containers that run the application's business logic
     *
     * Generated from protobuf field <code>repeated .meshpaas.Container containers = 3 [(.validator.field) = {</code>
     * @param \Meshpaas\Container[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContainers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Meshpaas\Container::class);
        $this->containers = $arr;

        return $this;
    }

    /**
     * number of deployment replicas
     *
     * Generated from protobuf field <code>uint32 replicas = 8;</code>
     * @return int
     */
    public function getReplicas()
    {
        return $this->replicas;
    }

    /**
     * number of deployment replicas
     *
     * Generated from protobuf field <code>uint32 replicas = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setReplicas($var)
    {
        GPBUtil::checkUint32($var);
        $this->replicas = $var;

        return $this;
    }

    /**
     * gateway/service-mesh routing
     *
     * Generated from protobuf field <code>.meshpaas.Routing routing = 11 [(.validator.field) = {</code>
     * @return \Meshpaas\Routing
     */
    public function getRouting()
    {
        return $this->routing;
    }

    /**
     * gateway/service-mesh routing
     *
     * Generated from protobuf field <code>.meshpaas.Routing routing = 11 [(.validator.field) = {</code>
     * @param \Meshpaas\Routing $var
     * @return $this
     */
    public function setRouting($var)
    {
        GPBUtil::checkMessage($var, \Meshpaas\Routing::class);
        $this->routing = $var;

        return $this;
    }

    /**
     * application authentication options
     *
     * Generated from protobuf field <code>.meshpaas.Authn authentication = 12 [(.validator.field) = {</code>
     * @return \Meshpaas\Authn
     */
    public function getAuthentication()
    {
        return $this->authentication;
    }

    /**
     * application authentication options
     *
     * Generated from protobuf field <code>.meshpaas.Authn authentication = 12 [(.validator.field) = {</code>
     * @param \Meshpaas\Authn $var
     * @return $this
     */
    public function setAuthentication($var)
    {
        GPBUtil::checkMessage($var, \Meshpaas\Authn::class);
        $this->authentication = $var;

        return $this;
    }

    /**
     * image_pull_secret is the secret used to pull images from docker registry
     *
     * Generated from protobuf field <code>string image_pull_secret = 14;</code>
     * @return string
     */
    public function getImagePullSecret()
    {
        return $this->image_pull_secret;
    }

    /**
     * image_pull_secret is the secret used to pull images from docker registry
     *
     * Generated from protobuf field <code>string image_pull_secret = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setImagePullSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_pull_secret = $var;

        return $this;
    }

    /**
     * status tracks the state of the application during it's lifecycle
     *
     * Generated from protobuf field <code>.meshpaas.AppStatus status = 20 [(.validator.field) = {</code>
     * @return \Meshpaas\AppStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * status tracks the state of the application during it's lifecycle
     *
     * Generated from protobuf field <code>.meshpaas.AppStatus status = 20 [(.validator.field) = {</code>
     * @param \Meshpaas\AppStatus $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Meshpaas\AppStatus::class);
        $this->status = $var;

        return $this;
    }

}

