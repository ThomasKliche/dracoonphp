# ActiveDirectoryConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID | 
**alias** | **string** | Unique name for an Active Directory configuration | 
**server_ip** | **string** | IPv4 or IPv6 address or host name | 
**server_port** | **int** | Port | 
**server_admin_name** | **string** | Distinguished Name (DN) of Active Directory administrative account | 
**ldap_users_domain** | **string** | Search scope of Active Directory; only users below this node can log on. | 
**user_filter** | **string** | Name of Active Directory attribute that is used as login name. | 
**user_import** | **bool** | Determines if a DRACOON account is automatically created for a new user who successfully logs on with his / her AD / IDP account. | 
**ad_export_group** | **string** | If &#x60;userImport&#x60; is set to &#x60;true&#x60;, the user must be member of this Active Directory group to receive a newly created DRACOON account. | 
**use_ldaps** | **bool** | Determines whether LDAPS should be used instead of plain LDAP. | 
**sds_import_group** | **int** | User group that is assigned to users who are created by automatic import. Reset with &#x60;0&#x60; | [optional] 
**ssl_finger_print** | **string** | SSL finger print of Active Directory server. Mandatory for LDAPS connections. Format: &#x60;Algorithm/Fingerprint&#x60; | [optional] 
**home_folder_parent** | **int** | DEPRECATED, will be ignored ID of the room in which the individual rooms for users will be created.  [Deprecated since version 4.10.2] | [optional] 
**create_home_folder** | **bool** | DEPRECATED, will be ignored Determines whether a room is created for each user that is created by automatic import (like a home folder). Room&#39;s name will equal the user&#39;s login name. (default: &#x60;false&#x60;)  [Deprecated since version 4.10.2] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

