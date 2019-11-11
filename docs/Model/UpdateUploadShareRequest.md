# UpdateUploadShareRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Alias name | [optional] 
**password** | **string** | Password | [optional] 
**expiration** | [**\Swagger\Client\Model\ObjectExpiration**](ObjectExpiration.md) | Expiration date / time | [optional] 
**files_expiry_period** | **int** | Number of days after which uploaded files expire | [optional] 
**internal_notes** | **string** | Internal notes (limited to 255 characters) | [optional] 
**notes** | **string** | User notes (limited to 255 characters) | [optional] 
**show_creator_name** | **bool** | Show creator first and last name. | [optional] 
**show_creator_username** | **bool** | Show creator email address. | [optional] 
**notify_creator** | **bool** | Notify creator on every upload. | [optional] 
**show_uploaded_files** | **bool** | Allow display of already uploaded files | [optional] 
**max_slots** | **int** | Maximal amount of files to upload | [optional] 
**max_size** | **int** | Maximal total size of uploaded files (in bytes) | [optional] 
**text_message_recipients** | **string[]** | List of recipient FQTNs E.123 / E.164 Format | [optional] 
**receiver_language** | **string** | Language tag for messages to receiver | [optional] 
**default_country** | **string** | Country shorthand symbol (cf. ISO 3166-2) | [optional] 
**reset_password** | **bool** | Set &#39;true&#39; to reset &#39;password&#39; for Upload Share. | [optional] 
**reset_files_expiry_period** | **bool** | Set &#39;true&#39; to reset &#39;filesExpiryPeriod&#39; for Upload Share | [optional] 
**reset_max_slots** | **bool** | Set &#39;true&#39; to reset &#39;maxSlots&#39; for Upload Share | [optional] 
**reset_max_size** | **bool** | Set &#39;true&#39; to reset &#39;maxSize&#39; for Upload Share | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


