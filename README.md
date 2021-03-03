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

To authenticate your SDK calls, you must provision a service account from within the Vendasta platform. Refer to the [service account guide](https://developers.vendasta.com/guides/service-accounts) in order to setup authentication.

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

## Provisioning a GoDaddy account
Provisioning a new GoDaddy account can be done using the [Account Group SDK](https://packagist.org/packages/vendasta/accountgroup) and [Sales Orders SDK](https://packagist.org/packages/vendasta/sales-orders). The Account Group SDK is used to create business accounts in Partner Center. Follow the readme for installation and setup.
Create is synchronous. It immediately creates the account and returns the account group ID for the business you made (used as the business ID in the other SDKs).
After a business is created you can use the Sales Orders SDK to purchase products on that business using the business ID from the Account Group SDK.
CreateAndActivateOrder is an asynchronous process which can result in approval or rejection from the vendor. The status of the order can be polled using the GetSalesOrder endpoint given the order ID from CreateAndActivateOrder.

Production App ID: MP-4TMLZSQ5FMJQX5T75TPC43FQBWD2VXLB

Demo environment App ID: MP-NNTJMBF6HPXR5XXC2JKCFWKJ64VZLBFQ
```php
// Choose environment and partnerId
$env = "DEMO";
$pid = "<PID>";

// Instantiate clients
$accountGroupClient = new AccountGroupServiceClient($env);
$salesOrdersClient = new SalesOrdersClient($env);

// Build request to create a business
$createReq = new CreateAccountGroupRequest();
$location = new AccountGroupLocation();
$location->setCompanyName("Test Company");
$location->setAddress("123 Street Name");
$location->setCity("Chicago");
$location->setState("IL");
$location->setCountry("US");
$location->setZip("88888");
$workNumber = array("(999) 999-9999");
$location->setWorkNumber($workNumber);
$createReq->setAccountGroupNap($location);
$createReq->setPartnerId($pid);

// Make call and store returned accountGroupId
$resp = $accountGroupClient->Create($createReq);
$accountGroupId = $resp->getAccountGroupId();

// Build sales order request & activate the products
// Create the request
$req = new CreateAndActivateOrderRequest();

// Create the line items
$goDaddy = SalesOrdersUtils::buildLineItem('MP-NNTJMBF6HPXR5XXC2JKCFWKJ64VZLBFQ');
$lineItems = array($goDaddy);

// Create the custom fields
$goDaddyCustomField = SalesOrdersUtils::buildGoDaddyCustomFields("MP-NNTJMBF6HPXR5XXC2JKCFWKJ64VZLBFQ", "testdomain123.com", "example@email.com", "First", "Last", "3065555555", "example@email.com", "First", "Last");
$customFields = array($goDaddyCustomField);

// Create the order
$order = SalesOrdersUtils::buildOrder($pid, $accountGroupId, $lineItems, $customFields);
$req->setOrder($order);

// Call CreateAndActivateOrder
$resp = $salesOrdersClient->CreateAndActivateOrder($req);

// Poll the pending activation process using GetSalesOrder
```

## Deprovision an account

```php
// Choose environment and partnerId
$env = "DEMO";
$pid = "";

// Select the app ID and business ID to deactivate
$businessId = "";
$appId = "";

// The activation ID will be populated after we list all the products on the business
$activationId = "";

$client = new AccountsServiceClient($env);

// First list all of the current products activated for that business and find the one matching the appID
$listReq = new ListRequest();
$listReq->setPartnerId($pid);
$listReq->setBusinessId($businessId);
$resp = $client->List($listReq);
foreach($resp->getAccounts() as $account) {
    if ($account->getAppId() == $appId) {
        // The activation ID is necessary for deactivating an app
        $activationId = $account->getActivationId();
    }
}

// Build the deactivation request with the activation ID
$deactivationReq = new DeactivateAppRequest();
$deactivationReq->setBusinessId($businessId);
$deactivationReq->setAppId($appId);
$deactivationReq->setActivationId($activationId);
$deactivationReq->setDeactivationType(DeactivationType::DEACTIVATION_TYPE_CANCEL);

```

## How to use this SDK

### Getting domain availability
```php
$req = new Godaddy\V1\GetDomainAvailableRequest();
$req->setDomain("<domain>");
$resp = $client->GetDomainAvailable($req);
```

### Patching domains

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

### Getting domain details

This can be used to get details about a domain including the AuthCode

```php
$req = new GetDomainRequest();
$req->setDomain("example.com");
$resp = $client->GetDomain($req);
```
