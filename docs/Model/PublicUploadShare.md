# PublicUploadShare

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_protected** | **bool** | Is share protected by password | 
**created_at** | [**\DateTime**](\DateTime.md) | Creation date | 
**max_slots** | **int** | &#x60;DEPRECATED&#x60;: Maximal amount of files to upload  [Deprecated since version 4.2.0] | 
**name** | **string** | Share display name (alias name) | [optional] 
**is_encrypted** | **bool** | Encryption state | [optional] 
**expire_at** | [**\DateTime**](\DateTime.md) | Expiration date | [optional] 
**notes** | **string** | User notes (limited to 255 characters) | [optional] 
**uploaded_files** | [**\Swagger\Client\Model\PublicUploadedFileData[]**](PublicUploadedFileData.md) | List of (public) uploaded files | [optional] 
**user_user_public_key_list** | [**\Swagger\Client\Model\UserUserPublicKeyList**](UserUserPublicKeyList.md) | List of user public keys | [optional] 
**show_uploaded_files** | **bool** | Allow display of already uploaded files | [optional] 
**remaining_size** | **int** | Remaining Size | [optional] 
**remaining_slots** | **int** | Remaining Slots | [optional] 
**creator_name** | **string** | Creator name  [Since version 4.11.0] | 
**creator_username** | **string** | Creator username  [Since version 4.11.0] | [optional] 
**max_size** | **double** | &#x60;DEPRECATED&#x60;: Maximal total size of uploaded files (in bytes)  [Deprecated since version 4.2.0] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


