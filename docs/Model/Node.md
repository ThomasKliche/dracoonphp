# Node

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Node ID | 
**type** | **string** | Node type | 
**name** | **string** | Name | 
**parent_id** | **int** | Parent node ID (room or folder) | [optional] 
**parent_path** | **string** | Parent node path &#x60;/&#x60; if node is a root node (room) | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Creation date | [optional] 
**created_by** | [**\Swagger\Client\Model\UserInfo**](UserInfo.md) | Created by user | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Modification date | [optional] 
**updated_by** | [**\Swagger\Client\Model\UserInfo**](UserInfo.md) | Modified by user | [optional] 
**expire_at** | [**\DateTime**](\DateTime.md) | Expiration date | [optional] 
**hash** | **string** | MD5 hash of file | [optional] 
**file_type** | **string** | File type / extension (for files only) | [optional] 
**media_type** | **string** | File media type (for files only) | [optional] 
**size** | **int** | Node size in byte | [optional] 
**classification** | **int** | Classification ID: * &#x60;1&#x60; - public * &#x60;2&#x60; - internal * &#x60;3&#x60; - confidential * &#x60;4&#x60; - strictly confidential | [optional] 
**notes** | **string** | User notes (limited to 255 characters) | [optional] 
**permissions** | [**\Swagger\Client\Model\NodePermissions**](NodePermissions.md) | Available permissions for this node | [optional] 
**inherit_permissions** | **bool** | Inherit permissions from parent room (default: &#x60;false&#x60; if &#x60;parentId&#x60; is &#x60;0&#x60;; otherwise: &#x60;true&#x60;) | [optional] 
**is_encrypted** | **bool** | Encryption state | [optional] 
**encryption_info** | [**\Swagger\Client\Model\EncryptionInfo**](EncryptionInfo.md) | Encryption info (states) | [optional] 
**cnt_deleted_versions** | **int** | Number of deleted versions of this file / folder (for rooms / folders only) | [optional] 
**cnt_comments** | **int** | Returns the number of comments of this node. | [optional] 
**cnt_download_shares** | **int** | Returns the number of Download Shares of this node. | [optional] 
**cnt_upload_shares** | **int** | Returns the number of Upload Shares of this node. | [optional] 
**recycle_bin_retention_period** | **int** | Retention period for deleted nodes in days (Integer between 0 and 9999) | [optional] 
**has_activities_log** | **bool** | Is activities log active (for rooms only) (default: &#x60;true&#x60;) | [optional] 
**quota** | **int** | Quota in byte | [optional] 
**is_favorite** | **bool** | Node is marked as favorite (for rooms / folders only) | [optional] 
**branch_version** | **int** | Version of last change in this node or a node further down the tree. | [optional] 
**media_token** | **string** | Media server media token | [optional] 
**is_browsable** | **bool** | Determines whether node is browsable by client (for rooms only)  [Since version 4.11.0] | [optional] 
**cnt_rooms** | **int** | Amount of direct child rooms where this node is the parent node (no recursion; for rooms only)  [Since version 4.11.0] | [optional] 
**cnt_folders** | **int** | Amount of direct child folders where this node is the parent node (no recursion; for rooms / folders only)  [Since version 4.11.0] | [optional] 
**cnt_files** | **int** | Amount of direct child files where this node is the parent node (no recursion; for rooms / folders only)  [Since version 4.11.0] | [optional] 
**cnt_children** | **int** | Number of direct children (no recursion; for rooms / folders only)  [Deprecated since version 4.11.0] | [optional] 
**has_recycle_bin** | **bool** | &#x60;DEPRECATED&#x60;: Is recycle bin active (for rooms only) Recycle bin is always on (disabling is not possible).  [Deprecated since version 4.10.0] | [optional] 
**children** | [**\Swagger\Client\Model\Node[]**](Node.md) | &#x60;DEPRECATED&#x60;: Child nodes list (if requested) (for rooms / folders only)  [Deprecated since version 4.10.0] | [optional] 
**cnt_admins** | **int** | &#x60;DEPRECATED&#x60;: Number of admins (for rooms only)  [Deprecated since version 4.2.0] | [optional] 
**cnt_users** | **int** | &#x60;DEPRECATED&#x60;: Number of users (for rooms only)  [Deprecated since version 4.2.0] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


