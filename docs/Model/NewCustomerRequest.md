# NewCustomerRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_contract_type** | **string** | Customer type | 
**quota_max** | **int** | Maximal disc space which can be allocated by customer in bytes. -1 for unlimited | 
**user_max** | **int** | Maximal number of users | 
**first_admin_user** | [**\Swagger\Client\Model\FirstAdminUser**](FirstAdminUser.md) | First admin user of a customer | 
**company_name** | **string** | Company name | [optional] 
**trial_days** | **int** | Number of days left for trial period (relevant only for type &#x60;demo&#x60;) (not used) | [optional] 
**is_locked** | **bool** | Customer is locked: * &#x60;false&#x60; - unlocked * &#x60;true&#x60; - locked  All users of this customer will be blocked and can not login anymore. (default: &#x60;false&#x60;) | [optional] 
**customer_attributes** | [**\Swagger\Client\Model\CustomerAttributes**](CustomerAttributes.md) | Customer attributes | [optional] 
**provider_customer_id** | **string** | Provider customer ID | [optional] 
**lock_status** | **bool** | &#x60;DEPRECATED&#x60;: Customer lock status: * &#x60;false&#x60; - unlocked * &#x60;true&#x60; - locked  Please use &#x60;isLocked&#x60; instead. All users of this customer will be blocked and can not login anymore. (default: &#x60;false&#x60;) | [optional] 
**activation_code** | **string** | &#x60;DEPRECATED&#x60;: Customer activation code string: * valid only for types &#x60;free&#x60; and &#x60;demo&#x60; * for &#x60;pay&#x60; customers it is empty | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


