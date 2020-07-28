<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Godaddy\V1;

/**
 * The GRPC service that must be implemented to use this service
 */
class GoDaddyClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Godaddy\V1\GetDomainSuggestionAndPriceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetDomainSuggestionAndPrice(\Godaddy\V1\GetDomainSuggestionAndPriceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/godaddy.v1.GoDaddy/GetDomainSuggestionAndPrice',
        $argument,
        ['\Godaddy\V1\GetDomainSuggestionAndPriceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Godaddy\V1\ListDNSRecordsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListDNSRecords(\Godaddy\V1\ListDNSRecordsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/godaddy.v1.GoDaddy/ListDNSRecords',
        $argument,
        ['\Godaddy\V1\ListDNSRecordsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Godaddy\V1\PutDNSRecordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PutDNSRecord(\Godaddy\V1\PutDNSRecordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/godaddy.v1.GoDaddy/PutDNSRecord',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Godaddy\V1\ReplaceDNSRecordsForTypeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ReplaceDNSRecordsForType(\Godaddy\V1\ReplaceDNSRecordsForTypeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/godaddy.v1.GoDaddy/ReplaceDNSRecordsForType',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Godaddy\V1\ReplaceAllDNSRecordsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ReplaceAllDNSRecords(\Godaddy\V1\ReplaceAllDNSRecordsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/godaddy.v1.GoDaddy/ReplaceAllDNSRecords',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Godaddy\V1\DeleteDNSRecordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteDNSRecord(\Godaddy\V1\DeleteDNSRecordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/godaddy.v1.GoDaddy/DeleteDNSRecord',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Godaddy\V1\GetDomainAvailableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetDomainAvailable(\Godaddy\V1\GetDomainAvailableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/godaddy.v1.GoDaddy/GetDomainAvailable',
        $argument,
        ['\Godaddy\V1\GetDomainAvailableResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Godaddy\V1\GetDomainAgreementsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetDomainAgreements(\Godaddy\V1\GetDomainAgreementsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/godaddy.v1.GoDaddy/GetDomainAgreements',
        $argument,
        ['\Godaddy\V1\GetDomainAgreementsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Godaddy\V1\ValidateDomainContactRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ValidateDomainContact(\Godaddy\V1\ValidateDomainContactRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/godaddy.v1.GoDaddy/ValidateDomainContact',
        $argument,
        ['\Godaddy\V1\ValidateDomainContactResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Godaddy\V1\ListDomainsByBusinessIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListDomainsByBusinessID(\Godaddy\V1\ListDomainsByBusinessIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/godaddy.v1.GoDaddy/ListDomainsByBusinessID',
        $argument,
        ['\Godaddy\V1\ListDomainsByBusinessIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Godaddy\V1\TransferDomainRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TransferDomain(\Godaddy\V1\TransferDomainRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/godaddy.v1.GoDaddy/TransferDomain',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

}
