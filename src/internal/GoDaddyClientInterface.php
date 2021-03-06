<?php
# Code generated by sdkgen
# Generated on 2020-07-21 16:24:42.041919895 +0000 UTC using container gcr.io/repcore-prod/sdkgen:latest
# DO NOT EDIT!

namespace Vendasta\Godaddy\V1\internal;

interface GoDaddyClientInterface
{
    /**
     * Auth wrapper for \Godaddy\V1\GoDaddyClient::GetDomainAvailable
     * @param \Godaddy\V1\GetDomainAvailableRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Godaddy\V1\GetDomainAvailableResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetDomainAvailable(\Godaddy\V1\GetDomainAvailableRequest $req, array $options = []): \Godaddy\V1\GetDomainAvailableResponse;
    /**
     * Auth wrapper for \Godaddy\V1\GoDaddyClient::ReplaceDNSRecordsForType
     * @param \Godaddy\V1\ReplaceDNSRecordsForTypeRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ReplaceDNSRecordsForType(\Godaddy\V1\ReplaceDNSRecordsForTypeRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    /**
     * Auth wrapper for \Godaddy\V1\GoDaddyClient::ListDNSRecords
     * @param \Godaddy\V1\ListDNSRecordsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Godaddy\V1\ListDNSRecordsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListDNSRecords(\Godaddy\V1\ListDNSRecordsRequest $req, array $options = []): \Godaddy\V1\ListDNSRecordsResponse;
    /**
     * Auth wrapper for \Godaddy\V1\GoDaddyClient::PatchDomain
     * @param \Godaddy\V1\PatchDomainRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function PatchDomain(\Godaddy\V1\PatchDomainRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    /**
     * Auth wrapper for \Godaddy\V1\GoDaddyClient::GetDomain
     * @param \Godaddy\V1\GetDomainRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Godaddy\V1\GetDomainResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetDomain(\Godaddy\V1\GetDomainRequest $req, array $options = []): \Godaddy\V1\GetDomainResponse;
}
