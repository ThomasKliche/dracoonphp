# Swagger\Client\DownloadsApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadAvatar**](DownloadsApi.md#downloadAvatar) | **GET** /v4/downloads/avatar/{user_id}/{uuid} | Download avatar
[**getFileDataByToken**](DownloadsApi.md#getFileDataByToken) | **GET** /v4/downloads/{token} | Download file
[**getFileDataByToken1**](DownloadsApi.md#getFileDataByToken1) | **HEAD** /v4/downloads/{token} | Download file
[**getZipFileByToken**](DownloadsApi.md#getZipFileByToken) | **GET** /v4/downloads/zip/{token} | Download ZIP file(s)


# **downloadAvatar**
> int downloadAvatar($user_id, $uuid)

Download avatar

### &#128640; Since version 4.11.0  ### Functional Description:   Download avatar for given UserID and UUID.  ### Precondition: Valid UUID.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DownloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 789; // int | User ID
$uuid = "uuid_example"; // string | UUID of the avatar

try {
    $result = $apiInstance->downloadAvatar($user_id, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadsApi->downloadAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User ID |
 **uuid** | **string**| UUID of the avatar |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileDataByToken**
> int getFileDataByToken($token, $range, $generic_mimetype, $inline)

Download file

### Functional Description:   Download a file.  ### Precondition: Valid download token.  ### Effects: None.  ### &#9432; Further Information: Range requests are supported (please cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) for details).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DownloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Download token
$range = "range_example"; // string | Range e.g. `bytes=0-999` cf. [RFC 7233](https://tools.ietf.org/html/rfc7233)
$generic_mimetype = true; // bool | Always return `application/octet-stream` instead of specific mimetype
$inline = true; // bool | Use Content-Disposition: `inline` instead of `attachment`

try {
    $result = $apiInstance->getFileDataByToken($token, $range, $generic_mimetype, $inline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadsApi->getFileDataByToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Download token |
 **range** | **string**| Range e.g. &#x60;bytes&#x3D;0-999&#x60; cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) | [optional]
 **generic_mimetype** | **bool**| Always return &#x60;application/octet-stream&#x60; instead of specific mimetype | [optional]
 **inline** | **bool**| Use Content-Disposition: &#x60;inline&#x60; instead of &#x60;attachment&#x60; | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileDataByToken1**
> int getFileDataByToken1($token, $range, $generic_mimetype, $inline)

Download file

### Functional Description:   Download a file.  ### Precondition: Valid download token.  ### Effects: None.  ### &#9432; Further Information: Range requests are supported (please cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) for details).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DownloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Download token
$range = "range_example"; // string | Range e.g. `bytes=0-999` cf. [RFC 7233](https://tools.ietf.org/html/rfc7233)
$generic_mimetype = true; // bool | Always return `application/octet-stream` instead of specific mimetype
$inline = true; // bool | Use Content-Disposition: `inline` instead of `attachment`

try {
    $result = $apiInstance->getFileDataByToken1($token, $range, $generic_mimetype, $inline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadsApi->getFileDataByToken1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Download token |
 **range** | **string**| Range e.g. &#x60;bytes&#x3D;0-999&#x60; cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) | [optional]
 **generic_mimetype** | **bool**| Always return &#x60;application/octet-stream&#x60; instead of specific mimetype | [optional]
 **inline** | **bool**| Use Content-Disposition: &#x60;inline&#x60; instead of &#x60;attachment&#x60; | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZipFileByToken**
> int getZipFileByToken($token)

Download ZIP file(s)

### Functional Description:   Download multiple files in a ZIP archive.  ### Precondition: Valid download token.  ### Effects: None.  ### &#9432; Further Information: Create a download token with `POST /nodes/zip` API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DownloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Download token

try {
    $result = $apiInstance->getZipFileByToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadsApi->getZipFileByToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Download token |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

