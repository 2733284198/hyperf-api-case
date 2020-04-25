<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: amqp-subscriber.proto

namespace AMQPSubscriber;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AMQPSubscriber.PutParameter</code>
 */
class PutParameter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string identity = 1;</code>
     */
    protected $identity = '';
    /**
     * Generated from protobuf field <code>string queue = 2;</code>
     */
    protected $queue = '';
    /**
     * Generated from protobuf field <code>string url = 3;</code>
     */
    protected $url = '';
    /**
     * Generated from protobuf field <code>string secret = 4;</code>
     */
    protected $secret = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $identity
     *     @type string $queue
     *     @type string $url
     *     @type string $secret
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AmqpSubscriber::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string identity = 1;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Generated from protobuf field <code>string identity = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string queue = 2;</code>
     * @return string
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * Generated from protobuf field <code>string queue = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setQueue($var)
    {
        GPBUtil::checkString($var, True);
        $this->queue = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url = 3;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string secret = 4;</code>
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Generated from protobuf field <code>string secret = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret = $var;

        return $this;
    }

}

