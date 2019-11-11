# UserInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for the user | 
**user_type** | **string** | User type: * &#x60;internal&#x60; - ordinary DRACOON user * &#x60;external&#x60; - external user without DRACOON account * &#x60;system&#x60; - system user (non human &amp;#128125;) * &#x60;deleted&#x60; - deleted DRACOON user  [Since version 4.11.0] | 
**avatar_uuid** | **string** | Avatar UUID  [Since version 4.11.0] | 
**display_name** | **string** | &#x60;DEPRECATED&#x60;: Display name use other fields from &#x60;UserInfo&#x60; instead to combine a display name  [Deprecated since version 4.11.0] | 
**user_name** | **string** | Username (only returned for &#x60;internal&#x60; users)  [Since version 4.13.0] | [optional] 
**first_name** | **string** | User first name (mandatory if &#x60;userType&#x60; is &#x60;internal&#x60;)  [Since version 4.11.0] | [optional] 
**last_name** | **string** | User last name (mandatory if &#x60;userType&#x60; is &#x60;internal&#x60;)  [Since version 4.11.0] | [optional] 
**email** | **string** | Email   [Since version 4.11.0] | [optional] 
**title** | **string** | Job title  [Since version 4.11.0] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


