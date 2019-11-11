# RoomData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Node type | [optional] 
**id** | **int** | Room ID | 
**is_granted** | **bool** | Is user granted room permissions | 
**name** | **string** | Name | 
**is_encrypted** | **bool** | Encryption state | 
**recycle_bin_retention_period** | **int** | Retention period for deleted nodes in days (Integer between 0 and 9999) | 
**has_recycle_bin** | **bool** | &#x60;DEPRECATED&#x60;: Is recycle bin active (for rooms only) Recycle bin is always on (disabling is not possible).  [Deprecated since version 4.10.0] | 
**parent_id** | **int** | Parent node ID (room or folder) | [optional] 
**size** | **int** | Room size | [optional] 
**permissions** | [**\Swagger\Client\Model\NodePermissions**](NodePermissions.md) | Available permissions for this node | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Expiration date | [optional] 
**created_by** | [**\Swagger\Client\Model\UserInfo**](UserInfo.md) | Created by user | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Modification date | [optional] 
**updated_by** | [**\Swagger\Client\Model\UserInfo**](UserInfo.md) | Modified by user | [optional] 
**quota** | **int** | Quota in byte | [optional] 
**cnt_download_shares** | **int** | Returns the number of Download Shares of this node. | [optional] 
**cnt_upload_shares** | **int** | Returns the number of Upload Shares of this node. | [optional] 
**is_favorite** | **bool** | Node is marked as favorite (for rooms / folders only) | [optional] 
**children** | [**\Swagger\Client\Model\RoomData[]**](RoomData.md) | &#x60;DEPRECATED&#x60;: List of rooms, where this room is a parent (if exist)  [Deprecated since version 4.10.0] | [optional] 
**cnt_admins** | **int** | &#x60;DEPRECATED&#x60;: Number of admins (for rooms only)  [Deprecated since version 4.2.0] | [optional] 
**cnt_users** | **int** | &#x60;DEPRECATED&#x60;: Number of users (for rooms only)  [Deprecated since version 4.2.0] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


