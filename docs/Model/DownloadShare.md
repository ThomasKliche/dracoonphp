# DownloadShare

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Share ID | 
**name** | **string** | Alias name | 
**node_id** | **int** | Source node ID | 
**access_key** | **string** | Share access key to generate secure link | 
**notify_creator** | **bool** | Notify creator on every download. | 
**cnt_downloads** | **int** | Downloads counter (incremented on each download) | 
**created_at** | [**\DateTime**](\DateTime.md) | Creation date | 
**created_by** | [**\Swagger\Client\Model\UserInfo**](UserInfo.md) | Created by user | 
**updated_at** | [**\DateTime**](\DateTime.md) | Modification date | [optional] 
**updated_by** | [**\Swagger\Client\Model\UserInfo**](UserInfo.md) | Modified by user | [optional] 
**internal_notes** | **string** | Internal notes (limited to 255 characters) | [optional] 
**notes** | **string** | User notes (limited to 255 characters) | [optional] 
**show_creator_name** | **bool** | Show creator first and last name. | [optional] 
**show_creator_username** | **bool** | Show creator email address. | [optional] 
**is_protected** | **bool** | Is share protected by password | [optional] 
**expire_at** | [**\DateTime**](\DateTime.md) | Expiration date | [optional] 
**max_downloads** | **int** | Max allowed downloads | [optional] 
**node_path** | **string** | Path to shared download node | [optional] 
**data_url** | **string** | Path to shared download node | [optional] 
**is_encrypted** | **bool** | Encrypted share (this only applies to shared files, not folders) | [optional] 
**classification** | **int** | Classification ID: * &#x60;1&#x60; - public * &#x60;2&#x60; - internal * &#x60;3&#x60; - confidential * &#x60;4&#x60; - strictly confidential  [Deprecated since version 4.11.0] | [optional] 
**recipients** | **string** | &#x60;DEPRECATED&#x60;: CSV string of recipient email addresses  [Deprecated since version 4.11.0] | [optional] 
**sms_recipients** | **string** | &#x60;DEPRECATED&#x60;: CSV string of recipient MSISDNs  [Deprecated since version 4.11.0] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


