# DeletedNode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parent_id** | **int** | Parent node ID (room or folder) | 
**parent_path** | **string** | Parent node path &#x60;/&#x60; if node is a root node (room) | 
**type** | **string** | Node type | 
**name** | **string** | Node name | 
**id** | **int** | Node ID | [optional] 
**expire_at** | [**\DateTime**](\DateTime.md) | Expiration date | [optional] 
**accessed_at** | [**\DateTime**](\DateTime.md) | Last access date | [optional] 
**is_encrypted** | **bool** | Encryption state | [optional] 
**notes** | **string** | User notes (limited to 255 characters) | [optional] 
**size** | **int** | Node size in byte | [optional] 
**classification** | **int** | Classification ID: * &#x60;1&#x60; - public * &#x60;2&#x60; - internal * &#x60;3&#x60; - confidential * &#x60;4&#x60; - strictly confidential | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Creation date | [optional] 
**created_by** | [**\Swagger\Client\Model\UserInfo**](UserInfo.md) | Created by user | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Modification date | [optional] 
**updated_by** | [**\Swagger\Client\Model\UserInfo**](UserInfo.md) | Modified by user | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | Deletion date | [optional] 
**deleted_by** | [**\Swagger\Client\Model\UserInfo**](UserInfo.md) | Deleted by user | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


