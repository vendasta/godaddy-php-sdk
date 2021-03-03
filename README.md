# Vendasta GoDaddy PHP SDK

## Description

This is Vendasta's official PHP SDK for API integration of GoDaddy.

## Requirements

- PHP 5.5 and above or PHP 7.0 and above
- [PECL](https://pecl.php.net/) (may be used to install the required PHP extensions)
- [Composer](https://getcomposer.org/)
- [PHP gmp extension](http://php.net/manual/en/book.gmp.php)
- OPTIONAL (but recommended): [PHP grpc extension](https://cloud.google.com/php/grpc)

## Installation

Install the requirements from above, then:

```bash
composer require vendasta/godaddy
```

## Authentication

To authenticate your SDK calls, you must provision a service account from within the Vendasta platform.

You must put this file on your server, and set an environment variable to it's path:

```bash
export VENDASTA_APPLICATION_CREDENTIALS=<path to credentials.json>
```

## Client Initialization

It is highly recommended that you use a singleton client instance. Each client initilization will open it's own connection, therefore using a singleton results in reusing a connection, saving time and resources.

Set an environment variable:

```bash
export ENVIRONMENT=<DEMO or PROD> 
```

To instantiate the client:

```php
$environment = getenv("ENVIRONMENT");
if ($environment == null) {
    $environment = "DEMO";
}

$client = new Vendasta\Godaddy\V1\GoDaddyClient($environment);
```

Notice that the environment will be set to DEMO if it is not specified.

## Getting domain availability
```php
$req = new Godaddy\V1\GetDomainAvailableRequest();
$req->setDomain("<domain>");
$resp = $client->GetDomainAvailable($req);
```

## Patching domains

This can be used to lock or unlock a domain

```php
$req = new PatchDomainRequest();
$req->setDomain("example.com");
$fieldMask = new FieldMask();
$paths = ["locked"];
$fieldMask->setPaths($paths);
$req->setFieldMask($fieldMask);
$req->setLocked(false);
$resp = $client->PatchDomain($req);
```

## Getting domain details

This can be used to get details about a domain including the AuthCode

```php
$req = new GetDomainRequest();
$req->setDomain("example.com");
$resp = $client->GetDomain($req);
```
