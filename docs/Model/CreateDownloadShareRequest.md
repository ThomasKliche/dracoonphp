# CreateDownloadShareRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**node_id** | **int** | Source node ID | 
**name** | **string** | Alias name (default: name of the shared node) | [optional] 
**password** | **string** | Access password, not allowed for encrypted shares | [optional] 
**expiration** | [**\Swagger\Client\Model\ObjectExpiration**](ObjectExpiration.md) | Expiration date / time | [optional] 
**internal_notes** | **string** | Internal notes (limited to 255 characters) | [optional] 
**notes** | **string** | User notes (limited to 255 characters) | [optional] 
**show_creator_name** | **bool** | Show creator first and last name. (default: &#x60;false&#x60;) | [optional] 
**show_creator_username** | **bool** | Show creator email address. (default: &#x60;false&#x60;) | [optional] 
**notify_creator** | **bool** | Notify creator on every download. (default: &#x60;false&#x60;) | [optional] 
**max_downloads** | **int** | Max allowed downloads | [optional] 
**key_pair** | [**\Swagger\Client\Model\UserKeyPairContainer**](UserKeyPairContainer.md) | Keypair for Download Share pseudo-user | [optional] 
**file_key** | [**\Swagger\Client\Model\FileKey**](FileKey.md) | Encrypted file key for shares out of encrypted rooms | [optional] 
**creator_language** | **string** | Language tag for messages to creator | [optional] 
**receiver_language** | **string** | Language tag for messages to receiver | [optional] 
**text_message_recipients** | **string[]** | List of recipient FQTNs E.123 / E.164 Format | [optional] 
**send_mail** | **bool** | &#x60;DEPRECATED&#x60;: Notify recipients via email (default: &#x60;false&#x60;) Please use &#x60;POST /shares/uploads/{share_id}/email&#x60; API instead. | [optional] 
**mail_recipients** | **string** | &#x60;DEPRECATED&#x60;: CSV string of recipient email addresses | [optional] 
**mail_subject** | **string** | &#x60;DEPRECATED&#x60;: Notification email subject | [optional] 
**mail_body** | **string** | &#x60;DEPRECATED&#x60;: Notification email content | [optional] 
**send_sms** | **bool** | &#x60;DEPRECATED&#x60;: Send share password via SMS (default: &#x60;false&#x60;) Please use &#x60;textMessageRecipients&#x60; attribute instead. | [optional] 
**sms_recipients** | **string** | &#x60;DEPRECATED&#x60;: CSV string of recipient MSISDNs | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


