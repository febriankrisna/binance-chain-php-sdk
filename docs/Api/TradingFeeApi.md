# Swagger\Client\TradingFeeApi

All URIs are relative to *https://dex.binance.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBlockExchangeFee**](TradingFeeApi.md#getblockexchangefee) | **GET** /api/v1/block-exchange-fee | Trading fee of the address grouped by block

# **getBlockExchangeFee**
> \Swagger\Client\Model\BlockExchangeFeePage getBlockExchangeFee($address, $end, $limit, $offset, $start, $total)

Trading fee of the address grouped by block

Get historical trading fees of the address, including fees of trade/canceled order/expired order. Transfer and other transaction fees are not included. Order by block height DESC. **Query Window:** Default query window is latest 7 days; The maximum start - end query window is 3 months. **Rate Limit:** 5 requests per IP per second.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TradingFeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | the seller/buyer address
$end = 789; // int | end time
$limit = 50; // int | default 50; max 1000.
$offset = 0; // int | start with 0; default 0.
$start = 789; // int | start time
$total = 56; // int | total number required, 0 for not required and 1 for required; default not required, return total=-1 in response

try {
    $result = $apiInstance->getBlockExchangeFee($address, $end, $limit, $offset, $start, $total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradingFeeApi->getBlockExchangeFee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| the seller/buyer address | [optional]
 **end** | **int**| end time | [optional]
 **limit** | **int**| default 50; max 1000. | [optional] [default to 50]
 **offset** | **int**| start with 0; default 0. | [optional] [default to 0]
 **start** | **int**| start time | [optional]
 **total** | **int**| total number required, 0 for not required and 1 for required; default not required, return total&#x3D;-1 in response | [optional]

### Return type

[**\Swagger\Client\Model\BlockExchangeFeePage**](../Model/BlockExchangeFeePage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

