# ConfigRoomRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recycle_bin_retention_period** | **int** | Retention period for deleted nodes in days (Integer between 0 and 9999) | [optional] 
**inherit_permissions** | **bool** | Inherit permissions from parent room (default: &#x60;false&#x60; if &#x60;parentId&#x60; is &#x60;0&#x60;; otherwise: &#x60;true&#x60;) | [optional] 
**take_over_permissions** | **bool** | Take over existing permissions | [optional] 
**admin_ids** | **int[]** | List of user ids A room requires at least one admin (user or group) | [optional] 
**admin_group_ids** | **int[]** | List of group ids A room requires at least one admin (user or group) | [optional] 
**new_group_member_acceptance** | **string** | Behaviour when new users are added to the group: * &#x60;autoallow&#x60; * &#x60;pending&#x60;  Only relevant if &#x60;adminGroupIds&#x60; has items. (default: &#x60;autoallow&#x60;) | [optional] 
**has_activities_log** | **bool** | Is activities log active (for rooms only) (default: &#x60;true&#x60;) | [optional] 
**classification** | **int** | Classification ID: * &#x60;1&#x60; - public * &#x60;2&#x60; - internal * &#x60;3&#x60; - confidential * &#x60;4&#x60; - strictly confidential  Provided (or default) classification is taken from room when file gets uploaded without any classification. (default: &#x60;2&#x60; - internal) | [optional] 
**has_recycle_bin** | **bool** | &#x60;DEPRECATED&#x60;: Is recycle bin active (for rooms only) Recycle bin is always on (disabling is not possible). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


