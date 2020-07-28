<?php

use PHPUnit\Framework\TestCase;
use Godaddy\V1\GetDomainAvailableRequest;
use Godaddy\V1\ReplaceDNSRecordsForTypeRequest;
use Godaddy\V1\DNSRecord;
use Vendasta\Godaddy\V1\GoDaddyClient;


class GoDaddyClientTest extends TestCase
{
    public function testGetDomainAvailableWhenDomainIsTaken()
    {
        $environment = getenv("ENVIRONMENT");
        if ($environment == null) {
            $environment = "DEMO";
        }
        $client = new GodaddyClient($environment);

        $req = new GetDomainAvailableRequest();
        $req->setDomain("google.com");

        try {
            $resp = $client->GetDomainAvailable($req);
        } catch (Vendasta\Vax\SDKException $e) {
            self::fail('unexpected error');
            return;
        }

        self::assertFalse(
            $resp->getAvailable(),
            'expected domain to be taken',
        );
    }

    public function testReplaceDNSRecordsForTypeHappyPath()
    {
        $environment = getenv("ENVIRONMENT");
        if ($environment == null) {
            $environment = "DEMO";
        }
        $client = new GodaddyClient($environment);

        $req = new ReplaceDNSRecordsForTypeRequest();

        $dnsRecord = new DNSRecord();
        $dnsRecord->setType("TXT");
        $dnsRecord->setName("@");
        $dnsRecord->setData("some token");
        $dnsRecord->setTtl(3600);

        $dnsRecord2 = new DNSRecord();
        $dnsRecord2->setType("TXT");
        $dnsRecord2->setName("@");
        $dnsRecord2->setData("111.111.111.111");
        $dnsRecord2->setTtl(3600);

        $var = array($dnsRecord, $dnsRecord2);
        $req->setDnsRecords($var);

        $req->setDomain("example.com");
        $req->setType("TXT");

        try {
            $resp = $client->ReplaceDNSRecordsForType($req);
        } catch (Vendasta\Vax\SDKException $e) {
            self::fail('unexpected error');
            return;
        }

        self::assertEmpty(
            $resp,
            'expected error to be null',
        );
    }
}
