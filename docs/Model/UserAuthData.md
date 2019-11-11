# UserAuthData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | Authentication method  Authentication methods: * &#x60;basic&#x60; (or &#x60;sql&#x60;) * &#x60;active_directory&#x60; * &#x60;radius&#x60; * &#x60;openid&#x60; | 
**login** | **string** | User login name | [optional] 
**password** | **string** | Password (only relevant for &#x60;basic&#x60; authentication type) *NOT* your Active Directory, OpenID or RADIUS password! | [optional] 
**must_change_password** | **bool** | Determines whether user has to change his / her password * default: &#x60;true&#x60; for &#x60;basic&#x60; auth type * default: &#x60;false&#x60; for &#x60;active_directory&#x60;, &#x60;openid&#x60; and &#x60;radius&#x60; auth types | [optional] 
**ad_config_id** | **int** | ID of the user&#39;s Active Directory. | [optional] 
**oid_config_id** | **int** | ID of the user&#39;s OIDC provider. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


