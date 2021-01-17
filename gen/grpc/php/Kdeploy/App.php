<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kdeploy.proto

namespace Kdeploy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>kdeploy.App</code>
 */
class App extends \Google\Protobuf\Internal\Message
{
    /**
     * name of the application
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * application namespace
     *
     * Generated from protobuf field <code>string namespace = 2;</code>
     */
    private $namespace = '';
    /**
     * docker image of application
     *
     * Generated from protobuf field <code>string image = 3;</code>
     */
    private $image = '';
    /**
     * args are arguments given to the docker image at startup
     *
     * Generated from protobuf field <code>repeated string args = 5;</code>
     */
    private $args;
    /**
     * k/v map of environmental variables
     *
     * Generated from protobuf field <code>map<string, string> env = 6;</code>
     */
    private $env;
    /**
     * k/v map of ports to expose ex: http: 80 https: 443
     *
     * Generated from protobuf field <code>map<string, uint32> ports = 7;</code>
     */
    private $ports;
    /**
     * number of deployment replicas
     *
     * Generated from protobuf field <code>uint32 replicas = 8;</code>
     */
    private $replicas = 0;
    /**
     * status tracks the state of the application during it's lifecycle
     *
     * Generated from protobuf field <code>.kdeploy.AppStatus status = 9;</code>
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
     *     @type string $namespace
     *           application namespace
     *     @type string $image
     *           docker image of application
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $args
     *           args are arguments given to the docker image at startup
     *     @type array|\Google\Protobuf\Internal\MapField $env
     *           k/v map of environmental variables
     *     @type array|\Google\Protobuf\Internal\MapField $ports
     *           k/v map of ports to expose ex: http: 80 https: 443
     *     @type int $replicas
     *           number of deployment replicas
     *     @type \Kdeploy\AppStatus $status
     *           status tracks the state of the application during it's lifecycle
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kdeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * name of the application
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * name of the application
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * application namespace
     *
     * Generated from protobuf field <code>string namespace = 2;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * application namespace
     *
     * Generated from protobuf field <code>string namespace = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * docker image of application
     *
     * Generated from protobuf field <code>string image = 3;</code>
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * docker image of application
     *
     * Generated from protobuf field <code>string image = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->image = $var;

        return $this;
    }

    /**
     * args are arguments given to the docker image at startup
     *
     * Generated from protobuf field <code>repeated string args = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * args are arguments given to the docker image at startup
     *
     * Generated from protobuf field <code>repeated string args = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $arr;

        return $this;
    }

    /**
     * k/v map of environmental variables
     *
     * Generated from protobuf field <code>map<string, string> env = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * k/v map of environmental variables
     *
     * Generated from protobuf field <code>map<string, string> env = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setEnv($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->env = $arr;

        return $this;
    }

    /**
     * k/v map of ports to expose ex: http: 80 https: 443
     *
     * Generated from protobuf field <code>map<string, uint32> ports = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPorts()
    {
        return $this->ports;
    }

    /**
     * k/v map of ports to expose ex: http: 80 https: 443
     *
     * Generated from protobuf field <code>map<string, uint32> ports = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPorts($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->ports = $arr;

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
     * status tracks the state of the application during it's lifecycle
     *
     * Generated from protobuf field <code>.kdeploy.AppStatus status = 9;</code>
     * @return \Kdeploy\AppStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * status tracks the state of the application during it's lifecycle
     *
     * Generated from protobuf field <code>.kdeploy.AppStatus status = 9;</code>
     * @param \Kdeploy\AppStatus $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Kdeploy\AppStatus::class);
        $this->status = $var;

        return $this;
    }

}

