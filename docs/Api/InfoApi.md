# Swagger\Client\InfoApi

All URIs are relative to *https://dex.binance.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFees**](InfoApi.md#getfees) | **GET** /api/v1/fees | Obtain trading fees information.
[**getNodeInfo**](InfoApi.md#getnodeinfo) | **GET** /api/v1/node-info | Get node information.
[**getPeers**](InfoApi.md#getpeers) | **GET** /api/v1/peers | Get network peers.
[**getValidators**](InfoApi.md#getvalidators) | **GET** /api/v1/validators | Get validators.

# **getFees**
> \Swagger\Client\Model\Fee[] getFees()

Obtain trading fees information.

Gets the current trading fees settings.  **Destination:** Witness node.  **Rate Limit:** 1 request per IP per second.  **URL for mainnet:** [https://dex.binance.org/api/v1/fees](https://dex.binance.org/api/v1/fees)  **URL for testnet:** [https://testnet-dex.binance.org/api/v1/fees](https://testnet-dex.binance.org/api/v1/fees)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getFees();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->getFees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Fee[]**](../Model/Fee.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNodeInfo**
> \Swagger\Client\Model\ResultStatus getNodeInfo()

Get node information.

Gets runtime information about the node.  Return block height, current timestamp and the number of connected peers.  **Destination:** Validator node.  **Rate Limit:** 1 request per IP per second.  **URL for mainnet:** [https://dex.binance.org/api/v1/node-info](https://dex.binance.org/api/v1/node-info)  **URL for testnet:** [https://testnet-dex.binance.org/api/v1/node-info](https://testnet-dex.binance.org/api/v1/node-info)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getNodeInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->getNodeInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ResultStatus**](../Model/ResultStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPeers**
> \Swagger\Client\Model\Peer[] getPeers()

Get network peers.

Gets the list of network peers.  **Destination:** Witness node.  **Rate Limit:** 1 request per IP per second.  **URL for mainnet:** [https://dex.binance.org/api/v1/peers](https://dex.binance.org/api/v1/peers)  **URL for testnet:** [https://testnet-dex.binance.org/api/v1/peers](https://testnet-dex.binance.org/api/v1/peers)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPeers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->getPeers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Peer[]**](../Model/Peer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getValidators**
> \Swagger\Client\Model\Validators[] getValidators()

Get validators.

Gets the list of validators used in consensus.  **Destination:** Witness node.  **Rate Limit:** 10 requests per IP per second.  **URL for mainnet:** [https://dex.binance.org/api/v1/validators](https://dex.binance.org/api/v1/validators)  **URL for testnet:** [https://testnet-dex.binance.org/api/v1/validators](https://testnet-dex.binance.org/api/v1/validators)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getValidators();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->getValidators: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Validators[]**](../Model/Validators.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

