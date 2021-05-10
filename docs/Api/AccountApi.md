# Swagger\Client\AccountApi

All URIs are relative to *https://dex.binance.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccount**](AccountApi.md#getaccount) | **GET** /api/v1/account/{address} | Get an account.
[**getAccountSequence**](AccountApi.md#getaccountsequence) | **GET** /api/v1/account/{address}/sequence | Get an account sequence.
[**getTimeLocks**](AccountApi.md#gettimelocks) | **GET** /api/v1/timelocks/{address} | Gets time lock records given an address

# **getAccount**
> \Swagger\Client\Model\Account getAccount($address)

Get an account.

Gets account metadata for an address.  **Destination:** Witness node.  **Rate Limit:** 5 requests per IP per second.  **URL for mainnet:** [https://dex.binance.org/api/v1/account/bnb1jxfh2g85q3v0tdq56fnevx6xcxtcnhtsmcu64m](https://dex.binance.org/api/v1/account/bnb1jxfh2g85q3v0tdq56fnevx6xcxtcnhtsmcu64m)  **URL for testnet:** [https://testnet-dex.binance.org/api/v1/account/tbnb185tqzq3j6y7yep85lncaz9qeectjxqe5054cgn](https://testnet-dex.binance.org/api/v1/account/tbnb185tqzq3j6y7yep85lncaz9qeectjxqe5054cgn)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | The account address to query

try {
    $result = $apiInstance->getAccount($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| The account address to query |

### Return type

[**\Swagger\Client\Model\Account**](../Model/Account.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountSequence**
> \Swagger\Client\Model\AccountSequence getAccountSequence($address)

Get an account sequence.

Gets an account sequence for an address.  **Destination:** Validator node.  **Rate Limit:** 5 requests per IP per second.  **URL for mainnet:** [https://dex.binance.org/api/v1/account/bnb1jxfh2g85q3v0tdq56fnevx6xcxtcnhtsmcu64m/sequence](https://dex.binance.org/api/v1/account/bnb1jxfh2g85q3v0tdq56fnevx6xcxtcnhtsmcu64m/sequence)  **URL for testnet:** [https://testnet-dex.binance.org/api/v1/account/tbnb13g2le062t340klgm2l2khzr57y3qxlekuhfuch/sequence](https://testnet-dex.binance.org/api/v1/account/tbnb13g2le062t340klgm2l2khzr57y3qxlekuhfuch/sequence)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | The account address to query

try {
    $result = $apiInstance->getAccountSequence($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| The account address to query |

### Return type

[**\Swagger\Client\Model\AccountSequence**](../Model/AccountSequence.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTimeLocks**
> \Swagger\Client\Model\TimeLocks getTimeLocks($address, $id)

Gets time lock records given an address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | The account address to query
$id = 789; // int | the record id of timelock to query

try {
    $result = $apiInstance->getTimeLocks($address, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getTimeLocks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| The account address to query |
 **id** | **int**| the record id of timelock to query | [optional]

### Return type

[**\Swagger\Client\Model\TimeLocks**](../Model/TimeLocks.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

