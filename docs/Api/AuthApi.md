# Swagger\Client\AuthApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**completeOpenIdLogin**](AuthApi.md#completeOpenIdLogin) | **POST** /v4/auth/openid/login | Complete OpenID Connect authentication
[**getOpenIdAuthResources**](AuthApi.md#getOpenIdAuthResources) | **GET** /v4/auth/openid/resources | Get OpenID Connect authentication resources
[**initiateOpenIdLogin**](AuthApi.md#initiateOpenIdLogin) | **GET** /v4/auth/openid/login | Initiate OpenID Connect authentication
[**login**](AuthApi.md#login) | **POST** /v4/auth/login | Authenticate user
[**ping**](AuthApi.md#ping) | **GET** /v4/auth/ping | Ping
[**recoverUserName**](AuthApi.md#recoverUserName) | **POST** /v4/auth/recover_username | Recover username 🞂 NEW 🞀
[**requestPasswordReset**](AuthApi.md#requestPasswordReset) | **POST** /v4/auth/reset_password | Request password reset
[**resetPassword**](AuthApi.md#resetPassword) | **PUT** /v4/auth/reset_password/{token} | Reset password
[**validateResetPasswordToken**](AuthApi.md#validateResetPasswordToken) | **GET** /v4/auth/reset_password/{token} | Get information for password reset


# **completeOpenIdLogin**
> \Swagger\Client\Model\LoginResponse completeOpenIdLogin($code, $state, $id_token)

Complete OpenID Connect authentication

## &#9888; Deprecated since version 4.14.0  ### Functional Description:   This is the second step of the OpenID Connect authentication.   The user hands over the authorization code and is logged in.  ### Precondition: Existing user with activated OpenID Connect authentication that is **NOT** locked.  ### Effects: User is logged in.  ### &#9432; Further Information: See [http://openid.net/developers/specs](http://openid.net/developers/specs) for further information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = "code_example"; // string | Authorization code
$state = "state_example"; // string | Authentication state
$id_token = "id_token_example"; // string | Identity token

try {
    $result = $apiInstance->completeOpenIdLogin($code, $state, $id_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->completeOpenIdLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Authorization code |
 **state** | **string**| Authentication state |
 **id_token** | **string**| Identity token | [optional]

### Return type

[**\Swagger\Client\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpenIdAuthResources**
> \Swagger\Client\Model\OpenIdAuthResources getOpenIdAuthResources()

Get OpenID Connect authentication resources

## &#9888; Deprecated since version 4.3.0  ### Functional Description:   Provides information about OpenID Connect authentication options.  ### Precondition: None.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getOpenIdAuthResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getOpenIdAuthResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\OpenIdAuthResources**](../Model/OpenIdAuthResources.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initiateOpenIdLogin**
> initiateOpenIdLogin($issuer, $redirect_uri, $language, $test)

Initiate OpenID Connect authentication

## &#9888; Deprecated since version 4.14.0  ## &#9888; CAUTION: This API does **NOT** work with Swagger! Swagger can **NOT** handle the redirect to the OpenID Connect identity provider.  ### Functional Description: This is the first step of the OpenID Connect authentication.   The user is send to the OpenID Connect identity provider to authenticate himself and retrieve an authorization code.  ### Precondition: None.  ### Effects: User is redirected to OpenID Connect identity provider to authenticate himself.  ### &#9432; Further Information: See [http://openid.net/developers/specs](http://openid.net/developers/specs) for further information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$issuer = "issuer_example"; // string | Issuer identifier of the OpenID Connect identity provider
$redirect_uri = "redirect_uri_example"; // string | Redirect URI to complete the OpenID Connect authentication
$language = "language_example"; // string | Language ID or ISO 639-1 code (**DEPRECATED**: will be removed)
$test = true; // bool | Flag to test the authentication parameters. If the request is valid, the API will respond with `204 No Content`.

try {
    $apiInstance->initiateOpenIdLogin($issuer, $redirect_uri, $language, $test);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->initiateOpenIdLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **issuer** | **string**| Issuer identifier of the OpenID Connect identity provider |
 **redirect_uri** | **string**| Redirect URI to complete the OpenID Connect authentication |
 **language** | **string**| Language ID or ISO 639-1 code (**DEPRECATED**: will be removed) | [optional]
 **test** | **bool**| Flag to test the authentication parameters. If the request is valid, the API will respond with &#x60;204 No Content&#x60;. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **login**
> \Swagger\Client\Model\LoginResponse login($body)

Authenticate user

## &#9888; Deprecated since version 4.13.0  ### Functional Description: Authenticates user and provides an authentication token (`X-Sds-Auth-Token`) that is required for most operations.  ### Precondition: Existing user that is **NOT** locked.  ### Effects: User is logged in.  ### &#9432; Further Information: The provided token is valid for **2 hours**, every usage resets this period to 2 full hours again.   Logging off invalidates the token.    Setting the language parameter has no effect.  ### Available authentication methods  | Authentication Method:<br>**`authType`** | Description | | :--- | :--- | | **`basic`** | Log in with credentials stored in the database <br>Formerly known as **`sql`**.| | **`active_directory`** | Log in with Active Directory credentials | | **`radius`** | Log in with RADIUS username, PIN and token password.<br>Token (request parameter) may be set, otherwise this parameter is ignored. If `token` is set, `password` is optional. | | **`openid`** | Please use `POST /auth/openid/login` API to login with OpenID Connect identity |  ### DEPRECATED: Currently supported languages (with ISO 639-1 code): * German (de) * English (en) * Spanish (es) * French (fr)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LoginRequest(); // \Swagger\Client\Model\LoginRequest | User credentials

try {
    $result = $apiInstance->login($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LoginRequest**](../Model/LoginRequest.md)| User credentials |

### Return type

[**\Swagger\Client\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ping**
> string ping()

Ping

### Functional Description: Test connection to DRACOON Server.  ### Precondition: None.  ### Effects: `200 OK` with current date string is returned if successful.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->ping();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->ping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recoverUserName**
> recoverUserName($request)

Recover username 🞂 NEW 🞀

### &#128640; Since version 4.13.0  ### Functional Description:   Request an email with the usernames of all accounts connected to the email.  ### Precondition: Valid email address.  ### Effects: An email is sent to the provided address, with a list of account usernames connected to it.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\RecoverUserNameRequest(); // \Swagger\Client\Model\RecoverUserNameRequest | request

try {
    $apiInstance->recoverUserName($request);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->recoverUserName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\RecoverUserNameRequest**](../Model/RecoverUserNameRequest.md)| request |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestPasswordReset**
> requestPasswordReset($body)

Request password reset

### Functional Description:   Request an email with a password reset token for a certain user to reset his / her password.  ### Precondition: Registered user account.  ### Effects: Provided user receives email with password reset token.  ### &#9432; Further Information: None.  ### DEPRECATED: Currently supported languages (with ISO 639-1 code): * German (de) * English (en) * Spanish (es) * French (fr)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ResetPasswordRequest(); // \Swagger\Client\Model\ResetPasswordRequest | body

try {
    $apiInstance->requestPasswordReset($body);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->requestPasswordReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ResetPasswordRequest**](../Model/ResetPasswordRequest.md)| body |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPassword**
> resetPassword($body, $token)

Reset password

### Functional Description:   Resets user's password.  ### Precondition: User received a password reset token.  ### Effects: User's password is resetted to the provided password.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ResetPasswordWithTokenRequest(); // \Swagger\Client\Model\ResetPasswordWithTokenRequest | body
$token = "token_example"; // string | Password reset token

try {
    $apiInstance->resetPassword($body, $token);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->resetPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ResetPasswordWithTokenRequest**](../Model/ResetPasswordWithTokenRequest.md)| body |
 **token** | **string**| Password reset token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateResetPasswordToken**
> \Swagger\Client\Model\ResetPasswordTokenValidateResponse validateResetPasswordToken($token)

Get information for password reset

### Functional Description:   Request all information for a password change dialogue e.g. real name of user.  ### Precondition: User received a password reset token.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Password reset token

try {
    $result = $apiInstance->validateResetPasswordToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->validateResetPasswordToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Password reset token |

### Return type

[**\Swagger\Client\Model\ResetPasswordTokenValidateResponse**](../Model/ResetPasswordTokenValidateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

