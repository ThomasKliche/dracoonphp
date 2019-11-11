# Swagger\Client\ProvisioningApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCustomer**](ProvisioningApi.md#deleteCustomer) | **DELETE** /v4/provisioning/customers/{customer_id} | Delete customer
[**deleteCustomerAttributes**](ProvisioningApi.md#deleteCustomerAttributes) | **DELETE** /v4/provisioning/customers/{customer_id}/customerAttributes/{key} | Delete customer attributes
[**getCustomer**](ProvisioningApi.md#getCustomer) | **GET** /v4/provisioning/customers/{customer_id} | Get customer
[**getCustomerAttributes**](ProvisioningApi.md#getCustomerAttributes) | **GET** /v4/provisioning/customers/{customer_id}/customerAttributes | Get customer attributes
[**getCustomerUsers**](ProvisioningApi.md#getCustomerUsers) | **GET** /v4/provisioning/customers/{customer_id}/users | Get list of customer users
[**getCustomers**](ProvisioningApi.md#getCustomers) | **GET** /v4/provisioning/customers | Get list of customers
[**newCustomerRequest**](ProvisioningApi.md#newCustomerRequest) | **POST** /v4/provisioning/customers | Create customer
[**setAllCustomerAttributes**](ProvisioningApi.md#setAllCustomerAttributes) | **POST** /v4/provisioning/customers/{customer_id}/customerAttributes | Set customer attributes
[**setCustomerAttributes**](ProvisioningApi.md#setCustomerAttributes) | **PUT** /v4/provisioning/customers/{customer_id}/customerAttributes | Add or edit customer attributes
[**updateCustomer**](ProvisioningApi.md#updateCustomer) | **PUT** /v4/provisioning/customers/{customer_id} | Update customer


# **deleteCustomer**
> deleteCustomer($x_sds_service_token, $customer_id)

Delete customer

### Functional Description: Delete a customer.  ### Precondition: Authentication with `X-Sds-Service-Token` required.  ### Effects: Customer is deleted.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sds_service_token = "x_sds_service_token_example"; // string | Service Authentication token
$customer_id = 789; // int | Customer ID

try {
    $apiInstance->deleteCustomer($x_sds_service_token, $customer_id);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_service_token** | **string**| Service Authentication token |
 **customer_id** | **int**| Customer ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomerAttributes**
> deleteCustomerAttributes($x_sds_service_token, $customer_id, $key)

Delete customer attributes

### Functional Description: Delete a custom customer attribute.  ### Precondition: Right _\"change global config\"_ required.  ### Effects: Custom customer attribute gets deleted.  ### &#9432; Further Information: * Allowed characters for keys are: `[a-zA-Z0-9_-]`   * Characters are **case-insensitive**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sds_service_token = "x_sds_service_token_example"; // string | Service Authentication token
$customer_id = 789; // int | Customer ID
$key = "key_example"; // string | Key

try {
    $apiInstance->deleteCustomerAttributes($x_sds_service_token, $customer_id, $key);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->deleteCustomerAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_service_token** | **string**| Service Authentication token |
 **customer_id** | **int**| Customer ID |
 **key** | **string**| Key |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomer**
> \Swagger\Client\Model\Customer getCustomer($x_sds_service_token, $customer_id, $x_sds_date_format, $include_attributes)

Get customer

### Functional Description:   Receive details of a selected customer.  ### Precondition: Authentication with `X-Sds-Service-Token` required.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sds_service_token = "x_sds_service_token_example"; // string | Service Authentication token
$customer_id = 789; // int | Customer ID
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$include_attributes = true; // bool | Include custom customer attributes.

try {
    $result = $apiInstance->getCustomer($x_sds_service_token, $customer_id, $x_sds_date_format, $include_attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_service_token** | **string**| Service Authentication token |
 **customer_id** | **int**| Customer ID |
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **include_attributes** | **bool**| Include custom customer attributes. | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerAttributes**
> \Swagger\Client\Model\AttributesResponse getCustomerAttributes($x_sds_service_token, $customer_id, $filter, $limit, $offset, $sort)

Get customer attributes

### &#128640; Since version 4.12.0  ### Functional Description:   Retrieve a list of customer attributes.  ### Precondition: Authentication with `X-Sds-Service-Token` required.   Right _\"Read all customers\"_ required.  ### Effects: None.  ### &#9432; Further Information: Filters are case insensitive.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE[:VALUE...]`   Example: > `key:cn:searchString_1|value:cn:searchString_2`   Filter by attribute key contains `searchString_1` **AND** attribute value contains `searchString_2`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`key`** | Customer attribute key filter | `cn, eq, sw` | Attribute key contains / equals / starts with value. | `search String` | | **`value`** | Customer attribute value filter | `cn, eq, sw` | Attribute value contains / equals / starts with value. | `search String` |  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are supported.   Example: > `key:asc|value:desc`   Sort by `key` ascending **AND** by `value` descending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`key`** | Customer attribute key | | **`value`** | Customer attribute value |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sds_service_token = "x_sds_service_token_example"; // string | Service Authentication token
$customer_id = 789; // int | Customer ID
$filter = "filter_example"; // string | Filter string
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset
$sort = "sort_example"; // string | Sort string

try {
    $result = $apiInstance->getCustomerAttributes($x_sds_service_token, $customer_id, $filter, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->getCustomerAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_service_token** | **string**| Service Authentication token |
 **customer_id** | **int**| Customer ID |
 **filter** | **string**| Filter string | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]
 **sort** | **string**| Sort string | [optional]

### Return type

[**\Swagger\Client\Model\AttributesResponse**](../Model/AttributesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerUsers**
> \Swagger\Client\Model\UserList getCustomerUsers($x_sds_service_token, $customer_id, $x_sds_date_format, $filter, $limit, $offset, $sort)

Get list of customer users

### Functional Description:   Receive a list of users associated with a certain customer.  ### Precondition: Authentication with `X-Sds-Service-Token` required.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) ### &#9888; Except for **`login`**, **`firstName`** and  **`lastName`** - these are connected via logical disjunction (**OR**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE[:VALUE...]`    Example: > `login:cn:searchString_1|firstName:cn:searchString_2`   Filter users by login containing `searchString_1` **OR** first name containing `searchString_2`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`login`** | User login filter | `cn` | User login contains value. | `search String` | | **`firstName`** | User first name filter | `cn` | User first name contains value. | `search String` | | **`lastName`** | User last name filter | `cn` | User last name contains value. | `search String` | | **`isLocked`** | Lock status filter | `eq` |  | `true or false` | | **`hasRole`** | User role filter (**`NEW`**).<br>Depends on **effectiveRoles**.<br>For more Roles information please call **`GET /roles API`** | `eq` | User role  equals value. | <ul><li>`CONFIG_MANAGER` - Manage global configs</li><li>`USER_MANAGER` - Manage Users</li><li>`GROUP_MANAGER` - Manage User-Groups</li><li>`ROOM_MANAGER` - Manage top level Data Rooms</li><li>`LOG_AUDITOR` - Read logs</li><li>`NONMEMBER_VIEWER` - View users and groups when having room manage permission</li></ul> | | **`effectiveRoles`** | Filter users with DIRECT or DIRECT **AND** EFFECTIVE roles<ul><li>`false`: DIRECT roles</li><li>`true`: DIRECT **AND** EFFECTIVE roles</li></ul>DIRECT means: e.g. user gets role **directly** granted from someone with _grant permission_ right.<br>EFFECTIVE means: e.g. user gets role through **group membership**. | `eq` |  | `true or false`<br>default: `false` | | **`lockStatus`** | (**`DEPRECATED`**) User lock status filter | `eq` | User lock status equals value. | <ul><li>`0` - Locked</li><li>`1` - Web access allowed</li><li>`2` - Web and mobile access allowed</li></ul> |  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are supported.   Example: > `firstName:asc|lastLoginSuccessAt:desc`   Sort by `firstName` ascending **AND** by `lastLoginSuccessAt` descending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`login`** | User login | | **`firstName`** | User first name | | **`lastName`** | User last name | | **`isLocked`** | User lock status | | **`lastLoginSuccessAt`** | Last successful login date | | **`expireAt`** | Expiration date | | **`gender`** | (**`DEPRECATED`**) Gender | | **`lockStatus`** | (**`DEPRECATED`**) User lock status |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sds_service_token = "x_sds_service_token_example"; // string | Service Authentication token
$customer_id = 789; // int | Customer ID
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$filter = "filter_example"; // string | Filter string
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset
$sort = "sort_example"; // string | Sort string

try {
    $result = $apiInstance->getCustomerUsers($x_sds_service_token, $customer_id, $x_sds_date_format, $filter, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->getCustomerUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_service_token** | **string**| Service Authentication token |
 **customer_id** | **int**| Customer ID |
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **filter** | **string**| Filter string | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]
 **sort** | **string**| Sort string | [optional]

### Return type

[**\Swagger\Client\Model\UserList**](../Model/UserList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomers**
> \Swagger\Client\Model\CustomerList getCustomers($x_sds_service_token, $x_sds_date_format, $filter, $include_attributes, $limit, $offset, $sort)

Get list of customers

### Functional Description:   Receive a list of customers.  ### Precondition: Authentication with `X-Sds-Service-Token` required.  ### Effects: None.  ### &#9432; Further Information: This list returns a maximum of **1000** entries.    ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE[:VALUE...]`   Example: > `trialDaysLeft:le:10|userMax:le:100`   Get all customers with `10` trial days left **AND** user maximum **<=** `100`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`id`** | Customer ID filter | `eq` | Customer ID equals value. | `positive Integer` | | **`companyName`** | Company name filter | `cn` | Company name contains value. | `search String` | | **`customerContractType`** | Customer contract type filter | `eq` | Customer contract type equals value. | <ul><li>`demo`</li><li>`free`</li><li>`pay`</li></ul> | | **`trialDaysLeft`** | Left trial days filter | `ge, le` | Left trial days are greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `trialDaysLeft:ge:5`&#124;`trialDaysLeft:le:10` | | **`providerCustomerId`** | Provider Customer ID filter | `cn, eq` | Provider Customer ID contains / equals value. | `search String` | | **`quotaMax`** | Maximum quota filter | `ge, le` | Maximum quota is greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `quotaMax:ge:1024`&#124;`quotaMax:le:1073741824` | `positive Integer` | | **`quotaUsed`** | Used quota filter | `ge, le` | Used quota is greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `quotaUsed:ge:1024`&#124;`quotaUsed:le:1073741824` | `positive Integer` | | **`userMax`** | User maximum filter | `ge, le` | User maxiumum is greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `userMax:ge:10`&#124;`userMax:le:100` | `positive Integer` | | **`userUsed`** | Number of registered users filter | `ge, le` | Number of registered users is is greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `userUsed:ge:10`&#124;`userUsed:le:100` | `positive Integer` | | **`isLocked`** | Lock status filter | `eq` |  | `true or false` | | **`createdAt`** | Creation date filter | `ge, le` | Creation date is greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `createdAt:ge:2016-12-31`&#124;`createdAt:le:2018-01-01` | `Date (yyyy-MM-dd)` | | **`updatedAt`** | Last modification date filter | `ge, le` | Last modification date is greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `updatedAt:ge:2016-12-31`&#124;`updatedAt:le:2018-01-01` | `Date (yyyy-MM-dd)` | | **`lastLoginAt`** | Last login date filter | `ge, le` | Last login date is greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `lastLoginAt:ge:2016-12-31`&#124;`lastLoginAt:le:2018-01-01` | `Date (yyyy-MM-dd)` | | **`userLogin`** | User login filter | `eq` | User login name equals value.<br>Search user all logins e.g. `basic`, `active_directory`, `radius`. | `search String` | | **`attributeKey`** | Customer attribute key filter | `eq`, `nex` | Customer attribute key equals value / Customer attribute does **NOT** exist at customer | `search String` | | **`attributeValue`** | Customer attribute value filter | `eq` | Customer attribute value equals value. | `search String` | | **`activationCode`** | (**`DEPRECATED`**) Activation code filter | `cn, eq` | Activation code contains / equals value. | `search String` | | **`lockStatus`** | (**`DEPRECATED`**) Lock status filter | `eq` |  | <ul><li>`0` - unlocked</li><li>`1` - locked</li></ul> |  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are **NOT** supported.   Example: > `companyName:desc`   Sort by `companyName` descending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`companyName`** | Company name | | **`customerContractType`** | Customer contract type | | **`trialDaysLeft`** | Number of remaining trial days (demo customers) | | **`providerCustomerId`** | Provider Customer ID | | **`quotaMax`** | Maximum quota | | **`quotaUsed`** | Currently used quota | | **`userMax`** | Maximum user number | | **`userUsed`** | Number of registered users | | **`isLocked`** | Lock status of customer | | **`createdAt`** | Creation date | | **`updatedAt`** | Last modification date | | **`lastLoginAt`** | Last login date of any user of this customer | | **`lockStatus`** | (**`DEPRECATED`**) Lock status of customer |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sds_service_token = "x_sds_service_token_example"; // string | Service Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$filter = "filter_example"; // string | Filter string
$include_attributes = true; // bool | Include custom customer attributes.
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset
$sort = "sort_example"; // string | Sort string

try {
    $result = $apiInstance->getCustomers($x_sds_service_token, $x_sds_date_format, $filter, $include_attributes, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->getCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_service_token** | **string**| Service Authentication token |
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **filter** | **string**| Filter string | [optional]
 **include_attributes** | **bool**| Include custom customer attributes. | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]
 **sort** | **string**| Sort string | [optional]

### Return type

[**\Swagger\Client\Model\CustomerList**](../Model/CustomerList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newCustomerRequest**
> \Swagger\Client\Model\NewCustomerResponse newCustomerRequest($x_sds_service_token, $body, $x_sds_date_format)

Create customer

### Functional Description: Create a new customer.  ### Precondition: Authentication with `X-Sds-Service-Token` required.    ### Effects: A new customer is created.  ### &#9432; Further Information: If no company name is set, first letter of the first name separated by dot following by last name of the first administrator is used (e.g. **`J.Doe`**).   Max quota has to be at least `1 MB` (= `1.048.576 B`).  ### Authentication Method Options  | Authentication Method | Option Key | Option Value | | :--- | :--- | :--- | | **`basic`** / **`sql`** | `username` | Unique user identifier | | **`active_directory`** | `ad_config_id` (optional) | Active Directory configuration ID | |  | `username` | Active Directory username according to authentication setting `userFilter` | | **`radius`** | `username` | RADIUS username | | **`openid`** | `openid_config_id` (optional) | OpenID Connect configuration ID | |  | `username` | OpenID Connect username according to authentication setting `mappingClaim` |  &#9888; If `basic` authentication is enabled, the first administrator will get `basic` authentication by default.   To create a first administrator without `basic` authentication it **MUST** be disabled explicitly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sds_service_token = "x_sds_service_token_example"; // string | Service Authentication token
$body = new \Swagger\Client\Model\NewCustomerRequest(); // \Swagger\Client\Model\NewCustomerRequest | body
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->newCustomerRequest($x_sds_service_token, $body, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->newCustomerRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_service_token** | **string**| Service Authentication token |
 **body** | [**\Swagger\Client\Model\NewCustomerRequest**](../Model/NewCustomerRequest.md)| body |
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\NewCustomerResponse**](../Model/NewCustomerResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAllCustomerAttributes**
> \Swagger\Client\Model\Customer setAllCustomerAttributes($x_sds_service_token, $body, $customer_id, $x_sds_date_format)

Set customer attributes

### Functional Description:   Set custom customer attributes.  ### Precondition: Right _\"change global config\"_ required.  ### Effects: Custom customer attributes gets set.  ### &#9432; Further Information: Batch function.   All existing customer attributes will be deleted.    * Allowed characters for keys are: `[a-zA-Z0-9_-]`   * Characters are **case-insensitive**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sds_service_token = "x_sds_service_token_example"; // string | Service Authentication token
$body = new \Swagger\Client\Model\CustomerAttributes(); // \Swagger\Client\Model\CustomerAttributes | body
$customer_id = 789; // int | Customer ID
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->setAllCustomerAttributes($x_sds_service_token, $body, $customer_id, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->setAllCustomerAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_service_token** | **string**| Service Authentication token |
 **body** | [**\Swagger\Client\Model\CustomerAttributes**](../Model/CustomerAttributes.md)| body |
 **customer_id** | **int**| Customer ID |
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCustomerAttributes**
> \Swagger\Client\Model\Customer setCustomerAttributes($x_sds_service_token, $body, $customer_id, $x_sds_date_format)

Add or edit customer attributes

### Functional Description:   Add or edit custom customer attributes.  ### Precondition: Right _\"change global config\"_ required.  ### Effects: Custom customer attributes get added or edited.  ### &#9432; Further Information: Batch function.   If an entry exists before, it will be overwritten.    * Allowed characters for keys are: `[a-zA-Z0-9_-]`   * Characters are **case-insensitive**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sds_service_token = "x_sds_service_token_example"; // string | Service Authentication token
$body = new \Swagger\Client\Model\CustomerAttributes(); // \Swagger\Client\Model\CustomerAttributes | body
$customer_id = 789; // int | Customer ID
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->setCustomerAttributes($x_sds_service_token, $body, $customer_id, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->setCustomerAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_service_token** | **string**| Service Authentication token |
 **body** | [**\Swagger\Client\Model\CustomerAttributes**](../Model/CustomerAttributes.md)| body |
 **customer_id** | **int**| Customer ID |
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomer**
> \Swagger\Client\Model\UpdateCustomerResponse updateCustomer($x_sds_service_token, $body, $customer_id, $x_sds_date_format)

Update customer

### Functional Description:   Change selected attributes of a customer.  ### Precondition: Authentication with `X-Sds-Service-Token` required.  ### Effects: Update of attributes.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sds_service_token = "x_sds_service_token_example"; // string | Service Authentication token
$body = new \Swagger\Client\Model\UpdateCustomerRequest(); // \Swagger\Client\Model\UpdateCustomerRequest | body
$customer_id = 789; // int | Customer ID
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->updateCustomer($x_sds_service_token, $body, $customer_id, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_service_token** | **string**| Service Authentication token |
 **body** | [**\Swagger\Client\Model\UpdateCustomerRequest**](../Model/UpdateCustomerRequest.md)| body |
 **customer_id** | **int**| Customer ID |
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\UpdateCustomerResponse**](../Model/UpdateCustomerResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

