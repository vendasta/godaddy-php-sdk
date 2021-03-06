<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: godaddy/v1/domain.proto

namespace Godaddy\V1\Domain;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>godaddy.v1.Domain.ContactAdmin</code>
 */
class ContactAdmin extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.godaddy.v1.Domain.AddressMailing address_mailing = 1;</code>
     */
    private $address_mailing = null;
    /**
     * <code>string email = 2;</code>
     */
    private $email = '';
    /**
     * <code>string fax = 3;</code>
     */
    private $fax = '';
    /**
     * <code>string job_title = 4;</code>
     */
    private $job_title = '';
    /**
     * <code>string name_first = 5;</code>
     */
    private $name_first = '';
    /**
     * <code>string name_last = 6;</code>
     */
    private $name_last = '';
    /**
     * <code>string name_middle = 7;</code>
     */
    private $name_middle = '';
    /**
     * <code>string organization = 8;</code>
     */
    private $organization = '';
    /**
     * <code>string phone = 9;</code>
     */
    private $phone = '';

    public function __construct() {
        \GPBMetadata\Godaddy\V1\Domain::initOnce();
        parent::__construct();
    }

    /**
     * <code>.godaddy.v1.Domain.AddressMailing address_mailing = 1;</code>
     */
    public function getAddressMailing()
    {
        return $this->address_mailing;
    }

    /**
     * <code>.godaddy.v1.Domain.AddressMailing address_mailing = 1;</code>
     */
    public function setAddressMailing(&$var)
    {
        GPBUtil::checkMessage($var, \Godaddy\V1\Domain\AddressMailing::class);
        $this->address_mailing = $var;
    }

    /**
     * <code>string email = 2;</code>
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * <code>string email = 2;</code>
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;
    }

    /**
     * <code>string fax = 3;</code>
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * <code>string fax = 3;</code>
     */
    public function setFax($var)
    {
        GPBUtil::checkString($var, True);
        $this->fax = $var;
    }

    /**
     * <code>string job_title = 4;</code>
     */
    public function getJobTitle()
    {
        return $this->job_title;
    }

    /**
     * <code>string job_title = 4;</code>
     */
    public function setJobTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_title = $var;
    }

    /**
     * <code>string name_first = 5;</code>
     */
    public function getNameFirst()
    {
        return $this->name_first;
    }

    /**
     * <code>string name_first = 5;</code>
     */
    public function setNameFirst($var)
    {
        GPBUtil::checkString($var, True);
        $this->name_first = $var;
    }

    /**
     * <code>string name_last = 6;</code>
     */
    public function getNameLast()
    {
        return $this->name_last;
    }

    /**
     * <code>string name_last = 6;</code>
     */
    public function setNameLast($var)
    {
        GPBUtil::checkString($var, True);
        $this->name_last = $var;
    }

    /**
     * <code>string name_middle = 7;</code>
     */
    public function getNameMiddle()
    {
        return $this->name_middle;
    }

    /**
     * <code>string name_middle = 7;</code>
     */
    public function setNameMiddle($var)
    {
        GPBUtil::checkString($var, True);
        $this->name_middle = $var;
    }

    /**
     * <code>string organization = 8;</code>
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * <code>string organization = 8;</code>
     */
    public function setOrganization($var)
    {
        GPBUtil::checkString($var, True);
        $this->organization = $var;
    }

    /**
     * <code>string phone = 9;</code>
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * <code>string phone = 9;</code>
     */
    public function setPhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone = $var;
    }

}

