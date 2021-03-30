<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: route_guide.proto

namespace Routeguide;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A RouteNote is a message sent while at a given point.
 *
 * Generated from protobuf message <code>routeguide.RouteNote</code>
 */
class RouteNote extends \Google\Protobuf\Internal\Message
{
    /**
     * The location from which the message is sent.
     *
     * Generated from protobuf field <code>.routeguide.Point location = 1;</code>
     */
    protected $location = null;
    /**
     * The message to be sent.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     */
    protected $message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Routeguide\Point $location
     *           The location from which the message is sent.
     *     @type string $message
     *           The message to be sent.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RouteGuide::initOnce();
        parent::__construct($data);
    }

    /**
     * The location from which the message is sent.
     *
     * Generated from protobuf field <code>.routeguide.Point location = 1;</code>
     * @return \Routeguide\Point
     */
    public function getLocation()
    {
        return isset($this->location) ? $this->location : null;
    }

    public function hasLocation()
    {
        return isset($this->location);
    }

    public function clearLocation()
    {
        unset($this->location);
    }

    /**
     * The location from which the message is sent.
     *
     * Generated from protobuf field <code>.routeguide.Point location = 1;</code>
     * @param \Routeguide\Point $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \Routeguide\Point::class);
        $this->location = $var;

        return $this;
    }

    /**
     * The message to be sent.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * The message to be sent.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}

