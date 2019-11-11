# RadiusConfigUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ip_address** | **string** | RADIUS Server IP Address | [optional] 
**port** | **int** | RADIUS Server Port | [optional] 
**shared_secret** | **string** | Shared Secret to access the RADIUS server | [optional] 
**otp_pin_first** | **bool** | Sequence order of concatenated PIN and one-time token (default: &#x60;true&#x60;) | [optional] 
**failover_server** | [**\Swagger\Client\Model\FailoverServer**](FailoverServer.md) | RADIUS Failover Server | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


