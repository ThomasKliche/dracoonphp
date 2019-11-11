# LastAdminUserRoom

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Room ID | 
**name** | **string** | Room name | 
**parent_path** | **string** | Parent node path &#x60;/&#x60; if node is a root node (room) | 
**last_admin_in_group** | **bool** | Determines whether user is last admin of a room due to being the last member of last admin group | 
**parent_id** | **int** | Parent room ID | [optional] 
**last_admin_in_group_id** | **int** | ID of the last admin group where the user is the only remaining member (returned only if &#x60;lastAdminInGroup&#x60; is &#x60;true&#x60;) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


