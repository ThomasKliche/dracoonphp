# UpdateDownloadShareRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Alias name | [optional] 
**password** | **string** | Access password, not allowed for encrypted shares | [optional] 
**expiration** | [**\Swagger\Client\Model\ObjectExpiration**](ObjectExpiration.md) | Expiration date / time | [optional] 
**notes** | **string** | User notes (limited to 255 characters) | [optional] 
**internal_notes** | **string** | Internal notes (limited to 255 characters) | [optional] 
**show_creator_name** | **bool** | Show creator first and last name. | [optional] 
**show_creator_username** | **bool** | Show creator email address. | [optional] 
**notify_creator** | **bool** | Notify creator on every download. | [optional] 
**max_downloads** | **int** | Max allowed downloads | [optional] 
**text_message_recipients** | **string[]** | List of recipient FQTNs E.123 / E.164 Format | [optional] 
**receiver_language** | **string** | Language tag for messages to receiver | [optional] 
**default_country** | **string** | Country shorthand symbol (cf. ISO 3166-2) | [optional] 
**reset_password** | **bool** | Set &#39;true&#39; to reset &#39;password&#39; for Download Share. | [optional] 
**reset_max_downloads** | **bool** | Set &#39;true&#39; to reset &#39;maxDownloads&#39; for Download Share. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


