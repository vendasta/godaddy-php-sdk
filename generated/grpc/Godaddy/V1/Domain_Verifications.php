<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: godaddy/v1/domain.proto

namespace Godaddy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>godaddy.v1.Domain.Verifications</code>
 */
class Domain_Verifications extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.godaddy.v1.Domain.DomainName domain_name = 1;</code>
     */
    private $domain_name = null;
    /**
     * <code>.godaddy.v1.Domain.RealName real_name = 2;</code>
     */
    private $real_name = null;

    public function __construct() {
        \GPBMetadata\Godaddy\V1\Domain::initOnce();
        parent::__construct();
    }

    /**
     * <code>.godaddy.v1.Domain.DomainName domain_name = 1;</code>
     */
    public function getDomainName()
    {
        return $this->domain_name;
    }

    /**
     * <code>.godaddy.v1.Domain.DomainName domain_name = 1;</code>
     */
    public function setDomainName(&$var)
    {
        GPBUtil::checkMessage($var, \Godaddy\V1\Domain_DomainName::class);
        $this->domain_name = $var;
    }

    /**
     * <code>.godaddy.v1.Domain.RealName real_name = 2;</code>
     */
    public function getRealName()
    {
        return $this->real_name;
    }

    /**
     * <code>.godaddy.v1.Domain.RealName real_name = 2;</code>
     */
    public function setRealName(&$var)
    {
        GPBUtil::checkMessage($var, \Godaddy\V1\Domain_RealName::class);
        $this->real_name = $var;
    }

}
