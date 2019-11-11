# GeneralSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**share_password_sms_enabled** | **bool** | Allow sending of share passwords via SMS | [optional] 
**crypto_enabled** | **bool** | Activation status of client-side encryption. Can only be enabled once; disabling is not possible. | [optional] 
**email_notification_button_enabled** | **bool** | Enable email notification button | [optional] 
**eula_enabled** | **bool** | Each user has to confirm the EULA at first login. | [optional] 
**use_s3_storage** | **bool** | Defines if S3 is used as storage backend | [optional] 
**s3_tags_enabled** | **bool** | Defines if S3 tags are enabled  [Since version 4.9.0] | [optional] 
**auth_token_restrictions** | [**\Swagger\Client\Model\AuthTokenRestrictions**](AuthTokenRestrictions.md) | Defines OAuth token restrictions  [Since version 4.13.0] | [optional] 
**hide_login_input_fields** | **bool** | Defines if login fields should be hidden  [Since version 4.13.0] | [optional] 
**media_server_enabled** | **bool** | &#x60;DEPRECATED&#x60;: Is media server enabled?  [Deprecated since version 4.12.0] | [optional] 
**weak_password_enabled** | **bool** | &#x60;DEPRECATED&#x60;: Allow weak password * A weak password has to fulfill the following criteria:    * is at least 8 characters long    * contains letters and numbers * A strong password has to fulfill the following criteria in addition:    * contains at least one special character    * contains upper and lower case characters Please use &#x60;GET /system/config/policies/passwords&#x60; API to get configured password policies.  [Deprecated since version 4.14.0] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


