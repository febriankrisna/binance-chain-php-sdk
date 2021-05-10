# Swagger\Client\MarketApi

All URIs are relative to *https://dex.binance.org*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get24HrPriceStatistics**](MarketApi.md#get24hrpricestatistics) | **GET** /api/v1/ticker/24hr | Get a market ticker.
[**getCandlestickBars**](MarketApi.md#getcandlestickbars) | **GET** /api/v1/klines | Get candlestick bars.
[**getDepth**](MarketApi.md#getdepth) | **GET** /api/v1/depth | Get the order book.
[**getFees**](MarketApi.md#getfees) | **GET** /api/v1/fees | Obtain trading fees information.
[**getPairs**](MarketApi.md#getpairs) | **GET** /api/v1/markets | Get market pairs.

# **get24HrPriceStatistics**
> \Swagger\Client\Model\TickerStatistics[] get24HrPriceStatistics($symbol)

Get a market ticker.

Gets 24 hour price change statistics for a market pair symbol. Updated every second.  **Rate Limit:** 5 requests per IP per second.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = "symbol_example"; // string | symbol

try {
    $result = $apiInstance->get24HrPriceStatistics($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->get24HrPriceStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| symbol | [optional]

### Return type

[**\Swagger\Client\Model\TickerStatistics[]**](../Model/TickerStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCandlestickBars**
> \Swagger\Client\Model\Candlestick[] getCandlestickBars($symbol, $interval, $limit, $start_time, $end_time)

Get candlestick bars.

Gets candlestick/kline bars for a symbol. Bars are uniquely identified by their open time.  If the time window is larger than limits, only the first n klines will return. In this case, please either shrink the window or increase the limit to get proper amount of klines.  **Rate Limit:** 10 requests per IP per second.  **URL for mainnet:** [https://dex.binance.org/api/v1/klines?symbol=NNB-338_BNB&interval=5m](https://dex.binance.org/api/v1/klines?symbol=NNB-338_BNB&interval=5m)   **URL for testnet:** [https://testnet-dex.binance.org/api/v1/klines?symbol=NNB-338_BNB&interval=5m](https://testnet-dex.binance.org/api/v1/klines?symbol=NNB-338_BNB&interval=5m)  **Example**  ``` [   1499040000000,      // Open time   \"0.01634790\",       // Open   \"0.80000000\",       // High   \"0.01575800\",       // Low   \"0.01577100\",       // Close   \"148976.11427815\",  // Volume   1499644799999,      // Close time   \"2434.19055334\",    // Quote asset volume   308                // Number of trades ] ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = "symbol_example"; // string | symbol
$interval = "interval_example"; // string | interval. Allowed value: [1m, 3m, 5m, 15m, 30m, 1h, 2h, 4h, 6h, 8h, 12h, 1d, 3d, 1w, 1M]
$limit = 56; // int | default 300; max 1000.
$start_time = 789; // int | start time in Milliseconds
$end_time = 789; // int | end time in Milliseconds

try {
    $result = $apiInstance->getCandlestickBars($symbol, $interval, $limit, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getCandlestickBars: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| symbol |
 **interval** | **string**| interval. Allowed value: [1m, 3m, 5m, 15m, 30m, 1h, 2h, 4h, 6h, 8h, 12h, 1d, 3d, 1w, 1M] |
 **limit** | **int**| default 300; max 1000. | [optional]
 **start_time** | **int**| start time in Milliseconds | [optional]
 **end_time** | **int**| end time in Milliseconds | [optional]

### Return type

[**\Swagger\Client\Model\Candlestick[]**](../Model/Candlestick.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDepth**
> \Swagger\Client\Model\MarketDepth getDepth($symbol, $limit)

Get the order book.

Gets the order book depth data for a given pair symbol.  The given _limit_ must be one of the allowed limits below.  **Destination:** Validator node.  **Rate Limit:** 10 requests per IP per second.  **URL for mainnet:** [https://dex.binance.org/api/v1/depth?symbol=xxx-000_BNB](https://dex.binance.org/api/v1/depth?symbol=xxx-000_BNB)  **URL for testnet:** [https://testnet-dex.binance.org/api/v1/depth?symbol=xxx-000_BNB](https://testnet-dex.binance.org/api/v1/depth?symbol=xxx-000_BNB)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = "symbol_example"; // string | Market pair symbol, e.g. NNB-0AD_BNB
$limit = 56; // int | The limit of results. Allowed limits: [5, 10, 20, 50, 100, 500, 1000]

try {
    $result = $apiInstance->getDepth($symbol, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getDepth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Market pair symbol, e.g. NNB-0AD_BNB |
 **limit** | **int**| The limit of results. Allowed limits: [5, 10, 20, 50, 100, 500, 1000] | [optional]

### Return type

[**\Swagger\Client\Model\MarketDepth**](../Model/MarketDepth.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFees**
> \Swagger\Client\Model\Fee[] getFees()

Obtain trading fees information.

Gets the current trading fees settings.  **Destination:** Witness node.  **Rate Limit:** 1 request per IP per second.  **URL for mainnet:** [https://dex.binance.org/api/v1/fees](https://dex.binance.org/api/v1/fees)  **URL for testnet:** [https://testnet-dex.binance.org/api/v1/fees](https://testnet-dex.binance.org/api/v1/fees)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getFees();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getFees: ', $e->getMessage(), PHP_EOL;
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

# **getPairs**
> \Swagger\Client\Model\Market[] getPairs($limit, $offset)

Get market pairs.

Gets the list of market pairs that have been listed.  **Destination:** Witness node.  **Rate Limit:** 1 request per IP per second.  **URL for mainnet:** [https://dex.binance.org/api/v1/markets](https://dex.binance.org/api/v1/markets)  **URL for testnet:** [https://testnet-dex.binance.org/api/v1/markets](https://testnet-dex.binance.org/api/v1/markets)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 500; // int | default 500; max 1000.
$offset = 0; // int | start with 0; default 0.

try {
    $result = $apiInstance->getPairs($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getPairs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| default 500; max 1000. | [optional] [default to 500]
 **offset** | **int**| start with 0; default 0. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\Market[]**](../Model/Market.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

