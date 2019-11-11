# Swagger\Client\ResourcesApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserAvatar**](ResourcesApi.md#getUserAvatar) | **GET** /v4/resources/users/{user_id}/avatar/{uuid} | Get user avatar


# **getUserAvatar**
> \Swagger\Client\Model\Avatar getUserAvatar($user_id, $uuid)

Get user avatar

### Functional Description: Get user avatar.  ### Precondition: Valid: - user ID and - avatar UUID  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 789; // int | User ID
$uuid = "uuid_example"; // string | UUID of the avatar

try {
    $result = $apiInstance->getUserAvatar($user_id, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->getUserAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User ID |
 **uuid** | **string**| UUID of the avatar |

### Return type

[**\Swagger\Client\Model\Avatar**](../Model/Avatar.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

