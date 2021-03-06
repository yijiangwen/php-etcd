<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>etcdserverpb.LeaseCheckpoint</code>
 */
class LeaseCheckpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * ID is the lease ID to checkpoint.
     *
     * Generated from protobuf field <code>int64 ID = 1;</code>
     */
    private $ID = 0;
    /**
     * Remaining_TTL is the remaining time until expiry of the lease.
     *
     * Generated from protobuf field <code>int64 remaining_TTL = 2;</code>
     */
    private $remaining_TTL = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $ID
     *           ID is the lease ID to checkpoint.
     *     @type int|string $remaining_TTL
     *           Remaining_TTL is the remaining time until expiry of the lease.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * ID is the lease ID to checkpoint.
     *
     * Generated from protobuf field <code>int64 ID = 1;</code>
     * @return int|string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * ID is the lease ID to checkpoint.
     *
     * Generated from protobuf field <code>int64 ID = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setID($var)
    {
        GPBUtil::checkInt64($var);
        $this->ID = $var;

        return $this;
    }

    /**
     * Remaining_TTL is the remaining time until expiry of the lease.
     *
     * Generated from protobuf field <code>int64 remaining_TTL = 2;</code>
     * @return int|string
     */
    public function getRemainingTTL()
    {
        return $this->remaining_TTL;
    }

    /**
     * Remaining_TTL is the remaining time until expiry of the lease.
     *
     * Generated from protobuf field <code>int64 remaining_TTL = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRemainingTTL($var)
    {
        GPBUtil::checkInt64($var);
        $this->remaining_TTL = $var;

        return $this;
    }

}

