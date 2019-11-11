# OpenIdIdpConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID | 
**name** | **string** | Name of the IDP | [optional] 
**issuer** | **string** | Issuer identifier of the IDP The value is a case sensitive URL. | [optional] 
**authorization_end_point_url** | **string** | URL of the authorization endpoint | [optional] 
**token_end_point_url** | **string** | URL of the token endpoint | [optional] 
**user_info_end_point_url** | **string** | URL of the user info endpoint | [optional] 
**jwks_end_point_url** | **string** | URL of the JWKS endpoint | [optional] 
**client_id** | **string** | ID of the OpenID client | [optional] 
**client_secret** | **string** | Secret, which client uses at authentication. | [optional] 
**flow** | **string** | Flow, which is used at authentication  [Since version 4.11.0] | [optional] 
**scopes** | **string[]** | List of requested scopes Usually &#x60;openid&#x60; and the names of the requested claims. | [optional] 
**redirect_uris** | **string[]** | URIs, to which a user is redirected after authorization. | [optional] 
**pkce_enabled** | **bool** | Determines whether PKCE is enabled. cf. [RFC 7636](https://tools.ietf.org/html/rfc7636) (default: &#x60;false&#x60;) | [optional] 
**pkce_challenge_method** | **string** | PKCE code challenge method. cf. [RFC 7636](https://tools.ietf.org/html/rfc7636) | [optional] 
**mapping_claim** | **string** | Name of the claim which is used for the user mapping. | [optional] 
**fallback_mapping_claim** | **string** | Name of the claim which is used for the user mapping fallback. | [optional] 
**user_import_enabled** | **bool** | Determines if a DRACOON account is automatically created for a new user who successfully logs on with his / her AD / IDP account. | [optional] 
**user_import_group** | **int** | User group that is assigned to users who are created by automatic import. Reset with &#x60;0&#x60; | [optional] 
**user_update_enabled** | **bool** | Determines if the DRACOON account is updated with data from AD / IDP. For OpenID Connect, the scopes &#x60;email&#x60; and &#x60;profile&#x60; are needed. (default: &#x60;false&#x60;) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


