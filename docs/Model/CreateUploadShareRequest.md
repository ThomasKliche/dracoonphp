# CreateUploadShareRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**target_id** | **int** | Target room or folder ID | 
**name** | **string** | Alias name (default: name of the shared node) | [optional] 
**password** | **string** | Password | [optional] 
**expiration** | [**\Swagger\Client\Model\ObjectExpiration**](ObjectExpiration.md) | Expiration date / time | [optional] 
**files_expiry_period** | **int** | Number of days after which uploaded files expire | [optional] 
**internal_notes** | **string** | Internal notes (limited to 255 characters) | [optional] 
**notes** | **string** | User notes (limited to 255 characters) | [optional] 
**notify_creator** | **bool** | Notify creator on every upload. (default: &#x60;false&#x60;) | [optional] 
**show_uploaded_files** | **bool** | Allow display of already uploaded files (default: &#x60;false&#x60;) | [optional] 
**max_slots** | **int** | Maximal amount of files to upload | [optional] 
**max_size** | **int** | Maximal total size of uploaded files (in bytes) | [optional] 
**creator_language** | **string** | Language tag for messages to creator | [optional] 
**receiver_language** | **string** | Language tag for messages to receiver | [optional] 
**text_message_recipients** | **string[]** | List of recipient FQTNs E.123 / E.164 Format | [optional] 
**show_creator_name** | **bool** | Show creator first and last name. (default: &#x60;false&#x60;) | [optional] 
**show_creator_username** | **bool** | Show creator email address. (default: &#x60;false&#x60;) | [optional] 
**send_mail** | **bool** | &#x60;DEPRECATED&#x60;: Notify recipients via email (default: &#x60;false&#x60;) Please use &#x60;POST /shares/uploads/{share_id}/email&#x60; API instead. | [optional] 
**mail_recipients** | **string** | &#x60;DEPRECATED&#x60;: CSV string of recipient email addresses | [optional] 
**mail_subject** | **string** | &#x60;DEPRECATED&#x60;: Notification email subject | [optional] 
**mail_body** | **string** | &#x60;DEPRECATED&#x60;: Notification email content | [optional] 
**send_sms** | **bool** | &#x60;DEPRECATED&#x60;: Send share password via SMS (default: &#x60;false&#x60;) Please use &#x60;textMessageRecipients&#x60; attribute instead. | [optional] 
**sms_recipients** | **string** | &#x60;DEPRECATED&#x60;: CSV string of recipient MSISDNs | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


