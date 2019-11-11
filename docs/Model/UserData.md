# UserData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for the user | 
**user_name** | **string** | Username  [Since version 4.13.0] | 
**first_name** | **string** | User first name | 
**last_name** | **string** | User last name | 
**is_locked** | **bool** | User is locked: * &#x60;false&#x60; - unlocked * &#x60;true&#x60; - locked  User is locked and can not login anymore. (default: &#x60;false&#x60;) | 
**avatar_uuid** | **string** | Avatar UUID  [Since version 4.11.0] | 
**auth_data** | [**\Swagger\Client\Model\UserAuthData**](UserAuthData.md) | Authentication methods: * &#x60;sql&#x60; * &#x60;active_directory&#x60; * &#x60;radius&#x60; * &#x60;openid&#x60;  [Since version 4.13.0] | 
**lock_status** | **int** | &#x60;DEPRECATED&#x60;: User lock status: * &#x60;0&#x60; - locked * &#x60;1&#x60; - Web access allowed * &#x60;2&#x60; - Web and mobile access allowed  Please use &#x60;isLocked&#x60; instead.  [Deprecated since version 4.7.0] | 
**email** | **string** | Email | [optional] 
**phone** | **string** | Phone number | [optional] 
**title** | **string** | Job title | [optional] 
**expire_at** | [**\DateTime**](\DateTime.md) | Expiration date | [optional] 
**has_manageable_rooms** | **bool** | User has manageable rooms | [optional] 
**is_encryption_enabled** | **bool** | User has generated private key. Possible if client-side encryption is active for this customer | [optional] 
**last_login_success_at** | [**\DateTime**](\DateTime.md) | Last successful logon date | [optional] 
**home_room_id** | **int** | Homeroom ID | [optional] 
**public_key_container** | [**\Swagger\Client\Model\PublicKeyContainer**](PublicKeyContainer.md) | Public key container (private key and version) | [optional] 
**user_roles** | [**\Swagger\Client\Model\RoleList**](RoleList.md) | List of user roles | [optional] 
**user_attributes** | [**\Swagger\Client\Model\UserAttributes**](UserAttributes.md) | User attributes | [optional] 
**login** | **string** | &#x60;DEPRECATED&#x60;: User login name will be removed  [Deprecated since version 4.13.0] | [optional] 
**auth_methods** | [**\Swagger\Client\Model\UserAuthMethod[]**](UserAuthMethod.md) | &#x60;DEPRECATED&#x60;: Authentication methods: * &#x60;sql&#x60; * &#x60;active_directory&#x60; * &#x60;radius&#x60; * &#x60;openid&#x60; use &#x60;authData&#x60; instead  [Deprecated since version 4.13.0] | [optional] 
**gender** | **string** | &#x60;DEPRECATED&#x60;: Gender  [Deprecated since version 4.12.0] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


