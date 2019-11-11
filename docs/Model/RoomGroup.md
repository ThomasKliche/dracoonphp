# RoomGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for the group | 
**is_granted** | **bool** | Is user granted room permissions | 
**name** | **string** | Group name | 
**new_group_member_acceptance** | **string** | Behaviour when new users are added to the group: * &#x60;autoallow&#x60; * &#x60;pending&#x60;  Only relevant if &#x60;adminGroupIds&#x60; has items. (default: &#x60;autoallow&#x60;) | [optional] 
**permissions** | [**\Swagger\Client\Model\NodePermissions**](NodePermissions.md) | Available permissions for this node | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


