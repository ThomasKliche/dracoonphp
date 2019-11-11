# Swagger\Client\UsersApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUser**](UsersApi.md#createUser) | **POST** /v4/users | Create new user
[**deleteUser**](UsersApi.md#deleteUser) | **DELETE** /v4/users/{user_id} | Delete user
[**deleteUserAttributes**](UsersApi.md#deleteUserAttributes) | **DELETE** /v4/users/{user_id}/userAttributes/{key} | Delete custom user attribute
[**getLastAdminRoomsUsers**](UsersApi.md#getLastAdminRoomsUsers) | **GET** /v4/users/{user_id}/last_admin_rooms | Get rooms where the user is last admin
[**getUser**](UsersApi.md#getUser) | **GET** /v4/users/{user_id} | Get user
[**getUserAttributes**](UsersApi.md#getUserAttributes) | **GET** /v4/users/{user_id}/userAttributes | Get custom user attributes
[**getUserGroups**](UsersApi.md#getUserGroups) | **GET** /v4/users/{user_id}/groups | Get groups that user is a member of or / and can become a member
[**getUserRoles**](UsersApi.md#getUserRoles) | **GET** /v4/users/{user_id}/roles | Get user&#39;s granted roles
[**getUsers**](UsersApi.md#getUsers) | **GET** /v4/users | Get users
[**getUsersRooms**](UsersApi.md#getUsersRooms) | **GET** /v4/users/{user_id}/rooms | Get rooms granted to the user or / and rooms that can be granted
[**setAllUserAttributes**](UsersApi.md#setAllUserAttributes) | **POST** /v4/users/{user_id}/userAttributes | Set custom user attributes
[**setUserAttributes**](UsersApi.md#setUserAttributes) | **PUT** /v4/users/{user_id}/userAttributes | Add or edit custom user attributes
[**updateUser**](UsersApi.md#updateUser) | **PUT** /v4/users/{user_id} | Update user&#39;s metadata


# **createUser**
> \Swagger\Client\Model\UserData createUser($body, $x_sds_auth_token, $x_sds_date_format)

Create new user

### Functional Description: Create a new user.  ### Precondition: Right _\"change users\"_ required.  ### Effects: A new user is created.  ### &#9432; Further Information: * If a user should **NOT** expire, leave `expireAt` empty. * All input fields are limited to **150** characters * **All** characters are allowed.  ### Authentication Method Options  | Authentication Method | Option Key | Option Value | | :--- | :--- | :--- | | **`basic`** / **`sql`** | `username` | Unique user identifier | | **`active_directory`** | `ad_config_id` (optional) | Active Directory configuration ID | |  | `username` | Active Directory username according to authentication setting `userFilter` | | **`radius`** | `username` | RADIUS username | | **`openid`** | `openid_config_id` (optional) | OpenID Connect configuration ID | |  | `username` | OpenID Connect username according to authentication setting `mappingClaim` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateUserRequest(); // \Swagger\Client\Model\CreateUserRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->createUser($body, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateUserRequest**](../Model/CreateUserRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\UserData**](../Model/UserData.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUser**
> deleteUser($user_id, $x_sds_auth_token)

Delete user

### Functional Description: Delete a user.  ### Precondition: Right _\"delete users\"_ required.  ### Effects: User is deleted.  ### &#9432; Further Information: User **CANNOT** be deleted if he is a last room administrator of any room.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | User ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteUser($user_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserAttributes**
> deleteUserAttributes($key, $user_id, $x_sds_auth_token)

Delete custom user attribute

### Functional Description: Delete custom user attribute.  ### Precondition: Right _\"change users\"_ required.  ### Effects: Custom user attribute gets deleted.  ### &#9432; Further Information: * Allowed characters for keys are: `[a-zA-Z0-9_-]`   * Characters are **case-insensitive**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | Key
$user_id = 789; // int | User ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteUserAttributes($key, $user_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUserAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Key |
 **user_id** | **int**| User ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLastAdminRoomsUsers**
> \Swagger\Client\Model\LastAdminUserRoomList getLastAdminRoomsUsers($user_id, $x_sds_auth_token)

Get rooms where the user is last admin

### &#128640; Since version 4.10.2  ### Functional Description:   Retrieve a list of all rooms where the user is last admin (except homeroom and its subordinary rooms).  ### Precondition: Right _\"change users\"_ required.  ### Effects: List of rooms is returned.   ### &#9432; Further Information: An empty list is returned if no rooms were found where the user is last admin.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | User ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getLastAdminRoomsUsers($user_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getLastAdminRoomsUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\LastAdminUserRoomList**](../Model/LastAdminUserRoomList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \Swagger\Client\Model\UserData getUser($user_id, $x_sds_auth_token, $x_sds_date_format, $effective_roles)

Get user

### Functional Description:   Retrieve detailed information about a single user.  ### Precondition: Right _\"read users\"_ required.  ### Effects: None.  ### &#9432; Further Information: None.  ### Authentication Method Options  | Authentication Method | Option Key | Option Value | | :--- | :--- | :--- | | **`basic`** / **`sql`** | `username` | Unique user identifier | | **`active_directory`** | `ad_config_id` (optional) | Active Directory configuration ID | |  | `username` | Active Directory username according to authentication setting `userFilter` | | **`radius`** | `username` | RADIUS username | | **`openid`** | `openid_config_id` (optional) | OpenID Connect configuration ID | |  | `username` | OpenID Connect username according to authentication setting `mappingClaim` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | User ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$effective_roles = true; // bool | Filter users with DIRECT or DIRECT **AND** EFFECTIVE roles. * `false`: DIRECT roles * `true`: DIRECT **AND** EFFECTIVE roles  DIRECT means: e.g. user gets role **directly** granted from someone with _grant permission_ right. EFFECTIVE means: e.g. user gets role through **group membership**.

try {
    $result = $apiInstance->getUser($user_id, $x_sds_auth_token, $x_sds_date_format, $effective_roles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **effective_roles** | **bool**| Filter users with DIRECT or DIRECT **AND** EFFECTIVE roles. * &#x60;false&#x60;: DIRECT roles * &#x60;true&#x60;: DIRECT **AND** EFFECTIVE roles  DIRECT means: e.g. user gets role **directly** granted from someone with _grant permission_ right. EFFECTIVE means: e.g. user gets role through **group membership**. | [optional]

### Return type

[**\Swagger\Client\Model\UserData**](../Model/UserData.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserAttributes**
> \Swagger\Client\Model\AttributesResponse getUserAttributes($user_id, $x_sds_auth_token, $filter, $limit, $offset, $sort)

Get custom user attributes

### &#128640; Since version 4.12.0  ### Functional Description:   Retrieve a list of user attributes.  ### Precondition: None.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE[:VALUE...]`   Example: > `key:cn:searchString_1|value:cn:searchString_2`   Filter by attribute key contains `searchString_1` **AND** attribute value contains `searchString_2`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`key`** | User attribute key filter | `cn, eq, sw` | Attribute key contains / equals / starts with value. | `search String` | | **`value`** | User attribute value filter | `cn, eq, sw` | Attribute value contains / equals / starts with value. | `search String` |  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are supported.   Example: > `key:asc|value:desc`   Sort by `key` ascending **AND** by `value` descending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`key`** | User attribute key | | **`value`** | User attribute value |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | User ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$filter = "filter_example"; // string | Filter string
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset
$sort = "sort_example"; // string | Sort string

try {
    $result = $apiInstance->getUserAttributes($user_id, $x_sds_auth_token, $filter, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **filter** | **string**| Filter string | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]
 **sort** | **string**| Sort string | [optional]

### Return type

[**\Swagger\Client\Model\AttributesResponse**](../Model/AttributesResponse.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserGroups**
> \Swagger\Client\Model\UserGroupList getUserGroups($user_id, $x_sds_auth_token, $filter, $limit, $offset)

Get groups that user is a member of or / and can become a member

### Functional Description:   Retrieves a list of groups a user is member of and / or can become a member.  ### Precondition: Right _\"read users\"_ required.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE`   Example: > `isMember:eq:false|name:cn:searchString`   Get all groups that the user is **NOT** member of **AND** whose name is like `searchString`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`name`** | Group name filter | `cn` | Group name contains value. | `search String` | | **`isMember`** | Filter the groups which the user is (not) member of | `eq` |  | <ul><li>`true`</li><li>`false`</li><li>`any`</li></ul>default: `true` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | User ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$filter = "filter_example"; // string | Filter string
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset

try {
    $result = $apiInstance->getUserGroups($user_id, $x_sds_auth_token, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **filter** | **string**| Filter string | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]

### Return type

[**\Swagger\Client\Model\UserGroupList**](../Model/UserGroupList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserRoles**
> \Swagger\Client\Model\RoleList getUserRoles($user_id, $x_sds_auth_token)

Get user's granted roles

### Functional Description:   Retrieve a list of all roles granted to a user.  ### Precondition: Right _\"read users\"_ required.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | User ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getUserRoles($user_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\RoleList**](../Model/RoleList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \Swagger\Client\Model\UserList getUsers($x_sds_auth_token, $x_sds_date_format, $filter, $include_attributes, $limit, $offset, $sort)

Get users

### Functional Description:   Returns a list of DRACOON users.  ### Precondition: Right _\"read users\"_ required.  ### Effects: None.  ### &#9432; Further Information:   None.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) ### &#9888; Except for **`login`**, **`firstName`** and  **`lastName`** - these are connected via logical disjunction (**OR**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE[:VALUE...]`    ### Example: > `login:cn:searchString_1|firstName:cn:searchString_2|lockStatus:eq:2`   Filter users by login contains `searchString_1` **OR** firstName contains `searchString_2` **AND** those who are **NOT** locked.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`email`** | Email filter | `eq`, `cn` | Email contains value. | `search String` | | **`userName`** | User name filter | `eq`, `cn` | UserName contains value. | `search String` | | **`firstName`** | User first name filter | `cn` | User first name contains value. | `search String` | | **`lastName`** | User last name filter | `cn` | User last name contains value. | `search String` | | **`isLocked`** | User lock status filter | `eq` |  | `true or false` | | **`effectiveRoles`** | Filter users with DIRECT or DIRECT **AND** EFFECTIVE roles<ul><li>`false`: DIRECT roles</li><li>`true`: DIRECT **AND** EFFECTIVE roles</li></ul>DIRECT means: e.g. user gets role **directly** granted from someone with _grant permission_ right.<br>EFFECTIVE means: e.g. user gets role through **group membership**. | `eq` |  | `true or false`<br>default: `false` | | **`createdAt`** | Creation date filter (**`NEW`**) | `ge, le` | Creation date is greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `createdAt:ge:2016-12-31`&#124;`createdAt:le:2018-01-01` | `Date (yyyy-MM-dd)` | | **`phone`** | Phone filter (**`NEW`**) | `eq` | Phone equals value. | `search String` | | **`isEncryptionEnabled`** | Encryption status filter (**`NEW`**)<ul><li>client-side encryption</li><li>private key possession</li></ul> | `eq` |  | `true or false` | | **`hasRole`** | User role filter (**`NEW`**)<br>Depends on **effectiveRoles**.<br>For more Roles information please call **`GET /roles API`** | `eq` | User role  equals value. | <ul><li>`CONFIG_MANAGER` - Manage global configs</li><li>`USER_MANAGER` - Manage Users</li><li>`GROUP_MANAGER` - Manage User-Groups</li><li>`ROOM_MANAGER` - Manage top level Data Rooms</li><li>`LOG_AUDITOR` - Read logs</li><li>`NONMEMBER_VIEWER` - View users and groups when having room manage permission</li></ul> | | **`lockStatus`** | (**`DEPRECATED`**) User lock status filter | `eq` | User lock status equals value. | <ul><li>`0` - Locked</li><li>`1` - Web access allowed</li><li>`2` - Web and mobile access allowed</li></ul> | | **`login`** | (**`DEPRECATED`**) User login filter | `cn` | User login contains value. | `search String` |  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are supported. ### Example: > `firstName:asc|lastLoginSuccessAt:desc`   Sort by `firstName` ascending **AND** by `lastLoginSuccessAt` descending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`userName`** | User name | | **`email`** | User email | | **`firstName`** | User first name | | **`lastName`** | User last name | | **`isLocked`** | User lock status | | **`lastLoginSuccessAt`** | Last successful login date | | **`expireAt`** | Expiration date | | **`createdAt`** | Creation date (**`NEW`**) | | **`gender`** | (**`DEPRECATED`**) Gender | | **`lockStatus`** | (**`DEPRECATED`**) User lock status | | **`login`** | (**`DEPRECATED`**) User login |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$filter = "filter_example"; // string | Filter string
$include_attributes = true; // bool | Include custom user attributes.
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset
$sort = "sort_example"; // string | Sort string

try {
    $result = $apiInstance->getUsers($x_sds_auth_token, $x_sds_date_format, $filter, $include_attributes, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **filter** | **string**| Filter string | [optional]
 **include_attributes** | **bool**| Include custom user attributes. | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]
 **sort** | **string**| Sort string | [optional]

### Return type

[**\Swagger\Client\Model\UserList**](../Model/UserList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersRooms**
> \Swagger\Client\Model\RoomTreeDataList getUsersRooms($user_id, $x_sds_auth_token, $x_sds_date_format, $filter, $limit, $offset)

Get rooms granted to the user or / and rooms that can be granted

## &#9888; Deprecated since version 4.10.0  ### Functional Description:   Retrieves a list of rooms granted to the user and / or that can be granted.  ### Precondition: Right _\"read users\"_ required.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE`   Example: > `isGranted:eq:true|isLastAdmin:eq:true|name:cn:searchString`   Get all rooms that the user is granted **AND** is last admin **AND** whose name is like `searchString`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`name`** | Room name filter | `cn` | Room name contains value. | `search String` | | **`isGranted`** | Filter the rooms which the user is (not) granted. | `eq` |  | <ul><li>`true`</li><li>`false`</li><li>`any`</li></ul>default: `true` | | **`isLastAdmin`** | Filter the rooms which the user is last room administrator.<br>Only in connection with `isGranted:eq:true` filter possible. | `eq` |  | `true` | | **`effectivePerm`** | Filter rooms with DIRECT or DIRECT **AND** EFFECTIVE permissions<ul><li>`false`: DIRECT permissions</li><li>`true`: DIRECT **AND** EFFECTIVE permissions</li><li>`any`: DIRECT **AND** EFFECTIVE **AND** OVER GROUP permissions</li></ul>DIRECT means: e.g. room administrator grants `read` permissions to group of users **directly** on desired room.<br>EFFECTIVE means: e.g. group of users gets `read` permissions on desired room through **inheritance**.<br>OVER GROUP means: e.g. user gets `read` permissions on desired room through **group membership**. | `eq` |  | <ul><li>`true`</li><li>`false`</li><li>`any`</li></ul>default: `false` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | User ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$filter = "filter_example"; // string | Filter string
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset

try {
    $result = $apiInstance->getUsersRooms($user_id, $x_sds_auth_token, $x_sds_date_format, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsersRooms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User ID |
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

# **setAllUserAttributes**
> \Swagger\Client\Model\UserData setAllUserAttributes($body, $user_id, $x_sds_auth_token, $x_sds_date_format)

Set custom user attributes

### Functional Description:   Set custom user attributes.  ### Precondition: Right _\"change users\"_ required.  ### Effects: Custom user attributes gets set.  ### &#9432; Further Information: Batch function.   All existing user attributes will be deleted.     * Allowed characters for keys are: `[a-zA-Z0-9_-]`   * Characters are **case-insensitive**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UserAttributes(); // \Swagger\Client\Model\UserAttributes | body
$user_id = 789; // int | User ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->setAllUserAttributes($body, $user_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->setAllUserAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UserAttributes**](../Model/UserAttributes.md)| body |
 **user_id** | **int**| User ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\UserData**](../Model/UserData.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserAttributes**
> \Swagger\Client\Model\UserData setUserAttributes($body, $user_id, $x_sds_auth_token, $x_sds_date_format)

Add or edit custom user attributes

### Functional Description:   Set custom user attributes.  ### Precondition: Right _\"change users\"_ required.  ### Effects: Custom user attributes gets added or edited.  ### &#9432; Further Information: Batch function.   If an entry exists before, it will be overwritten.     * Allowed characters for keys are: `[a-zA-Z0-9_-]`   * Characters are **case-insensitive**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UserAttributes(); // \Swagger\Client\Model\UserAttributes | body
$user_id = 789; // int | User ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->setUserAttributes($body, $user_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->setUserAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UserAttributes**](../Model/UserAttributes.md)| body |
 **user_id** | **int**| User ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\UserData**](../Model/UserData.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUser**
> \Swagger\Client\Model\UserData updateUser($body, $user_id, $x_sds_auth_token, $x_sds_date_format)

Update user's metadata

### Functional Description:   Update user's metadata.  ### Precondition: Right _\"change users\"_ required.  ### Effects: User's metadata is updated.  ### &#9432; Further Information: * If a user should **NOT** expire, leave `expireAt` empty. * All input fields are limited to **150** characters * **All** characters are allowed.  ### Authentication Method Options  | Authentication Method | Option Key | Option Value | | :--- | :--- | :--- | | **`basic`** / **`sql`** | `username` | Unique user identifier | | **`active_directory`** | `ad_config_id` (optional) | Active Directory configuration ID | |  | `username` | Active Directory username according to authentication setting `userFilter` | | **`radius`** | `username` | RADIUS username | | **`openid`** | `openid_config_id` (optional) | OpenID Connect configuration ID | |  | `username` | OpenID Connect username according to authentication setting `mappingClaim` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateUserRequest(); // \Swagger\Client\Model\UpdateUserRequest | body
$user_id = 789; // int | User ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->updateUser($body, $user_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateUserRequest**](../Model/UpdateUserRequest.md)| body |
 **user_id** | **int**| User ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\UserData**](../Model/UserData.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

