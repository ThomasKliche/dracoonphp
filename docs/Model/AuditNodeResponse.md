# AuditNodeResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**node_id** | **int** | Node ID | 
**node_name** | **string** | Node name | 
**node_parent_path** | **string** | Parent node path &#x60;/&#x60; if node is a root node (room) | 
**node_cnt_children** | **int** | Number of direct children (no recursion; for rooms / folders only) | 
**audit_user_permission_list** | [**\Swagger\Client\Model\AuditUserPermission[]**](AuditUserPermission.md) | List of assigned users with permissions | 
**node_parent_id** | **int** | Parent node ID (room or folder) | [optional] 
**node_size** | **int** | Node size in byte | [optional] 
**node_recycle_bin_retention_period** | **int** | Retention period for deleted nodes in days (Integer between 0 and 9999) | [optional] 
**node_quota** | **int** | Quota in byte | [optional] 
**node_is_encrypted** | **bool** | Encryption state | [optional] 
**node_has_activities_log** | **bool** | Is activities log active (for rooms only) (default: &#x60;true&#x60;) | [optional] 
**node_created_at** | [**\DateTime**](\DateTime.md) | Creation date | [optional] 
**node_created_by** | [**\Swagger\Client\Model\UserInfo**](UserInfo.md) | Created by user | [optional] 
**node_updated_at** | [**\DateTime**](\DateTime.md) | Modification date | [optional] 
**node_updated_by** | [**\Swagger\Client\Model\UserInfo**](UserInfo.md) | Modified by user | [optional] 
**node_has_recycle_bin** | **bool** | &#x60;DEPRECATED&#x60;: Is recycle bin active (for rooms only) Recycle bin is always on (disabling is not possible).  [Deprecated since version 4.10.0] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


