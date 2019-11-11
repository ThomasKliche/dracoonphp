# Customer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for the customer | 
**company_name** | **string** | Company name | 
**customer_contract_type** | **string** | Customer type | 
**quota_max** | **int** | Maximal disc space which can be allocated by customer in bytes. -1 for unlimited | 
**quota_used** | **int** | Used amount of disc space in bytes | 
**user_max** | **int** | Maximal number of users | 
**user_used** | **int** | Number of users which are already allocated. | 
**created_at** | [**\DateTime**](\DateTime.md) | Creation date | 
**lock_status** | **bool** | &#x60;DEPRECATED&#x60;: Customer lock status: * &#x60;false&#x60; - unlocked * &#x60;true&#x60; - locked  Please use &#x60;isLocked&#x60; instead. All users of this customer will be blocked and can not login anymore. (default: &#x60;false&#x60;)  [Deprecated since version 4.7.0] | 
**is_locked** | **bool** | Customer is locked: * &#x60;false&#x60; - unlocked * &#x60;true&#x60; - locked  All users of this customer will be blocked and can not login anymore. (default: &#x60;false&#x60;) | [optional] 
**trial_days_left** | **int** | Number of days left for trial period (relevant only for type &#x60;demo&#x60;) (not used) | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Modification date | [optional] 
**last_login_at** | [**\DateTime**](\DateTime.md) | Date of last seen login for the customer | [optional] 
**customer_attributes** | [**\Swagger\Client\Model\CustomerAttributes**](CustomerAttributes.md) | Customer attributes | [optional] 
**activation_code** | **string** | &#x60;DEPRECATED&#x60;: Customer activation code string: * valid only for types &#x60;free&#x60; and &#x60;demo&#x60; * for &#x60;pay&#x60; customers it is empty  [Deprecated since version 4.8.0] | [optional] 
**provider_customer_id** | **string** | Provider customer ID | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


