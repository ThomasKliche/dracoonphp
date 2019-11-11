# PublicDownloadShare

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_protected** | **bool** | Is share protected by password | 
**file_name** | **string** | File name | 
**size** | **int** | File size or container size not compressed (in bytes) | 
**limit_reached** | **bool** | Downloads limit reached | 
**creator_name** | **string** | Creator name | 
**created_at** | [**\DateTime**](\DateTime.md) | Creation date | 
**has_download_limit** | **bool** | Determines whether Download Share has a limit for amount of downloads  [Since version 4.11.0] | 
**media_type** | **string** | * &#x60;application/zip&#x60; (for folders and rooms) * actual file media type (for files only)  [Since version 4.11.0] | 
**name** | **string** | Share display name (alias name) | [optional] 
**creator_username** | **string** | Creator username | [optional] 
**expire_at** | [**\DateTime**](\DateTime.md) | Expiration date | [optional] 
**notes** | **string** | User notes (limited to 255 characters) | [optional] 
**is_encrypted** | **bool** | Encryption state | [optional] 
**file_key** | [**\Swagger\Client\Model\FileKey**](FileKey.md) | Encrypted file key for shares out of encrypted rooms | [optional] 
**private_key_container** | [**\Swagger\Client\Model\PrivateKeyContainer**](PrivateKeyContainer.md) | Private key container (private key and version) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


