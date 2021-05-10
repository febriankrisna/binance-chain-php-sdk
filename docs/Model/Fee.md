# Fee

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**msg_type** | **string** | Transaction msg type that this fee applies to | [optional] 
**fee** | **float** | The fee amount | [optional] 
**fee_for** | **int** | 1 &#x3D; proposer, 2 &#x3D; all, 3 &#x3D; free | [optional] 
**multi_transfer_fee** | **string** | Fee for multi-transfer | [optional] 
**lower_limit_as_multi** | **string** | e.g. 2 | [optional] 
**fixed_fee_params** | **AllOfFeeFixedFeeParams** | Set if the fee is fixed | [optional] 
**dex_fee_fields** | **AllOfFeeDexFeeFields** | dex fee | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

