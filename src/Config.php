<?php
namespace Vendasta\Godaddy\V1;
class Config
{
    const ENVIRONMENT_PARAMS = [
        "PROD" => [
            'host' => 'godaddy-api-prod.apigateway.co:443',
            'scope' => 'https://godaddy-api-prod.apigateway.co',
            'url' => 'https://godaddy-api-prod.apigateway.co',
            'secure' => true,
        ],
        "DEMO" => [
            'host' => 'godaddy-api-demo.apigateway.co:443',
            'scope' => 'https://godaddy-api-demo.apigateway.co',
            'url' => 'https://godaddy-api-demo.apigateway.co',
            'secure' => true,
        ]
    ];
}
