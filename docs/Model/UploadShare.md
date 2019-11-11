# UploadShare

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Share ID | 
**name** | **string** | Alias name | 
**target_id** | **int** | Target room or folder ID | 
**is_protected** | **bool** | Is share protected by password | 
**access_key** | **string** | Share access key to generate secure link | 
**notify_creator** | **bool** | Notify creator on every upload. | 
**created_at** | [**\DateTime**](\DateTime.md) | Creation date | 
**created_by** | [**\Swagger\Client\Model\UserInfo**](UserInfo.md) | Created by user | 
**updated_at** | [**\DateTime**](\DateTime.md) | Modification date | [optional] 
**updated_by** | [**\Swagger\Client\Model\UserInfo**](UserInfo.md) | Modified by user | [optional] 
**expire_at** | [**\DateTime**](\DateTime.md) | Expiration date | [optional] 
**target_path** | **string** | Path to shared upload node | [optional] 
**is_encrypted** | **bool** | Encryption state | [optional] 
**internal_notes** | **string** | Internal notes (limited to 255 characters) | [optional] 
**notes** | **string** | User notes (limited to 255 characters) | [optional] 
**files_expiry_period** | **int** | Number of days after which uploaded files expire | [optional] 
**cnt_files** | **int** | Total amount of existing files uploaded with this share. | [optional] 
**cnt_uploads** | **int** | Total amount of uploads conducted with this share. | [optional] 
**show_uploaded_files** | **bool** | Allow display of already uploaded files | [optional] 
**data_url** | **string** | Upload Share URL | [optional] 
**max_slots** | **int** | Maximal amount of files to upload | [optional] 
**max_size** | **int** | Maximal total size of uploaded files (in bytes) | [optional] 
**target_type** | **string** | Node type | [optional] 
**show_creator_name** | **bool** | Show creator first and last name.  [Since version 4.11.0] | [optional] 
**show_creator_username** | **bool** | Show creator email address.  [Since version 4.11.0] | [optional] 
**recipients** | **string** | &#x60;DEPRECATED&#x60;: CSV string of recipient email addresses  [Deprecated since version 4.11.0] | [optional] 
**sms_recipients** | **string** | &#x60;DEPRECATED&#x60;: CSV string of recipient MSISDNs  [Deprecated since version 4.11.0] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


