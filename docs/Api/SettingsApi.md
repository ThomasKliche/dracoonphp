# Swagger\Client\SettingsApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSettings**](SettingsApi.md#getSettings) | **GET** /v4/settings | Get customer settings
[**setSettings**](SettingsApi.md#setSettings) | **PUT** /v4/settings | Set customer settings


# **getSettings**
> \Swagger\Client\Model\CustomerSettingsResponse getSettings($x_sds_auth_token)

Get customer settings

### Functional Description:   Retrieve customer related settings.   ### Precondition: Right _\"read config\"_ required.  ### Effects: None.  ### &#9432; Further Information: None.  ### Configurable customer settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`homeRoomParentName`** | Name of the container in which all user's home rooms are located.<br>`null` if **`homeRoomsActive`** is `false`. | `String` | | **`homeRoomQuota`** | Refers to the quota of each single user's home room.<br>`0` represents no quota.<br>`null` if **`homeRoomsActive`** is `false`. | `positive Long` | | **`homeRoomsActive`** | If set to `true`, every user with an Active Directory account gets a personal homeroom.<br>Once activated, this **CANNOT** be deactivated. | `true or false` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getSettings($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\CustomerSettingsResponse**](../Model/CustomerSettingsResponse.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSettings**
> \Swagger\Client\Model\CustomerSettingsResponse setSettings($body, $x_sds_auth_token)

Set customer settings

### Functional Description:   Set customer related settings.  ### Precondition: Right _\"change config\"_ required.   Role _\"Config Manager\"_.  ### Effects: Home Room configuration is updated.   ### &#9432; Further Information: None.  ### Configurable customer settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`homeRoomParentName`** | Name of the container in which all user's home rooms are located.<br>`null` if **`homeRoomsActive`** is `false`. | `String` | | **`homeRoomQuota`** | Refers to the quota of each single user's home room.<br>`0` represents no quota.<br>`null` if **`homeRoomsActive`** is `false`. | `positive Long` | | **`homeRoomsActive`** | If set to `true`, every user with an Active Directory account gets a personal homeroom.<br>Once activated, this **CANNOT** be deactivated. | `true or false` |  ### Node naming convention  * Node (room, folder, file) names are limited to **150** characters.  * Not allowed names:   `'CON', 'PRN', 'AUX', 'NUL', 'COM1', 'COM2', 'COM3', 'COM4', 'COM5', 'COM6', 'COM7', 'COM8', 'COM9', 'LPT1', 'LPT2', 'LPT3', 'LPT4', 'LPT5', 'LPT6', 'LPT7', 'LPT8', 'LPT9', (and any of those with an extension)`  * Not allowed characters in names:   `'\\\\', '<','>', ':', '\\\"', '|', '?', '*', '/', leading '-', trailing '.' `

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CustomerSettingsRequest(); // \Swagger\Client\Model\CustomerSettingsRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->setSettings($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->setSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerSettingsRequest**](../Model/CustomerSettingsRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\CustomerSettingsResponse**](../Model/CustomerSettingsResponse.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

