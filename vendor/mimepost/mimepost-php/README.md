# mimepost-php
MimePost API for sending email.  You can find out more about MimePost at [https://mimepost.com](http://mimepost.com). For this sample, you can use the api key `special-key` to test the authorization     filters.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.1.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/mimepost/mimepost-php.git"
    }
  ],
  "require": {
    "mimepost/mimepost-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/mimepost-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php

<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Php\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$body = new \MimePost\Client\Model\Email(); // \Swagger\Client\Model\Email | Single Email object
$body->setSubject('This is a subject');
$body->setFromEmail('from@example.com');
$body->setTo(array( array('email' => 'receiver@example.com') )); 
$body->setHtml('<p>This is a test email send using MimePost PHP SDK</p>');

try {
    $result = $apiInstance->sendEmail($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->sendEmail: ', $e->getMessage(), PHP_EOL;
}


```

## Documentation for API Endpoints

All URIs are relative to *https://api.mimepost.com/v1/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**accountProfileGet**](docs/Api/AccountsApi.md#accountprofileget) | **GET** /account/profile/ | Get account profile details
*AccountsApi* | [**accountProfilePost**](docs/Api/AccountsApi.md#accountprofilepost) | **POST** /account/profile/ | Update account profile details
*AccountsApi* | [**settingsGet**](docs/Api/AccountsApi.md#settingsget) | **GET** /settings/ | Get all the settings
*AccountsApi* | [**settingsPost**](docs/Api/AccountsApi.md#settingspost) | **POST** /settings/ | Set a setting
*DomainsApi* | [**domainsGet**](docs/Api/DomainsApi.md#domainsget) | **GET** /domains/ | Get a list of all the domains
*DomainsApi* | [**domainsIdApprovePost**](docs/Api/DomainsApi.md#domainsidapprovepost) | **POST** /domains/{id}/approve/ | Submit request for the approval of a verified domain
*DomainsApi* | [**domainsIdDelete**](docs/Api/DomainsApi.md#domainsiddelete) | **DELETE** /domains/{id} | Remove a single domain
*DomainsApi* | [**domainsIdGet**](docs/Api/DomainsApi.md#domainsidget) | **GET** /domains/{id} | Get the details of a single domain
*DomainsApi* | [**domainsIdVerifyDkimPost**](docs/Api/DomainsApi.md#domainsidverifydkimpost) | **POST** /domains/{id}/verify_dkim/ | Request for the verification of DKIM record for a single domain
*DomainsApi* | [**domainsIdVerifySpfPost**](docs/Api/DomainsApi.md#domainsidverifyspfpost) | **POST** /domains/{id}/verify_spf/ | Request for the verification of SPF record for a single domain
*DomainsApi* | [**domainsIdVerifyTrackingPost**](docs/Api/DomainsApi.md#domainsidverifytrackingpost) | **POST** /domains/{id}/verify_tracking/ | Request for the verification of tracking record for a single domain
*DomainsApi* | [**domainsPost**](docs/Api/DomainsApi.md#domainspost) | **POST** /domains/ | Add single domain
*EmailsApi* | [**sendEmail**](docs/Api/EmailsApi.md#sendemail) | **POST** /emails/ | Send email
*StatsApi* | [**emaillogsGet**](docs/Api/StatsApi.md#emaillogsget) | **GET** /emaillogs/ | Get the logs of a particular date
*StatsApi* | [**statsGet**](docs/Api/StatsApi.md#statsget) | **GET** /stats/ | Get the summary of stats for a range of dates
*WebhooksApi* | [**webhooksGet**](docs/Api/WebhooksApi.md#webhooksget) | **GET** /webhooks/ | Get the list of all the webhooks
*WebhooksApi* | [**webhooksIdDelete**](docs/Api/WebhooksApi.md#webhooksiddelete) | **DELETE** /webhooks/{id} | Remove a single webhook
*WebhooksApi* | [**webhooksIdGet**](docs/Api/WebhooksApi.md#webhooksidget) | **GET** /webhooks/{id} | Get the details of a single webhook
*WebhooksApi* | [**webhooksIdPut**](docs/Api/WebhooksApi.md#webhooksidput) | **PUT** /webhooks/{id} | Update the details of a single webhook
*WebhooksApi* | [**webhooksPost**](docs/Api/WebhooksApi.md#webhookspost) | **POST** /webhooks/ | Add single webhook


## Documentation For Models

 - [AccountProfile](docs/Model/AccountProfile.md)
 - [AccountProfileResponse](docs/Model/AccountProfileResponse.md)
 - [AccountSettings](docs/Model/AccountSettings.md)
 - [ApiResponse](docs/Model/ApiResponse.md)
 - [ApiResponseAllWebhooks](docs/Model/ApiResponseAllWebhooks.md)
 - [ApiResponseAllWebhooksData](docs/Model/ApiResponseAllWebhooksData.md)
 - [ApiResponseDomainsList](docs/Model/ApiResponseDomainsList.md)
 - [ApiResponseDomainsListData](docs/Model/ApiResponseDomainsListData.md)
 - [ApiResponseEmaillogs](docs/Model/ApiResponseEmaillogs.md)
 - [ApiResponseEmaillogsData](docs/Model/ApiResponseEmaillogsData.md)
 - [ApiResponseSingleWebhooks](docs/Model/ApiResponseSingleWebhooks.md)
 - [ApiResponseStats](docs/Model/ApiResponseStats.md)
 - [ApiResponseStatsData](docs/Model/ApiResponseStatsData.md)
 - [ApiResponseStatsDataDatewiseSummary](docs/Model/ApiResponseStatsDataDatewiseSummary.md)
 - [ApiResponseStatsDataGraphSummary](docs/Model/ApiResponseStatsDataGraphSummary.md)
 - [ApiResponseStatsDataTotalSummary](docs/Model/ApiResponseStatsDataTotalSummary.md)
 - [ApiResponseStatsDataTotalSummaryStatus](docs/Model/ApiResponseStatsDataTotalSummaryStatus.md)
 - [ApiResponseWebhooks](docs/Model/ApiResponseWebhooks.md)
 - [ApiResponseWebhooksData](docs/Model/ApiResponseWebhooksData.md)
 - [Domain](docs/Model/Domain.md)
 - [Email](docs/Model/Email.md)
 - [EmailAttachments](docs/Model/EmailAttachments.md)
 - [EmailGlobalMergeVars](docs/Model/EmailGlobalMergeVars.md)
 - [EmailMergeVars](docs/Model/EmailMergeVars.md)
 - [EmailTo](docs/Model/EmailTo.md)
 - [Webhook](docs/Model/Webhook.md)
 - [Webhook1](docs/Model/Webhook1.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: X-Auth-Token
- **Location**: HTTP header


## Author

support@mimepost.com


