# Swagger\Client\SharesApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDownloadShare**](SharesApi.md#createDownloadShare) | **POST** /v4/shares/downloads | Create new Download Share
[**createUploadShare**](SharesApi.md#createUploadShare) | **POST** /v4/shares/uploads | Create new Upload Share
[**deleteDownloadShare**](SharesApi.md#deleteDownloadShare) | **DELETE** /v4/shares/downloads/{share_id} | Delete Download Share
[**deleteUploadShare**](SharesApi.md#deleteUploadShare) | **DELETE** /v4/shares/uploads/{share_id} | Delete Upload Share
[**getDownloadShare**](SharesApi.md#getDownloadShare) | **GET** /v4/shares/downloads/{share_id} | Get Download Share
[**getDownloadShareQr**](SharesApi.md#getDownloadShareQr) | **GET** /v4/shares/downloads/{share_id}/qr | Get Download Share via QR Code
[**getDownloadShares**](SharesApi.md#getDownloadShares) | **GET** /v4/shares/downloads | Get list of Download Shares
[**getUploadShare**](SharesApi.md#getUploadShare) | **GET** /v4/shares/uploads/{share_id} | Get Upload Share
[**getUploadShareQr**](SharesApi.md#getUploadShareQr) | **GET** /v4/shares/uploads/{share_id}/qr | Get Upload Share via QR Code
[**getUploadShares**](SharesApi.md#getUploadShares) | **GET** /v4/shares/uploads | Get list of Upload Shares
[**sendDownloadShareLinkViaEmail**](SharesApi.md#sendDownloadShareLinkViaEmail) | **POST** /v4/shares/downloads/{share_id}/email | Send an existing Download Share link via email
[**sendUploadShareLinkViaEmail**](SharesApi.md#sendUploadShareLinkViaEmail) | **POST** /v4/shares/uploads/{share_id}/email | Send an existing Upload Share link via email
[**updateDownloadShare**](SharesApi.md#updateDownloadShare) | **PUT** /v4/shares/downloads/{share_id} | Update Download Share
[**updateUploadShare**](SharesApi.md#updateUploadShare) | **PUT** /v4/shares/uploads/{share_id} | Update Upload Share


# **createDownloadShare**
> \Swagger\Client\Model\DownloadShare createDownloadShare($body, $x_sds_auth_token, $x_sds_date_format)

Create new Download Share

### Functional Description: Create a new Download Share.  ### Precondition: User with _\"manage download share\"_ permissions on target node.  ### Effects: Download Share created.  ### &#9432; Further Information:  If the target node is a room: subordinary rooms are excluded from a Download Share.  * **`name`** is limited to **150** characters. * **`notes`** are limited to **255** characters. * **`password`** is limited to **150** characters.  (**`DEPRECATED`**) If **`sendMail`** is set to:   * `false` - **`mailRecipients`**, **`mailSubject`** and **`mailBody`** are **optional**.   * `true` - **`mailRecipients`**, **`mailSubject`** and **`mailBody`** are **mandatory**.  Use `POST /shares/downloads/{share_id}/email` API for sending emails instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateDownloadShareRequest(); // \Swagger\Client\Model\CreateDownloadShareRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->createDownloadShare($body, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->createDownloadShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateDownloadShareRequest**](../Model/CreateDownloadShareRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\DownloadShare**](../Model/DownloadShare.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUploadShare**
> \Swagger\Client\Model\UploadShare createUploadShare($body, $x_sds_auth_token, $x_sds_date_format)

Create new Upload Share

### Functional Description: Create a new Upload Share (aka Upload Account).  ### Precondition: User has _\"manage upload share\"_ permissions on target container.  ### Effects: Upload Share is created.  ### &#9432; Further Information:  * **`name`** is limited to **150** characters. * **`notes`** are limited to **255** characters. * **`password`** is limited to **150** characters.  (**`DEPRECATED`**) If **`sendMail`** is set to:   * `false` - **`mailRecipients`**, **`mailSubject`** and **`mailBody`** are **optional**.   * `true` - **`mailRecipients`**, **`mailSubject`** and **`mailBody`** are **mandatory**.  Use `POST /shares/uploads/{share_id}/email` API for sending emails instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateUploadShareRequest(); // \Swagger\Client\Model\CreateUploadShareRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->createUploadShare($body, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->createUploadShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateUploadShareRequest**](../Model/CreateUploadShareRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\UploadShare**](../Model/UploadShare.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDownloadShare**
> deleteDownloadShare($share_id, $x_sds_auth_token)

Delete Download Share

### Functional Description: Delete a Download Share.  ### Precondition: User with _\"manage download share\"_ permissions on target node.  ### Effects: Download Share is deleted.  ### &#9432; Further Information: Only the Download Share is removed; the referenced file or container persists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$share_id = 789; // int | Share ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteDownloadShare($share_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->deleteDownloadShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **share_id** | **int**| Share ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUploadShare**
> deleteUploadShare($share_id, $x_sds_auth_token)

Delete Upload Share

### Functional Description: Delete an Upload Share (aka Upload Account).  ### Precondition: User has _\"manage upload share\"_ permissions on target container.  ### Effects: Upload Share is deleted.  ### &#9432; Further Information: Only the Upload Share is removed; already uploaded files and the target container persist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$share_id = 789; // int | Share ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteUploadShare($share_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->deleteUploadShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **share_id** | **int**| Share ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDownloadShare**
> \Swagger\Client\Model\DownloadShare getDownloadShare($share_id, $x_sds_auth_token, $x_sds_date_format)

Get Download Share

### Functional Description:   Retrieve detailed information about one Download Share.  ### Precondition: User with _\"manage download share\"_ permissions on target node.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$share_id = 789; // int | Share ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->getDownloadShare($share_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getDownloadShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **share_id** | **int**| Share ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\DownloadShare**](../Model/DownloadShare.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDownloadShareQr**
> \Swagger\Client\Model\DownloadShare getDownloadShareQr($share_id, $x_sds_auth_token, $x_sds_date_format)

Get Download Share via QR Code

### Functional Description:   Retrieve detailed information about one Download Share.  ### Precondition: User with _\"manage download share\"_ permissions on target node.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$share_id = 789; // int | Share ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->getDownloadShareQr($share_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getDownloadShareQr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **share_id** | **int**| Share ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\DownloadShare**](../Model/DownloadShare.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDownloadShares**
> \Swagger\Client\Model\DownloadShareList getDownloadShares($x_sds_auth_token, $x_sds_date_format, $filter, $limit, $offset, $sort)

Get list of Download Shares

### Functional Description:   Retrieve a list of Download Shares.  ### Precondition: Authenticated user.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering ### &#9888; All filter fields are connected via logical disjunction (**OR**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE[:VALUE...]`   Example: > `name:cn:searchString_1|createdBy:cn:searchString_2|nodeId:eq:1`   Filter by file name contains `searchString_1` **OR** creator info (`firstName` **OR** `lastName` **OR** `email` **OR** `username`) contains `searchString_2` **OR** node ID is equal to `1`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`name`** | Alias or node name filter | `cn` | Alias or node name contains value. | `search String` | | **`createdAt`** | Creation date filter | `ge, le` | Creation date is greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `createdAt:ge:2016-12-31`&#124;`createdAt:le:2018-01-01` | `Date (yyyy-MM-dd)` | | **`createdBy`** | Creator info filter | `cn` | Creator info (`firstName` **OR** `lastName` **OR** `email` **OR** `username`) contains value. | `search String` | | **`accessKey`** | Share access key filter | `cn` | Share access key contains values. | `search String` | | **`nodeId`** | Source node ID | `eq` | Source node (room, folder, file) ID equals value. | `positive Integer` | | **`userId`** | Creator user ID | `eq` | Creator user ID equals value. | `positive Integer` |  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are supported. Example: > `name:asc|expireAt:desc`   Sort by `name` ascending **AND** by `expireAt` descending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`name`** | Alias or node name | | **`notifyCreator`** | Notify creator on every download | | **`expireAt`** | Expiration date | | **`createdAt`** | Creation date | | **`createdBy`** | Creator first name, last name | | **`classification`** | (**`DEPRECATED`**) Classification ID:<ul><li>1 - public</li><li>2 - internal</li><li>3 - confidential</li><li>4 - strictly confidential</li></ul> |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SharesApi(
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
    $result = $apiInstance->getDownloadShares($x_sds_auth_token, $x_sds_date_format, $filter, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getDownloadShares: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\DownloadShareList**](../Model/DownloadShareList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUploadShare**
> \Swagger\Client\Model\UploadShare getUploadShare($share_id, $x_sds_auth_token, $x_sds_date_format)

Get Upload Share

### Functional Description:   Retrieve detailed information about one Upload Share (aka Upload Account).  ### Precondition: User has _\"manage upload share\"_ permissions on target container.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$share_id = 789; // int | Share ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->getUploadShare($share_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getUploadShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **share_id** | **int**| Share ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\UploadShare**](../Model/UploadShare.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUploadShareQr**
> \Swagger\Client\Model\UploadShare getUploadShareQr($share_id, $x_sds_auth_token, $x_sds_date_format)

Get Upload Share via QR Code

### Functional Description:   Retrieve detailed information about one Upload Share (aka Upload Account).  ### Precondition: User has _\"manage upload share\"_ permissions on target container.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$share_id = 789; // int | Share ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->getUploadShareQr($share_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getUploadShareQr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **share_id** | **int**| Share ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\UploadShare**](../Model/UploadShare.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUploadShares**
> \Swagger\Client\Model\UploadShareList getUploadShares($x_sds_auth_token, $x_sds_date_format, $filter, $limit, $offset, $sort)

Get list of Upload Shares

### Functional Description:   Retrieve a list of Upload Shares (aka Upload Accounts).  ### Precondition: Authenticated user.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering ### &#9888; All filter fields are connected via logical disjunction (**OR**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE[:VALUE...]`   Example: > `name:cn:searchString_1|createdBy:cn:searchString_2`   Filter by alias name contains `searchString_1` **OR** creator info (`firstName` **OR** `lastName` **OR** `email` **OR** `username`) contains `searchString_2`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`name`** | Alias name filter | `cn` | Alias name contains value. | `search String` | | **`createdAt`** | Creation date filter | `ge, le` | Creation date is greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `createdAt:ge:2016-12-31`&#124;`createdAt:le:2018-01-01` | `Date (yyyy-MM-dd)` | | **`createdBy`** | Creator info filter | `cn` | Creator info (`firstName` **OR** `lastName` **OR** `email` **OR** `username`) contains value. | `search String` | | **`accessKey`** | Share access key filter | `cn` | Share access key contains values. | `search String` | | **`userId`** | Creator user ID | `eq` | Creator user ID equals value. | `positive Integer` | | **`targetId`** | Target node ID | <ul><li>`cn` (**`DEPRECATED`**)</li><li>`eq`</li></ul> | Target node (room, folder) ID equals value. | `positive Integer` |  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are supported. Example: > `name:asc|expireAt:desc`   Sort by `name` ascending **AND** by `expireAt` descending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`name`** | Alias name | | **`notifyCreator`** | Notify creator on every upload | | **`expireAt`** | Expiration date | | **`createdAt`** | Creation date | | **`createdBy`** | Creator first name, last name |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SharesApi(
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
    $result = $apiInstance->getUploadShares($x_sds_auth_token, $x_sds_date_format, $filter, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getUploadShares: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\UploadShareList**](../Model/UploadShareList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendDownloadShareLinkViaEmail**
> sendDownloadShareLinkViaEmail($body, $share_id, $x_sds_auth_token)

Send an existing Download Share link via email

### &#128640; Since version 4.11.0  ### Functional Description: Send an email to specific recipients for existing Download Share.  ### Precondition: User with _\"manage download share\"_ permissions on target node.  ### Effects: Download Share link successfully sent.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DownloadShareLinkEmail(); // \Swagger\Client\Model\DownloadShareLinkEmail | body
$share_id = 789; // int | Share ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->sendDownloadShareLinkViaEmail($body, $share_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->sendDownloadShareLinkViaEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DownloadShareLinkEmail**](../Model/DownloadShareLinkEmail.md)| body |
 **share_id** | **int**| Share ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendUploadShareLinkViaEmail**
> sendUploadShareLinkViaEmail($body, $share_id, $x_sds_auth_token)

Send an existing Upload Share link via email

### &#128640; Since version 4.11.0  ### Functional Description: Send an email to specific recipients for existing Upload Share.  ### Precondition: User with _\"manage upload share\"_ permissions on target container.  ### Effects: Upload Share link successfully sent.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UploadShareLinkEmail(); // \Swagger\Client\Model\UploadShareLinkEmail | body
$share_id = 789; // int | Share ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->sendUploadShareLinkViaEmail($body, $share_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->sendUploadShareLinkViaEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UploadShareLinkEmail**](../Model/UploadShareLinkEmail.md)| body |
 **share_id** | **int**| Share ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDownloadShare**
> \Swagger\Client\Model\DownloadShare updateDownloadShare($body, $share_id, $x_sds_auth_token, $x_sds_date_format)

Update Download Share

### &#128640; Since version 4.11.0  ### Functional Description: Update an existing Download Share.  ### Precondition: User with _\"manage download share\"_ permissions on target node.  ### Effects: Download Share successfully updated.  ### &#9432; Further Information:  * **`name`** is limited to **150** characters. * **`notes`** are limited to **255** characters. * **`password`** is limited to **150** characters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateDownloadShareRequest(); // \Swagger\Client\Model\UpdateDownloadShareRequest | body
$share_id = 789; // int | Share ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->updateDownloadShare($body, $share_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->updateDownloadShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateDownloadShareRequest**](../Model/UpdateDownloadShareRequest.md)| body |
 **share_id** | **int**| Share ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\DownloadShare**](../Model/DownloadShare.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUploadShare**
> \Swagger\Client\Model\UploadShare updateUploadShare($body, $share_id, $x_sds_auth_token, $x_sds_date_format)

Update Upload Share

### &#128640; Since version 4.11.0  ### Functional Description: Update existing Upload Share (aka Upload Account).  ### Precondition: User has _\"manage upload share\"_ permissions on target container.  ### Effects: Upload Share successfully updated.  ### &#9432; Further Information:  * **`name`** is limited to **150** characters. * **`notes`** are limited to **255** characters. * **`password`** is limited to **150** characters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateUploadShareRequest(); // \Swagger\Client\Model\UpdateUploadShareRequest | body
$share_id = 789; // int | Share ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->updateUploadShare($body, $share_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->updateUploadShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateUploadShareRequest**](../Model/UpdateUploadShareRequest.md)| body |
 **share_id** | **int**| Share ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\UploadShare**](../Model/UploadShare.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

