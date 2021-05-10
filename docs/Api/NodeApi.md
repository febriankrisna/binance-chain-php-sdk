# Swagger\Client\NodeApi

All URIs are relative to *https://dex.binance.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**broadcastTx**](NodeApi.md#broadcasttx) | **POST** /api/v1/broadcast | Broadcast a transaction.
[**getAccount**](NodeApi.md#getaccount) | **GET** /api/v1/account/{address} | Get an account.
[**getAccountSequence**](NodeApi.md#getaccountsequence) | **GET** /api/v1/account/{address}/sequence | Get an account sequence.
[**getNodeInfo**](NodeApi.md#getnodeinfo) | **GET** /api/v1/node-info | Get node information.
[**getPeers**](NodeApi.md#getpeers) | **GET** /api/v1/peers | Get network peers.
[**getTimeLocks**](NodeApi.md#gettimelocks) | **GET** /api/v1/timelocks/{address} | Gets time lock records given an address
[**getTransaction**](NodeApi.md#gettransaction) | **GET** /api/v1/tx/{hash} | Get a transaction.
[**getValidators**](NodeApi.md#getvalidators) | **GET** /api/v1/validators | Get validators.

# **broadcastTx**
> \Swagger\Client\Model\Transaction[] broadcastTx($body, $sync)

Broadcast a transaction.

Broadcasts a signed transaction. A single transaction must be sent hex-encoded with a `content-type` of `text/plain`.  **Destination:** Witness node.  **Rate Limit:** 5 requests per IP per second.  **URL for mainnet:** [https://dex.binance.org/api/v1/broadcast](https://dex.binance.org/api/v1/broadcast)  **URL for testnet:** [https://testnet-dex.binance.org/api/v1/broadcast](https://testnet-dex.binance.org/api/v1/broadcast)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Object(); // Object | 
$sync = false; // bool | Synchronous broadcast (wait for [DeliverTx](https://github.com/tendermint/tendermint/wiki/Application-Developers#delivertx))?

try {
    $result = $apiInstance->broadcastTx($body, $sync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->broadcastTx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **Object**|  |
 **sync** | **bool**| Synchronous broadcast (wait for [DeliverTx](https://github.com/tendermint/tendermint/wiki/Application-Developers#delivertx))? | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Transaction[]**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccount**
> \Swagger\Client\Model\Account getAccount($address)

Get an account.

Gets account metadata for an address.  **Destination:** Witness node.  **Rate Limit:** 5 requests per IP per second.  **URL for mainnet:** [https://dex.binance.org/api/v1/account/bnb1jxfh2g85q3v0tdq56fnevx6xcxtcnhtsmcu64m](https://dex.binance.org/api/v1/account/bnb1jxfh2g85q3v0tdq56fnevx6xcxtcnhtsmcu64m)  **URL for testnet:** [https://testnet-dex.binance.org/api/v1/account/tbnb185tqzq3j6y7yep85lncaz9qeectjxqe5054cgn](https://testnet-dex.binance.org/api/v1/account/tbnb185tqzq3j6y7yep85lncaz9qeectjxqe5054cgn)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | The account address to query

try {
    $result = $apiInstance->getAccount($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->getAccount: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | The account address to query

try {
    $result = $apiInstance->getAccountSequence($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->getAccountSequence: ', $e->getMessage(), PHP_EOL;
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

# **getNodeInfo**
> \Swagger\Client\Model\ResultStatus getNodeInfo()

Get node information.

Gets runtime information about the node.  Return block height, current timestamp and the number of connected peers.  **Destination:** Validator node.  **Rate Limit:** 1 request per IP per second.  **URL for mainnet:** [https://dex.binance.org/api/v1/node-info](https://dex.binance.org/api/v1/node-info)  **URL for testnet:** [https://testnet-dex.binance.org/api/v1/node-info](https://testnet-dex.binance.org/api/v1/node-info)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getNodeInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->getNodeInfo: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPeers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->getPeers: ', $e->getMessage(), PHP_EOL;
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

# **getTimeLocks**
> \Swagger\Client\Model\TimeLocks getTimeLocks($address, $id)

Gets time lock records given an address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NodeApi(
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
    echo 'Exception when calling NodeApi->getTimeLocks: ', $e->getMessage(), PHP_EOL;
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

# **getTransaction**
> \Swagger\Client\Model\Transaction getTransaction($hash, $format)

Get a transaction.

Gets transaction metadata by transaction ID. By default, transactions are returned in a raw format. You may add `?format=json` to the end of the path to obtain a more readable response.  **Destination:** Seed node.  **Rate Limit:** 10 requests per IP per second.  **Example:**  Below is an example response of a send transaction when `?format=json` is used. ```     {      code:0,      hash:\"433806D6A4AB6359CB56EC55BA99896DFAB2AF11326B74881A2ABA7049C492D3\",      height:\"7850389\",      log:\"Msg 0: \",      ok:true,      tx:{         type:\"auth/StdTx\",         value:{            data:null,            memo:\"101192150\",            msg:[               {                  type:\"cosmos-sdk/Send\",                  value:{                     inputs:[                        {                           address:\"bnb1jafs33u9u6f7w7wzfmm4rr9rzy2cgqzp78kwaw\",                           coins:[                              {                                 amount:\"496429373\",                                 denom:\"BNB\",                               }                           ],                         }                     ],                     outputs:[                        {                           address:\"bnb136ns6lfw4zs5hg4n85vdthaad7hq5m4gtkgf23\",                           coins:[                              {                                 amount:\"496429373\",                                 denom:\"BNB\",                               }                           ],                         }                     ],                   },                }            ],            signatures:[               {                  account_number:\"438\",                  pub_key:{                     type:\"tendermint/PubKeySecp256k1\",                     value:\"A3mfgg/i12XNyy9esqCjI7yrkrOs9dngP7c9cDUEJly5\",                   },                  sequence:\"0\",                  signature:\"VvvGz3qbyirJ7vv01Df8tuAd7K4I+HK+yEBfep+qwtMKuHWQQH3XtMB9Pqtc2jlia0AtDe+BUEMtIyh3/N66IQ==\",                }            ],            source:\"1\",          },       },    } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = "hash_example"; // string | The transaction hash to query
$format = "format_example"; // string | Response format (`json` or amino)

try {
    $result = $apiInstance->getTransaction($hash, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->getTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| The transaction hash to query |
 **format** | **string**| Response format (&#x60;json&#x60; or amino) | [optional]

### Return type

[**\Swagger\Client\Model\Transaction**](../Model/Transaction.md)

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

$apiInstance = new Swagger\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getValidators();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->getValidators: ', $e->getMessage(), PHP_EOL;
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

