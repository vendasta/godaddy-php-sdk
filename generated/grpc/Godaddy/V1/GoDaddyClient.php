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

}
