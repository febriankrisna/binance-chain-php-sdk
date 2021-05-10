# Swagger\Client\TimelockRecordsApi

All URIs are relative to *https://dex.binance.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTimeLock**](TimelockRecordsApi.md#gettimelock) | **GET** /api/v1/timelock/{account_addr} | Get timelock records of an address.

# **getTimeLock**
> \Swagger\Client\Model\TimeLocks getTimeLock($account_addr, $id)

Get timelock records of an address.

Get the timelock history of an address. **Rate Limit:** 60 requests per IP per minute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TimelockRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_addr = "account_addr_example"; // string | The account address to query
$id = 789; // int | the record id of timelock to query

try {
    $result = $apiInstance->getTimeLock($account_addr, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimelockRecordsApi->getTimeLock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_addr** | **string**| The account address to query |
 **id** | **int**| the record id of timelock to query | [optional]

### Return type

[**\Swagger\Client\Model\TimeLocks**](../Model/TimeLocks.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

