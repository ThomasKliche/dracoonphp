# CustomerData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for the customer | 
**name** | **string** | Customer name | 
**is_provider_customer** | **bool** | Customer is Provider Customer | 
**space_limit** | **int** | Space limit (in bytes). -1 for unlimited | 
**space_used** | **int** | Space used (in bytes) | 
**accounts_limit** | **int** | User accounts limit | 
**accounts_used** | **int** | User accounts used | 
**customer_encryption_enabled** | **bool** | Clientside encryption for customer enabled | 
**cnt_files** | **int** | Total number of files Visible only with at least one global role.  [Deprecated since version 4.11.0] | [optional] 
**cnt_folders** | **int** | Total number of folders Visible only with at least one global role.  [Deprecated since version 4.11.0] | [optional] 
**cnt_rooms** | **int** | Total number of rooms Visible only with at least one global role.  [Deprecated since version 4.11.0] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


