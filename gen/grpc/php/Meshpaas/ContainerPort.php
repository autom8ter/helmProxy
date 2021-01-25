<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

namespace Meshpaas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>meshpaas.ContainerPort</code>
 */
class ContainerPort extends \Google\Protobuf\Internal\Message
{
    /**
     * port name
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * port number
     *
     * Generated from protobuf field <code>uint32 number = 2;</code>
     */
    private $number = 0;
    /**
     * expose to service mesh(outside of localhost)
     *
     * Generated from protobuf field <code>bool expose = 3;</code>
     */
    private $expose = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           port name
     *     @type int $number
     *           port number
     *     @type bool $expose
     *           expose to service mesh(outside of localhost)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * port name
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * port name
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
     * port number
     *
     * Generated from protobuf field <code>uint32 number = 2;</code>
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * port number
     *
     * Generated from protobuf field <code>uint32 number = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->number = $var;

        return $this;
    }

    /**
     * expose to service mesh(outside of localhost)
     *
     * Generated from protobuf field <code>bool expose = 3;</code>
     * @return bool
     */
    public function getExpose()
    {
        return $this->expose;
    }

    /**
     * expose to service mesh(outside of localhost)
     *
     * Generated from protobuf field <code>bool expose = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setExpose($var)
    {
        GPBUtil::checkBool($var);
        $this->expose = $var;

        return $this;
    }

}

