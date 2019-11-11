# Swagger\Client\UploadsApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelFileUploadByToken**](UploadsApi.md#cancelFileUploadByToken) | **DELETE** /v4/uploads/{token} | Cancel file upload
[**completeFileUploadByToken**](UploadsApi.md#completeFileUploadByToken) | **PUT** /v4/uploads/{token} | Complete file upload
[**uploadFileByToken**](UploadsApi.md#uploadFileByToken) | **POST** /v4/uploads/{token} | Upload file


# **cancelFileUploadByToken**
> cancelFileUploadByToken($token)

Cancel file upload

### Functional Description: Cancel file upload.  ### Precondition: Valid upload token.  ### Effects: Upload canceled, token invalidated and all already transfered chunks removed.  ### &#9432; Further Information: It is recommended to notify the API about cancelled uploads if possible.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Upload token

try {
    $apiInstance->cancelFileUploadByToken($token);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->cancelFileUploadByToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Upload token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **completeFileUploadByToken**
> \Swagger\Client\Model\Node completeFileUploadByToken($token, $x_sds_date_format, $body)

Complete file upload

### Functional Description: Finish uploading a file.  ### Precondition: Valid upload token.  ### Effects: File created.  ### &#9432; Further Information: The provided file name might be changed in accordance with the resolution strategy:  * **autorename**: changes the file name and adds a number to avoid conflicts. * **overwrite**: deletes any old file with the same file name. * **fail**: returns an error; in this case, another `PUT` request with a different file name may be sent.  Please ensure that all chunks have been transferred correctly before finishing the upload.  ### 200 OK is **NOT** used by this API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Upload token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$body = new \Swagger\Client\Model\CompleteUploadRequest(); // \Swagger\Client\Model\CompleteUploadRequest | The body must be empty if public upload token is used. The `resolutionStrategy` in that case will be always `autorename`

try {
    $result = $apiInstance->completeFileUploadByToken($token, $x_sds_date_format, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->completeFileUploadByToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Upload token |
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **body** | [**\Swagger\Client\Model\CompleteUploadRequest**](../Model/CompleteUploadRequest.md)| The body must be empty if public upload token is used. The &#x60;resolutionStrategy&#x60; in that case will be always &#x60;autorename&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\Node**](../Model/Node.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadFileByToken**
> \Swagger\Client\Model\ChunkUploadResponse uploadFileByToken($file, $token, $content_range)

Upload file

### Functional Description:   Upload a (chunk of a) file.  ### Precondition: Valid upload token.  ### Effects: Chunk uploaded.  ### &#9432; Further Information: Range requests are supported (please cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) for details).    Following `Content-Types` are supported by this API: * `multipart/form-data` * `application/octet-stream`    For both file upload types set the correct `Content-Type` header and body.   Examples:    * `multipart/form-data` ``` POST /api/v4/uploads/{token} HTTP/1.1  Header: ... Content-Type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW ...  Body: ------WebKitFormBoundary7MA4YWxkTrZu0gW Content-Disposition: form-data; name=\"file\"; filename=\"file.txt\" Content-Type: text/plain  Content of file.txt ------WebKitFormBoundary7MA4YWxkTrZu0gW-- ```  * `application/octet-stream` ``` POST /api/v4/uploads/{token} HTTP/1.1  Header: ... Content-Type: application/octet-stream ...  Body: Content of file.txt ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject | File
$token = "token_example"; // string | Upload token
$content_range = "content_range_example"; // string | Content-Range e.g. `bytes 0-999/3980` cf. [RFC 7233](https://tools.ietf.org/html/rfc7233)

try {
    $result = $apiInstance->uploadFileByToken($file, $token, $content_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->uploadFileByToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File |
 **token** | **string**| Upload token |
 **content_range** | **string**| Content-Range e.g. &#x60;bytes 0-999/3980&#x60; cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) | [optional]

### Return type

[**\Swagger\Client\Model\ChunkUploadResponse**](../Model/ChunkUploadResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

