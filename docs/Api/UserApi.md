# Swagger\Client\UserApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeAvatar**](UserApi.md#changeAvatar) | **POST** /v4/user/account/avatar | Change avatar
[**changeUserPassword**](UserApi.md#changeUserPassword) | **PUT** /v4/user/account/password | Change user&#39;s password
[**deleteAvatar**](UserApi.md#deleteAvatar) | **DELETE** /v4/user/account/avatar | Reset avatar
[**deleteOAuthAuthorization**](UserApi.md#deleteOAuthAuthorization) | **DELETE** /v4/user/oauth/authorizations/{client_id}/{authorization_id} | Delete a OAuth authorization
[**deleteOAuthAuthorizations**](UserApi.md#deleteOAuthAuthorizations) | **DELETE** /v4/user/oauth/authorizations/{client_id} | Delete all OAuth authorizations of a client
[**deleteProfileAttribute**](UserApi.md#deleteProfileAttribute) | **DELETE** /v4/user/profileAttributes/{key} | Delete user profile attribute
[**deleteUserKeyPair**](UserApi.md#deleteUserKeyPair) | **DELETE** /v4/user/account/keypair | Delete user&#39;s key pair
[**enableCustomerEncryption**](UserApi.md#enableCustomerEncryption) | **PUT** /v4/user/account/customer | Activate client-side encryption for customer
[**getAvatar**](UserApi.md#getAvatar) | **GET** /v4/user/account/avatar | Get avatar
[**getCustomerInfo**](UserApi.md#getCustomerInfo) | **GET** /v4/user/account/customer | Get customer information for user
[**getCustomerKeyPair**](UserApi.md#getCustomerKeyPair) | **GET** /v4/user/account/customer/keypair | Get customer&#39;s key pair
[**getOAuthAuthorizations**](UserApi.md#getOAuthAuthorizations) | **GET** /v4/user/oauth/authorizations | Get list of OAuth client authorizations
[**getProfileAttributes**](UserApi.md#getProfileAttributes) | **GET** /v4/user/profileAttributes | Get user profile attributes
[**getUserInfo**](UserApi.md#getUserInfo) | **GET** /v4/user/account | Get user account information
[**getUserKeyPair**](UserApi.md#getUserKeyPair) | **GET** /v4/user/account/keypair | Get user&#39;s key pair
[**setAllProfileAttributes**](UserApi.md#setAllProfileAttributes) | **POST** /v4/user/profileAttributes | Set user profile attributes
[**setProfileAttributes**](UserApi.md#setProfileAttributes) | **PUT** /v4/user/profileAttributes | Add or edit user profile attributes
[**setUserKeyPair**](UserApi.md#setUserKeyPair) | **POST** /v4/user/account/keypair | Set user&#39;s key pair
[**updateUserAccount**](UserApi.md#updateUserAccount) | **PUT** /v4/user/account | Update user account
[**userLogout**](UserApi.md#userLogout) | **POST** /v4/user/logout | Invalidate authentication token
[**userPing**](UserApi.md#userPing) | **GET** /v4/user/ping | (authenticated) Ping


# **changeAvatar**
> \Swagger\Client\Model\Avatar changeAvatar($file, $x_sds_auth_token)

Change avatar

### &#128640; Since version 4.11.0  ### Functional Description: Change the avatar.  ### Precondition: Authenticated user.  ### Effects: Avatar is changed.  ### &#9432; Further Information: * Media type **MUST** be **`jpeg`** or **`png`** * File size **MUST** bei less than **`5 MB`** * Dimensions **MUST** be **`256x256 px`**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->changeAvatar($file, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->changeAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\Avatar**](../Model/Avatar.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeUserPassword**
> changeUserPassword($body, $x_sds_auth_token)

Change user's password

### Functional Description: Change the user's password.  ### Precondition: Authenticated user.  ### Effects: User's password is changed.  ### &#9432; Further Information: The password **MUST** comply to configured password policies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ChangeUserPasswordRequest(); // \Swagger\Client\Model\ChangeUserPasswordRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->changeUserPassword($body, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->changeUserPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ChangeUserPasswordRequest**](../Model/ChangeUserPasswordRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAvatar**
> \Swagger\Client\Model\Avatar deleteAvatar($x_sds_auth_token)

Reset avatar

### &#128640; Since version 4.11.0  ### Functional Description:   Reset (custom) avatar to default avatar.  ### Precondition: Authenticated user.  ### Effects: - User's avatar gets deleted.   - Default avatar is set.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->deleteAvatar($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\Avatar**](../Model/Avatar.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOAuthAuthorization**
> deleteOAuthAuthorization($authorization_id, $client_id, $x_sds_auth_token)

Delete a OAuth authorization

### &#128640; Since version 4.12.0  ### Functional Description: Delete a authorization.  ### Precondition: * Authenticated user * Valid client ID * Valid authorization ID  ### Effects: Authorization is revoked.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization_id = 789; // int | OAuth authorization ID
$client_id = "client_id_example"; // string | OAuth client ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteOAuthAuthorization($authorization_id, $client_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteOAuthAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization_id** | **int**| OAuth authorization ID |
 **client_id** | **string**| OAuth client ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOAuthAuthorizations**
> deleteOAuthAuthorizations($client_id, $x_sds_auth_token)

Delete all OAuth authorizations of a client

### Functional Description: Delete all authorizations of a client.  ### Precondition: * Authenticated user * Valid client ID  ### Effects: All authorizations for the client are revoked.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | OAuth client ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteOAuthAuthorizations($client_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteOAuthAuthorizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| OAuth client ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProfileAttribute**
> deleteProfileAttribute($key, $x_sds_auth_token)

Delete user profile attribute

### &#128640; Since version 4.7.0  ### Functional Description:   Delete custom user profile attribute.  ### Precondition: None.  ### Effects: Custom user profile attribute gets deleted.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | Key
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteProfileAttribute($key, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteProfileAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Key |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserKeyPair**
> deleteUserKeyPair($x_sds_auth_token)

Delete user's key pair

### Functional Description:   Delete the user's key pair.  ### Precondition: Authenticated user.  ### Effects: None.  ### &#9432; Further Information: This will also remove all file keys that were encrypted with the user's public key.   If the user had exclusive access to some files, those are removed as well since decrypting them became impossible.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteUserKeyPair($x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserKeyPair: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableCustomerEncryption**
> \Swagger\Client\Model\CustomerData enableCustomerEncryption($body, $x_sds_auth_token)

Activate client-side encryption for customer

### Functional Description:   Activate client-side encryption for according customer.  ### Precondition: Right _\"change global config\"_ required.  ### Effects: Client-side encryption is enabled.  ### &#9432; Further Information: Sets the ability for this customer to encrypt rooms.   Once enabled on customer level, it **CANNOT** be unset.   On activation, a customer rescue keypair **MUST** be set.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnableCustomerEncryptionRequest(); // \Swagger\Client\Model\EnableCustomerEncryptionRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->enableCustomerEncryption($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->enableCustomerEncryption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnableCustomerEncryptionRequest**](../Model/EnableCustomerEncryptionRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\CustomerData**](../Model/CustomerData.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvatar**
> \Swagger\Client\Model\Avatar getAvatar($x_sds_auth_token)

Get avatar

### &#128640; Since version 4.11.0  ### Functional Description: Get the avatar.  ### Precondition: Authenticated user.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getAvatar($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\Avatar**](../Model/Avatar.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerInfo**
> \Swagger\Client\Model\CustomerData getCustomerInfo($x_sds_auth_token)

Get customer information for user

### Functional Description:   Use this API to get:  * customer name * used / free space * used / available * user account info  of the according customer.  ### Precondition: Authenticated user.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getCustomerInfo($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getCustomerInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\CustomerData**](../Model/CustomerData.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerKeyPair**
> \Swagger\Client\Model\UserKeyPairContainer getCustomerKeyPair($x_sds_auth_token)

Get customer's key pair

### Functional Description:   Retrieve the customer rescue key pair.  ### Precondition: Authenticated user.  ### Effects: None.  ### &#9432; Further Information: The private key is password-based; encrypted with `AES256` / `PBKDF2`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getCustomerKeyPair($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getCustomerKeyPair: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\UserKeyPairContainer**](../Model/UserKeyPairContainer.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOAuthAuthorizations**
> \Swagger\Client\Model\OAuthAuthorization[] getOAuthAuthorizations($x_sds_auth_token, $x_sds_date_format, $filter, $sort)

Get list of OAuth client authorizations

### Functional Description:   Retrieve information about all OAuth client authorizations.  ### Precondition: Authenticated user.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering Filter string syntax: `FIELD_NAME:OPERATOR:VALUE[:VALUE...]`   Example: > `isStandard:eq:true`   Get standard OAuth clients.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`isStandard`** | Standard client filter | `eq` |  | `true or false` |  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are **NOT** supported.   Example: > `clientName:desc`   Sort by `clientName` descending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`clientName`** | Client name |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$filter = "filter_example"; // string | Filter string
$sort = "sort_example"; // string | Sort string

try {
    $result = $apiInstance->getOAuthAuthorizations($x_sds_auth_token, $x_sds_date_format, $filter, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getOAuthAuthorizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **filter** | **string**| Filter string | [optional]
 **sort** | **string**| Sort string | [optional]

### Return type

[**\Swagger\Client\Model\OAuthAuthorization[]**](../Model/OAuthAuthorization.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProfileAttributes**
> \Swagger\Client\Model\AttributesResponse getProfileAttributes($x_sds_auth_token, $filter, $limit, $offset, $sort)

Get user profile attributes

### &#128640; Since version 4.7.0  ### Functional Description:   Retrieve a list of user profile attributes.  ### Precondition: None.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE[:VALUE...]`   Example: > `key:cn:searchString_1|value:cn:searchString_2`   Filter by attribute key contains `searchString_1` **AND** attribute value contains `searchString_2`.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`key`** | User profile attribute key filter | `cn, eq, sw` | Attribute key contains / equals / starts with value. | `search String` | | **`value`** | User profile attribute value filter | `cn, eq, sw` | Attribute value contains / equals / starts with value. | `search String` |  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are supported.   Example: > `key:asc|value:desc`   Sort by `key` ascending **AND** by `value` descending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`key`** | User profile attribute key | | **`value`** | User profile attribute value |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
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
    $result = $apiInstance->getProfileAttributes($x_sds_auth_token, $filter, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getProfileAttributes: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\AttributesResponse**](../Model/AttributesResponse.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserInfo**
> \Swagger\Client\Model\UserAccount getUserInfo($x_sds_auth_token, $x_sds_date_format, $more_info)

Get user account information

### Functional Description:   Retrieves all information regarding the current user's account.  ### Precondition: Authenticated user.  ### Effects: None.  ### &#9432; Further Information: Setting the query parameter `more_info` to `true`, causes the API to return more details e.g. the user's groups.    `customer` (`CustomerData`) attribute in `UserAccount` response model is **`DEPRECATED`**. Please use response from `GET /user/account/customer` instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))
$more_info = true; // bool | Get more info for this user e.g. list of user groups

try {
    $result = $apiInstance->getUserInfo($x_sds_auth_token, $x_sds_date_format, $more_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]
 **more_info** | **bool**| Get more info for this user e.g. list of user groups | [optional]

### Return type

[**\Swagger\Client\Model\UserAccount**](../Model/UserAccount.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserKeyPair**
> \Swagger\Client\Model\UserKeyPairContainer getUserKeyPair($x_sds_auth_token)

Get user's key pair

### Functional Description:   Retrieve the user's key pair.  ### Precondition: Authenticated user.  ### Effects: None.  ### &#9432; Further Information: The private key is password-based; encrypted with `AES256` / `PBKDF2`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getUserKeyPair($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserKeyPair: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\UserKeyPairContainer**](../Model/UserKeyPairContainer.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAllProfileAttributes**
> \Swagger\Client\Model\ProfileAttributes setAllProfileAttributes($body, $x_sds_auth_token)

Set user profile attributes

## &#9888; Deprecated since version 4.12.0  ### Functional Description:   Set custom user profile attributes.  ### Precondition: None.  ### Effects: Custom user profile attributes gets set.  ### &#9432; Further Information: Batch function.   All existing user profile attributes will be deleted.     * Allowed characters for keys are: `[a-zA-Z0-9_-]`   * Characters are **case-insensitive**   * Maximum key length is **255**   * Maximum value length is **4096**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProfileAttributesRequest(); // \Swagger\Client\Model\ProfileAttributesRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->setAllProfileAttributes($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->setAllProfileAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProfileAttributesRequest**](../Model/ProfileAttributesRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\ProfileAttributes**](../Model/ProfileAttributes.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setProfileAttributes**
> \Swagger\Client\Model\ProfileAttributes setProfileAttributes($body, $x_sds_auth_token)

Add or edit user profile attributes

### &#128640; Since version 4.7.0  ### Functional Description:   Set custom user profile attributes.  ### Precondition: None.  ### Effects: Custom user profile attributes get added or edited.  ### &#9432; Further Information: Batch function.   If an entry existed before, it will be overwritten.   Range submodel is never returned.  * Allowed characters for keys are: `[a-zA-Z0-9_-]`   * Characters are **case-insensitive**   * Maximum key length is **255**   * Maximum value length is **4096**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProfileAttributesRequest(); // \Swagger\Client\Model\ProfileAttributesRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->setProfileAttributes($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->setProfileAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProfileAttributesRequest**](../Model/ProfileAttributesRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\ProfileAttributes**](../Model/ProfileAttributes.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserKeyPair**
> setUserKeyPair($body, $x_sds_auth_token)

Set user's key pair

### Functional Description:   Set the user's key pair.  ### Precondition: Authenticated user.  ### Effects: The key pair is set.  ### &#9432; Further Information: Overwriting an existing key pair is **NOT** possible.   Please delete the existing key pair first.   The private key is password-based; encrypted with `AES256` / `PBKDF2`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UserKeyPairContainer(); // \Swagger\Client\Model\UserKeyPairContainer | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->setUserKeyPair($body, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->setUserKeyPair: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UserKeyPairContainer**](../Model/UserKeyPairContainer.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUserAccount**
> \Swagger\Client\Model\UserAccount updateUserAccount($body, $x_sds_auth_token, $x_sds_date_format)

Update user account

### Functional Description:   Update current user's account.  ### Precondition: Authenticated user.  ### Effects: User's account updated.  ### &#9432; Further Information: * All input fields are limited to **150** characters.   * **All** characters are allowed.    `customer` (`CustomerData`) attribute in `UserAccount` response model is **`DEPRECATED`**. Please use response from `GET /user/account/customer` instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateUserAccountRequest(); // \Swagger\Client\Model\UpdateUserAccountRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$x_sds_date_format = "x_sds_date_format_example"; // string | Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) & [leettime.de](http://leettime.de/))

try {
    $result = $apiInstance->updateUserAccount($body, $x_sds_auth_token, $x_sds_date_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUserAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateUserAccountRequest**](../Model/UpdateUserAccountRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **x_sds_date_format** | **string**| Date time format (cf. [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) &amp; [leettime.de](http://leettime.de/)) | [optional]

### Return type

[**\Swagger\Client\Model\UserAccount**](../Model/UserAccount.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userLogout**
> userLogout($x_sds_auth_token, $everywhere)

Invalidate authentication token

## &#9888; Deprecated since version 4.12.0  ### Functional Description:   Log out a user.  ### Precondition: Authenticated user.  ### Effects: * User is logged out   * Authentication token gets invalidated.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$everywhere = true; // bool | Invalidate all tokens

try {
    $apiInstance->userLogout($x_sds_auth_token, $everywhere);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userLogout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **everywhere** | **bool**| Invalidate all tokens | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPing**
> string userPing($x_sds_auth_token)

(authenticated) Ping

### Functional Description: Test connection to DRACOON Server (while authenticated).  ### Precondition: Authenticated user.  ### Effects: `200 OK` with principal information is returned if successful.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->userPing($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

**string**

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

