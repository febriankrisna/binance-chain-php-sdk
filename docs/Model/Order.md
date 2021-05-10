# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cumulate_quantity** | **string** | total amount of trades that have made | [optional] 
**fee** | **string** | trading fee on the latest updated block of this order. Multiple assets are split by semicolon. | [optional] 
**last_executed_price** | **string** | price of last execution | [optional] 
**last_executed_quantity** | **string** | quantity of last execution | [optional] 
**order_create_time** | [**\DateTime**](\DateTime.md) | time of order creation | [optional] 
**order_id** | **string** | order ID | [optional] 
**owner** | **string** | order issuer | [optional] 
**price** | **string** | order price | [optional] 
**quantity** | **string** | order quantity | [optional] 
**side** | **int** | 1 for buy and 2 for sell | [optional] 
**status** | **string** | enum [Ack, PartialFill, IocNoFill, FullyFill, Canceled, Expired, FailedBlocking, FailedMatching, IocExpire] | [optional] 
**symbol** | **string** | trading pair symbol | [optional] 
**time_in_force** | **int** | 1 for Good Till Expire(GTE) order and 3 for Immediate Or Cancel (IOC) | [optional] 
**trade_id** | **string** | trade ID | [optional] 
**transaction_hash** | **string** | hash of transaction | [optional] 
**transaction_time** | [**\DateTime**](\DateTime.md) | time of latest order update, for example, cancel, expire | [optional] 
**type** | **int** | only 2 is available for now, meaning limit order | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

