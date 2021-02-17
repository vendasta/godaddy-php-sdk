<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: godaddy/v1/api.proto

namespace Godaddy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request for patching a domain
 * </pre>
 *
 * Protobuf type <code>godaddy.v1.PatchDomainRequest</code>
 */
class PatchDomainRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The domain being patched
     * </pre>
     *
     * <code>string domain = 1;</code>
     */
    private $domain = '';
    /**
     * <pre>
     * Controls which fields come back on the response
     * </pre>
     *
     * <code>.vendastatypes.FieldMask field_mask = 8;</code>
     */
    private $field_mask = null;
    /**
     * <pre>
     * Sets the domain to be locked or not; cannot be updated within 60 days of purchasing the domain
     * </pre>
     *
     * <code>bool locked = 2;</code>
     */
    private $locked = false;

    public function __construct() {
        \GPBMetadata\Godaddy\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The domain being patched
     * </pre>
     *
     * <code>string domain = 1;</code>
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * <pre>
     * The domain being patched
     * </pre>
     *
     * <code>string domain = 1;</code>
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;
    }

    /**
     * <pre>
     * Controls which fields come back on the response
     * </pre>
     *
     * <code>.vendastatypes.FieldMask field_mask = 8;</code>
     */
    public function getFieldMask()
    {
        return $this->field_mask;
    }

    /**
     * <pre>
     * Controls which fields come back on the response
     * </pre>
     *
     * <code>.vendastatypes.FieldMask field_mask = 8;</code>
     */
    public function setFieldMask(&$var)
    {
        GPBUtil::checkMessage($var, \Vendastatypes\FieldMask::class);
        $this->field_mask = $var;
    }

    /**
     * <pre>
     * Sets the domain to be locked or not; cannot be updated within 60 days of purchasing the domain
     * </pre>
     *
     * <code>bool locked = 2;</code>
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * <pre>
     * Sets the domain to be locked or not; cannot be updated within 60 days of purchasing the domain
     * </pre>
     *
     * <code>bool locked = 2;</code>
     */
    public function setLocked($var)
    {
        GPBUtil::checkBool($var);
        $this->locked = $var;
    }

}

