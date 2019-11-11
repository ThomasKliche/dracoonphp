# Swagger\Client\PublicApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelShareUpload**](PublicApi.md#cancelShareUpload) | **DELETE** /v4/public/shares/uploads/{access_key}/{upload_id} | Cancel file upload
[**completeShareUpload**](PublicApi.md#completeShareUpload) | **PUT** /v4/public/shares/uploads/{access_key}/{upload_id} | Complete file upload
[**createPublicDownloadShareToken**](PublicApi.md#createPublicDownloadShareToken) | **POST** /v4/public/shares/downloads/{access_key} | Generate download URL
[**createShareUpload**](PublicApi.md#createShareUpload) | **POST** /v4/public/shares/uploads/{access_key} | Create new file upload channel
[**getActiveDirectoryAuthInfo**](PublicApi.md#getActiveDirectoryAuthInfo) | **GET** /v4/public/system/info/auth/ad | Get Active Directory authentication information
[**getBrandingInfo**](PublicApi.md#getBrandingInfo) | **GET** /v4/public/system/branding | Get branding information
[**getBrandingServerInfo**](PublicApi.md#getBrandingServerInfo) | **GET** /v4/public/branding/info | Get branding information
[**getOpenIdAuthInfo**](PublicApi.md#getOpenIdAuthInfo) | **GET** /v4/public/system/info/auth/openid | Get OpenID Connect provider authentication information
[**getPublicDownloadShare**](PublicApi.md#getPublicDownloadShare) | **GET** /v4/public/shares/downloads/{access_key} | Get public Download Share information
[**getPublicFileData**](PublicApi.md#getPublicFileData) | **GET** /v4/public/shares/downloads/{access_key}/{token} | Download file with token
[**getPublicFileData1**](PublicApi.md#getPublicFileData1) | **HEAD** /v4/public/shares/downloads/{access_key}/{token} | Download file with token
[**getPublicUploadShare**](PublicApi.md#getPublicUploadShare) | **GET** /v4/public/shares/uploads/{access_key} | Get public Upload Share information
[**getSdsServerTime**](PublicApi.md#getSdsServerTime) | **GET** /v4/public/time | Get system time
[**getSoftwareVersion**](PublicApi.md#getSoftwareVersion) | **GET** /v4/public/software/version | Get software version information
[**getSystemInfo**](PublicApi.md#getSystemInfo) | **GET** /v4/public/system/info | Get system information
[**getThirdPartyDependencies**](PublicApi.md#getThirdPartyDependencies) | **GET** /v4/public/software/third_party_dependencies | Get third-party software dependencies
[**uploadShare**](PublicApi.md#uploadShare) | **POST** /v4/public/shares/uploads/{access_key}/{upload_id} | Upload file


# **cancelShareUpload**
> cancelShareUpload($access_key, $upload_id)

Cancel file upload

### Functional Description: Abort (chunked) upload via Upload Share.  ### Precondition: Valid Upload ID.  ### Effects: Aborts upload and invalidates upload ID / token.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_key = "access_key_example"; // string | Access key
$upload_id = "upload_id_example"; // string | Upload channel ID

try {
    $apiInstance->cancelShareUpload($access_key, $upload_id);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->cancelShareUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_key** | **string**| Access key |
 **upload_id** | **string**| Upload channel ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **completeShareUpload**
> \Swagger\Client\Model\PublicUploadedFileData completeShareUpload($access_key, $upload_id, $body)

Complete file upload

### Functional Description: Finalize (chunked) upload via Upload Share.  ### Precondition: * Valid upload ID.    If container is encrypted, the fileKeys can only be set for users that have permission _\"manage\"_, _\"read\"_, _\"manageDownloadShare\"_ or _\"manageUploadShare\"_.  ### Effects: Finalizes upload.  ### &#9432; Further Information: Chunked uploads (range requests) are supported (please cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) for details).    Please ensure that all chunks have been transferred correctly before finishing the upload.   If file hash has been created in time a `201 Created` will be responded and hash will be part of response, otherwise it will be a `202 Accepted` without it.  ### 200 OK is NOT used by this API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_key = "access_key_example"; // string | Access key
$upload_id = "upload_id_example"; // string | Upload channel ID
$body = new \Swagger\Client\Model\UserFileKeyList(); // \Swagger\Client\Model\UserFileKeyList | Mandatory for encrypted shares

try {
    $result = $apiInstance->completeShareUpload($access_key, $upload_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->completeShareUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_key** | **string**| Access key |
 **upload_id** | **string**| Upload channel ID |
 **body** | [**\Swagger\Client\Model\UserFileKeyList**](../Model/UserFileKeyList.md)| Mandatory for encrypted shares | [optional]

### Return type

[**\Swagger\Client\Model\PublicUploadedFileData**](../Model/PublicUploadedFileData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPublicDownloadShareToken**
> \Swagger\Client\Model\PublicDownloadTokenGenerateResponse createPublicDownloadShareToken($access_key, $body)

Generate download URL

### Functional Description: Generate a download URL to retrieve a shared file.  ### Precondition: None.  ### Effects: Download URL and token are generated and returned.  ### &#9432; Further Information: Use **`downloadUrl`** the download **`token`** is **`DEPRECATED`**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_key = "access_key_example"; // string | Access key
$body = new \Swagger\Client\Model\PublicDownloadTokenGenerateRequest(); // \Swagger\Client\Model\PublicDownloadTokenGenerateRequest | body

try {
    $result = $apiInstance->createPublicDownloadShareToken($access_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createPublicDownloadShareToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_key** | **string**| Access key |
 **body** | [**\Swagger\Client\Model\PublicDownloadTokenGenerateRequest**](../Model/PublicDownloadTokenGenerateRequest.md)| body |

### Return type

[**\Swagger\Client\Model\PublicDownloadTokenGenerateResponse**](../Model/PublicDownloadTokenGenerateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createShareUpload**
> \Swagger\Client\Model\CreateShareUploadChannelResponse createShareUpload($access_key, $body)

Create new file upload channel

### Functional Description:   Create a new upload channel.  ### Precondition: None.  ### Effects: Upload channel is created and corresponding upload URL, token & upload ID are returned.  ### &#9432; Further Information: Use **`uploadUrl`** the upload **`token`** is **`DEPRECATED`**.    Please provide the size of the intended upload so that the quota can be checked in advanced and no data is transferred unnecessarily.  ### Node naming convention  * Node (room, folder, file) names are limited to **150** characters.  * Not allowed names:   `'CON', 'PRN', 'AUX', 'NUL', 'COM1', 'COM2', 'COM3', 'COM4', 'COM5', 'COM6', 'COM7', 'COM8', 'COM9', 'LPT1', 'LPT2', 'LPT3', 'LPT4', 'LPT5', 'LPT6', 'LPT7', 'LPT8', 'LPT9', (and any of those with an extension)`  * Not allowed characters in names:   `'\\\\', '<','>', ':', '\\\"', '|', '?', '*', '/', leading '-', trailing '.' `

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_key = "access_key_example"; // string | Access key
$body = new \Swagger\Client\Model\CreateShareUploadChannelRequest(); // \Swagger\Client\Model\CreateShareUploadChannelRequest | body

try {
    $result = $apiInstance->createShareUpload($access_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createShareUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_key** | **string**| Access key |
 **body** | [**\Swagger\Client\Model\CreateShareUploadChannelRequest**](../Model/CreateShareUploadChannelRequest.md)| body |

### Return type

[**\Swagger\Client\Model\CreateShareUploadChannelResponse**](../Model/CreateShareUploadChannelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActiveDirectoryAuthInfo**
> \Swagger\Client\Model\ActiveDirectoryAuthInfo getActiveDirectoryAuthInfo($is_global_available)

Get Active Directory authentication information

### Functional Description:   Provides information about Active Directory authentication options.  ### Precondition: None.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_global_available = true; // bool | Show only global available items

try {
    $result = $apiInstance->getActiveDirectoryAuthInfo($is_global_available);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getActiveDirectoryAuthInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_global_available** | **bool**| Show only global available items | [optional]

### Return type

[**\Swagger\Client\Model\ActiveDirectoryAuthInfo**](../Model/ActiveDirectoryAuthInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBrandingInfo**
> \Swagger\Client\Model\BrandingConfig getBrandingInfo()

Get branding information

## &#9888; Deprecated since version 4.10.0  ### Functional Description:   Provides information about branding settings.  ### Precondition: None.  ### Effects: None.  ### &#9432; Further Information: None.  ### Branding settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`brandingProviderUrl`** | Access URL to to the Branding Portal | `String` | | **`brandingQualifier`** | Branding UUID | `String` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getBrandingInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getBrandingInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BrandingConfig**](../Model/BrandingConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBrandingServerInfo**
> \Swagger\Client\Model\BrandingServerInfo getBrandingServerInfo()

Get branding information

## &#9888; Deprecated since version 4.6.0  ### Functional Description:   Public branding information.  ### Precondition: None.  ### Effects: If `brandingServerBrandingId` is set, `brandingServerCustomer` is **NOT** supplied.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getBrandingServerInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getBrandingServerInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BrandingServerInfo**](../Model/BrandingServerInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpenIdAuthInfo**
> \Swagger\Client\Model\OpenIdAuthInfo getOpenIdAuthInfo($is_global_available)

Get OpenID Connect provider authentication information

### Functional Description:   Provides information about OpenID Connect authentication options.  ### Precondition: None.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_global_available = true; // bool | Show only global available items

try {
    $result = $apiInstance->getOpenIdAuthInfo($is_global_available);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getOpenIdAuthInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_global_available** | **bool**| Show only global available items | [optional]

### Return type

[**\Swagger\Client\Model\OpenIdAuthInfo**](../Model/OpenIdAuthInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicDownloadShare**
> \Swagger\Client\Model\PublicDownloadShare getPublicDownloadShare($access_key, $x_sds_date_format)

Get public Download Share information

### Functional Description:   Retrieve the public information of a Download Share.  ### Precondition: None.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_key = "access_key_example"; // string | Access key
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->getPublicDownloadShare($access_key, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getPublicDownloadShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_key** | **string**| Access key |
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\PublicDownloadShare**](../Model/PublicDownloadShare.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicFileData**
> int getPublicFileData($access_key, $token, $range, $generic_mimetype, $inline)

Download file with token

### Functional Description:   Download a file (or zip archive if target is a folder or room).  ### Precondition: Valid download token.  ### Effects: None.  ### &#9432; Further Information: Range requests are supported (please cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) for details).   Range requests are not allowed for zip archive download.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_key = "access_key_example"; // string | Access key
$token = "token_example"; // string | Download token
$range = "range_example"; // string | Range e.g. `bytes=0-999` cf. [RFC 7233](https://tools.ietf.org/html/rfc7233)
$generic_mimetype = true; // bool | Always return `application/octet-stream` instead of specific mimetype
$inline = true; // bool | Use Content-Disposition: `inline` instead of `attachment`

try {
    $result = $apiInstance->getPublicFileData($access_key, $token, $range, $generic_mimetype, $inline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getPublicFileData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_key** | **string**| Access key |
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

# **getPublicFileData1**
> int getPublicFileData1($access_key, $token, $range, $generic_mimetype, $inline)

Download file with token

### Functional Description:   Download a file (or zip archive if target is a folder or room).  ### Precondition: Valid download token.  ### Effects: None.  ### &#9432; Further Information: Range requests are supported (please cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) for details).   Range requests are not allowed for zip archive download.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_key = "access_key_example"; // string | Access key
$token = "token_example"; // string | Download token
$range = "range_example"; // string | Range e.g. `bytes=0-999` cf. [RFC 7233](https://tools.ietf.org/html/rfc7233)
$generic_mimetype = true; // bool | Always return `application/octet-stream` instead of specific mimetype
$inline = true; // bool | Use Content-Disposition: `inline` instead of `attachment`

try {
    $result = $apiInstance->getPublicFileData1($access_key, $token, $range, $generic_mimetype, $inline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getPublicFileData1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_key** | **string**| Access key |
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

# **getPublicUploadShare**
> \Swagger\Client\Model\PublicUploadShare getPublicUploadShare($access_key, $x_sds_date_format, $x_sds_share_password)

Get public Upload Share information

### Functional Description:   Provides information about the desired Upload Share.  ### Precondition: Only userUserPublicKeyList is returned to the users who owns one of the following permissions * *`manage`* * *`read`* * *`manageDownloadShare`* * *`manageUploadShare`*  ### Effects: None.  ### &#9432; Further Information: If no password is set, the returned information is reduced to the following attributes (if available):  * **`name`** * **`maxSlots`** * **`createdAt`** * **`isProtected`** * **`isEncrypted`** * **`showUploadedFiles`** * **`userUserPublicKeyList`** (if parent is end-to-end encrypted)  Only if the password is transmitted as `X-Sds-Share-Password` header, all values are returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_key = "access_key_example"; // string | Access key
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$x_sds_share_password = "x_sds_share_password_example"; // string | Upload share password. Should be base64-encoded. Plain X-Sds-Share-Passwords are *deprecated* and will be removed in the future

try {
    $result = $apiInstance->getPublicUploadShare($access_key, $x_sds_date_format, $x_sds_share_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getPublicUploadShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_key** | **string**| Access key |
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **x_sds_share_password** | **string**| Upload share password. Should be base64-encoded. Plain X-Sds-Share-Passwords are *deprecated* and will be removed in the future | [optional]

### Return type

[**\Swagger\Client\Model\PublicUploadShare**](../Model/PublicUploadShare.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSdsServerTime**
> \Swagger\Client\Model\SdsServerTime getSdsServerTime($x_sds_date_format)

Get system time

### Functional Description:   Retrieve the actual server time.  ### Precondition: None.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->getSdsServerTime($x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getSdsServerTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\SdsServerTime**](../Model/SdsServerTime.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSoftwareVersion**
> \Swagger\Client\Model\SoftwareVersionData getSoftwareVersion($x_sds_date_format)

Get software version information

### Functional Description:   Public software version information.  ### Precondition: None.  ### Effects: None.  ### &#9432; Further Information: The version of DRACOON Server consists of two components: * **API** * **Core** (referred to as _\"Server\"_)  that are versioned individually.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->getSoftwareVersion($x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getSoftwareVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\SoftwareVersionData**](../Model/SoftwareVersionData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSystemInfo**
> \Swagger\Client\Model\SystemInfo getSystemInfo($is_enabled)

Get system information

### Functional Description:   Provides information about system.  ### Precondition: None.  ### Effects: None.  ### &#9432; Further Information: Authentication methods are sorted by **priority** attribute.   Smaller values have higher priority.   Authentication method with highest priority is considered as default.  ### System information  | Setting | Description | Value | | :--- | :--- | :--- | | **`languageDefault`** | Defines which language should be default.<br>cf. [RFC 5646](https://tools.ietf.org/html/rfc5646) for ISO 639-1 codes | `ISO 639-1 code` |  ### Authentication methods  | Authentication Method | Description | | :--- | :--- | | **`basic`** | **Basic** authentication globally allowed.<br>This option **MUST** be activated to allow users to log in with their credentials stored in the database.<br>Formerly known as **`sql`**. | | **`active_directory`** | **Active Directory** authentication globally allowed.<br>This option **MUST** be activated to allow users to log in with their Active Directory credentials. | | **`radius`** | **RADIUS** authentication globally allowed.<br>This option **MUST** be activated to allow users to log in with their RADIUS username, their PIN and a token password. | | **`openid`** | **OpenID Connect** authentication globally allowed.This option **MUST** be activated to allow users to log in with their OpenID Connect identity. | | **`hideLoginInputFields`** | Determines whether input fields for login should be enabled | `true or false` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_enabled = true; // bool | Show only enabled authentication methods

try {
    $result = $apiInstance->getSystemInfo($is_enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getSystemInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_enabled** | **bool**| Show only enabled authentication methods | [optional]

### Return type

[**\Swagger\Client\Model\SystemInfo**](../Model/SystemInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getThirdPartyDependencies**
> \Swagger\Client\Model\ThirdPartyDependenciesData[] getThirdPartyDependencies()

Get third-party software dependencies

### &#128640; Since version 4.9.0  ### Functional Description:   Provides information about used third-party software dependencies.  ### Precondition: None.  ### Effects: None.  ### &#9432; Further Information: List of the third-party software dependencies used by **DRACOON Core** (referred to as _\"Server\"_):

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getThirdPartyDependencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getThirdPartyDependencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ThirdPartyDependenciesData[]**](../Model/ThirdPartyDependenciesData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadShare**
> \Swagger\Client\Model\ChunkUploadResponse uploadShare($access_key, $upload_id, $content_range, $x_sds_date_format, $file)

Upload file

### Functional Description:   Chunked upload of files via Upload Share.  ### Precondition: Valid upload ID.  ### Effects: Chunk of file is uploaded.  ### &#9432; Further Information: Chunked uploads (range requests) are supported (please cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) for details).  Following `Content-Types` are supported by this API: * `multipart/form-data` * `application/octet-stream`    For both file upload types set the correct `Content-Type` header and body.   Examples:    * `multipart/form-data` ``` POST /api/v4/public/shares/uploads/{access_key}{upload_id} HTTP/1.1  Header: ... Content-Type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW ...  Body: ------WebKitFormBoundary7MA4YWxkTrZu0gW Content-Disposition: form-data; name=\"file\"; filename=\"file.txt\" Content-Type: text/plain  Content of file.txt ------WebKitFormBoundary7MA4YWxkTrZu0gW-- ```  * `application/octet-stream` ``` POST /api/v4/public/shares/uploads/{access_key}{upload_id} HTTP/1.1  Header: ... Content-Type: application/octet-stream ...  Body: Content of file.txt ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_key = "access_key_example"; // string | Access key
$upload_id = "upload_id_example"; // string | Upload channel ID
$content_range = "content_range_example"; // string | Content-Range e.g. `bytes 0-999/3980` cf. [RFC 7233](https://tools.ietf.org/html/rfc7233)
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$file = "/path/to/file.txt"; // \SplFileObject | File

try {
    $result = $apiInstance->uploadShare($access_key, $upload_id, $content_range, $x_sds_date_format, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->uploadShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_key** | **string**| Access key |
 **upload_id** | **string**| Upload channel ID |
 **content_range** | **string**| Content-Range e.g. &#x60;bytes 0-999/3980&#x60; cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **file** | **\SplFileObject**| File | [optional]

### Return type

[**\Swagger\Client\Model\ChunkUploadResponse**](../Model/ChunkUploadResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

