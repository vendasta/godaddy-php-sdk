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
     * Replace all DNS records of the specified type for the specified domain
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
     * PatchDomain updates an existing domain based off of fields on the request
     * @param \Godaddy\V1\PatchDomainRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PatchDomain(\Godaddy\V1\PatchDomainRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/godaddy.v1.GoDaddy/PatchDomain',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * GetDomain returns the domain object
     * @param \Godaddy\V1\GetDomainRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetDomain(\Godaddy\V1\GetDomainRequest $argument,
                              $metadata = [], $options = []) {
        return $this->_simpleRequest('/godaddy.v1.GoDaddy/GetDomain',
            $argument,
            ['\Godaddy\V1\GetDomainResponse', 'decode'],
            $metadata, $options);
    }
}
