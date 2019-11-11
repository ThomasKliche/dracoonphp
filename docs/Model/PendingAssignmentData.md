# PendingAssignmentData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**room_id** | **int** | Room ID | 
**state** | **string** | Acceptance state: * &#x60;ACCEPTED&#x60; * &#x60;WAITING&#x60; * &#x60;DENIED&#x60; | 
**user_info** | [**\Swagger\Client\Model\UserInfo**](UserInfo.md) | Information about pending users  [Since version 4.11.0] | 
**group_info** | [**\Swagger\Client\Model\GroupInfo**](GroupInfo.md) | Information about group with pending assignment option  [Since version 4.11.0] | 
**pending_user_data** | [**\Swagger\Client\Model\PendingUserData**](PendingUserData.md) | &#x60;DEPRECATED&#x60;: Information about pending users use &#x60;userInfo&#x60; instead  [Deprecated since version 4.11.0] | 
**pending_group_data** | [**\Swagger\Client\Model\PendingGroupData**](PendingGroupData.md) | &#x60;DEPRECATED&#x60;: Information about group with pending assignment option use &#x60;groupInfo&#x60; instead  [Deprecated since version 4.11.0] | 
**user_id** | **int** | &#x60;DEPRECATED&#x60;: Unique identifier for the user use &#x60;id&#x60; from &#x60;UserInfo&#x60; instead  [Deprecated since version 4.2.0] | [optional] 
**group_id** | **int** | &#x60;DEPRECATED&#x60;: Unique identifier for the group use &#x60;id&#x60; from &#x60;GroupInfo&#x60; instead  [Deprecated since version 4.2.0] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


