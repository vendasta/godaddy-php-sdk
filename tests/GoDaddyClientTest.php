<?php

use Godaddy\V1\FieldMask;
use Godaddy\V1\PatchDomainRequest;
use PHPUnit\Framework\TestCase;
use Godaddy\V1\GetDomainAvailableRequest;
use Godaddy\V1\ReplaceDNSRecordsForTypeRequest;
use Godaddy\V1\ListDNSRecordsRequest;
use Godaddy\V1\DNSRecord;
use Godaddy\V1\DNSRecordType;
use Vendasta\Godaddy\V1\GoDaddyClient;


class GoDaddyClientTest extends TestCase
{
    public function testListDNSRecords()
    {
        $environment = getenv("ENVIRONMENT");
        if ($environment == null) {
            $environment = "DEMO";
        }
        $client = new GodaddyClient($environment);

        $req = new ListDNSRecordsRequest();
        $req->setDomain("domainName.com");
        $req->setType(DNSRecordType::DNS_RECORD_TYPE_TXT);

        try {
            $resp = $client->ListDNSRecords($req);
        } catch (Vendasta\Vax\SDKException $e) {
            self::fail('unexpected error');
            return;
        }

        self::assertArrayHasKey(
            0,
            $resp->getDnsRecords(),
            'expected response to have at least one record'
        );
    }

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
            'expected domain to be taken'
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
        $dnsRecord->setType("CNAME");
        $dnsRecord->setName("www");
        $dnsRecord->setData("@");
        $dnsRecord->setTtl(3600);

        $dnsRecord2 = new DNSRecord();
        $dnsRecord2->setType("CNAME");
        $dnsRecord2->setName("_domainconnect");
        $dnsRecord2->setData("_domainconnect.ss.domaincontrol.com");
        $dnsRecord2->setTtl(3600);

        $var = array($dnsRecord, $dnsRecord2);
        $req->setDnsRecords($var);

        $req->setDomain("testdomain352634.com");
        $req->setType("CNAME");

        try {
            $resp = $client->ReplaceDNSRecordsForType($req);
        } catch (Vendasta\Vax\SDKException $e) {
            self::fail($e);
            return;
        }

        self::assertEquals(
            new Google\Protobuf\GPBEmpty(),
            $resp,
            'expected response to be GPBEmpty()'
        );
    }

    public function testPatchDomainHappyPath()
    {
        $environment = getenv("ENVIRONMENT");
        if ($environment == null) {
            $environment = "DEMO";
        }
        $client = new GodaddyClient($environment);

        $req = new PatchDomainRequest();
        $req->setDomain("example.com");
        $fieldMask = new FieldMask();
        $paths = ["locked"];
        $fieldMask->setPaths($paths);
        $req->setFieldMask($fieldMask);
        $req->setLocked(false);

        try {
            $resp = $client->PatchDomain($req);
        } catch (Vendasta\Vax\SDKException $e) {
            self::fail($e);
            return;
        }

        self::assertEquals(
            new Google\Protobuf\GPBEmpty(),
            $resp,
            'expected response to be GPBEmpty()'
        );
    }
}
