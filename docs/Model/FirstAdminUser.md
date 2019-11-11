# FirstAdminUser

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | User first name | 
**last_name** | **string** | User last name | 
**user_name** | **string** | Username | [optional] 
**auth_data** | [**\Swagger\Client\Model\UserAuthData**](UserAuthData.md) | Authentication methods: * &#x60;sql&#x60; * &#x60;active_directory&#x60; * &#x60;radius&#x60; * &#x60;openid&#x60; | [optional] 
**title** | **string** | Job title | [optional] 
**receiver_language** | **string** | IETF language tag | [optional] 
**notify_user** | **bool** | Notify user about his new account * default: &#x60;true&#x60; for &#x60;basic&#x60; auth type * default: &#x60;false&#x60; for &#x60;active_directory&#x60;, &#x60;openid&#x60; and &#x60;radius&#x60; auth types | [optional] 
**email** | **string** | Email | [optional] 
**phone** | **string** | Phone number | [optional] 
**language** | **string** | &#x60;DEPRECATED&#x60;: Language ID or ISO 639-1 code | [optional] 
**auth_methods** | [**\Swagger\Client\Model\UserAuthMethod[]**](UserAuthMethod.md) | &#x60;DEPRECATED&#x60;: Authentication methods: * &#x60;sql&#x60; * &#x60;active_directory&#x60; * &#x60;radius&#x60; * &#x60;openid&#x60; use &#x60;authData&#x60; instead | [optional] 
**needs_to_change_user_name** | **bool** | &#x60;DEPRECATED&#x60;: If &#x60;true&#x60;, the user must change the &#x60;userName&#x60; at the first login. (default: &#x60;false&#x60;) will be removed | [optional] 
**password** | **string** | &#x60;DEPRECATED&#x60;: An initial password may be preset use &#x60;authData&#x60; instead | [optional] 
**needs_to_change_password** | **bool** | &#x60;DEPRECATED&#x60;: Determines whether user has to change his / her initial password. use &#x60;authDate.mustChangePassword&#x60; instead | [optional] 
**login** | **string** | &#x60;DEPRECATED&#x60;: User login name will be removed | [optional] 
**gender** | **string** | &#x60;DEPRECATED&#x60;: Gender | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


