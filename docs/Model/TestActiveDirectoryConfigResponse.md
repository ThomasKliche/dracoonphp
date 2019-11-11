# TestActiveDirectoryConfigResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**server_ip** | **string** | IPv4 or IPv6 address or host name | 
**server_port** | **int** | Port | 
**server_admin_name** | **string** | Distinguished Name (DN) of Active Directory administrative account | 
**server_admin_password** | **string** | Password of Active Directory administrative account | 
**ldap_users_domain** | **string** | Search scope of Active Directory; only users below this node can log on. | 
**use_ldaps** | **bool** | Determines whether LDAPS should be used instead of plain LDAP. | 
**ssl_finger_print** | **string** | SSL finger print of Active Directory server. Mandatory for LDAPS connections. Format: &#x60;Algorithm/Fingerprint&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


