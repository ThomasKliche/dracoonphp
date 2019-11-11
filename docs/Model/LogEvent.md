# LogEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Event ID | 
**time** | [**\DateTime**](\DateTime.md) | Event timestamp | 
**user_id** | **int** | Unique identifier for the user | 
**message** | **string** | Event description | 
**operation_id** | **int** | Operation type ID | [optional] 
**operation_name** | **string** | Operation name | [optional] 
**status** | **int** | Operation status: * &#x60;0&#x60; - Success * &#x60;2&#x60; - Error | [optional] 
**user_client** | **string** | Client | [optional] 
**customer_id** | **int** | Unique identifier for the customer | [optional] 
**user_name** | **string** | Username | [optional] 
**user_ip** | **string** | User IP | [optional] 
**auth_parent_source** | **string** | Auth parent source ID | [optional] 
**auth_parent_target** | **string** | Auth parent target ID | [optional] 
**object_id1** | **int** | Object ID 1 | [optional] 
**object_type1** | **int** | Object type 1 | [optional] 
**object_name1** | **string** | Object name 1 | [optional] 
**object_id2** | **int** | Object ID 2 | [optional] 
**object_type2** | **int** | Object type 2 | [optional] 
**object_name2** | **string** | Object name 2 | [optional] 
**attribute1** | **string** | Attribute 1 | [optional] 
**attribute2** | **string** | Attribute 2 | [optional] 
**attribute3** | **string** | Attribute 3 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


