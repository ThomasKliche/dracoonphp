# RestoreDeletedNodesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deleted_node_ids** | **int[]** | List of deleted node IDs | 
**resolution_strategy** | **string** | Node conflict resolution strategy: * &#x60;autorename&#x60; * &#x60;overwrite&#x60; * &#x60;fail&#x60;  (default: &#x60;autorename&#x60;) | [optional] 
**keep_share_links** | **bool** | Preserve Download Share Links and point them to the new node. (default: &#x60;false&#x60;) | [optional] 
**parent_id** | **int** | Node parent ID (default: previous parent ID) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


