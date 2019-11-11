# CreateOAuthClientRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | ID of the OAuth client | [optional] 
**client_secret** | **string** | Secret, which client uses at authentication. | [optional] 
**client_name** | **string** | Name, which is shown at the client configuration and authorization. | 
**client_type** | **string** | Determines whether client is a confidential or public client. | [optional] 
**grant_types** | **string[]** | Authorized grant types * &#x60;authorization_code&#x60; * &#x60;implicit&#x60; * &#x60;password&#x60; * &#x60;client_credentials&#x60; * &#x60;refresh_token&#x60;  cf. [RFC 6749](https://tools.ietf.org/html/rfc6749) | 
**redirect_uris** | **string[]** | URIs, to which a user is redirected after authorization. | [optional] 
**access_token_validity** | **int** | Validity of the access token in seconds. | [optional] 
**refresh_token_validity** | **int** | Validity of the refresh token in seconds. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


