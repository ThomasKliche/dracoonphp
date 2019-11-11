# Swagger\Client\SystemAuthConfigApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](SystemAuthConfigApi.md#create) | **POST** /v4/system/config/auth/radius | Create RADIUS configuration
[**createAdConfig**](SystemAuthConfigApi.md#createAdConfig) | **POST** /v4/system/config/auth/ads | Create Active Directory configuration
[**createOAuthClient**](SystemAuthConfigApi.md#createOAuthClient) | **POST** /v4/system/config/oauth/clients | Create OAuth client
[**createOpenIdIdpConfig**](SystemAuthConfigApi.md#createOpenIdIdpConfig) | **POST** /v4/system/config/auth/openid/idps | Create OpenID Connect IDP configuration
[**deleteAdConfig**](SystemAuthConfigApi.md#deleteAdConfig) | **DELETE** /v4/system/config/auth/ads/{ad_id} | Delete Active Directory configuration
[**deleteOAuthClient**](SystemAuthConfigApi.md#deleteOAuthClient) | **DELETE** /v4/system/config/oauth/clients/{client_id} | Delete OAuth client
[**deleteOpenIdIdpConfig**](SystemAuthConfigApi.md#deleteOpenIdIdpConfig) | **DELETE** /v4/system/config/auth/openid/idps/{idp_id} | Delete OpenID Connect IDP configuration
[**deteteRadiusConfig**](SystemAuthConfigApi.md#deteteRadiusConfig) | **DELETE** /v4/system/config/auth/radius | Delete RADIUS configuration
[**getAdConfigs**](SystemAuthConfigApi.md#getAdConfigs) | **GET** /v4/system/config/auth/ads | Get list of Active Directory configurations
[**getAuthAdSetting**](SystemAuthConfigApi.md#getAuthAdSetting) | **GET** /v4/system/config/auth/ads/{ad_id} | Get Active Directory configuration
[**getOAuthClient**](SystemAuthConfigApi.md#getOAuthClient) | **GET** /v4/system/config/oauth/clients/{client_id} | Get OAuth client
[**getOAuthClients**](SystemAuthConfigApi.md#getOAuthClients) | **GET** /v4/system/config/oauth/clients | Get list of OAuth clients
[**getOpenIdIdpConfig**](SystemAuthConfigApi.md#getOpenIdIdpConfig) | **GET** /v4/system/config/auth/openid/idps/{idp_id} | Get OpenID Connect IDP configuration
[**getOpenIdIdpConfigs**](SystemAuthConfigApi.md#getOpenIdIdpConfigs) | **GET** /v4/system/config/auth/openid/idps | Get list of OpenID Connect IDP configurations
[**getRadiusConfig**](SystemAuthConfigApi.md#getRadiusConfig) | **GET** /v4/system/config/auth/radius | Get RADIUS configuration
[**testAdConfig**](SystemAuthConfigApi.md#testAdConfig) | **POST** /v4/system/config/actions/test/ad | Test Active Directory configuration
[**testRadiusConfig**](SystemAuthConfigApi.md#testRadiusConfig) | **POST** /v4/system/config/actions/test/radius | Test RADIUS server availability
[**updateAuthAdSetting**](SystemAuthConfigApi.md#updateAuthAdSetting) | **PUT** /v4/system/config/auth/ads/{ad_id} | Update Active Directory configuration
[**updateOAuthClient**](SystemAuthConfigApi.md#updateOAuthClient) | **PUT** /v4/system/config/oauth/clients/{client_id} | Update OAuth client
[**updateOpenIdIdpConfig**](SystemAuthConfigApi.md#updateOpenIdIdpConfig) | **PUT** /v4/system/config/auth/openid/idps/{idp_id} | Update OpenID Connect IDP configuration
[**updateRadiusConfig**](SystemAuthConfigApi.md#updateRadiusConfig) | **PUT** /v4/system/config/auth/radius | Update RADIUS configuration


# **create**
> \Swagger\Client\Model\RadiusConfig create($body, $x_sds_auth_token)

Create RADIUS configuration

### Functional Description:   Create new RADIUS configuration.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: New RADIUS configuration is created.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RadiusConfigCreateRequest(); // \Swagger\Client\Model\RadiusConfigCreateRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->create($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RadiusConfigCreateRequest**](../Model/RadiusConfigCreateRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\RadiusConfig**](../Model/RadiusConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAdConfig**
> \Swagger\Client\Model\ActiveDirectoryConfig createAdConfig($body, $x_sds_auth_token)

Create Active Directory configuration

### Functional Description: Create a new Active Directory configuration.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: New Active Directory configuration created.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateActiveDirectoryConfigRequest(); // \Swagger\Client\Model\CreateActiveDirectoryConfigRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->createAdConfig($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->createAdConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateActiveDirectoryConfigRequest**](../Model/CreateActiveDirectoryConfigRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\ActiveDirectoryConfig**](../Model/ActiveDirectoryConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOAuthClient**
> \Swagger\Client\Model\OAuthClient createOAuthClient($body, $x_sds_auth_token)

Create OAuth client

### Functional Description: Create a new OAuth client.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: New OAuth client created.  ### &#9432; Further Information:   Client secret **MUST** have:   * at least 12 characters, at most 32 characters   * only lower case characters, upper case characters and digits   * at least 1 lower case character, 1 upper case character and 1 digit    The client secret is optional and will be generated if it is left empty.    Valid grant types are:   * **authorization_code**   * **implicit**   * **password**   * **client_credentials**   * **refresh_token**    Grant type `client_credentials` is currently **NOT** permitted!  If grant types **authorization_code** or **implicit** are used, a redirect URI **MUST** be provided!  Default access token validity: **8 hours**   Default refresh token validity: **30 days**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateOAuthClientRequest(); // \Swagger\Client\Model\CreateOAuthClientRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->createOAuthClient($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->createOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateOAuthClientRequest**](../Model/CreateOAuthClientRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\OAuthClient**](../Model/OAuthClient.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOpenIdIdpConfig**
> \Swagger\Client\Model\OpenIdIdpConfig createOpenIdIdpConfig($body, $x_sds_auth_token)

Create OpenID Connect IDP configuration

### Functional Description: Create new OpenID Connect IDP configuration.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: New OpenID Connect IDP configuration is created.  ### &#9432; Further Information: See [http://openid.net/developers/specs](http://openid.net/developers/specs) for further information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateOpenIdIdpConfigRequest(); // \Swagger\Client\Model\CreateOpenIdIdpConfigRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->createOpenIdIdpConfig($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->createOpenIdIdpConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateOpenIdIdpConfigRequest**](../Model/CreateOpenIdIdpConfigRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\OpenIdIdpConfig**](../Model/OpenIdIdpConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAdConfig**
> deleteAdConfig($ad_id, $x_sds_auth_token)

Delete Active Directory configuration

### Functional Description: Delete an existing Active Directory configuration.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: Active Directory configuration removed.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 56; // int | Active Directory ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteAdConfig($ad_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->deleteAdConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_id** | **int**| Active Directory ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOAuthClient**
> deleteOAuthClient($client_id, $x_sds_auth_token)

Delete OAuth client

### Functional Description: Delete an existing OAuth client.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: OAuth client removed.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | OAuth client ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteOAuthClient($client_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->deleteOAuthClient: ', $e->getMessage(), PHP_EOL;
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

# **deleteOpenIdIdpConfig**
> deleteOpenIdIdpConfig($idp_id, $x_sds_auth_token)

Delete OpenID Connect IDP configuration

### Functional Description: Delete an existing OpenID Connect IDP configuration.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: OpenID Connect IDP configuration removed.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idp_id = 56; // int | OpenID Connect IDP configuration ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deleteOpenIdIdpConfig($idp_id, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->deleteOpenIdIdpConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idp_id** | **int**| OpenID Connect IDP configuration ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deteteRadiusConfig**
> deteteRadiusConfig($x_sds_auth_token)

Delete RADIUS configuration

### Functional Description:   Delete existing RADIUS configuration.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: RADIUS configuration is deleted.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->deteteRadiusConfig($x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->deteteRadiusConfig: ', $e->getMessage(), PHP_EOL;
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

# **getAdConfigs**
> \Swagger\Client\Model\ActiveDirectoryConfigList getAdConfigs($x_sds_auth_token)

Get list of Active Directory configurations

### Functional Description:   Retrieve a list of configured Active Directories.  ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getAdConfigs($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->getAdConfigs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\ActiveDirectoryConfigList**](../Model/ActiveDirectoryConfigList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthAdSetting**
> \Swagger\Client\Model\ActiveDirectoryConfig getAuthAdSetting($ad_id, $x_sds_auth_token)

Get Active Directory configuration

### Functional Description:   Retrieve the configuration of an Active Directory.  ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 56; // int | Active Directory ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getAuthAdSetting($ad_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->getAuthAdSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_id** | **int**| Active Directory ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\ActiveDirectoryConfig**](../Model/ActiveDirectoryConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOAuthClient**
> \Swagger\Client\Model\OAuthClient getOAuthClient($client_id, $x_sds_auth_token)

Get OAuth client

### Functional Description:   Retrieve the configuration of an OAuth client.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | OAuth client ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getOAuthClient($client_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->getOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| OAuth client ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\OAuthClient**](../Model/OAuthClient.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOAuthClients**
> \Swagger\Client\Model\OAuthClient[] getOAuthClients($x_sds_auth_token, $filter, $sort)

Get list of OAuth clients

### Functional Description:   Retrieve a list of configured OAuth clients.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: None.  ### Filtering ### &#9888; All filter fields are connected via logical conjunction (**AND**) Filter string syntax: `FIELD_NAME:OPERATOR:VALUE[:VALUE...]`   Example: > `isStandard:eq:true`   Get standard OAuth clients.  | `FIELD_NAME` | Filter Description | `OPERATOR` | Operator Description | `VALUE` | | :--- | :--- | :--- | :--- | :--- | | **`isStandard`** | Standard client filter | `eq` |  | `true or false` | | **`isEnabled`** | (**`NEW`**) Enabled/disabled clients filter | `eq` |  | `true or false` |  ### Sorting Sort string syntax: `FIELD_NAME:ORDER`   `ORDER` can be `asc` or `desc`.   Multiple sort fields are **NOT** supported.   Example: > `clientName:desc`   Sort by `clientName` descending.  | `FIELD_NAME` | Description | | :--- | :--- | | **`clientName`** | Client name | | **`isStandard`** | (**`NEW`**) Is a standard client | | **`isEnabled`** | (**`NEW`**) Is a enabled client |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token
$filter = "filter_example"; // string | Filter string
$sort = "sort_example"; // string | Sort string

try {
    $result = $apiInstance->getOAuthClients($x_sds_auth_token, $filter, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->getOAuthClients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]
 **filter** | **string**| Filter string | [optional]
 **sort** | **string**| Sort string | [optional]

### Return type

[**\Swagger\Client\Model\OAuthClient[]**](../Model/OAuthClient.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpenIdIdpConfig**
> \Swagger\Client\Model\OpenIdIdpConfig getOpenIdIdpConfig($idp_id, $x_sds_auth_token)

Get OpenID Connect IDP configuration

### Functional Description:   Retrieve an OpenID Connect IDP configuration.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idp_id = 56; // int | OpenID Connect IDP configuration ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getOpenIdIdpConfig($idp_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->getOpenIdIdpConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idp_id** | **int**| OpenID Connect IDP configuration ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\OpenIdIdpConfig**](../Model/OpenIdIdpConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpenIdIdpConfigs**
> \Swagger\Client\Model\OpenIdIdpConfig[] getOpenIdIdpConfigs($x_sds_auth_token)

Get list of OpenID Connect IDP configurations

### Functional Description:   Retrieve a list of configured OpenID Connect IDPs.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getOpenIdIdpConfigs($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->getOpenIdIdpConfigs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\OpenIdIdpConfig[]**](../Model/OpenIdIdpConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRadiusConfig**
> \Swagger\Client\Model\RadiusConfig getRadiusConfig($x_sds_auth_token)

Get RADIUS configuration

### Functional Description:   Retrieve a RADIUS configuration.  ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getRadiusConfig($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->getRadiusConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\RadiusConfig**](../Model/RadiusConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testAdConfig**
> \Swagger\Client\Model\TestActiveDirectoryConfigResponse testAdConfig($body, $x_sds_auth_token)

Test Active Directory configuration

### Functional Description:   Test Active Directory configuration.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: DRACOON tries to establish a connection with the provided information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TestActiveDirectoryConfigRequest(); // \Swagger\Client\Model\TestActiveDirectoryConfigRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->testAdConfig($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->testAdConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TestActiveDirectoryConfigRequest**](../Model/TestActiveDirectoryConfigRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\TestActiveDirectoryConfigResponse**](../Model/TestActiveDirectoryConfigResponse.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testRadiusConfig**
> testRadiusConfig($x_sds_auth_token)

Test RADIUS server availability

### Functional Description:   Test RADIUS configuration.  ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: DRACOON tries to establish a connection with the provided information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->testRadiusConfig($x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->testRadiusConfig: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAuthAdSetting**
> \Swagger\Client\Model\ActiveDirectoryConfig updateAuthAdSetting($ad_id, $body, $x_sds_auth_token)

Update Active Directory configuration

### Functional Description:   Update an existing Active Directory configuration.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: Active Directory configuration updated.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 56; // int | Active Directory ID
$body = new \Swagger\Client\Model\UpdateActiveDirectoryConfigRequest(); // \Swagger\Client\Model\UpdateActiveDirectoryConfigRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->updateAuthAdSetting($ad_id, $body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->updateAuthAdSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_id** | **int**| Active Directory ID |
 **body** | [**\Swagger\Client\Model\UpdateActiveDirectoryConfigRequest**](../Model/UpdateActiveDirectoryConfigRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\ActiveDirectoryConfig**](../Model/ActiveDirectoryConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOAuthClient**
> \Swagger\Client\Model\OAuthClient updateOAuthClient($body, $client_id, $x_sds_auth_token)

Update OAuth client

### Functional Description:   Update an existing OAuth client.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: OAuth client updated.  ### &#9432; Further Information:   Client secret **MUST** have:   * at least 12 characters, at most 32 characters   * only lower case characters, upper case characters and digits   * at least 1 lower case character, 1 upper case character and 1 digit    The client secret is optional and will be generated if it is left empty.    Valid grant types are:   * **authorization_code**   * **implicit**   * **password**   * **client_credentials**   * **refresh_token**    Grant type `client_credentials` is currently **NOT** permitted!  If grant types **authorization_code** or **implicit** are used, a redirect URI **MUST** be provided!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateOAuthClientRequest(); // \Swagger\Client\Model\UpdateOAuthClientRequest | body
$client_id = "client_id_example"; // string | OAuth client ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->updateOAuthClient($body, $client_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->updateOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateOAuthClientRequest**](../Model/UpdateOAuthClientRequest.md)| body |
 **client_id** | **string**| OAuth client ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\OAuthClient**](../Model/OAuthClient.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOpenIdIdpConfig**
> \Swagger\Client\Model\OpenIdIdpConfig updateOpenIdIdpConfig($body, $idp_id, $x_sds_auth_token)

Update OpenID Connect IDP configuration

### Functional Description:   Update an existing OpenID Connect IDP configuration.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: OpenID Connect IDP configuration is updated.  ### &#9432; Further Information: See [http://openid.net/developers/specs](http://openid.net/developers/specs) for further information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateOpenIdIdpConfigRequest(); // \Swagger\Client\Model\UpdateOpenIdIdpConfigRequest | body
$idp_id = 56; // int | OpenID Connect IDP configuration ID
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->updateOpenIdIdpConfig($body, $idp_id, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->updateOpenIdIdpConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateOpenIdIdpConfigRequest**](../Model/UpdateOpenIdIdpConfigRequest.md)| body |
 **idp_id** | **int**| OpenID Connect IDP configuration ID |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\OpenIdIdpConfig**](../Model/OpenIdIdpConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRadiusConfig**
> \Swagger\Client\Model\RadiusConfig updateRadiusConfig($body, $x_sds_auth_token)

Update RADIUS configuration

### Functional Description:   Update existing RADIUS configuration.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: RADIUS configuration is updated.  ### &#9432; Further Information: None.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemAuthConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RadiusConfigUpdateRequest(); // \Swagger\Client\Model\RadiusConfigUpdateRequest | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->updateRadiusConfig($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemAuthConfigApi->updateRadiusConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RadiusConfigUpdateRequest**](../Model/RadiusConfigUpdateRequest.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\RadiusConfig**](../Model/RadiusConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

