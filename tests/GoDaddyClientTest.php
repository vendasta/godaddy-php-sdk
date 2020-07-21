<?php

use PHPUnit\Framework\TestCase;
use Godaddy\V1\GetDomainAvailableRequest;
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
            self::assertFalse(
                true,
                'unexpected error',
            );
            return;
        }

        self::assertFalse(
            $resp->getAvailable(),
            'expected domain to be taken',
        );
    }
}
