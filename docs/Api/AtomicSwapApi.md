# Swagger\Client\AtomicSwapApi

All URIs are relative to *https://dex.binance.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAtomicSwapUsingGET**](AtomicSwapApi.md#getatomicswapusingget) | **GET** /api/v1/atomic-swaps/{id} | AtomicSwap
[**getAtomicSwapsByAddrUsingGET**](AtomicSwapApi.md#getatomicswapsbyaddrusingget) | **GET** /api/v1/atomic-swaps | AtomicSwap

# **getAtomicSwapUsingGET**
> \Swagger\Client\Model\AtomicSwap getAtomicSwapUsingGET($id)

AtomicSwap

Get an AtomicSwap by swap id  **Rate Limit:** 5 request per IP per second.  **Rate Limit:** 60 request per IP per minute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AtomicSwapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | swap id

try {
    $result = $apiInstance->getAtomicSwapUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtomicSwapApi->getAtomicSwapUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| swap id |

### Return type

[**\Swagger\Client\Model\AtomicSwap**](../Model/AtomicSwap.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAtomicSwapsByAddrUsingGET**
> \Swagger\Client\Model\AtomicSwapPage getAtomicSwapsByAddrUsingGET($end_time, $from_address, $limit, $offset, $start_time, $to_address)

AtomicSwap

Get atomic swaps by address.  **Rate Limit:** 5 request per IP per second.  **Rate Limit:** 60 requests per IP per minute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AtomicSwapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$end_time = 789; // int | end time of blockTimestamp
$from_address = "from_address_example"; // string | At least one of toAddress and fromAddress should be provided as parameter
$limit = 25; // int | default 25; max 1000.
$offset = 0; // int | start with 0; default 0.
$start_time = 789; // int | start time of blockTimestamp; The maximum start - end query window is 3 months; Default query window is the latest 30 days.
$to_address = "to_address_example"; // string | At least one of toAddress and fromAddress should be provided as parameter

try {
    $result = $apiInstance->getAtomicSwapsByAddrUsingGET($end_time, $from_address, $limit, $offset, $start_time, $to_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtomicSwapApi->getAtomicSwapsByAddrUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_time** | **int**| end time of blockTimestamp | [optional]
 **from_address** | **string**| At least one of toAddress and fromAddress should be provided as parameter | [optional]
 **limit** | **int**| default 25; max 1000. | [optional] [default to 25]
 **offset** | **int**| start with 0; default 0. | [optional] [default to 0]
 **start_time** | **int**| start time of blockTimestamp; The maximum start - end query window is 3 months; Default query window is the latest 30 days. | [optional]
 **to_address** | **string**| At least one of toAddress and fromAddress should be provided as parameter | [optional]

### Return type

[**\Swagger\Client\Model\AtomicSwapPage**](../Model/AtomicSwapPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

