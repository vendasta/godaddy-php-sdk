<?php
namespace Vendasta\Godaddy\V1;

class Config
{
    const ENVIRONMENT_PARAMS = [
        "PROD" => [
            'host' => 'godaddy-api-prod.vendasta-internal.com:443',
            'scope' => 'https://godaddy-api-prod.vendasta-internal.com',
            'url' => 'https://godaddy-api-prod.vendasta-internal.com',
            'secure' => true,
        ],
        "DEMO" => [
            'host' => 'godaddy-api-demo.vendasta-internal.com:443',
            'scope' => 'https://godaddy-api-demo.vendasta-internal.com',
            'url' => 'https://godaddy-api-demo.vendasta-internal.com',
            'secure' => true,
        ]
    ];
}
