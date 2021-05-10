# Swagger\Client\TransactionApi

All URIs are relative to *https://dex.binance.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransactionsInBlockV2**](TransactionApi.md#gettransactionsinblockv2) | **GET** /api/v2/transactions-in-block/{blockHeight} | transactions in Block
[**txns**](TransactionApi.md#txns) | **GET** /api/v1/transactions | Get transactions.

# **getTransactionsInBlockV2**
> \Swagger\Client\Model\BlockTxV2 getTransactionsInBlockV2($block_height)

transactions in Block

Get transactions in the block. Multi-send and multi-coin transactions are included as sub-transactions. **Rate Limit:** 5 request per IP per second.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$block_height = 789; // int | blockHeight

try {
    $result = $apiInstance->getTransactionsInBlockV2($block_height);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->getTransactionsInBlockV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **block_height** | **int**| blockHeight |

### Return type

[**\Swagger\Client\Model\BlockTxV2**](../Model/BlockTxV2.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **txns**
> \Swagger\Client\Model\TxPage txns($address, $block_height, $end_time, $limit, $offset, $side, $start_time, $tx_asset, $tx_type)

Get transactions.

Gets a list of transactions. Multisend transaction is not available in this API. Currently 'confirmBlocks' and 'txAge' are not supported.  **Query Window:** Default query window is latest 24 hours; The maximum start - end query window is 3 months.  **Rate Limit:** 60 requests per IP per minute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | address
$block_height = 789; // int | blockHeight
$end_time = 789; // int | endTime in Milliseconds
$limit = 500; // int | limit
$offset = 0; // int | offset
$side = "side_example"; // string | transaction side. Allowed value: [ RECEIVE, SEND]
$start_time = 789; // int | start time in Milliseconds
$tx_asset = "tx_asset_example"; // string | txAsset
$tx_type = "tx_type_example"; // string | transaction type. Allowed value: [ NEW_ORDER,ISSUE_TOKEN,BURN_TOKEN,LIST_TOKEN,CANCEL_ORDER,FREEZE_TOKEN,UN_FREEZE_TOKEN,TRANSFER,PROPOSAL,VOTE,MINT,DEPOSIT,CREATE_VALIDATOR,REMOVE_VALIDATOR,TIME_LOCK,TIME_UNLOCK,TIME_RELOCK,SET_ACCOUNT_FLAG,HTL_TRANSFER,CLAIM_HTL,DEPOSIT_HTL,REFUND_HTL]

try {
    $result = $apiInstance->txns($address, $block_height, $end_time, $limit, $offset, $side, $start_time, $tx_asset, $tx_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->txns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| address |
 **block_height** | **int**| blockHeight | [optional]
 **end_time** | **int**| endTime in Milliseconds | [optional]
 **limit** | **int**| limit | [optional] [default to 500]
 **offset** | **int**| offset | [optional] [default to 0]
 **side** | **string**| transaction side. Allowed value: [ RECEIVE, SEND] | [optional]
 **start_time** | **int**| start time in Milliseconds | [optional]
 **tx_asset** | **string**| txAsset | [optional]
 **tx_type** | **string**| transaction type. Allowed value: [ NEW_ORDER,ISSUE_TOKEN,BURN_TOKEN,LIST_TOKEN,CANCEL_ORDER,FREEZE_TOKEN,UN_FREEZE_TOKEN,TRANSFER,PROPOSAL,VOTE,MINT,DEPOSIT,CREATE_VALIDATOR,REMOVE_VALIDATOR,TIME_LOCK,TIME_UNLOCK,TIME_RELOCK,SET_ACCOUNT_FLAG,HTL_TRANSFER,CLAIM_HTL,DEPOSIT_HTL,REFUND_HTL] | [optional]

### Return type

[**\Swagger\Client\Model\TxPage**](../Model/TxPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

