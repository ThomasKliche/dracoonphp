# RoomUser

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_info** | [**\Swagger\Client\Model\UserInfo**](UserInfo.md) | Information about the user  [Since version 4.11.0] | 
**is_granted** | **bool** | Is user granted room permissions | 
**id** | **int** | &#x60;DEPRECATED&#x60;: Unique identifier for the user use &#x60;id&#x60; from &#x60;UserInfo&#x60; instead  [Deprecated since version 4.11.0] | 
**login** | **string** | &#x60;DEPRECATED&#x60;: User login name will be removed  [Deprecated since version 4.11.0] | 
**display_name** | **string** | &#x60;DEPRECATED&#x60;: Display name use information from &#x60;UserInfo&#x60; instead to combine a display name  [Deprecated since version 4.11.0] | 
**email** | **string** | &#x60;DEPRECATED&#x60;: Email  use &#x60;email&#x60; from &#x60;UserInfo&#x60; instead  [Deprecated since version 4.11.0] | 
**permissions** | [**\Swagger\Client\Model\NodePermissions**](NodePermissions.md) | Available permissions for this node | [optional] 
**public_key_container** | [**\Swagger\Client\Model\PublicKeyContainer**](PublicKeyContainer.md) | Public key container (private key and version) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


