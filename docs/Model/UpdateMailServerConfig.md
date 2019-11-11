# UpdateMailServerConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host** | **string** | Email server host | [optional] 
**port** | **int** | Email server port | [optional] 
**username** | **string** | Username for email server | [optional] 
**password** | **string** | Password for email server | [optional] 
**authentication_enabled** | **bool** | Set &#x60;true&#x60; if the email server requires authentication. | [optional] 
**ssl_enabled** | **bool** | Email server requires SSL connection? Requires &#x60;starttlsEnabled&#x60; to be &#x60;false&#x60; | [optional] 
**starttls_enabled** | **bool** | Email server requires StartTLS connection? Requires &#x60;sslEnabled&#x60; to be &#x60;false&#x60; | [optional] 
**reset_username** | **bool** | Set &#x60;true&#x60; to reset email server &#x60;username&#x60;. | [optional] 
**reset_password** | **bool** | Set &#x60;true&#x60; to reset email server &#x60;password&#x60;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


