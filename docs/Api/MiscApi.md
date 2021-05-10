# Swagger\Client\MiscApi

All URIs are relative to *https://dex.binance.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTime**](MiscApi.md#gettime) | **GET** /api/v1/time | Get the block time.

# **getTime**
> \Swagger\Client\Model\Times getTime()

Get the block time.

Gets the latest block time and the current time according to the HTTP service.  **Destination:** Validator node.  **Rate Limit:** 1 request per IP per second.  **URL for mainnet:** [https://dex.binance.org/api/v1/time](https://dex.binance.org/api/v1/time)  **URL for testnet:** [https://testnet-dex.binance.org/api/v1/time](https://testnet-dex.binance.org/api/v1/time)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getTime();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->getTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Times**](../Model/Times.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

