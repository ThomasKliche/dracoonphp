# UpdateUserRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Job title | [optional] 
**first_name** | **string** | User first name | [optional] 
**last_name** | **string** | User last name | [optional] 
**user_name** | **string** | Username | [optional] 
**email** | **string** | Email | [optional] 
**is_locked** | **bool** | User is locked: * &#x60;false&#x60; - unlocked * &#x60;true&#x60; - locked  User is locked and can not login anymore. (default: &#x60;false&#x60;) | [optional] 
**phone** | **string** | Phone number | [optional] 
**receiver_language** | **string** | IETF language tag | [optional] 
**expiration** | [**\Swagger\Client\Model\ObjectExpiration**](ObjectExpiration.md) | Expiration date / time | [optional] 
**auth_data** | [**\Swagger\Client\Model\UserAuthDataUpdateRequest**](UserAuthDataUpdateRequest.md) | Authentication methods: * &#x60;sql&#x60; * &#x60;active_directory&#x60; * &#x60;radius&#x60; * &#x60;openid&#x60; | [optional] 
**lock_status** | **int** | &#x60;DEPRECATED&#x60;: User lock status: * &#x60;0&#x60; - locked * &#x60;1&#x60; - Web access allowed * &#x60;2&#x60; - Web and mobile access allowed  Please use &#x60;isLocked&#x60; instead. | [optional] 
**gender** | **string** | &#x60;DEPRECATED&#x60;: Gender Do NOT use &#x60;gender&#x60;! It will be ignored. | [optional] 
**auth_methods** | [**\Swagger\Client\Model\UserAuthMethod[]**](UserAuthMethod.md) | &#x60;DEPRECATED&#x60;: Authentication methods: * &#x60;sql&#x60; * &#x60;active_directory&#x60; * &#x60;radius&#x60; * &#x60;openid&#x60; use &#x60;authData&#x60; instead | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


