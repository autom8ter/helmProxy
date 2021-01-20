<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

namespace Meshpaas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AppInput creates/replaces an app
 *
 * Generated from protobuf message <code>meshpaas.AppInput</code>
 */
class AppInput extends \Google\Protobuf\Internal\Message
{
    /**
     * name of the application
     *
     * Generated from protobuf field <code>string name = 1 [(.validator.field) = {</code>
     */
    private $name = '';
    /**
     * application project
     *
     * Generated from protobuf field <code>string project = 2 [(.validator.field) = {</code>
     */
    private $project = '';
    /**
     * Generated from protobuf field <code>repeated .meshpaas.Container containers = 3 [(.validator.field) = {</code>
     */
    private $containers;
    /**
     * number of deployment replicas
     *
     * Generated from protobuf field <code>uint32 replicas = 7;</code>
     */
    private $replicas = 0;
    /**
     * Generated from protobuf field <code>.meshpaas.Networking networking = 10 [(.validator.field) = {</code>
     */
    private $networking = null;
    /**
     * application authentication options
     *
     * Generated from protobuf field <code>.meshpaas.Authn authentication = 12;</code>
     */
    private $authentication = null;
    /**
     * application authorization options
     *
     * Generated from protobuf field <code>.meshpaas.Authz authorization = 13;</code>
     */
    private $authorization = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           name of the application
     *     @type string $project
     *           application project
     *     @type \Meshpaas\Container[]|\Google\Protobuf\Internal\RepeatedField $containers
     *     @type int $replicas
     *           number of deployment replicas
     *     @type \Meshpaas\Networking $networking
     *     @type \Meshpaas\Authn $authentication
     *           application authentication options
     *     @type \Meshpaas\Authz $authorization
     *           application authorization options
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
     * application project
     *
     * Generated from protobuf field <code>string project = 2 [(.validator.field) = {</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * application project
     *
     * Generated from protobuf field <code>string project = 2 [(.validator.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .meshpaas.Container containers = 3 [(.validator.field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContainers()
    {
        return $this->containers;
    }

    /**
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
     * Generated from protobuf field <code>uint32 replicas = 7;</code>
     * @return int
     */
    public function getReplicas()
    {
        return $this->replicas;
    }

    /**
     * number of deployment replicas
     *
     * Generated from protobuf field <code>uint32 replicas = 7;</code>
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
     * Generated from protobuf field <code>.meshpaas.Networking networking = 10 [(.validator.field) = {</code>
     * @return \Meshpaas\Networking
     */
    public function getNetworking()
    {
        return $this->networking;
    }

    /**
     * Generated from protobuf field <code>.meshpaas.Networking networking = 10 [(.validator.field) = {</code>
     * @param \Meshpaas\Networking $var
     * @return $this
     */
    public function setNetworking($var)
    {
        GPBUtil::checkMessage($var, \Meshpaas\Networking::class);
        $this->networking = $var;

        return $this;
    }

    /**
     * application authentication options
     *
     * Generated from protobuf field <code>.meshpaas.Authn authentication = 12;</code>
     * @return \Meshpaas\Authn
     */
    public function getAuthentication()
    {
        return $this->authentication;
    }

    /**
     * application authentication options
     *
     * Generated from protobuf field <code>.meshpaas.Authn authentication = 12;</code>
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
     * application authorization options
     *
     * Generated from protobuf field <code>.meshpaas.Authz authorization = 13;</code>
     * @return \Meshpaas\Authz
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    /**
     * application authorization options
     *
     * Generated from protobuf field <code>.meshpaas.Authz authorization = 13;</code>
     * @param \Meshpaas\Authz $var
     * @return $this
     */
    public function setAuthorization($var)
    {
        GPBUtil::checkMessage($var, \Meshpaas\Authz::class);
        $this->authorization = $var;

        return $this;
    }

}

