# UserAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for the user | 
**user_name** | **string** | Username  [Since version 4.13.0] | 
**first_name** | **string** | User first name | 
**last_name** | **string** | User last name | 
**is_locked** | **bool** | User is locked: * &#x60;false&#x60; - unlocked * &#x60;true&#x60; - locked  User is locked and can not login anymore. (default: &#x60;false&#x60;) | 
**has_manageable_rooms** | **bool** | User has manageable rooms | 
**user_roles** | [**\Swagger\Client\Model\RoleList**](RoleList.md) | List of user roles | 
**auth_data** | [**\Swagger\Client\Model\UserAuthData**](UserAuthData.md) | Authentication methods: * &#x60;sql&#x60; * &#x60;active_directory&#x60; * &#x60;radius&#x60; * &#x60;openid&#x60;  [Since version 4.13.0] | 
**lock_status** | **int** | &#x60;DEPRECATED&#x60;: User lock status: * &#x60;0&#x60; - locked * &#x60;1&#x60; - Web access allowed * &#x60;2&#x60; - Web and mobile access allowed  Please use &#x60;isLocked&#x60; instead.  [Deprecated since version 4.7.0] | 
**customer** | [**\Swagger\Client\Model\CustomerData**](CustomerData.md) | &#x60;DEPRECATED&#x60;: Customer information Please use response from &#x60;GET /user/account/customer&#x60; instead.  [Deprecated since version 4.10.0] | 
**needs_to_change_password** | **bool** | Determines whether user has to change his / her password  [Deprecated since version 4.13.0] | 
**must_set_email** | **bool** | If &#x60;true&#x60;, the user must set the &#x60;email&#x60; at the first login. (default: &#x60;false&#x60;)  [Since version 4.13.0] | [optional] 
**needs_to_accept_eula** | **bool** | User has accepted EULA. Present, if EULA is system global active. cf. &#x60;GET system/config/settings/general&#x60; - &#x60;eulaEnabled&#x60; | [optional] 
**title** | **string** | Job title | [optional] 
**expire_at** | [**\DateTime**](\DateTime.md) | Expiration date | [optional] 
**is_encryption_enabled** | **bool** | User has generated private key. Possible if client-side encryption is active for this customer | [optional] 
**last_login_success_at** | [**\DateTime**](\DateTime.md) | Last successful logon date | [optional] 
**last_login_fail_at** | [**\DateTime**](\DateTime.md) | Last failed logon date | [optional] 
**email** | **string** | Email | [optional] 
**phone** | **string** | Phone number | [optional] 
**home_room_id** | **int** | Homeroom ID | [optional] 
**user_groups** | [**\Swagger\Client\Model\UserGroup[]**](UserGroup.md) | All groups the user is member of | [optional] 
**user_attributes** | [**\Swagger\Client\Model\UserAttributes**](UserAttributes.md) | User attributes | [optional] 
**last_login_success_ip** | **string** | &#x60;DEPRECATED&#x60;: Last successful logon IP address will be removed  [Deprecated since version 4.6.0] | [optional] 
**last_login_fail_ip** | **string** | &#x60;DEPRECATED&#x60;: Last failed logon IP address will be removed  [Deprecated since version 4.6.0] | [optional] 
**gender** | **string** | &#x60;DEPRECATED&#x60;: Gender  [Deprecated since version 4.12.0] | [optional] 
**needs_to_change_user_name** | **bool** | &#x60;DEPRECATED&#x60;: If &#x60;true&#x60;, the user must change the &#x60;userName&#x60; at the first login. (default: &#x60;false&#x60;) will be removed  [Deprecated since version 4.13.0] | [optional] 
**auth_methods** | [**\Swagger\Client\Model\UserAuthMethod[]**](UserAuthMethod.md) | &#x60;DEPRECATED&#x60;: Authentication methods: * &#x60;sql&#x60; * &#x60;active_directory&#x60; * &#x60;radius&#x60; * &#x60;openid&#x60; use &#x60;authData&#x60; instead  [Deprecated since version 4.13.0] | [optional] 
**login** | **string** | &#x60;DEPRECATED&#x60;: User login name will be removed  [Deprecated since version 4.13.0] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


