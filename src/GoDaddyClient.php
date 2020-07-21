<?php 
namespace Vendasta\Godaddy\V1;

use Vendasta\Godaddy\V1\internal\GoDaddyGeneratedClient;

class GoDaddyClient extends GoDaddyGeneratedClient
{
    /**
     * GoDaddyClient constructor.
     * @param string $env one of \Vendasta\Vax\Environment::<Env>
     * @param float $default_timeout
     */
    public function __construct(string $env, float $default_timeout = 10000)
    {
        parent::__construct($env, $default_timeout);
    }
}
