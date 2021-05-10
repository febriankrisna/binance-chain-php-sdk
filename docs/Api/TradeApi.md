# Swagger\Client\TradeApi

All URIs are relative to *https://dex.binance.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTrades**](TradeApi.md#gettrades) | **GET** /api/v1/trades | Get market trades.

# **getTrades**
> \Swagger\Client\Model\TradePage getTrades($address, $buyer_order_id, $end, $height, $limit, $offset, $quote_asset, $seller_order_id, $side, $start, $symbol, $total)

Get market trades.

Gets a list of historical trades.  **Query Window:** Default query window is latest 7 days; The maximum start - end query window is 3 months.  **Rate Limit:** 5 requests per IP per second.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | the buyer/seller address
$buyer_order_id = "buyer_order_id_example"; // string | buyer order id
$end = 789; // int | end time in Milliseconds
$height = 789; // int | block height
$limit = 500; // int | default 500; max 1000.
$offset = 0; // int | start with 0; default 0.
$quote_asset = "quote_asset_example"; // string | quote asset
$seller_order_id = "seller_order_id_example"; // string | seller order id
$side = 56; // int | order side. 1 for buy and 2 for sell.
$start = 789; // int | start time in Milliseconds
$symbol = "symbol_example"; // string | symbol
$total = 56; // int | total number required, 0 for not required and 1 for required; default not required, return total=-1 in response

try {
    $result = $apiInstance->getTrades($address, $buyer_order_id, $end, $height, $limit, $offset, $quote_asset, $seller_order_id, $side, $start, $symbol, $total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->getTrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| the buyer/seller address | [optional]
 **buyer_order_id** | **string**| buyer order id | [optional]
 **end** | **int**| end time in Milliseconds | [optional]
 **height** | **int**| block height | [optional]
 **limit** | **int**| default 500; max 1000. | [optional] [default to 500]
 **offset** | **int**| start with 0; default 0. | [optional] [default to 0]
 **quote_asset** | **string**| quote asset | [optional]
 **seller_order_id** | **string**| seller order id | [optional]
 **side** | **int**| order side. 1 for buy and 2 for sell. | [optional]
 **start** | **int**| start time in Milliseconds | [optional]
 **symbol** | **string**| symbol | [optional]
 **total** | **int**| total number required, 0 for not required and 1 for required; default not required, return total&#x3D;-1 in response | [optional]

### Return type

[**\Swagger\Client\Model\TradePage**](../Model/TradePage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

