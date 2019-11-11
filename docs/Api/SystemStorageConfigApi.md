# Swagger\Client\SystemStorageConfigApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createS3Config**](SystemStorageConfigApi.md#createS3Config) | **POST** /v4/system/config/storage/s3 | Create S3 storage configuration
[**createS3Tag**](SystemStorageConfigApi.md#createS3Tag) | **POST** /v4/system/config/storage/s3/tags | Create S3 tag
[**deleteS3Tag**](SystemStorageConfigApi.md#deleteS3Tag) | **DELETE** /v4/system/config/storage/s3/tags/{id} | Delete S3 tag
[**getS3Config**](SystemStorageConfigApi.md#getS3Config) | **GET** /v4/system/config/storage/s3 | Get S3 storage configuration
[**getS3Tag**](SystemStorageConfigApi.md#getS3Tag) | **GET** /v4/system/config/storage/s3/tags/{id} | Get S3 tag
[**getS3TagList**](SystemStorageConfigApi.md#getS3TagList) | **GET** /v4/system/config/storage/s3/tags | Get list of configured S3 tags
[**updateS3Config**](SystemStorageConfigApi.md#updateS3Config) | **PUT** /v4/system/config/storage/s3 | Update S3 storage configuration


# **createS3Config**
> \Swagger\Client\Model\S3Config createS3Config($body, $x_sds_auth_token)

Create S3 storage configuration

### &#128640; Since version 4.3.0  ### Functional Description:   Create new S3 configuration.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: New S3 configuration is created.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemStorageConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\S3ConfigCreateRequest(); // \Swagger\Client\Model\S3ConfigCreateRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->createS3Config($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemStorageConfigApi->createS3Config: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\S3ConfigCreateRequest**](../Model/S3ConfigCreateRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\S3Config**](../Model/S3Config.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createS3Tag**
> \Swagger\Client\Model\S3Tag createS3Tag($body, $x_sds_auth_token)

Create S3 tag

### &#128640; Since version 4.9.0  ### Functional Description:   Create new S3 tag.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: New S3 tag is created.  ### &#9432; Further Information: * Maximum key length: **128** characters.   * Maximum value length: **256** characters.   * Both S3 tag key and value are **case-sensitive** strings.   * Maximum of **20 mandatory S3 tags** is allowed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemStorageConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\S3TagCreateRequest(); // \Swagger\Client\Model\S3TagCreateRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->createS3Tag($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemStorageConfigApi->createS3Tag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\S3TagCreateRequest**](../Model/S3TagCreateRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\S3Tag**](../Model/S3Tag.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteS3Tag**
> deleteS3Tag($id, $x_sds_auth_token)

Delete S3 tag

### &#128640; Since version 4.9.0  ### Functional Description:   Delete S3 tag.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: S3 tag gets deleted.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemStorageConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | S3 tag ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteS3Tag($id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling SystemStorageConfigApi->deleteS3Tag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| S3 tag ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getS3Config**
> \Swagger\Client\Model\S3Config getS3Config($x_sds_auth_token)

Get S3 storage configuration

### &#128640; Since version 4.3.0  ### Functional Description:   Retrieve S3 configuration.  ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemStorageConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getS3Config($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemStorageConfigApi->getS3Config: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\S3Config**](../Model/S3Config.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getS3Tag**
> \Swagger\Client\Model\S3Tag getS3Tag($id, $x_sds_auth_token)

Get S3 tag

### &#128640; Since version 4.9.0  ### Functional Description:   Retrieve single S3 tag.  ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemStorageConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | S3 tag ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getS3Tag($id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemStorageConfigApi->getS3Tag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| S3 tag ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\S3Tag**](../Model/S3Tag.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getS3TagList**
> \Swagger\Client\Model\S3TagList getS3TagList($x_sds_auth_token)

Get list of configured S3 tags

### &#128640; Since version 4.9.0  ### Functional Description:   Retrieve all configured S3 tags.  ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: An empty list is returned if no S3 tags are found / configured.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemStorageConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getS3TagList($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemStorageConfigApi->getS3TagList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\S3TagList**](../Model/S3TagList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateS3Config**
> \Swagger\Client\Model\S3Config updateS3Config($body, $x_sds_auth_token)

Update S3 storage configuration

### &#128640; Since version 4.3.0  ### Functional Description:   Update existing S3 configuration.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: S3 configuration is updated.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemStorageConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\S3ConfigUpdateRequest(); // \Swagger\Client\Model\S3ConfigUpdateRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->updateS3Config($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemStorageConfigApi->updateS3Config: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\S3ConfigUpdateRequest**](../Model/S3ConfigUpdateRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\S3Config**](../Model/S3Config.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

