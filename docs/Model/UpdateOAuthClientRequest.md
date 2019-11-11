# UpdateOAuthClientRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_secret** | **string** | Secret, which client uses at authentication. | [optional] 
**client_name** | **string** | Name, which is shown at the client configuration and authorization. | [optional] 
**client_type** | **string** | Determines whether client is a confidential or public client. | [optional] 
**is_enabled** | **bool** | Determines whether client is enabled. | [optional] 
**grant_types** | **string[]** | Authorized grant types * &#x60;authorization_code&#x60; * &#x60;implicit&#x60; * &#x60;password&#x60; * &#x60;client_credentials&#x60; * &#x60;refresh_token&#x60;  cf. [RFC 6749](https://tools.ietf.org/html/rfc6749) | [optional] 
**redirect_uris** | **string[]** | URIs, to which a user is redirected after authorization. | [optional] 
**access_token_validity** | **int** | Validity of the access token in seconds. | [optional] 
**refresh_token_validity** | **int** | Validity of the refresh token in seconds. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


