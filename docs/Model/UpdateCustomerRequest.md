# UpdateCustomerRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_name** | **string** | Company name | [optional] 
**customer_contract_type** | **string** | Customer type | [optional] 
**quota_max** | **int** | Maximal disc space which can be allocated by customer in bytes. -1 for unlimited | [optional] 
**user_max** | **int** | Maximal number of users | [optional] 
**is_locked** | **bool** | Customer is locked: * &#x60;false&#x60; - unlocked * &#x60;true&#x60; - locked  All users of this customer will be blocked and can not login anymore. (default: &#x60;false&#x60;) | [optional] 
**lock_status** | **bool** | &#x60;DEPRECATED&#x60;: Customer lock status: * &#x60;false&#x60; - unlocked * &#x60;true&#x60; - locked  Please use &#x60;isLocked&#x60; instead. All users of this customer will be blocked and can not login anymore. (default: &#x60;false&#x60;) | [optional] 
**provider_customer_id** | **string** | Provider customer ID | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


