# Swagger\Client\OrderApi

All URIs are relative to *https://dex.binance.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getClosedOrders**](OrderApi.md#getclosedorders) | **GET** /api/v1/orders/closed | Get closed orders.
[**getOpenOrders**](OrderApi.md#getopenorders) | **GET** /api/v1/orders/open | Get open orders.
[**getOrder**](OrderApi.md#getorder) | **GET** /api/v1/orders/{id} | Get an order.

# **getClosedOrders**
> \Swagger\Client\Model\OrderList getClosedOrders($address, $end, $limit, $offset, $side, $start, $status, $symbol, $total)

Get closed orders.

Gets closed (filled and cancelled) orders for a given address.  **Query Window:** Default query window is latest 7 days; The maximum start - end query window is 3 months.  **Rate Limit:** 5 requests per IP per second.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | the owner address
$end = 789; // int | end time in Milliseconds
$limit = 500; // int | default 500; max 1000.
$offset = 0; // int | start with 0; default 0.
$side = 56; // int | order side. 1 for buy and 2 for sell.
$start = 789; // int | start time in Milliseconds
$status = "status_example"; // string | order status list.  Allowed value: [Ack, IocExpire, IocNoFill, FullyFill, Canceled, Expired, FailedBlocking, FailedMatching]
$symbol = "symbol_example"; // string | symbol
$total = 56; // int | total number required, 0 for not required and 1 for required; default not required, return total=-1 in response

try {
    $result = $apiInstance->getClosedOrders($address, $end, $limit, $offset, $side, $start, $status, $symbol, $total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getClosedOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| the owner address |
 **end** | **int**| end time in Milliseconds | [optional]
 **limit** | **int**| default 500; max 1000. | [optional] [default to 500]
 **offset** | **int**| start with 0; default 0. | [optional] [default to 0]
 **side** | **int**| order side. 1 for buy and 2 for sell. | [optional]
 **start** | **int**| start time in Milliseconds | [optional]
 **status** | **string**| order status list.  Allowed value: [Ack, IocExpire, IocNoFill, FullyFill, Canceled, Expired, FailedBlocking, FailedMatching] | [optional]
 **symbol** | **string**| symbol | [optional]
 **total** | **int**| total number required, 0 for not required and 1 for required; default not required, return total&#x3D;-1 in response | [optional]

### Return type

[**\Swagger\Client\Model\OrderList**](../Model/OrderList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpenOrders**
> \Swagger\Client\Model\OrderList getOpenOrders($address, $limit, $offset, $symbol, $total)

Get open orders.

Gets open orders for a given address.  **Rate Limit:** 5 requests per IP per second.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | the owner address
$limit = 500; // int | default 500; max 1000.
$offset = 0; // int | start with 0; default 0.
$symbol = "symbol_example"; // string | symbol
$total = 56; // int | total number required, 0 for not required and 1 for required; default not required, return total=-1 in response

try {
    $result = $apiInstance->getOpenOrders($address, $limit, $offset, $symbol, $total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOpenOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| the owner address |
 **limit** | **int**| default 500; max 1000. | [optional] [default to 500]
 **offset** | **int**| start with 0; default 0. | [optional] [default to 0]
 **symbol** | **string**| symbol | [optional]
 **total** | **int**| total number required, 0 for not required and 1 for required; default not required, return total&#x3D;-1 in response | [optional]

### Return type

[**\Swagger\Client\Model\OrderList**](../Model/OrderList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrder**
> \Swagger\Client\Model\Order getOrder($id)

Get an order.

Gets metadata for an individual order by its ID.  **Rate Limit:** 5 requests per IP per second.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | order id

try {
    $result = $apiInstance->getOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| order id |

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

