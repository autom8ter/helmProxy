<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kdeploy.proto

namespace Kdeploy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>kdeploy.AppStatus</code>
 */
class AppStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .kdeploy.Replica replicas = 1;</code>
     */
    private $replicas;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Kdeploy\Replica[]|\Google\Protobuf\Internal\RepeatedField $replicas
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kdeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .kdeploy.Replica replicas = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReplicas()
    {
        return $this->replicas;
    }

    /**
     * Generated from protobuf field <code>repeated .kdeploy.Replica replicas = 1;</code>
     * @param \Kdeploy\Replica[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReplicas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Kdeploy\Replica::class);
        $this->replicas = $arr;

        return $this;
    }

}

