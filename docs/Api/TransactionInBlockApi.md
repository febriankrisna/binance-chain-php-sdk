# Swagger\Client\TransactionInBlockApi

All URIs are relative to *https://dex.binance.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransactionsInBlock**](TransactionInBlockApi.md#gettransactionsinblock) | **GET** /api/v1/transactions-in-block/{blockHeight} | Get transactions in the specific block.

# **getTransactionsInBlock**
> \Swagger\Client\Model\BlockTx getTransactionsInBlock($block_height)

Get transactions in the specific block.

Get transactions in the block. Multi-send and multi-coin transactions are flattened as transactions. This API is deprecated.  **Rate Limit:** 5 requests per IP per second.  **Rate Limit:** 60 requests per IP per minute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TransactionInBlockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$block_height = "block_height_example"; // string | block height

try {
    $result = $apiInstance->getTransactionsInBlock($block_height);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionInBlockApi->getTransactionsInBlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **block_height** | **string**| block height |

### Return type

[**\Swagger\Client\Model\BlockTx**](../Model/BlockTx.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

