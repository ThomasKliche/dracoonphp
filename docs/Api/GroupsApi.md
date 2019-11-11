# Swagger\Client\GroupsApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGroupMembers**](GroupsApi.md#addGroupMembers) | **POST** /v4/groups/{group_id}/users | Add group members
[**createGroup**](GroupsApi.md#createGroup) | **POST** /v4/groups | Create new user group
[**deleteGroup**](GroupsApi.md#deleteGroup) | **DELETE** /v4/groups/{group_id} | Delete user group
[**deleteGroupMembers**](GroupsApi.md#deleteGroupMembers) | **DELETE** /v4/groups/{group_id}/users | Remove group members
[**getGroup**](GroupsApi.md#getGroup) | **GET** /v4/groups/{group_id} | Get user group
[**getGroupRoles**](GroupsApi.md#getGroupRoles) | **GET** /v4/groups/{group_id}/roles | Get list of roles assigned to the group
[**getGroupRooms**](GroupsApi.md#getGroupRooms) | **GET** /v4/groups/{group_id}/rooms | Get rooms granted to the group or / and rooms that can be granted
[**getGroupUsers**](GroupsApi.md#getGroupUsers) | **GET** /v4/groups/{group_id}/users | Get group member users or / and users who can become a member
[**getGroups**](GroupsApi.md#getGroups) | **GET** /v4/groups | Get list of user groups
[**getLastAdminRoomsGroups**](GroupsApi.md#getLastAdminRoomsGroups) | **GET** /v4/groups/{group_id}/last_admin_rooms | Get rooms where the group is defined as last admin group
[**updateGroup**](GroupsApi.md#updateGroup) | **PUT** /v4/groups/{group_id} | Update user group&#39;s metadata


# **addGroupMembers**
> \Swagger\Client\Model\Group addGroupMembers($body, $group_id, $x_sds_auth_token, $x_sds_date_format)

Add group members

### Functional Description: Add members to a group.  ### Precondition: Right _\"change groups\"_ required.  ### Effects: New members are added to the group.  ### &#9432; Further Information: Batch function.   The newly provided members will be added to the existing ones.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ChangeGroupMembersRequest(); // \Swagger\Client\Model\ChangeGroupMembersRequest | body
$group_id = 789; // int | Group ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->addGroupMembers($body, $group_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->addGroupMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ChangeGroupMembersRequest**](../Model/ChangeGroupMembersRequest.md)| body |
 **group_id** | **int**| Group ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGroup**
> \Swagger\Client\Model\Group createGroup($body, $x_sds_auth_token, $x_sds_date_format)

Create new user group

### Functional Description: Create a new user group.  ### Precondition: Right _\"change groups\"_ required.  ### Effects: A new group is created.  ### &#9432; Further Information: * If a group should **NOT** expire, leave `expireAt` empty. * Group names are limited to **150** characters * **All** characters are allowed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateGroupRequest(); // \Swagger\Client\Model\CreateGroupRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->createGroup($body, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateGroupRequest**](../Model/CreateGroupRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroup**
> deleteGroup($group_id, $x_sds_auth_token)

Delete user group

### Functional Description: Delete a user group.  ### Precondition: Right _\"delete groups\"_ required.  ### Effects: User group is deleted.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 789; // int | Group ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteGroup($group_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroupMembers**
> \Swagger\Client\Model\Group deleteGroupMembers($body, $group_id, $x_sds_auth_token, $x_sds_date_format)

Remove group members

### Functional Description:   Remove group members.  ### Precondition: Right _\"change groups\"_ required.  ### Effects: Provided users are removed from the user group.  ### &#9432; Further Information: Batch function.   The provided users are removed from the user group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ChangeGroupMembersRequest(); // \Swagger\Client\Model\ChangeGroupMembersRequest | body
$group_id = 789; // int | Group ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->deleteGroupMembers($body, $group_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteGroupMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ChangeGroupMembersRequest**](../Model/ChangeGroupMembersRequest.md)| body |
 **group_id** | **int**| Group ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroup**
> \Swagger\Client\Model\Group getGroup($group_id, $x_sds_auth_token, $x_sds_date_format)

Get user group

### Functional Description:   Retrieve detailed information about a user group.  ### Precondition: Right _\"read groups\"_ required.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 789; // int | Group ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->getGroup($group_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupRoles**
> \Swagger\Client\Model\RoleList getGroupRoles($group_id, $x_sds_auth_token)

Get list of roles assigned to the group

### Functional Description:   Retrieve a list of all roles granted to a group.  ### Precondition: Right _\"read groups\"_ required.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 789; // int | Group ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getGroupRoles($group_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\RoleList**](../Model/RoleList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupRooms**
> \Swagger\Client\Model\RoomTreeDataList getGroupRooms($group_id, $x_sds_auth_token, $x_sds_date_format, $filter, $limit, $offset)

Get rooms granted to the group or / and rooms that can be granted

## &#9888; Deprecated since version 4.10.0  ### Functional Description:   Retrieves a list of rooms granted to the group and / or that can be granted.  ### Precondition: Right _\"read groups\"_ required.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE`   Example: > `isGranted:eq:false|name:cn:searchString`   Get all rooms where the group is **NOT** granted **AND** whose name is like `searchString`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`name`** | Room name filter | `cn` | Room name contains value. | `search String` | | **`isGranted`** | Filter rooms which the group is (not) granted | `eq` |  | <ul><li>`true`</li><li>`false`</li><li>`any`</li></ul>default: `true` | | **`effectivePerm`** | Filter rooms with DIRECT or DIRECT **AND** EFFECTIVE permissions<ul><li>`false`: DIRECT permissions</li><li>`true`:  DIRECT **AND** EFFECTIVE permissions</li></ul>DIRECT means: e.g. room administrator grants `read` permissions to group of users **directly** on desired room.<br>EFFECTIVE means: e.g. group of users gets `read` permissions on desired room through **inheritance**. | `eq` |  | `true or false`<br>default: `true` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 789; // int | Group ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$filter = "filter_example"; // string | Filter string
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset

try {
    $result = $apiInstance->getGroupRooms($group_id, $x_sds_auth_token, $x_sds_date_format, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupRooms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **filter** | **string**| Filter string | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]

### Return type

[**\Swagger\Client\Model\RoomTreeDataList**](../Model/RoomTreeDataList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupUsers**
> \Swagger\Client\Model\GroupUserList getGroupUsers($group_id, $x_sds_auth_token, $filter, $limit, $offset)

Get group member users or / and users who can become a member

### Functional Description:   Retrieve a list of group member users or / and users who can become a member.  ### Precondition: Right _\"read groups\"_ required.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE`   Example: > `isMember:eq:false|user:cn:searchString`   Get all users that are **NOT** in this group **AND** whose (`firstName` **OR** `lastName` **OR** `email` **OR** `username`) is like `searchString`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`user`** | User filter | `cn` | User contains value (`firstName` **OR** `lastName` **OR** `email` **OR** `username`). | `search String` | | **`isMember`** | Filter group members | `eq` |  | <ul><li>`true`</li><li>`false`</li><li>`any`</li></ul>default: `true` | | **`displayName`** | (**`DEPRECATED`**) User display name filter (use **`user`** filter) | `cn` | User display name contains value (`firstName` **OR** `lastName` **OR** `email`). | `search String` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 789; // int | Group ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$filter = "filter_example"; // string | Filter string
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset

try {
    $result = $apiInstance->getGroupUsers($group_id, $x_sds_auth_token, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **filter** | **string**| Filter string | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]

### Return type

[**\Swagger\Client\Model\GroupUserList**](../Model/GroupUserList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroups**
> \Swagger\Client\Model\GroupList getGroups($x_sds_auth_token, $x_sds_date_format, $filter, $limit, $offset, $sort)

Get list of user groups

### Functional Description:   Returns a list of user groups.  ### Precondition: Right _\"read groups\"_ required.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE`   Example: > `name:cn:searchString`   Filter by group name containing `searchString`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`name`** | Group name filter | `cn` | Group name contains value. | `search String` |  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are supported.   Example: > `name:asc|expireAt:desc`   Sort by `name` ascending **AND** by `expireAt` descending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`name`** | Group name | | **`createdAt`** | Creation date | | **`expireAt`** | Expiration date | | **`cntUsers`** | Amount of users |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$filter = "filter_example"; // string | Filter string
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset
$sort = "sort_example"; // string | Sort string

try {
    $result = $apiInstance->getGroups($x_sds_auth_token, $x_sds_date_format, $filter, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **filter** | **string**| Filter string | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]
 **sort** | **string**| Sort string | [optional]

### Return type

[**\Swagger\Client\Model\GroupList**](../Model/GroupList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLastAdminRoomsGroups**
> \Swagger\Client\Model\LastAdminGroupRoomList getLastAdminRoomsGroups($group_id, $x_sds_auth_token)

Get rooms where the group is defined as last admin group

### &#128640; Since version 4.10.2  ### Functional Description:   Retrieve a list of all rooms where the group is defined as last admin group.  ### Precondition: Right _\"change groups\"_ required.  ### Effects: List of rooms is returned.   ### &#9432; Further Information: An empty list is returned if no rooms were found where the group is defined as last admin group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 789; // int | Group ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getLastAdminRoomsGroups($group_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getLastAdminRoomsGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\LastAdminGroupRoomList**](../Model/LastAdminGroupRoomList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroup**
> \Swagger\Client\Model\Group updateGroup($body, $group_id, $x_sds_auth_token, $x_sds_date_format)

Update user group's metadata

### Functional Description:   Update user group's metadata .  ### Precondition: Right _\"change groups\"_ required.  ### Effects: User group's metadata is changed.  ### &#9432; Further Information: * If a group should **NOT** expire, leave `expireAt` empty. * Group names are limited to **150** characters * **All** characters are allowed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateGroupRequest(); // \Swagger\Client\Model\UpdateGroupRequest | body
$group_id = 789; // int | Group ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->updateGroup($body, $group_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateGroupRequest**](../Model/UpdateGroupRequest.md)| body |
 **group_id** | **int**| Group ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

