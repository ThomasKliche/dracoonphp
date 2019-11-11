# CreateUserRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | User first name | 
**last_name** | **string** | User last name | 
**user_name** | **string** | Username | [optional] 
**title** | **string** | Job title | [optional] 
**phone** | **string** | Phone number | [optional] 
**expiration** | [**\Swagger\Client\Model\ObjectExpiration**](ObjectExpiration.md) | Expiration date / time | [optional] 
**receiver_language** | **string** | IETF language tag | [optional] 
**email** | **string** | Email | [optional] 
**notify_user** | **bool** | Notify user about his new account * default: &#x60;true&#x60; for &#x60;basic&#x60; auth type * default: &#x60;false&#x60; for &#x60;active_directory&#x60;, &#x60;openid&#x60; and &#x60;radius&#x60; auth types | [optional] 
**auth_data** | [**\Swagger\Client\Model\UserAuthData**](UserAuthData.md) | Authentication methods: * &#x60;sql&#x60; * &#x60;active_directory&#x60; * &#x60;radius&#x60; * &#x60;openid&#x60; | [optional] 
**is_nonmember_viewer** | **bool** | Determines whether user has the role NONMEMBER_VIEWER | [optional] 
**password** | **string** | &#x60;DEPRECATED&#x60;: An initial password may be preset use &#x60;authData&#x60; instead | [optional] 
**login** | **string** | &#x60;DEPRECATED&#x60;: User login name will be removed | [optional] 
**auth_methods** | [**\Swagger\Client\Model\UserAuthMethod[]**](UserAuthMethod.md) | &#x60;DEPRECATED&#x60;: Authentication methods: * &#x60;sql&#x60; * &#x60;active_directory&#x60; * &#x60;radius&#x60; * &#x60;openid&#x60; use &#x60;authData&#x60; instead | [optional] 
**needs_to_change_password** | **bool** | &#x60;DEPRECATED&#x60;: Determines whether user has to change his / her initial password. use &#x60;authDate.mustChangePassword&#x60; instead | [optional] 
**gender** | **string** | &#x60;DEPRECATED&#x60;: Gender Do NOT use &#x60;gender&#x60;! It will be ignored. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


