# CopyNodesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items** | [**\Swagger\Client\Model\CopyNode[]**](CopyNode.md) | List of nodes to be copied | [optional] 
**resolution_strategy** | **string** | Node conflict resolution strategy: * &#x60;autorename&#x60; * &#x60;overwrite&#x60; * &#x60;fail&#x60;  (default: &#x60;autorename&#x60;) | [optional] 
**keep_share_links** | **bool** | Preserve Download Share Links and point them to the new node. (default: &#x60;false&#x60;) | [optional] 
**node_ids** | **int[]** | &#x60;DEPRECATED&#x60;: Node IDs Please use &#x60;items&#x60; instead. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


