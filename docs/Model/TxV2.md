# TxV2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**block_height** | **int** |  | 
**code** | **int** |  | 
**data** | **string** |  | 
**from_addr** | **string** |  | 
**memo** | **string** |  | 
**order_id** | **string** | Optional. Available when the transaction type is NEW_ORDER | [optional] 
**proposal_id** | **string** | Optional. Available when the transaction type is PROPOSAL | [optional] 
**sequence** | **int** |  | 
**source** | **int** |  | 
**sub_transactions** | [**\Swagger\Client\Model\SubTx[]**](SubTx.md) | Optional. Available when the transaction has sub-transactions, such as multi-send transaction or a transaction have multiple assets | [optional] 
**swap_id** | **string** | Optional. Available when the transaction type is one of HTL_TRANSFER, CLAIM_HTL, REFUND_HTL, DEPOSIT_HTL | [optional] 
**time_stamp** | [**\DateTime**](\DateTime.md) |  | 
**to_addr** | **string** |  | 
**tx_asset** | **string** |  | 
**tx_fee** | **string** |  | 
**tx_hash** | **string** |  | 
**tx_type** | **string** |  | 
**value** | **string** |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

