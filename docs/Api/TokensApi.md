# Swagger\Client\TokensApi

All URIs are relative to *https://dex.binance.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTokens**](TokensApi.md#gettokens) | **GET** /api/v1/tokens | Get tokens list.

# **getTokens**
> \Swagger\Client\Model\Token[] getTokens($limit, $offset)

Get tokens list.

Gets a list of tokens that have been issued.  **Destination:** Witness node.  **Rate Limit:** 1 request per IP per second.  **URL for mainnet:** [https://dex.binance.org/api/v1/tokens](https://dex.binance.org/api/v1/tokens)  **URL for testnet:** [https://testnet-dex.binance.org/api/v1/tokens](https://testnet-dex.binance.org/api/v1/tokens)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 100; // int | default 100.
$offset = 0; // int | start with 0; default 0.

try {
    $result = $apiInstance->getTokens($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| default 100. | [optional] [default to 100]
 **offset** | **int**| start with 0; default 0. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\Token[]**](../Model/Token.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

