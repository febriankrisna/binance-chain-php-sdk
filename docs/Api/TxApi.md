# Swagger\Client\TxApi

All URIs are relative to *https://dex.binance.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransaction**](TxApi.md#gettransaction) | **GET** /api/v1/tx/{hash} | Get a transaction.

# **getTransaction**
> \Swagger\Client\Model\Transaction getTransaction($hash, $format)

Get a transaction.

Gets transaction metadata by transaction ID. By default, transactions are returned in a raw format. You may add `?format=json` to the end of the path to obtain a more readable response.  **Destination:** Seed node.  **Rate Limit:** 10 requests per IP per second.  **Example:**  Below is an example response of a send transaction when `?format=json` is used. ```     {      code:0,      hash:\"433806D6A4AB6359CB56EC55BA99896DFAB2AF11326B74881A2ABA7049C492D3\",      height:\"7850389\",      log:\"Msg 0: \",      ok:true,      tx:{         type:\"auth/StdTx\",         value:{            data:null,            memo:\"101192150\",            msg:[               {                  type:\"cosmos-sdk/Send\",                  value:{                     inputs:[                        {                           address:\"bnb1jafs33u9u6f7w7wzfmm4rr9rzy2cgqzp78kwaw\",                           coins:[                              {                                 amount:\"496429373\",                                 denom:\"BNB\",                               }                           ],                         }                     ],                     outputs:[                        {                           address:\"bnb136ns6lfw4zs5hg4n85vdthaad7hq5m4gtkgf23\",                           coins:[                              {                                 amount:\"496429373\",                                 denom:\"BNB\",                               }                           ],                         }                     ],                   },                }            ],            signatures:[               {                  account_number:\"438\",                  pub_key:{                     type:\"tendermint/PubKeySecp256k1\",                     value:\"A3mfgg/i12XNyy9esqCjI7yrkrOs9dngP7c9cDUEJly5\",                   },                  sequence:\"0\",                  signature:\"VvvGz3qbyirJ7vv01Df8tuAd7K4I+HK+yEBfep+qwtMKuHWQQH3XtMB9Pqtc2jlia0AtDe+BUEMtIyh3/N66IQ==\",                }            ],            source:\"1\",          },       },    } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TxApi(
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
    echo 'Exception when calling TxApi->getTransaction: ', $e->getMessage(), PHP_EOL;
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

