# CompleteUploadRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**resolution_strategy** | **string** | Node conflict resolution strategy: * &#x60;autorename&#x60; * &#x60;overwrite&#x60; * &#x60;fail&#x60;  (default: &#x60;autorename&#x60;) | [optional] 
**keep_share_links** | **bool** | Preserve Download Share Links and point them to the new node. (default: &#x60;false&#x60;) | [optional] 
**file_name** | **string** | New file name to store with | [optional] 
**file_key** | [**\Swagger\Client\Model\FileKey**](FileKey.md) | Encrypted file key for shares out of encrypted rooms | [optional] 
**user_file_key_list** | [**\Swagger\Client\Model\UserFileKeyList**](UserFileKeyList.md) | List of user file keys | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


