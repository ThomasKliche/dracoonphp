# Swagger\Client\RolesApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addRoleGroups**](RolesApi.md#addRoleGroups) | **POST** /v4/roles/{role_id}/groups | Assign group(s) to the role
[**addRoleUsers**](RolesApi.md#addRoleUsers) | **POST** /v4/roles/{role_id}/users | Assign user(s) to the role
[**deleteRoleGroups**](RolesApi.md#deleteRoleGroups) | **DELETE** /v4/roles/{role_id}/groups | Revoke granted role from group(s)
[**deleteRoleUsers**](RolesApi.md#deleteRoleUsers) | **DELETE** /v4/roles/{role_id}/users | Revoke granted role from user(s)
[**getRoleGroups**](RolesApi.md#getRoleGroups) | **GET** /v4/roles/{role_id}/groups | Get groups with specific role
[**getRoleUsers**](RolesApi.md#getRoleUsers) | **GET** /v4/roles/{role_id}/users | Get users with specific role
[**getRoles**](RolesApi.md#getRoles) | **GET** /v4/roles | Get all roles with assigned rights


# **addRoleGroups**
> \Swagger\Client\Model\RoleGroupList addRoleGroups($body, $role_id, $x_sds_auth_token)

Assign group(s) to the role

### Functional Description: Assign group(s) to a role.  ### Precondition: Right _\"grant permission on desired role\"_ required.  ### Effects: One or more groups will be added to a role.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\GroupIds(); // \Swagger\Client\Model\GroupIds | Group IDs
$role_id = 56; // int | Role ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->addRoleGroups($body, $role_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->addRoleGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GroupIds**](../Model/GroupIds.md)| Group IDs |
 **role_id** | **int**| Role ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\RoleGroupList**](../Model/RoleGroupList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRoleUsers**
> \Swagger\Client\Model\RoleUserList addRoleUsers($body, $role_id, $x_sds_auth_token)

Assign user(s) to the role

### Functional Description: Assign user(s) to a role.  ### Precondition: Right _\"grant permission on desired role\"_ required.  ### Effects: One or more users will be added to a role.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UserIds(); // \Swagger\Client\Model\UserIds | User IDs
$role_id = 56; // int | Role ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->addRoleUsers($body, $role_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->addRoleUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UserIds**](../Model/UserIds.md)| User IDs |
 **role_id** | **int**| Role ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\RoleUserList**](../Model/RoleUserList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoleGroups**
> \Swagger\Client\Model\RoleGroupList deleteRoleGroups($body, $role_id, $x_sds_auth_token)

Revoke granted role from group(s)

### Functional Description:   Revoke granted group(s) from a role.  ### Precondition: Right _\"grant permission on desired role\"_ required.   For each role, at least one non-expiring user **MUST** remain who may grant the role.  ### Effects: One or more groups will be removed from a role.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\GroupIds(); // \Swagger\Client\Model\GroupIds | Group IDs
$role_id = 56; // int | Role ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->deleteRoleGroups($body, $role_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->deleteRoleGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GroupIds**](../Model/GroupIds.md)| Group IDs |
 **role_id** | **int**| Role ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\RoleGroupList**](../Model/RoleGroupList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoleUsers**
> \Swagger\Client\Model\RoleUserList deleteRoleUsers($body, $role_id, $x_sds_auth_token)

Revoke granted role from user(s)

### Functional Description:   Revoke granted user(s) from a role.  ### Precondition: Right _\"grant permission on desired role\"_ required.   For each role, at least one non-expiring user **MUST** remain who may grant the role.  ### Effects: One or more users will be removed from a role.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UserIds(); // \Swagger\Client\Model\UserIds | User IDs
$role_id = 56; // int | Role ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->deleteRoleUsers($body, $role_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->deleteRoleUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UserIds**](../Model/UserIds.md)| User IDs |
 **role_id** | **int**| Role ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\RoleUserList**](../Model/RoleUserList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoleGroups**
> \Swagger\Client\Model\RoleGroupList getRoleGroups($role_id, $x_sds_auth_token, $filter, $limit, $offset)

Get groups with specific role

### Functional Description:   Get all groups with a specific role.  ### Precondition: Right _\"read groups\"_ required.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE`   Example: > `isMember:eq:false|name:cn:searchString`   Get all groups that are **NOT** a member of that role **AND** whose name contains `searchString`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`isMember`** | Filter the groups which are (not) member of that role | `eq` |  | <ul><li>`true`</li><li>`false`</li><li>`any`</li></ul>default: `true` | | **`name`** | Group name filter | `cn` | Group name contains value. | `search String` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 56; // int | Role ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$filter = "filter_example"; // string | Filter string
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset

try {
    $result = $apiInstance->getRoleGroups($role_id, $x_sds_auth_token, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getRoleGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| Role ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **filter** | **string**| Filter string | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]

### Return type

[**\Swagger\Client\Model\RoleGroupList**](../Model/RoleGroupList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoleUsers**
> \Swagger\Client\Model\RoleUserList getRoleUsers($role_id, $x_sds_auth_token, $filter, $limit, $offset)

Get users with specific role

### Functional Description:   Get all users with a specific role.  ### Precondition: Right _\"read users\"_ required.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE`   Example: > `isMember:eq:false|user:cn:searchString`   Get all users that are **NOT** member of that role **AND** whose (`firstName` **OR** `lastName` **OR** `email` **OR** `username`) is like `searchString`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`user`** | User filter | `cn` | User contains value (`firstName` **OR** `lastName` **OR** `email` **OR** `username`). | `search String` | | **`isMember`** | Filter the users which are (not) member of that role | `eq` |  | <ul><li>`true`</li><li>`false`</li><li>`any`</li></ul>default: `true` | | **`displayName`** | (**`DEPRECATED`**) User display name filter (use **`user`** filter) | `cn` | User display name contains value (`firstName` **OR** `lastName` **OR** `email`). | `search String` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 56; // int | Role ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$filter = "filter_example"; // string | Filter string
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset

try {
    $result = $apiInstance->getRoleUsers($role_id, $x_sds_auth_token, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getRoleUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| Role ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **filter** | **string**| Filter string | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]

### Return type

[**\Swagger\Client\Model\RoleUserList**](../Model/RoleUserList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoles**
> \Swagger\Client\Model\RoleList getRoles($x_sds_auth_token)

Get all roles with assigned rights

### Functional Description:   Retrieve a list of all roles with assigned rights.  ### Precondition: Right _\"read users\"_ required.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getRoles($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\RoleList**](../Model/RoleList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

