# Swagger\Client\NodesApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFavorite**](NodesApi.md#addFavorite) | **POST** /v4/nodes/{node_id}/favorite | Mark a node (room, folder or file) as favorite
[**cancelFileUpload**](NodesApi.md#cancelFileUpload) | **DELETE** /v4/nodes/files/uploads/{upload_id} | Cancel file upload
[**changeNodeComment**](NodesApi.md#changeNodeComment) | **PUT** /v4/nodes/comments/{comment_id} | Edit node comment
[**changePendingAssignments**](NodesApi.md#changePendingAssignments) | **PUT** /v4/nodes/rooms/pending | Handle user-room assignments per group
[**completeFileUpload**](NodesApi.md#completeFileUpload) | **PUT** /v4/nodes/files/uploads/{upload_id} | Complete file upload
[**configRoom**](NodesApi.md#configRoom) | **PUT** /v4/nodes/rooms/{room_id}/config | Configure room
[**copyNodes**](NodesApi.md#copyNodes) | **POST** /v4/nodes/{node_id}/copy_to | Copy node(s)
[**createFileDownloadToken**](NodesApi.md#createFileDownloadToken) | **POST** /v4/nodes/files/{file_id}/downloads | Generate download URL
[**createFileUpload**](NodesApi.md#createFileUpload) | **POST** /v4/nodes/files/uploads | Create new file upload channel
[**createFolder**](NodesApi.md#createFolder) | **POST** /v4/nodes/folders | Create new folder
[**createNodeComment**](NodesApi.md#createNodeComment) | **POST** /v4/nodes/{node_id}/comments | Create node comment
[**createRoom**](NodesApi.md#createRoom) | **POST** /v4/nodes/rooms | Create new room
[**deleteDeletedNodes**](NodesApi.md#deleteDeletedNodes) | **DELETE** /v4/nodes/deleted_nodes | Delete nodes from recycle bin
[**deleteNode**](NodesApi.md#deleteNode) | **DELETE** /v4/nodes/{node_id} | Delete node
[**deleteNodeComment**](NodesApi.md#deleteNodeComment) | **DELETE** /v4/nodes/comments/{comment_id} | Delete node comment
[**deleteNodes**](NodesApi.md#deleteNodes) | **DELETE** /v4/nodes | Delete nodes
[**deleteRoomGroupsBatch**](NodesApi.md#deleteRoomGroupsBatch) | **DELETE** /v4/nodes/rooms/{room_id}/groups | Revoke granted group(s) from room
[**deleteRoomUsersBatch**](NodesApi.md#deleteRoomUsersBatch) | **DELETE** /v4/nodes/rooms/{room_id}/users | Revoke granted user(s) from room
[**emptyDeletedNodes**](NodesApi.md#emptyDeletedNodes) | **DELETE** /v4/nodes/{node_id}/deleted_nodes | Empty recycle bin
[**encryptRoom**](NodesApi.md#encryptRoom) | **PUT** /v4/nodes/rooms/{room_id}/encrypt | Encrypt room
[**getDataRoomFileKey**](NodesApi.md#getDataRoomFileKey) | **GET** /v4/nodes/files/{file_id}/data_room_file_key | Get room emergency password (rescue key)
[**getDataSpaceFileKey**](NodesApi.md#getDataSpaceFileKey) | **GET** /v4/nodes/files/{file_id}/data_space_file_key | Get system emergency password (rescue key)
[**getFileData**](NodesApi.md#getFileData) | **GET** /v4/nodes/files/{file_id}/downloads | Download file
[**getFileData1**](NodesApi.md#getFileData1) | **HEAD** /v4/nodes/files/{file_id}/downloads | Download file
[**getFsDeletedNode**](NodesApi.md#getFsDeletedNode) | **GET** /v4/nodes/deleted_nodes/{deleted_node_id} | Get deleted node
[**getFsDeletedNodeVersions**](NodesApi.md#getFsDeletedNodeVersions) | **GET** /v4/nodes/{node_id}/deleted_nodes/versions | Get deleted versions of nodes
[**getFsDeletedNodesSummary**](NodesApi.md#getFsDeletedNodesSummary) | **GET** /v4/nodes/{node_id}/deleted_nodes | Get list of deleted nodes
[**getFsNode**](NodesApi.md#getFsNode) | **GET** /v4/nodes/{node_id} | Get node
[**getFsNodes**](NodesApi.md#getFsNodes) | **GET** /v4/nodes | Get list of nodes
[**getNodeComments**](NodesApi.md#getNodeComments) | **GET** /v4/nodes/{node_id}/comments | Get list of node comments
[**getNodeParents**](NodesApi.md#getNodeParents) | **GET** /v4/nodes/{node_id}/parents | Get list of parent nodes
[**getNodesAsZip**](NodesApi.md#getNodesAsZip) | **POST** /v4/nodes/zip | Generate download URL for ZIP download
[**getNodesAsZipDownload**](NodesApi.md#getNodesAsZipDownload) | **POST** /v4/nodes/zip/download | Download files / folders as ZIP archive
[**getPendingAssignments**](NodesApi.md#getPendingAssignments) | **GET** /v4/nodes/rooms/pending | Get user-room assignments per group
[**getRoomActivitiesLog**](NodesApi.md#getRoomActivitiesLog) | **GET** /v4/nodes/rooms/{room_id}/events | Get events of a room
[**getRoomActivitiesLog1**](NodesApi.md#getRoomActivitiesLog1) | **GET** /v4/nodes/rooms/{room_id}/activities_log | Get events of a room
[**getRoomGroups**](NodesApi.md#getRoomGroups) | **GET** /v4/nodes/rooms/{room_id}/groups | Get room granted group(s) or / and group(s) that can be granted
[**getRoomS3Tags**](NodesApi.md#getRoomS3Tags) | **GET** /v4/nodes/rooms/{room_id}/s3_tags | Get list of all assigned S3 tags to the room
[**getRoomUsers**](NodesApi.md#getRoomUsers) | **GET** /v4/nodes/rooms/{room_id}/users | Get room granted user(s) or / and user(s) that can be granted
[**getUserFileKey**](NodesApi.md#getUserFileKey) | **GET** /v4/nodes/files/{file_id}/user_file_key | Get user&#39;s file key
[**missingFileKeys**](NodesApi.md#missingFileKeys) | **GET** /v4/nodes/missingFileKeys | Get files without user&#39;s file key
[**moveNodes**](NodesApi.md#moveNodes) | **POST** /v4/nodes/{node_id}/move_to | Move node(s)
[**restoreNodes**](NodesApi.md#restoreNodes) | **POST** /v4/nodes/deleted_nodes/actions/restore | Restore deleted nodes
[**roomRescueKey**](NodesApi.md#roomRescueKey) | **GET** /v4/nodes/rooms/{room_id}/keypair | Get room emergency password (rescue key)
[**searchFsNodes**](NodesApi.md#searchFsNodes) | **GET** /v4/nodes/search | Search nodes
[**setRoomGroupsBatch**](NodesApi.md#setRoomGroupsBatch) | **PUT** /v4/nodes/rooms/{room_id}/groups | Add or change room granted group(s)
[**setRoomS3Tags**](NodesApi.md#setRoomS3Tags) | **POST** /v4/nodes/rooms/{room_id}/s3_tags | Set S3 tags for a room
[**setRoomUsersBatch**](NodesApi.md#setRoomUsersBatch) | **PUT** /v4/nodes/rooms/{room_id}/users | Add or change room granted user(s)
[**setUserFileKeys**](NodesApi.md#setUserFileKeys) | **POST** /v4/nodes/files/keys | Set file keys for a list of users and files
[**unmarkFavorite**](NodesApi.md#unmarkFavorite) | **DELETE** /v4/nodes/{node_id}/favorite | Unmark a node (room, folder or file) as favorite
[**updateFile**](NodesApi.md#updateFile) | **PUT** /v4/nodes/files/{file_id} | Updates a file’s metadata
[**updateFolder**](NodesApi.md#updateFolder) | **PUT** /v4/nodes/folders/{folder_id} | Updates folder’s metadata
[**updateRoom**](NodesApi.md#updateRoom) | **PUT** /v4/nodes/rooms/{room_id} | Updates room’s metadata
[**uploadFile**](NodesApi.md#uploadFile) | **POST** /v4/nodes/files/uploads/{upload_id} | Upload file


# **addFavorite**
> \Swagger\Client\Model\Node addFavorite($node_id, $x_sds_auth_token, $x_sds_date_format)

Mark a node (room, folder or file) as favorite

### Functional Description:   Marks a node (room, folder or file) as favorite.  ### Precondition: User needs _\"read\"_ permissions on that node.  ### Effects: A node gets marked as favorite.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node_id = 789; // int | Node ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->addFavorite($node_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->addFavorite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **int**| Node ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Node**](../Model/Node.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelFileUpload**
> cancelFileUpload($upload_id, $x_sds_auth_token)

Cancel file upload

## &#9888; Deprecated since version 4.9.0  ### Use `uploads` API  ### Functional Description: Cancel an upload and destroy the upload channel.  ### Precondition: An upload channel has been created.  ### Effects: The upload channel is removed and all temporary uploaded data is purged.  ### &#9432; Further Information: It is recommended to notify the API about cancelled uploads if possible.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_id = "upload_id_example"; // string | Upload channel ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->cancelFileUpload($upload_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->cancelFileUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | **string**| Upload channel ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeNodeComment**
> \Swagger\Client\Model\Comment changeNodeComment($body, $comment_id, $x_sds_auth_token, $x_sds_date_format)

Edit node comment

### &#128640; Since version 4.10.0  ### Functional Description: Edit the text of an existing comment for a specific node.  ### Precondition: * User has _\"read\"_ permissions on the node. * User has to be the creator of the comment.  ### Effects: Comments text gets changed.  ### &#9432; Further Information: Maximum allowed text length: **65535** characters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ChangeNodeCommentRequest(); // \Swagger\Client\Model\ChangeNodeCommentRequest | body
$comment_id = 789; // int | Comment ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->changeNodeComment($body, $comment_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->changeNodeComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ChangeNodeCommentRequest**](../Model/ChangeNodeCommentRequest.md)| body |
 **comment_id** | **int**| Comment ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Comment**](../Model/Comment.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changePendingAssignments**
> changePendingAssignments($body, $x_sds_auth_token)

Handle user-room assignments per group

### Functional Description:   Handles a list of user-room assignments by groups that have **NOT** been approved yet   **WAITING** or **DENIED** assignments can be **ACCEPTED**.  ### Precondition: None.  ### Effects: User-room assignment is approved and the user gets access to the group.  ### &#9432; Further Information: Room administrators should **SHOULD** handle pending assignments to provide access to rooms for other users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PendingAssignmentsRequest(); // \Swagger\Client\Model\PendingAssignmentsRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->changePendingAssignments($body, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->changePendingAssignments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PendingAssignmentsRequest**](../Model/PendingAssignmentsRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **completeFileUpload**
> \Swagger\Client\Model\Node completeFileUpload($upload_id, $x_sds_auth_token, $x_sds_date_format, $body)

Complete file upload

## &#9888; Deprecated since version 4.9.0  ### Use `uploads` API  ### Functional Description: Finishes an upload and closes the corresponding upload channel.  ### Precondition: An upload channel has been created and data has been transmitted.  ### Effects: The upload is finished and the temporary file is moved to the productive environment.  ### &#9432; Further Information: The provided file name might be changed in accordance with the resolution strategy:   * **autorename**: changes the file name and adds a number to avoid conflicts. * **overwrite**: deletes any old file with the same file name. * **fail**: returns an error; in this case, another `PUT` request with a different file name may be sent.  Please ensure that all chunks have been transferred correctly before finishing the upload.  ### Node naming convention  * Node (room, folder, file) names are limited to **150** characters.  * Not allowed names:   `'CON', 'PRN', 'AUX', 'NUL', 'COM1', 'COM2', 'COM3', 'COM4', 'COM5', 'COM6', 'COM7', 'COM8', 'COM9', 'LPT1', 'LPT2', 'LPT3', 'LPT4', 'LPT5', 'LPT6', 'LPT7', 'LPT8', 'LPT9', (and any of those with an extension)`  * Not allowed characters in names:   `'\\\\', '<','>', ':', '\\\"', '|', '?', '*', '/', leading '-', trailing '.' `  ### 200 OK is **NOT** used by this API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_id = "upload_id_example"; // string | Upload channel ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$body = new \Swagger\Client\Model\CompleteUploadRequest(); // \Swagger\Client\Model\CompleteUploadRequest | body

try {
    $result = $apiInstance->completeFileUpload($upload_id, $x_sds_auth_token, $x_sds_date_format, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->completeFileUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | **string**| Upload channel ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **body** | [**\Swagger\Client\Model\CompleteUploadRequest**](../Model/CompleteUploadRequest.md)| body | [optional]

### Return type

[**\Swagger\Client\Model\Node**](../Model/Node.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configRoom**
> \Swagger\Client\Model\Node configRoom($body, $room_id, $x_sds_auth_token, $x_sds_date_format)

Configure room

### Functional Description: Configure a room.  ### Precondition: User needs to be a room administrator.  ### Effects: Room's configuration is changed.  ### &#9432; Further Information: Provided (or default) classification is taken from room when file gets uploaded without any classification.    To set `adminIds` or `adminGroupIds` the `inheritPermissions` value has to be `false`. Otherwise use: * `PUT /nodes/rooms/{room_id}/groups` * `PUT /nodes/rooms/{room_id}/users `    APIs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConfigRoomRequest(); // \Swagger\Client\Model\ConfigRoomRequest | body
$room_id = 789; // int | Room ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->configRoom($body, $room_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->configRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigRoomRequest**](../Model/ConfigRoomRequest.md)| body |
 **room_id** | **int**| Room ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Node**](../Model/Node.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **copyNodes**
> \Swagger\Client\Model\Node copyNodes($body, $node_id, $x_sds_auth_token, $x_sds_date_format)

Copy node(s)

### Functional Description: Copies nodes (folder, file) to another parent.  ### Precondition: Authenticated user with _\"read\"_ permissions in the source parent and _\"create\"_ permissions in the target parent node.  ### Effects: Nodes are copied to target parent.  ### &#9432; Further Information: Nodes **MUST** be in same source parent.   &#9888; **Rooms **CANNOT** be copied.**  ### Node naming convention * Node (room, folder, file) names are limited to **150** characters.  * Not allowed names:   `'CON', 'PRN', 'AUX', 'NUL', 'COM1', 'COM2', 'COM3', 'COM4', 'COM5', 'COM6', 'COM7', 'COM8', 'COM9', 'LPT1', 'LPT2', 'LPT3', 'LPT4', 'LPT5', 'LPT6', 'LPT7', 'LPT8', 'LPT9', (and any of those with an extension)`  * Not allowed characters in names:   `'\\\\', '<','>', ':', '\\\"', '|', '?', '*', '/', leading '-', trailing '.' `

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CopyNodesRequest(); // \Swagger\Client\Model\CopyNodesRequest | body
$node_id = 789; // int | Target parent node ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->copyNodes($body, $node_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->copyNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CopyNodesRequest**](../Model/CopyNodesRequest.md)| body |
 **node_id** | **int**| Target parent node ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Node**](../Model/Node.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFileDownloadToken**
> \Swagger\Client\Model\DownloadTokenGenerateResponse createFileDownloadToken($file_id, $x_sds_auth_token)

Generate download URL

### Functional Description: Create a download URL to retrieve a file without `X-Sds-Auth-Token` Header.  ### Precondition: User with _\"read\"_ permissions in parent room.  ### Effects: Download token is generated and returned.  ### &#9432; Further Information: The token is necessary to access `downloads` ressources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 789; // int | File ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->createFileDownloadToken($file_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->createFileDownloadToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**| File ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\DownloadTokenGenerateResponse**](../Model/DownloadTokenGenerateResponse.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFileUpload**
> \Swagger\Client\Model\CreateFileUploadResponse createFileUpload($body, $x_sds_auth_token)

Create new file upload channel

### Functional Description: This endpoint creates a new upload channel which is the first step in any file upload workflow.  ### Precondition: User has _\"create\"_ permissions in the parent container (room or folder).  ### Effects: A new upload channel for a file is created.   Its ID and an upload token are returned.  ### &#9432; Further Information: The upload ID is used for uploads with `X-Sds-Auth-Token` header, the upload token can be used for uploads without authentication header.  Please provide the size of the intended upload so that the quota can be checked in advanced and no data is transferred unnecessarily.  Notes are limited to **255** characters.  ### Node naming convention  * Node (room, folder, file) names are limited to **150** characters.  * Not allowed names:   `'CON', 'PRN', 'AUX', 'NUL', 'COM1', 'COM2', 'COM3', 'COM4', 'COM5', 'COM6', 'COM7', 'COM8', 'COM9', 'LPT1', 'LPT2', 'LPT3', 'LPT4', 'LPT5', 'LPT6', 'LPT7', 'LPT8', 'LPT9', (and any of those with an extension)`  * Not allowed characters in names:   `'\\\\', '<','>', ':', '\\\"', '|', '?', '*', '/', leading '-', trailing '.' `

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateFileUploadRequest(); // \Swagger\Client\Model\CreateFileUploadRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->createFileUpload($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->createFileUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateFileUploadRequest**](../Model/CreateFileUploadRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\CreateFileUploadResponse**](../Model/CreateFileUploadResponse.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFolder**
> \Swagger\Client\Model\Node createFolder($body, $x_sds_auth_token, $x_sds_date_format)

Create new folder

### Functional Description: Create a new folder.  ### Precondition: User has _\"create\"_ permissions in current room.  ### Effects: New folder is created.  ### &#9432; Further Information: Folders **CANNOT** be created on top level (without parent element).  Notes are limited to **255** characters.  ### Node naming convention  * Node (room, folder, file) names are limited to **150** characters.  * Not allowed names:   `'CON', 'PRN', 'AUX', 'NUL', 'COM1', 'COM2', 'COM3', 'COM4', 'COM5', 'COM6', 'COM7', 'COM8', 'COM9', 'LPT1', 'LPT2', 'LPT3', 'LPT4', 'LPT5', 'LPT6', 'LPT7', 'LPT8', 'LPT9', (and any of those with an extension)`  * Not allowed characters in names:   `'\\\\', '<','>', ':', '\\\"', '|', '?', '*', '/', leading '-', trailing '.' `

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateFolderRequest(); // \Swagger\Client\Model\CreateFolderRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->createFolder($body, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->createFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateFolderRequest**](../Model/CreateFolderRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Node**](../Model/Node.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNodeComment**
> \Swagger\Client\Model\Comment createNodeComment($body, $node_id, $x_sds_auth_token, $x_sds_date_format)

Create node comment

### &#128640; Since version 4.10.0  ### Functional Description: Create a comment for a specific node.  ### Precondition: User has _\"read\"_ permissions on the node.  ### Effects: Comment is created.  ### &#9432; Further Information: Maximum allowed text length: **65535** characters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateNodeCommentRequest(); // \Swagger\Client\Model\CreateNodeCommentRequest | body
$node_id = 789; // int | Node ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->createNodeComment($body, $node_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->createNodeComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateNodeCommentRequest**](../Model/CreateNodeCommentRequest.md)| body |
 **node_id** | **int**| Node ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Comment**](../Model/Comment.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRoom**
> \Swagger\Client\Model\Node createRoom($body, $x_sds_auth_token, $x_sds_date_format)

Create new room

### Functional Description: Creates a new room at the provided parent node.   Creation of top level rooms provided.  ### Precondition: User has _\"manage\"_ permissions in the parent room.  ### Effects: A new room is created.  ### &#9432; Further Information:   Rooms may only have other rooms as parent.   Rooms on top level do **NOT** have any parent.   Rooms may have rooms as children on n hierarchy levels.   If permission inheritance is disabled, there **MUST** be at least one admin user / group (with neither the group nor the user having an expiration date).  Notes are limited to **255** characters.  Provided (or default) classification is taken from room when file gets uploaded without any classification.  ### Node naming convention  * Node (room, folder, file) names are limited to **150** characters.  * Not allowed names:   `'CON', 'PRN', 'AUX', 'NUL', 'COM1', 'COM2', 'COM3', 'COM4', 'COM5', 'COM6', 'COM7', 'COM8', 'COM9', 'LPT1', 'LPT2', 'LPT3', 'LPT4', 'LPT5', 'LPT6', 'LPT7', 'LPT8', 'LPT9', (and any of those with an extension)`  * Not allowed characters in names:   `'\\\\', '<','>', ':', '\\\"', '|', '?', '*', '/', leading '-', trailing '.' `

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateRoomRequest(); // \Swagger\Client\Model\CreateRoomRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->createRoom($body, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->createRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateRoomRequest**](../Model/CreateRoomRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Node**](../Model/Node.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeletedNodes**
> deleteDeletedNodes($body, $x_sds_auth_token)

Delete nodes from recycle bin

### Functional Description: Permanently remove a list of nodes from the recycle bin.  ### Precondition: User has _\"delete recycle bin\"_ permissions in parent room.  ### Effects: All provided nodes are removed.  ### &#9432; Further Information: The removal of deleted nodes from the recycle bin is irreversible.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DeleteDeletedNodesRequest(); // \Swagger\Client\Model\DeleteDeletedNodesRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteDeletedNodes($body, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->deleteDeletedNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeleteDeletedNodesRequest**](../Model/DeleteDeletedNodesRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNode**
> deleteNode($node_id, $x_sds_auth_token)

Delete node

### Functional Description: Delete node (room, folder or file).  ### Precondition: Authenticated user with _\"delete\"_ permissions on: * supplied nodes (for folders or files) * superordinated node (for rooms)  ### Effects: Node gets deleted.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node_id = 789; // int | Node ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteNode($node_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->deleteNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **int**| Node ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNodeComment**
> deleteNodeComment($comment_id, $x_sds_auth_token)

Delete node comment

### &#128640; Since version 4.10.0  ### Functional Description: Delete an existing comment for a specific node.  ### Precondition: * User has _\"read\"_ permissions on the node. * User has to be:     * Creator of the comment **OR**     * Room administrator in auth parent room.  ### Effects: Comment is deleted.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = 789; // int | Comment ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteNodeComment($comment_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->deleteNodeComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **int**| Comment ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNodes**
> deleteNodes($body, $x_sds_auth_token)

Delete nodes

### Functional Description: Delete nodes (room, folder or file).  ### Precondition: Authenticated user with _\"delete\"_ permissions on: * supplied nodes (for folders or files) * superordinated node (for rooms)  ### Effects: Nodes are deleted.  ### &#9432; Further Information: Nodes **MUST** be in same parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DeleteNodesRequest(); // \Swagger\Client\Model\DeleteNodesRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteNodes($body, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->deleteNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeleteNodesRequest**](../Model/DeleteNodesRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoomGroupsBatch**
> deleteRoomGroupsBatch($body, $room_id, $x_sds_auth_token, $x_sds_date_format)

Revoke granted group(s) from room

### Functional Description:   Batch function.   Revoke granted groups from room.  ### Precondition: User needs to be a room administrator.  ### Effects: Group's permissions are revoked.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RoomGroupsDeleteBatchRequest(); // \Swagger\Client\Model\RoomGroupsDeleteBatchRequest | body
$room_id = 789; // int | Room ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $apiInstance->deleteRoomGroupsBatch($body, $room_id, $x_sds_auth_token, $x_sds_date_format);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->deleteRoomGroupsBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RoomGroupsDeleteBatchRequest**](../Model/RoomGroupsDeleteBatchRequest.md)| body |
 **room_id** | **int**| Room ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoomUsersBatch**
> deleteRoomUsersBatch($body, $room_id, $x_sds_auth_token)

Revoke granted user(s) from room

### Functional Description:   Batch function.   Revoke granted users from room.  ### Precondition: User needs to be a room administrator.  ### Effects: User's permissions are revoked.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RoomUsersDeleteBatchRequest(); // \Swagger\Client\Model\RoomUsersDeleteBatchRequest | body
$room_id = 789; // int | Room ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteRoomUsersBatch($body, $room_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->deleteRoomUsersBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RoomUsersDeleteBatchRequest**](../Model/RoomUsersDeleteBatchRequest.md)| body |
 **room_id** | **int**| Room ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emptyDeletedNodes**
> emptyDeletedNodes($node_id, $x_sds_auth_token)

Empty recycle bin

### Functional Description:   Empty a recycle bin.  ### Precondition: User has _\"delete recycle bin\"_ permissions in parent room.  ### Effects: All files in the recycle bin are permanently removed.  ### &#9432; Further Information: Actually removes the previously deleted files from the system.   &#9888; **This action is irreversible.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node_id = 789; // int | Room ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->emptyDeletedNodes($node_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->emptyDeletedNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **int**| Room ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **encryptRoom**
> \Swagger\Client\Model\Node encryptRoom($body, $room_id, $x_sds_auth_token, $x_sds_date_format)

Encrypt room

### Functional Description:   Activates the client-side encryption for a room.  ### Precondition: User needs to be a room administrator.  ### Effects: Encryption of room is activated.  ### &#9432; Further Information: Only empty rooms at the top level may be encrypted.   This endpoint may also be used to disable encryption of an empty room.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EncryptRoomRequest(); // \Swagger\Client\Model\EncryptRoomRequest | body
$room_id = 789; // int | Room ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->encryptRoom($body, $room_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->encryptRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EncryptRoomRequest**](../Model/EncryptRoomRequest.md)| body |
 **room_id** | **int**| Room ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Node**](../Model/Node.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataRoomFileKey**
> \Swagger\Client\Model\FileKey getDataRoomFileKey($file_id, $x_sds_auth_token)

Get room emergency password (rescue key)

### Functional Description:   Returns the file key for the room emergency password / rescue key of a certain file (if available).  ### Precondition: User with _\"read\"_ permissions in parent room.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 789; // int | File ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getDataRoomFileKey($file_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getDataRoomFileKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**| File ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\FileKey**](../Model/FileKey.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataSpaceFileKey**
> \Swagger\Client\Model\FileKey getDataSpaceFileKey($file_id, $x_sds_auth_token)

Get system emergency password (rescue key)

### Functional Description:   Returns the file key for the system emergency password / rescue key of a certain file (if available).  ### Precondition: User with _\"read\"_ permissions in parent room.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 789; // int | File ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getDataSpaceFileKey($file_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getDataSpaceFileKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**| File ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\FileKey**](../Model/FileKey.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileData**
> int getFileData($file_id, $range, $x_sds_auth_token, $generic_mimetype, $inline)

Download file

## &#9888; Deprecated since version 4.3.0  ### Use `downloads` API  ### Functional Description: Download a file.  ### Precondition: User with _\"read\"_ permissions in parent room.  ### Effects: None.  ### &#9432; Further Information: Range requests are supported (please cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) for details).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 789; // int | File ID
$range = "range_example"; // string | Range  e.g. `bytes=0-999/3980` cf. [RFC 7233](https://tools.ietf.org/html/rfc7233)
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$generic_mimetype = true; // bool | Always return `application/octet-stream` instead of specific mimetype
$inline = true; // bool | Use Content-Disposition: `inline` instead of `attachment`

try {
    $result = $apiInstance->getFileData($file_id, $range, $x_sds_auth_token, $generic_mimetype, $inline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getFileData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**| File ID |
 **range** | **string**| Range  e.g. &#x60;bytes&#x3D;0-999/3980&#x60; cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) | [optional]
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **generic_mimetype** | **bool**| Always return &#x60;application/octet-stream&#x60; instead of specific mimetype | [optional]
 **inline** | **bool**| Use Content-Disposition: &#x60;inline&#x60; instead of &#x60;attachment&#x60; | [optional]

### Return type

**int**

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileData1**
> int getFileData1($file_id, $range, $x_sds_auth_token, $generic_mimetype, $inline)

Download file

## &#9888; Deprecated since version 4.3.0  ### Use `downloads` API  ### Functional Description: Download a file.  ### Precondition: User with _\"read\"_ permissions in parent room.  ### Effects: None.  ### &#9432; Further Information: Range requests are supported (please cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) for details).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 789; // int | File ID
$range = "range_example"; // string | Range  e.g. `bytes=0-999/3980` cf. [RFC 7233](https://tools.ietf.org/html/rfc7233)
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$generic_mimetype = true; // bool | Always return `application/octet-stream` instead of specific mimetype
$inline = true; // bool | Use Content-Disposition: `inline` instead of `attachment`

try {
    $result = $apiInstance->getFileData1($file_id, $range, $x_sds_auth_token, $generic_mimetype, $inline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getFileData1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**| File ID |
 **range** | **string**| Range  e.g. &#x60;bytes&#x3D;0-999/3980&#x60; cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) | [optional]
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **generic_mimetype** | **bool**| Always return &#x60;application/octet-stream&#x60; instead of specific mimetype | [optional]
 **inline** | **bool**| Use Content-Disposition: &#x60;inline&#x60; instead of &#x60;attachment&#x60; | [optional]

### Return type

**int**

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFsDeletedNode**
> \Swagger\Client\Model\DeletedNode getFsDeletedNode($deleted_node_id, $x_sds_auth_token, $x_sds_date_format)

Get deleted node

### Functional Description:   Get metadata of a deleted node.  ### Precondition: User can access parent room and has _\"read recycle bin\"_ permissions.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleted_node_id = 789; // int | Deleted node ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->getFsDeletedNode($deleted_node_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getFsDeletedNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleted_node_id** | **int**| Deleted node ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\DeletedNode**](../Model/DeletedNode.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFsDeletedNodeVersions**
> \Swagger\Client\Model\DeletedNodeVersionsList getFsDeletedNodeVersions($name, $node_id, $type, $x_sds_auth_token, $x_sds_date_format, $limit, $offset, $sort)

Get deleted versions of nodes

### Functional Description:   Retrieve all deleted versions of a node.  ### Precondition: User can access parent room and has _\"read recycle bin\"_ permissions.  ### Effects: None.  ### &#9432; Further Information: The node is identified by three parameters: * parent ID (only room IDs are accepted as parent ID since only rooms may have a recycle bin.) * name * type (file, folder).  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are **NOT** supported.   Example: > `expireAt:desc`   Sort by `expireAt` descending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`expireAt`** | Expiration date | | **`accessedAt`** | Last access date | | **`size`** | Node size | | **`classification`** | Classification ID:<ul><li>1 - public</li><li>2 - internal</li><li>3 - confidential</li><li>4 - strictly confidential</li></ul> | | **`createdAt`** | Creation date | | **`createdBy`** | Creator first name, last name | | **`updatedAt`** | Last modification date | | **`updatedBy`** | Last modifier first name, last name | | **`deletedAt`** | Deleted date | | **`deletedBy`** | Deleter first name, last name |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Node name
$node_id = 789; // int | Parent ID (can only be a room ID)
$type = "type_example"; // string | Node type
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset
$sort = "sort_example"; // string | Sort string

try {
    $result = $apiInstance->getFsDeletedNodeVersions($name, $node_id, $type, $x_sds_auth_token, $x_sds_date_format, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getFsDeletedNodeVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Node name |
 **node_id** | **int**| Parent ID (can only be a room ID) |
 **type** | **string**| Node type |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]
 **sort** | **string**| Sort string | [optional]

### Return type

[**\Swagger\Client\Model\DeletedNodeVersionsList**](../Model/DeletedNodeVersionsList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFsDeletedNodesSummary**
> \Swagger\Client\Model\DeletedNodeSummaryList getFsDeletedNodesSummary($node_id, $x_sds_auth_token, $x_sds_date_format, $filter, $limit, $offset, $sort)

Get list of deleted nodes

### Functional Description:   Retrieve a list of deleted nodes in a recycle bin.  ### Precondition: User can access parent room and has _\"read recycle bin\"_ permissions.  ### Effects: None.  ### &#9432; Further Information: Only room IDs are accepted as parent ID since only rooms may have a recycle bin.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE[:VALUE...]`   Example: > `type:eq:file:folder|name:cn:searchString_1|parentPath:cn:searchString_2`   Get deleted nodes where type equals (`file` **OR** `folder`) **AND** deleted node name containing `searchString_1` **AND** deleted node parent path containing `searchString 2`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`type`** | Node type filter | `eq` | Node type equals value(s).<br>Multiple values are allowed and will be connected via logical disjunction (**OR**).<br>e.g. `type:eq:folder:file` | <ul><li>`folder`</li><li>`file`</li></ul> | | **`name`** | Node name filter | `cn` | Node name contains value. | `search String` | | **`parentPath`** | Parent path filter | `cn` | Parent path contains value. | `search String` |  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are **NOT** supported.   **Nodes are sorted by type first, then by sent sort string.**   Example: > `name:desc`   Sort by `name` descending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`name`** | Node name | | **`cntVersions`** | Number of deleted versions of this file | | **`firstDeletedAt`** | First deleted version | | **`lastDeletedAt`** | Last deleted version | | **`parentPath`** | Parent path of deleted node |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node_id = 789; // int | Parent ID (can only be a room ID)
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$filter = "filter_example"; // string | Filter string
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset
$sort = "sort_example"; // string | Sort string

try {
    $result = $apiInstance->getFsDeletedNodesSummary($node_id, $x_sds_auth_token, $x_sds_date_format, $filter, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getFsDeletedNodesSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **int**| Parent ID (can only be a room ID) |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **filter** | **string**| Filter string | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]
 **sort** | **string**| Sort string | [optional]

### Return type

[**\Swagger\Client\Model\DeletedNodeSummaryList**](../Model/DeletedNodeSummaryList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFsNode**
> \Swagger\Client\Model\Node getFsNode($node_id, $x_sds_auth_token, $x_sds_date_format)

Get node

### Functional Description:   Get node (room, folder or file).  ### Precondition: User has _\"read\"_ permissions in auth parent room.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node_id = 789; // int | Node ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->getFsNode($node_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getFsNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **int**| Node ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Node**](../Model/Node.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFsNodes**
> \Swagger\Client\Model\NodeList getFsNodes($x_sds_auth_token, $x_sds_date_format, $depth_level, $filter, $limit, $offset, $parent_id, $room_manager, $sort)

Get list of nodes

### Functional Description:   Provides a hierarchical list of file system nodes (rooms, folders or files) of a given parent that are accessible by the current user.  ### Precondition: Authenticated user.  ### Effects: None.  ### &#9432; Further Information: `EncryptionInfo` is **NOT** provided.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE[:VALUE...]`   Example: > `type:eq:room:folder|perm:eq:read`   Get nodes where type equals (`room` **OR** `folder`) **AND** user has `read` permissions.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`type`** | Node type filter | `eq` | Node type equals value.<br>Multiple values are allowed and will be connected via logical disjunction (**OR**).<br>e.g. `type:eq:room:folder` | <ul><li>`room`</li><li>`folder`</li><li>`file`</li></ul> | | **`perm`** | Permission filter | `eq` | Permission equals value.<br>Multiple values are allowed and will be connected via logical disjunction (**OR**).<br>e.g. `perm:eq:read:create:delete` | <ul><li>`manage`</li><li>`read`</li><li>`change`</li><li>`create`</li><li>`delete`</li><li>`manageDownloadShare`</li><li>`manageUploadShare`</li><li>`canReadRecycleBin`</li><li>`canRestoreRecycleBin`</li><li>`canDeleteRecycleBin`</li></ul> | | **`childPerm`** | Same as **`perm`**, but less restrictive (applies to child nodes only) | `eq` | cf. **`perm`** | cf. **`perm`** | | **`name`** | Node name filter | `cn, eq` | Node name contains / equals value. | `search String` | | **`encrypted`** | Node encryption status filter | `eq` |  | `true or false` | | **`branchVersion`** | Node branch version filter | `ge, le` | Branch version is greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `branchVersion:ge:1423280937404`&#124;`branchVersion:le:1523280937404` | `version number` |  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are **NOT** supported.   **Nodes are sorted by type first, then by sent sort string.**   Example: > `name:desc`   Sort by `name` descending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`name`** | Node name | | **`createdAt`** | Creation date | | **`createdBy`** | Creator first name, last name | | **`updatedAt`** | Last modification date | | **`updatedBy`** | Last modifier first name, last name | | **`fileType`** | File type (extension) | | **`classification`** | Classification ID:<ul><li>1 - public</li><li>2 - internal</li><li>3 - confidential</li><li>4 - strictly confidential</li></ul> | | **`size`** | Node size | | **`cntDeletedVersions`** | Number of deleted versions of this file / folder (**NOT** recursive; for files and folders only) | | **`cntAdmins`** | (**`DEPRECATED`**)<br>Number of admins (for rooms only)| | **`cntUsers`** | (**`DEPRECATED`**)<br>Number of users (for rooms only) | | **`cntChildren`** | (**`DEPRECATED`**)<br>Number of direct children (**NOT** recursive; for rooms and folders only) |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$depth_level = 56; // int | (**DEPRECATED**: will be removed) * `0` - top level nodes only * `n` (any positive number) - include `n` levels starting from the current node
$filter = "filter_example"; // string | Filter string
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset
$parent_id = 789; // int | Parent node ID. Only rooms and folders can be parents. Parent ID `0` or empty is the root node.
$room_manager = true; // bool | Show all rooms for management perspective. Only possible for _Rooms Managers_. For all other users, it will be ignored.
$sort = "sort_example"; // string | Sort string

try {
    $result = $apiInstance->getFsNodes($x_sds_auth_token, $x_sds_date_format, $depth_level, $filter, $limit, $offset, $parent_id, $room_manager, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getFsNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **depth_level** | **int**| (**DEPRECATED**: will be removed) * &#x60;0&#x60; - top level nodes only * &#x60;n&#x60; (any positive number) - include &#x60;n&#x60; levels starting from the current node | [optional]
 **filter** | **string**| Filter string | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]
 **parent_id** | **int**| Parent node ID. Only rooms and folders can be parents. Parent ID &#x60;0&#x60; or empty is the root node. | [optional]
 **room_manager** | **bool**| Show all rooms for management perspective. Only possible for _Rooms Managers_. For all other users, it will be ignored. | [optional]
 **sort** | **string**| Sort string | [optional]

### Return type

[**\Swagger\Client\Model\NodeList**](../Model/NodeList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNodeComments**
> \Swagger\Client\Model\CommentList getNodeComments($node_id, $x_sds_auth_token, $x_sds_date_format, $hide_deleted, $limit, $offset)

Get list of node comments

### &#128640; Since version 4.10.0  ### Functional Description: Get comments for a specific node.  ### Precondition: User has _\"read\"_ permissions on the node.  ### Effects: List with comments (sorted by `createdAt` timestamp) is returned.  ### &#9432; Further Information: An empty list is returned if no comments were found.   Output is limited to **500** entries. For more results please use filter criteria and paging (`offset` + `limit`).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node_id = 789; // int | Node ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$hide_deleted = true; // bool | Hide deleted comments
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset

try {
    $result = $apiInstance->getNodeComments($node_id, $x_sds_auth_token, $x_sds_date_format, $hide_deleted, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getNodeComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **int**| Node ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **hide_deleted** | **bool**| Hide deleted comments | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]

### Return type

[**\Swagger\Client\Model\CommentList**](../Model/CommentList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNodeParents**
> \Swagger\Client\Model\NodeParentList getNodeParents($node_id, $x_sds_auth_token)

Get list of parent nodes

### &#128640; Since version 4.10.0  ### Functional Description:   Requests a list of node ancestors, sorted from root node to the node's direct parent node.  ### Precondition: User is allowed to browse through the node tree until the requested node.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node_id = 789; // int | Node ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getNodeParents($node_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getNodeParents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **int**| Node ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\NodeParentList**](../Model/NodeParentList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNodesAsZip**
> \Swagger\Client\Model\DownloadTokenGenerateResponse getNodesAsZip($body, $x_sds_auth_token)

Generate download URL for ZIP download

### Functional Description:   Create a download URL to retrieve several files in one ZIP archive.  ### Precondition: User has _\"read\"_ permissions in parent room.  ### Effects: Download URL is generated and returned.  ### &#9432; Further Information: The token is necessary to access `downloads` resources.   ZIP download is only available for files and folders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ZipDownloadRequest(); // \Swagger\Client\Model\ZipDownloadRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getNodesAsZip($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getNodesAsZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ZipDownloadRequest**](../Model/ZipDownloadRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\DownloadTokenGenerateResponse**](../Model/DownloadTokenGenerateResponse.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNodesAsZipDownload**
> int getNodesAsZipDownload($body, $x_sds_auth_token)

Download files / folders as ZIP archive

### Functional Description:   Download multiple files in a ZIP archive.  ### Precondition: None.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ZipDownloadRequest(); // \Swagger\Client\Model\ZipDownloadRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getNodesAsZipDownload($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getNodesAsZipDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ZipDownloadRequest**](../Model/ZipDownloadRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

**int**

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPendingAssignments**
> \Swagger\Client\Model\PendingAssignmentList getPendingAssignments($x_sds_auth_token, $filter, $limit, $offset, $sort)

Get user-room assignments per group

### Functional Description:   Requests a list of user-room assignments by groups that have **NOT** been approved yet   These can have the state: * **WAITING**   * **DENIED**   * **ACCEPTED**    **ACCEPTED** assignments are already removed from the list.  ### Precondition: None.  ### Effects: None.  ### &#9432; Further Information: Room administrators **SHOULD** regularly request pending assingments to provide access to rooms for other users.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE`   Example: > `state:eq:WAITING`   Filter assignments by state `WAITING`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`userId`** | User ID filter | `eq` | User ID equals value. | `positive Integer` | | **`groupId`** | Group ID filter | `eq` | Group ID equals value. | `positive Integer` | | **`roomId`** | Room ID filter | `eq` | Room ID equals value. | `positive Integer` | | **`state`** | Assignment state | `eq` | Assignment state equals value. | `WAITING or DENIED` |  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are **NOT** supported.   Example: > `userId:desc`   Sort by `userId` descending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`userId`** | User ID | | **`groupId`** | Group ID | | **`roomId`** | Room ID | | **`state`** | State |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$filter = "filter_example"; // string | Filter string
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset
$sort = "sort_example"; // string | Sort string

try {
    $result = $apiInstance->getPendingAssignments($x_sds_auth_token, $filter, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getPendingAssignments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **filter** | **string**| Filter string | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]
 **sort** | **string**| Sort string | [optional]

### Return type

[**\Swagger\Client\Model\PendingAssignmentList**](../Model/PendingAssignmentList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoomActivitiesLog**
> \Swagger\Client\Model\LogEventList getRoomActivitiesLog($room_id, $x_sds_auth_token, $x_sds_date_format, $date_end, $date_start, $limit, $offset, $sort, $status, $type, $user_id)

Get events of a room

### &#128640; Since version 4.3.0  ### Functional Description: Retrieve syslog (audit log) events related to a room.  ### Precondition: Requires _\"read\"_ permissions on that room.  ### Effects: None.  ### &#9432; Further Information: Output is limited to **500** entries. For more results please use filter criteria and paging (`offset` + `limit`).  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are supported.   Example: > `time:desc`   Sort by `time` descending (default sort option).  | `FIELD_NAME` | Description | | :--- | :--- | | **`time`** | Event timestamp |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 789; // int | Room ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$date_end = "date_end_example"; // string | End date e.g. `2015-12-31T23:59:00`
$date_start = "date_start_example"; // string | Start date e.g. `2015-12-31T23:59:00`
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset
$sort = "sort_example"; // string | Sort string
$status = 56; // int | Operation status: * `0` - Success * `2` - Error
$type = 56; // int | Operation ID cf. `GET /eventlog/operations`
$user_id = 789; // int | User ID

try {
    $result = $apiInstance->getRoomActivitiesLog($room_id, $x_sds_auth_token, $x_sds_date_format, $date_end, $date_start, $limit, $offset, $sort, $status, $type, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getRoomActivitiesLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **int**| Room ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **date_end** | **string**| End date e.g. &#x60;2015-12-31T23:59:00&#x60; | [optional]
 **date_start** | **string**| Start date e.g. &#x60;2015-12-31T23:59:00&#x60; | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]
 **sort** | **string**| Sort string | [optional]
 **status** | **int**| Operation status: * &#x60;0&#x60; - Success * &#x60;2&#x60; - Error | [optional]
 **type** | **int**| Operation ID cf. &#x60;GET /eventlog/operations&#x60; | [optional]
 **user_id** | **int**| User ID | [optional]

### Return type

[**\Swagger\Client\Model\LogEventList**](../Model/LogEventList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoomActivitiesLog1**
> \Swagger\Client\Model\SyslogEventList getRoomActivitiesLog1($room_id, $x_sds_auth_token, $x_sds_date_format, $date_end, $date_start, $limit, $offset, $sort, $status, $type, $user_id)

Get events of a room

## &#9888; Deprecated since version 4.3.0  ### Use `nodes/rooms/{room_id}/events` API  ### Functional Description: Retrieve syslog (audit log) events related to a room.  ### Precondition: Requires _\"read\"_ permissions on that room.  ### Effects: None.  ### &#9432; Further Information: Output may be limited to a certain number of entries.   Please use filter criteria and paging.  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are supported.   Example: > `time:desc`   Sort by `time` descending (default sort option).  | `FIELD_NAME` | Description | | :--- | :--- | | **`time`** | Event timestamp |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 789; // int | Room ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$date_end = "date_end_example"; // string | End date e.g. `2015-12-31T23:59:00`
$date_start = "date_start_example"; // string | Start date e.g. `2015-12-31T23:59:00`
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset
$sort = "sort_example"; // string | Sort string
$status = 56; // int | Operation status: * `0` - Success * `2` - Error
$type = 56; // int | Operation ID cf. `GET /eventlog/operations`
$user_id = 789; // int | User ID

try {
    $result = $apiInstance->getRoomActivitiesLog1($room_id, $x_sds_auth_token, $x_sds_date_format, $date_end, $date_start, $limit, $offset, $sort, $status, $type, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getRoomActivitiesLog1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **int**| Room ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **date_end** | **string**| End date e.g. &#x60;2015-12-31T23:59:00&#x60; | [optional]
 **date_start** | **string**| Start date e.g. &#x60;2015-12-31T23:59:00&#x60; | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]
 **sort** | **string**| Sort string | [optional]
 **status** | **int**| Operation status: * &#x60;0&#x60; - Success * &#x60;2&#x60; - Error | [optional]
 **type** | **int**| Operation ID cf. &#x60;GET /eventlog/operations&#x60; | [optional]
 **user_id** | **int**| User ID | [optional]

### Return type

[**\Swagger\Client\Model\SyslogEventList**](../Model/SyslogEventList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoomGroups**
> \Swagger\Client\Model\RoomGroupList getRoomGroups($room_id, $x_sds_auth_token, $filter, $limit, $offset)

Get room granted group(s) or / and group(s) that can be granted

### Functional Description:   Retrieve a list of groups that are and / or can be granted to the room.  ### Precondition: Any permissions on target room.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE`   Example: > `isGranted:eq:false|name:cn:searchString`   Get all groups that are **NOT** granted to this room **AND** whose name is like `searchString`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`name`** | Group name filter | `cn` | Group name contains value. | `search String` | | **`groupId`** | Group ID filter | `eq` | Group ID equals value. | `positive Integer` | | **`isGranted`** | Filter the groups that have (no) access to this room.<br>**This filter is only available for room administrators.**<br>**Other users can only look for groups in their rooms, so this filter is `true` and **CANNOT** be overridden.** | `eq` |  | <ul><li>`true`</li><li>`false`</li><li>`any`</li></ul>default: `true` | | **`permissionsManage`** | Filter the groups that do (not) have `manage` permissions in this room. | `eq` |  | `true or false` | | **`effectivePerm`** | Filter groups with DIRECT or DIRECT **AND** EFFECTIVE permissions<ul><li>`false`: DIRECT permissions</li><li>`true`: DIRECT **AND** EFFECTIVE permissions</li></ul>DIRECT means: e.g. room administrator grants `read` permissions to group of users **directly** on desired room.<br>EFFECTIVE means: e.g. group of users gets `read` permissions on desired room through **inheritance**. | `eq` |  | `true or false`<br>default: `false` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 789; // int | Room ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$filter = "filter_example"; // string | Filter string
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset

try {
    $result = $apiInstance->getRoomGroups($room_id, $x_sds_auth_token, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getRoomGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **int**| Room ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **filter** | **string**| Filter string | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]

### Return type

[**\Swagger\Client\Model\RoomGroupList**](../Model/RoomGroupList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoomS3Tags**
> \Swagger\Client\Model\S3TagList getRoomS3Tags($room_id, $x_sds_auth_token)

Get list of all assigned S3 tags to the room

### &#128640; Since version 4.9.0  ### Functional Description:   Retrieve a list of S3 tags assigned to a room.  ### Precondition: User needs to be a room administrator.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 789; // int | Room ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getRoomS3Tags($room_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getRoomS3Tags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **int**| Room ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\S3TagList**](../Model/S3TagList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoomUsers**
> \Swagger\Client\Model\RoomUserList getRoomUsers($room_id, $x_sds_auth_token, $filter, $limit, $offset)

Get room granted user(s) or / and user(s) that can be granted

### Functional Description:   Retrieve a list of users that are and / or can be granted to the room.  ### Precondition: Any permissions on target room.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE`   Example: > `permissionsManage:eq:true|user:cn:searchString`   Get all users that have `manage` permissions to this room **AND** whose (`firstName` **OR** `lastName` **OR** `email` **OR** `username`) is like `searchString`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`user`** | User filter | `cn` | User contains value (`firstName` **OR** `lastName` **OR** `email` **OR** `username`). | `search String` | | **`userId`** | User ID filter | `eq` | User ID equals value. | `positive Integer` | | **`isGranted`** | Filter the users that have (no) access to this room.<br>**This filter is only available for room administrators.**<br>**Other users can only look for users in their rooms, so this filter is `true` and **CANNOT** be overridden.** | `eq` |  | <ul><li>`true`</li><li>`false`</li><li>`any`</li></ul>default: `true` | | **`permissionsManage`** | Filter the users that do (not) have `manage` permissions in this room. | `eq` |  | `true or false` | | **`effectivePerm`** | Filter users with DIRECT or DIRECT **AND** EFFECTIVE permissions<ul><li>`false`: DIRECT permissions</li><li>`true`: DIRECT **AND** EFFECTIVE permissions</li><li>`any`: DIRECT **AND** EFFECTIVE **AND** OVER GROUP permissions</li></ul>DIRECT means: e.g. room administrator grants `read` permissions to group of users **directly** on desired room.<br>EFFECTIVE means: e.g. group of users gets `read` permissions on desired room through **inheritance**.<br>OVER GROUP means: e.g. user gets `read` permissions on desired room through **group membership**. | `eq` |  | <ul><li>`true`</li><li>`false`</li><li>`any`</li></ul>default: `false` | | **`displayName`** | (**`DEPRECATED`**) User display name filter (use **`user`** filter) | `cn` | User display name contains value (`firstName` **OR** `lastName` **OR** `email`). | `search String` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 789; // int | Room ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$filter = "filter_example"; // string | Filter string
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset

try {
    $result = $apiInstance->getRoomUsers($room_id, $x_sds_auth_token, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getRoomUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **int**| Room ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **filter** | **string**| Filter string | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]

### Return type

[**\Swagger\Client\Model\RoomUserList**](../Model/RoomUserList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserFileKey**
> \Swagger\Client\Model\FileKey getUserFileKey($file_id, $x_sds_auth_token)

Get user's file key

### Functional Description:   Returns the file key for the current user (if available).  ### Precondition: User with _\"read\"_, _\"create\"_ or _\"manage download share\"_ permissions in parent room.  ### Effects: None.  ### &#9432; Further Information: The symmetric file key is encrypted with the user's public key.   File keys are generated with the workflow _\"Generate file keys\"_ that starts at `GET /nodes/missingFileKeys`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 789; // int | File ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getUserFileKey($file_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getUserFileKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**| File ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\FileKey**](../Model/FileKey.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **missingFileKeys**
> \Swagger\Client\Model\MissingKeysResponse missingFileKeys($x_sds_auth_token, $file_id, $limit, $offset, $room_id, $user_id)

Get files without user's file key

### Functional Description:   Requests a list of missing file keys that may be generated by the current user.   Only returns users that owns one of the following permissions  * *`manage`*  * *`read`*  * *`manageDownloadShare`*  ### Precondition: User has a keypair.  ### Effects: None.  ### &#9432; Further Information: Clients **SHOULD** regularly request missing file keys to provide access to files for other users.   The returned list is ordered by priority (emergency passwords / rescue keys are returned first).    ### Please note:  This API returns **1024** entries at maximum.   There might be more entries even if a total of 1024 is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$file_id = 789; // int | File ID
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset
$room_id = 789; // int | Room ID
$user_id = 789; // int | User ID

try {
    $result = $apiInstance->missingFileKeys($x_sds_auth_token, $file_id, $limit, $offset, $room_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->missingFileKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **file_id** | **int**| File ID | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]
 **room_id** | **int**| Room ID | [optional]
 **user_id** | **int**| User ID | [optional]

### Return type

[**\Swagger\Client\Model\MissingKeysResponse**](../Model/MissingKeysResponse.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveNodes**
> \Swagger\Client\Model\Node moveNodes($body, $node_id, $x_sds_auth_token, $x_sds_date_format)

Move node(s)

### Functional Description:   Moves nodes (folder, file) to another parent.  ### Precondition: Authenticated user with _\"read\"_ and _\"delete\"_ permissions in the source parent and _\"create\"_ permissions in the target parent node.  ### Effects: Nodes are moved to target parent.  ### &#9432; Further Information: Nodes **MUST** be in same source parent.   &#9888; **Rooms **CANNOT** be moved.**  ### Node naming convention  * Node (room, folder, file) names are limited to **150** characters.  * Not allowed names:   `'CON', 'PRN', 'AUX', 'NUL', 'COM1', 'COM2', 'COM3', 'COM4', 'COM5', 'COM6', 'COM7', 'COM8', 'COM9', 'LPT1', 'LPT2', 'LPT3', 'LPT4', 'LPT5', 'LPT6', 'LPT7', 'LPT8', 'LPT9', (and any of those with an extension)`  * Not allowed characters in names:   `'\\\\', '<','>', ':', '\\\"', '|', '?', '*', '/', leading '-', trailing '.' `

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MoveNodesRequest(); // \Swagger\Client\Model\MoveNodesRequest | body
$node_id = 789; // int | Target parent node ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->moveNodes($body, $node_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->moveNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MoveNodesRequest**](../Model/MoveNodesRequest.md)| body |
 **node_id** | **int**| Target parent node ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Node**](../Model/Node.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restoreNodes**
> restoreNodes($body, $x_sds_auth_token)

Restore deleted nodes

### Functional Description:   Restore a list of deleted nodes.  ### Precondition: User has _\"create\"_ permissions in parent room and _\"restore recycle bin\"_ permissions.  ### Effects: The selected files are moved from the recycle bin to the chosen productive container.  ### &#9432; Further Information: If no parent ID is provided, the node is restored to its previous location.   The default resolution strategy is `autorename` that adds numbers to the file name until the conflict is solved.   If an existing file is overwritten, it is moved to the recycle bin instead of the restored one.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RestoreDeletedNodesRequest(); // \Swagger\Client\Model\RestoreDeletedNodesRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->restoreNodes($body, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->restoreNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RestoreDeletedNodesRequest**](../Model/RestoreDeletedNodesRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roomRescueKey**
> \Swagger\Client\Model\UserKeyPairContainer roomRescueKey($room_id, $x_sds_auth_token)

Get room emergency password (rescue key)

### Functional Description:   Retrieve the room emergency password (rescue key).  ### Precondition: User has _\"read\"_ permissions in that room.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 789; // int | Room ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->roomRescueKey($room_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->roomRescueKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **int**| Room ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\UserKeyPairContainer**](../Model/UserKeyPairContainer.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchFsNodes**
> \Swagger\Client\Model\NodeList searchFsNodes($search_string, $x_sds_auth_token, $x_sds_date_format, $depth_level, $filter, $limit, $offset, $parent_id, $sort)

Search nodes

### Functional Description:   Provides a flat list of file system nodes (rooms, folders or files) of a given parent that are accessible by the current user.  ### Precondition: Authenticated user is allowed to _\"see\"_ nodes (i.e. `isBrowsable = true`).  ### Effects: None.  ### &#9432; Further Information:   Output is limited to **500** entries.   For more results please use filter criteria and paging (`offset` + `limit`).  `EncryptionInfo` is **NOT** provided.   Wildcard character is the asterisk character: **`*`**  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**)   Filter string syntax: `FIELD_NAME:OPERATOR:VALUE[:VALUE...]`   Example: > `type:eq:file|createdAt:ge:2015-01-01`   Get nodes where type equals `file` **AND** file creation date is **>=** `2015-01-01`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`type`** | Node type filter | `eq` | Node type equals value.<br>Multiple values are allowed and will be connected via logical disjunction (**OR**).<br>e.g. `type:eq:room:folder` | <ul><li>`room`</li><li>`folder`</li><li>`file`</li></ul> | | **`fileType`** | File type filter (file extension) | `cn, eq` | File type contains / equals value. | `search String` | | **`classification`** | Classification filter | `eq` | Classification equals value. | <ul><li>`1` - public</li><li>`2` - internal</li><li>`3` - confidential</li><li>`4` - strictly confidential</li></ul> | | **`createdBy`** | Creator login filter | `cn, eq` | Creator login contains / equals value (`firstName` **OR** `lastName` **OR** `email` **OR** `username`). | `search String` | | **`createdAt`** | Creation date filter | `ge, le` | Creation date is greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `createdAt:ge:2016-12-31`&#124;`createdAt:le:2018-01-01` | `Date (yyyy-MM-dd)` | | **`updatedBy`** | Last modifier login filter | `cn, eq` | Last modifier login contains / equals value (`firstName` **OR** `lastName` **OR** `email` **OR** `username`). | `search String` | | **`updatedAt`** | Last modification date filter | `ge, le` | Last modification date is greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `updatedAt:ge:2016-12-31`&#124;`updatedAt:le:2018-01-01` | `Date (yyyy-MM-dd)` | | **`expireAt`** | Expiration date filter | `ge, le` | Expiration date is greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `expireAt:ge:2016-12-31`&#124;`expireAt:le:2018-01-01` | `Date (yyyy-MM-dd)` | | **`size`** | Node size filter | `ge, le` | Node size is greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `size:ge:5`&#124;`size:le:10` | `size in bytes` | | **`isFavorite`** | Favorite filter | `eq` |  | `true or false` | | **`branchVersion`** | Node branch version filter | `ge, le` | Branch version is greater / less equals than value.<br>Multiple operator values are allowed and will be connected via logical conjunction (**AND**).<br>e.g. `branchVersion:ge:1423280937404`&#124;`branchVersion:le:1523280937404` | `version number` | | **`parentPath`** | Parent path | `cn, eq` | Parent path contains / equals  value. | `search String` |   ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are **NOT** supported.   Example: > `name:desc`   Sort by `name` descending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`name`** | Node name | | **`createdAt`** | Creation date | | **`createdBy`** | Creator first name, last name | | **`updatedAt`** | Last modification date | | **`updatedBy`** | Last modifier first name, last name | | **`fileType`** | File type (extension) | | **`classification`** | Classification ID:<ul><li>1 - public</li><li>2 - internal</li><li>3 - confidential</li><li>4 - strictly confidential</li></ul> | | **`size`** | Node size | | **`cntDeletedVersions`** | Number of deleted versions of this file / folder (**NOT** recursive; for files and folders only) | | **`type`** | Node type (room, folder, file) | | **`parentPath`** | Parent path | | **`cntAdmins`** | (**`DEPRECATED`**)<br>Number of admins (for rooms only)| | **`cntUsers`** | (**`DEPRECATED`**)<br>Number of users (for rooms only) | | **`cntChildren`** | (**`DEPRECATED`**)<br>Number of direct children (**NOT** recursive; for rooms and folders only) |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_string = "search_string_example"; // string | Search string
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$depth_level = 56; // int | * `0` - top level nodes only (default) * `-1` - full tree * `n` (any positive number) - include `n` levels starting from the current node
$filter = "filter_example"; // string | Filter string
$limit = 56; // int | Range limit. Maximum 500.   For more results please use paging (`offset` + `limit`).
$offset = 56; // int | Range offset
$parent_id = 789; // int | Parent node ID. Only rooms and folders can be parents. Parent ID `0` or empty is the root node.
$sort = "sort_example"; // string | Sort string

try {
    $result = $apiInstance->searchFsNodes($search_string, $x_sds_auth_token, $x_sds_date_format, $depth_level, $filter, $limit, $offset, $parent_id, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->searchFsNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_string** | **string**| Search string |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **depth_level** | **int**| * &#x60;0&#x60; - top level nodes only (default) * &#x60;-1&#x60; - full tree * &#x60;n&#x60; (any positive number) - include &#x60;n&#x60; levels starting from the current node | [optional]
 **filter** | **string**| Filter string | [optional]
 **limit** | **int**| Range limit. Maximum 500.   For more results please use paging (&#x60;offset&#x60; + &#x60;limit&#x60;). | [optional]
 **offset** | **int**| Range offset | [optional]
 **parent_id** | **int**| Parent node ID. Only rooms and folders can be parents. Parent ID &#x60;0&#x60; or empty is the root node. | [optional]
 **sort** | **string**| Sort string | [optional]

### Return type

[**\Swagger\Client\Model\NodeList**](../Model/NodeList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRoomGroupsBatch**
> setRoomGroupsBatch($body, $room_id, $x_sds_auth_token)

Add or change room granted group(s)

### Functional Description: Batch function.   All existing group permissions will be overwritten.  ### Precondition: User needs to be a room administrator. To add new members, the user needs the right NONMEMBERS_ADD, which is included in any role.  ### Effects: Group's permissions are changed.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RoomGroupsAddBatchRequest(); // \Swagger\Client\Model\RoomGroupsAddBatchRequest | body
$room_id = 789; // int | Room ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->setRoomGroupsBatch($body, $room_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->setRoomGroupsBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RoomGroupsAddBatchRequest**](../Model/RoomGroupsAddBatchRequest.md)| body |
 **room_id** | **int**| Room ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRoomS3Tags**
> \Swagger\Client\Model\S3TagList setRoomS3Tags($body, $room_id, $x_sds_auth_token)

Set S3 tags for a room

### &#128640; Since version 4.9.0  ### Functional Description:   Set S3 tags to a room.  ### Precondition: User needs to be a room administrator.  ### Effects: Provided S3 tags are assigned to a room.  ### &#9432; Further Information: Every request overrides current S3 tags.   Mandatory S3 tag IDs **MUST** be sent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\S3TagIds(); // \Swagger\Client\Model\S3TagIds | body
$room_id = 789; // int | Room ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->setRoomS3Tags($body, $room_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->setRoomS3Tags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\S3TagIds**](../Model/S3TagIds.md)| body |
 **room_id** | **int**| Room ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\S3TagList**](../Model/S3TagList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRoomUsersBatch**
> setRoomUsersBatch($body, $room_id, $x_sds_auth_token)

Add or change room granted user(s)

### Functional Description: Batch function.   All existing user permissions will be overwritten.  ### Precondition: User needs to be a room administrator. To add new members, the user needs the right NONMEMBERS_ADD, which is included in any role.  ### Effects: User's permissions are changed.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RoomUsersAddBatchRequest(); // \Swagger\Client\Model\RoomUsersAddBatchRequest | body
$room_id = 789; // int | Room ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->setRoomUsersBatch($body, $room_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->setRoomUsersBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RoomUsersAddBatchRequest**](../Model/RoomUsersAddBatchRequest.md)| body |
 **room_id** | **int**| Room ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserFileKeys**
> setUserFileKeys($body, $x_sds_auth_token)

Set file keys for a list of users and files

### Functional Description:   Sets symmetric file keys for several users and files.  ### Precondition: User has file keys for the files.   FileKeys can only be set for users that own permission \"manage\" or \"read\" or \"manageDownloadShare\" in the container.  ### Effects: Stores new file keys for other users.  ### &#9432; Further Information: Only users with copies of the file key (encrypted with their public keys) can access a certain file.   This endpoint is used for the distribution of file keys amongst an authorized user base.   User can set fileKey for himself.   The users who already have a fileKey are ignored and keep the distributed fileKey

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UserFileKeySetBatchRequest(); // \Swagger\Client\Model\UserFileKeySetBatchRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->setUserFileKeys($body, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->setUserFileKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UserFileKeySetBatchRequest**](../Model/UserFileKeySetBatchRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unmarkFavorite**
> unmarkFavorite($node_id, $x_sds_auth_token)

Unmark a node (room, folder or file) as favorite

### Functional Description: Unmarks a node (room, folder or file) as favorite.  ### Precondition: User needs _\"read\"_ permissions on that node.  ### Effects: A node gets unmarked as favorite.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node_id = 789; // int | Node ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->unmarkFavorite($node_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->unmarkFavorite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **int**| Node ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFile**
> \Swagger\Client\Model\Node updateFile($body, $file_id, $x_sds_auth_token, $x_sds_date_format)

Updates a file’s metadata

### Functional Description:   Updates file’s metadata.  ### Precondition: User has _\"change\"_ permissions in parent room.  ### Effects: File's metadata is changed.  ### &#9432; Further Information: Notes are limited to **255** characters.  ### Node naming convention  * Node (room, folder, file) names are limited to **150** characters.  * Not allowed names:   `'CON', 'PRN', 'AUX', 'NUL', 'COM1', 'COM2', 'COM3', 'COM4', 'COM5', 'COM6', 'COM7', 'COM8', 'COM9', 'LPT1', 'LPT2', 'LPT3', 'LPT4', 'LPT5', 'LPT6', 'LPT7', 'LPT8', 'LPT9', (and any of those with an extension)`  * Not allowed characters in names:   `'\\\\', '<','>', ':', '\\\"', '|', '?', '*', '/', leading '-', trailing '.' `

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateFileRequest(); // \Swagger\Client\Model\UpdateFileRequest | body
$file_id = 789; // int | File ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->updateFile($body, $file_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->updateFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateFileRequest**](../Model/UpdateFileRequest.md)| body |
 **file_id** | **int**| File ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Node**](../Model/Node.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFolder**
> \Swagger\Client\Model\Node updateFolder($body, $folder_id, $x_sds_auth_token, $x_sds_date_format)

Updates folder’s metadata

### Functional Description:   Updates folder’s metadata.  ### Precondition: User has _\"change\"_ permissions in parent room.  ### Effects: Folder's metadata is changed.  ### &#9432; Further Information: Notes are limited to **255** characters.  ### Node naming convention  * Node (room, folder, file) names are limited to **150** characters.  * Not allowed names:   `'CON', 'PRN', 'AUX', 'NUL', 'COM1', 'COM2', 'COM3', 'COM4', 'COM5', 'COM6', 'COM7', 'COM8', 'COM9', 'LPT1', 'LPT2', 'LPT3', 'LPT4', 'LPT5', 'LPT6', 'LPT7', 'LPT8', 'LPT9', (and any of those with an extension)`  * Not allowed characters in names:   `'\\\\', '<','>', ':', '\\\"', '|', '?', '*', '/', leading '-', trailing '.' `

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateFolderRequest(); // \Swagger\Client\Model\UpdateFolderRequest | body
$folder_id = 789; // int | Folder ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->updateFolder($body, $folder_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->updateFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateFolderRequest**](../Model/UpdateFolderRequest.md)| body |
 **folder_id** | **int**| Folder ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Node**](../Model/Node.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRoom**
> \Swagger\Client\Model\Node updateRoom($body, $room_id, $x_sds_auth_token, $x_sds_date_format)

Updates room’s metadata

### Functional Description:   Updates room’s metadata.  ### Precondition: User is a room administrator at superordinated level.  ### Effects: Room's metadata is changed.  ### &#9432; Further Information: Notes are limited to **255** characters.  ### Node naming convention  * Node (room, folder, file) names are limited to **150** characters.  * Not allowed names:   `'CON', 'PRN', 'AUX', 'NUL', 'COM1', 'COM2', 'COM3', 'COM4', 'COM5', 'COM6', 'COM7', 'COM8', 'COM9', 'LPT1', 'LPT2', 'LPT3', 'LPT4', 'LPT5', 'LPT6', 'LPT7', 'LPT8', 'LPT9', (and any of those with an extension)`  * Not allowed characters in names:   `'\\\\', '<','>', ':', '\\\"', '|', '?', '*', '/', leading '-', trailing '.' `

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateRoomRequest(); // \Swagger\Client\Model\UpdateRoomRequest | body
$room_id = 789; // int | Room ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->updateRoom($body, $room_id, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->updateRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateRoomRequest**](../Model/UpdateRoomRequest.md)| body |
 **room_id** | **int**| Room ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\Node**](../Model/Node.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadFile**
> \Swagger\Client\Model\ChunkUploadResponse uploadFile($file, $upload_id, $content_range, $x_sds_auth_token)

Upload file

## &#9888; Deprecated since version 4.9.0  ### Use `uploads` API  ### Functional Description:   Uploads a file or parts of it in an active upload channel.  ### Precondition: An upload channel has been created.  ### Effects: A file or parts of it are uploaded to a temporary location.  ### &#9432; Further Information: This endpoints supports chunked upload.   Please cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) for further information.  Following `Content-Types` are supported by this API: * `multipart/form-data` * `application/octet-stream`    For both file upload types set the correct `Content-Type` header and body.   Examples:    * `multipart/form-data` ``` POST /api/v4/nodes/files/uploads/{upload_id} HTTP/1.1  Header: ... Content-Type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW ...  Body: ------WebKitFormBoundary7MA4YWxkTrZu0gW Content-Disposition: form-data; name=\"file\"; filename=\"file.txt\" Content-Type: text/plain  Content of file.txt ------WebKitFormBoundary7MA4YWxkTrZu0gW-- ```  * `application/octet-stream` ``` POST /api/v4/nodes/files/uploads/{upload_id}  HTTP/1.1  Header: ... Content-Type: application/octet-stream ...  Body: Content of file.txt ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File
$upload_id = "upload_id_example"; // string | Upload channel ID
$content_range = "content_range_example"; // string | Content-Range e.g. `bytes 0-999/3980` cf. [RFC 7233](https://tools.ietf.org/html/rfc7233)
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->uploadFile($file, $upload_id, $content_range, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File |
 **upload_id** | **string**| Upload channel ID |
 **content_range** | **string**| Content-Range e.g. &#x60;bytes 0-999/3980&#x60; cf. [RFC 7233](https://tools.ietf.org/html/rfc7233) | [optional]
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\ChunkUploadResponse**](../Model/ChunkUploadResponse.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

