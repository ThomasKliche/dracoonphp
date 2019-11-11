# Swagger\Client\EventlogApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAuditNodeUserData**](EventlogApi.md#getAuditNodeUserData) | **GET** /v4/eventlog/audits/nodes | Get node assigned users with permissions
[**getLogEvents**](EventlogApi.md#getLogEvents) | **GET** /v4/eventlog/events | Get system events
[**getLogOperations**](EventlogApi.md#getLogOperations) | **GET** /v4/eventlog/operations | Get allowed Log Operations


# **getAuditNodeUserData**
> \Swagger\Client\Model\AuditNodeResponse[] getAuditNodeUserData($x_sds_auth_token, $x_sds_date_format, $filter, $limit, $offset, $sort)

Get node assigned users with permissions

### &#128640; Since version 4.3.0  ### Functional Description:   Retrieve a list of all nodes of type `room`, and the room assignment users with permissions.  ### Precondition: Right _\"read audit log\"_ required.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) ### &#9888; Except for **`userName`**, **`userFirstName`** and  **`userLastName`** - these are connected via logical disjunction (**OR**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE[:VALUE...]`    Example: > `userName:cn:searchString_1|userFirstName:cn:searchString_2|nodeId:eq:2`   Filter by user login containing `searchString_1` **OR** first name containing `searchString_2` **AND** node ID equals `2`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`nodeId`** | Node ID filter | `eq` | Node ID equals value. | `positive Integer` | | **`nodeName`** | Node name filter | `cn, eq` | Node name contains / equals value. | `search String` | | **`nodeParentId`** | Node parent ID filter | `eq` | Parent ID equals value. | `positive Integer`<br>Parent ID `0` is the root node. | | **`userId`** | User ID filter | `eq` | User ID equals value. | `positive Integer` | | **`userName`** | Username (login) filter | `cn, eq` | Username contains / equals value. | `search String` | | **`userFirstName`** | User first name filter | `cn, eq` | User first name contains / equals value. | `search String` | | **`userLastName`** | User last name filter | `cn, eq` | User last name contains / equals value. | `search String` | | **`permissionsManage`** | Filter the users that do (not) have `manage` permissions in this room | `eq` |  | `true or false` | | **`nodeIsEncrypted`** | Encrypted node filter | `eq` |  | `true or false` | | **`nodeHasActivitiesLog`** | Activities log filter | `eq` |  | `true or false` | | **`nodeHasRecycleBin`** | (**`DEPRECATED`**)<br>Recycle bin filter<br>**Filter has no effect!** | `eq` |  | `true or false` |  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are supported.   Example: > `nodeName:asc`   Sort by `nodeName` ascending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`nodeId`** | Node ID | | **`nodeName`** | Node name | | **`nodeParentId`** | Node parent ID | | **`nodeSize`** | Node size | | **`nodeQuota`** | Node quota |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EventlogApi(
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
    $result = $apiInstance->getAuditNodeUserData($x_sds_auth_token, $x_sds_date_format, $filter, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventlogApi->getAuditNodeUserData: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\AuditNodeResponse[]**](../Model/AuditNodeResponse.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLogEvents**
> \Swagger\Client\Model\LogEventList getLogEvents($x_sds_auth_token, $x_sds_date_format, $date_end, $date_start, $limit, $offset, $sort, $status, $type, $user_client, $user_id)

Get system events

### &#128640; Since version 4.3.0  ### Functional Description:   Retrieve eventlog (audit log) events.  ### Precondition: Role _\"Log Auditor\"_ required.  ### Effects: None.  ### &#9432; Further Information: Output is limited to **500** entries.   For more results please use filter criteria and paging (`offset` + `limit`).   ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are supported.   Example: > `time:desc`   Sort by `time` descending (default sort option).  | `FIELD_NAME` | Description | | :--- | :--- | | **`time`** | Event timestamp |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EventlogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$date_end = "date_end_example"; // string | End date e.g. `2015-12-31T23:59:00`
$date_start = "date_start_example"; // string | Start date e.g. `2015-12-31T23:59:00`
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset
$sort = "sort_example"; // string | Sort string
$status = 56; // int | Operation status: * `0` - Success * `2` - Error
$type = 56; // int | Operation ID cf. `GET /eventlog/operations`
$user_client = "user_client_example"; // string | User client
$user_id = 789; // int | User ID

try {
    $result = $apiInstance->getLogEvents($x_sds_auth_token, $x_sds_date_format, $date_end, $date_start, $limit, $offset, $sort, $status, $type, $user_client, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventlogApi->getLogEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **date_end** | **string**| End date e.g. &#x60;2015-12-31T23:59:00&#x60; | [optional]
 **date_start** | **string**| Start date e.g. &#x60;2015-12-31T23:59:00&#x60; | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]
 **sort** | **string**| Sort string | [optional]
 **status** | **int**| Operation status: * &#x60;0&#x60; - Success * &#x60;2&#x60; - Error | [optional]
 **type** | **int**| Operation ID cf. &#x60;GET /eventlog/operations&#x60; | [optional]
 **user_client** | **string**| User client | [optional]
 **user_id** | **int**| User ID | [optional]

### Return type

[**\Swagger\Client\Model\LogEventList**](../Model/LogEventList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLogOperations**
> \Swagger\Client\Model\LogOperationList getLogOperations($x_sds_auth_token, $is_deprecated)

Get allowed Log Operations

### &#128640; Since version 4.3.0  ### Functional Description:   Retrieve eventlog (audit log) operation IDs and the associated log operation description.  ### Precondition: Role _\"Log Auditor\"_ required.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EventlogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$is_deprecated = true; // bool | Show only deprecated operations

try {
    $result = $apiInstance->getLogOperations($x_sds_auth_token, $is_deprecated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventlogApi->getLogOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **is_deprecated** | **bool**| Show only deprecated operations | [optional]

### Return type

[**\Swagger\Client\Model\LogOperationList**](../Model/LogOperationList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

