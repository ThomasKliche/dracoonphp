# NodePermissions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**manage** | **bool** | User / Group may grant all of the above permissions to other users and groups independently, may update room metadata and create / update / delete subordinary rooms, has all permissions. | 
**read** | **bool** | User / Group may see all rooms, files and folders in the room and download everything, copy files from this room. | 
**create** | **bool** | User / Group may upload files, create folders and copy / move files to this room, overwriting is not possible. | 
**change** | **bool** | User / Group may update metadata of nodes: rename files and folders, change classification, etc. | 
**delete** | **bool** | User / Group may overwrite and remove files / folders, move files from this room. | 
**manage_download_share** | **bool** | User / Group may create Download Shares for files and containers view all previously created Download Shares in this room. | 
**manage_upload_share** | **bool** | User / Group may create Upload Shares for containers, view all previously created Upload Shares in this room. | 
**read_recycle_bin** | **bool** | User / Group may look up files / folders in the recycle bin. | 
**restore_recycle_bin** | **bool** | User / Group may restore files / folders from recycle bin - room permissions required. | 
**delete_recycle_bin** | **bool** | User / Group may permanently remove files / folders from the recycle bin. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


