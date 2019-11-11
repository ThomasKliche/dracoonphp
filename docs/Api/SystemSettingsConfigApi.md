# Swagger\Client\SystemSettingsConfigApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAuthConfig**](SystemSettingsConfigApi.md#getAuthConfig) | **GET** /v4/system/config/settings/auth | Get authentication settings
[**getBrandingConfig**](SystemSettingsConfigApi.md#getBrandingConfig) | **GET** /v4/system/config/settings/branding | Get branding settings
[**getEventlogConfig**](SystemSettingsConfigApi.md#getEventlogConfig) | **GET** /v4/system/config/settings/eventlog | Get eventlog settings
[**getGeneralSettings**](SystemSettingsConfigApi.md#getGeneralSettings) | **GET** /v4/system/config/settings/general | Get general settings
[**getInfrastructureProperties**](SystemSettingsConfigApi.md#getInfrastructureProperties) | **GET** /v4/system/config/settings/infrastructure | Get infrastructure properties
[**getMailServerConfig**](SystemSettingsConfigApi.md#getMailServerConfig) | **GET** /v4/system/config/settings/mail_server | Get mail server settings
[**getSyslogConfig**](SystemSettingsConfigApi.md#getSyslogConfig) | **GET** /v4/system/config/settings/syslog | Get syslog settings
[**getSystemDefaults**](SystemSettingsConfigApi.md#getSystemDefaults) | **GET** /v4/system/config/settings/defaults | Get system defaults
[**updateAuthConfig**](SystemSettingsConfigApi.md#updateAuthConfig) | **PUT** /v4/system/config/settings/auth | Change authentication settings
[**updateBrandingConfig**](SystemSettingsConfigApi.md#updateBrandingConfig) | **PUT** /v4/system/config/settings/branding | Change branding settings
[**updateEventlogConfig**](SystemSettingsConfigApi.md#updateEventlogConfig) | **PUT** /v4/system/config/settings/eventlog | Change eventlog settings
[**updateGeneralSettings**](SystemSettingsConfigApi.md#updateGeneralSettings) | **PUT** /v4/system/config/settings/general | Change general settings
[**updateMailServerConfig**](SystemSettingsConfigApi.md#updateMailServerConfig) | **PUT** /v4/system/config/settings/mail_server | Change mail server settings
[**updateSyslogConfig**](SystemSettingsConfigApi.md#updateSyslogConfig) | **PUT** /v4/system/config/settings/syslog | Change syslog settings
[**updateSystemDefaults**](SystemSettingsConfigApi.md#updateSystemDefaults) | **PUT** /v4/system/config/settings/defaults | Change system defaults


# **getAuthConfig**
> \Swagger\Client\Model\AuthConfig getAuthConfig($x_sds_auth_token)

Get authentication settings

### &#128640; Since version 4.6.0  ### Functional Description:   DRACOON authentication configuration entry point.   Returns a list of configurable authentication methods.  ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: Authentication methods are sorted by priority attribute.   Smaller values have higher priority.   Authentication method with highest priority is considered as default.   Priority **MUST** be a positive value.  ### Configurable authentication settings  | Authentication Method | Description | | :--- | :--- | | **`basic`** | **Basic** authentication globally allowed.<br>This option **MUST** be activated to allow users to log in with their credentials stored in the database.<br>Formerly known as **`sql`**. | | **`active_directory`** | **Active Directory** authentication globally allowed.<br>This option **MUST** be activated to allow users to log in with their Active Directory credentials. | | **`radius`** | **RADIUS** authentication globally allowed.<br>This option **MUST** be activated to allow users to log in with their RADIUS username, their PIN and a token password. | | **`openid`** | **OpenID Connect** authentication globally allowed.This option **MUST** be activated to allow users to log in with their OpenID Connect identity. |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemSettingsConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getAuthConfig($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSettingsConfigApi->getAuthConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\AuthConfig**](../Model/AuthConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBrandingConfig**
> \Swagger\Client\Model\BrandingConfig getBrandingConfig($x_sds_auth_token)

Get branding settings

## &#9888; Deprecated since version 4.10.0  ### Functional Description:   DRACOON branding configuration entry point.   Returns a list of configurable branding settings.  ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: None.  ### Configurable branding settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`brandingProviderUrl`** | Access URL to to the Branding Portal | `String` | | **`brandingQualifier`** | Branding UUID | `String` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemSettingsConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getBrandingConfig($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSettingsConfigApi->getBrandingConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\BrandingConfig**](../Model/BrandingConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEventlogConfig**
> \Swagger\Client\Model\EventlogConfig getEventlogConfig($x_sds_auth_token)

Get eventlog settings

### &#128640; Since version 4.6.0  ### Functional Description:   DRACOON eventlog configuration entry point.   Returns a list of configurable eventlog settings.  ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: None.  ### Configurable eventlog settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`enabled`** | Determines whether eventlog is enabled. | `true or false` | | **`retentionPeriod`** | Retention period (in _days_) of eventlog entries.<br>After that period, all entries are deleted. | `Integer between 0 and 9999`<br>If set to `0`: no logs are deleted | | **`logIpEnabled`** | Determines whether user’s IP address is logged. | `true or false` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemSettingsConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getEventlogConfig($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSettingsConfigApi->getEventlogConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\EventlogConfig**](../Model/EventlogConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGeneralSettings**
> \Swagger\Client\Model\GeneralSettings getGeneralSettings($x_sds_auth_token)

Get general settings

### &#128640; Since version 4.6.0  ### Functional Description:   DRACOON general settings configuration entry point.   Returns a list of configurable general settings.  ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: None.  ### Configurable general settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`sharePasswordSmsEnabled`** | Determines whether sending of share passwords via SMS is allowed. | `true or false` | | **`cryptoEnabled`** | Determines whether client-side encryption is enabled.<br>Can only be enabled once; disabling is **NOT** possible. | `true or false` | | **`emailNotificationButtonEnabled`** | Determines whether email notification button is enabled. | `true or false` | | **`eulaEnabled`** | Determines whether EULA is enabled.<br>Each user has to confirm the EULA at first login. | `true or false` | | **`useS3Storage`** | Defines if S3 is used as storage backend.<br>Can only be enabled once; disabling is **NOT** possible. | `true or false` | | **`s3TagsEnabled`** | Determines whether S3 tags are enabled | `true or false` | | **`hideLoginInputFields`** | Determines whether input fields for login should be enabled | `true or false` | | **`authTokenRestrictions`** | Determines auth token restrictions. (e.g. restricted access token validity) | `object` | | **`mediaServerEnabled`** **(`DEPRECATED`)** | Determines whether media server is enabled.<br>Returns boolean value dependent on conjunction of **`mediaServerConfigEnabled`** AND **`mediaServerEnabled`** | `true or false` | | **`weakPasswordEnabled`** **(`DEPRECATED`)** | Determines whether weak password (cf. _Password Policy_) is allowed.<br>Use `GET /system/config/policies/passwords` API to get configured password policies. | `true or false` |  ---  ### `DEPRECATED` Password Policy  * A weak password has to fulfill the following criteria:       * is at least 8 characters long       * contains letters and numbers * A strong password has to fulfill the following criteria in addition:       * contains at least one special character       * contains upper and lower case characters  ---  ### Auth Token Restrictions  Auth token restrictions are enabled by default.  * Default access token validity: **2 hours**   * Default refresh token validity: **30 days**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemSettingsConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getGeneralSettings($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSettingsConfigApi->getGeneralSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\GeneralSettings**](../Model/GeneralSettings.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInfrastructureProperties**
> \Swagger\Client\Model\InfrastructureProperties getInfrastructureProperties($x_sds_auth_token)

Get infrastructure properties

### &#128640; Since version 4.6.0  ### Functional Description:   DRACOON infrastructure properties entry point.   Returns a list of read-only infrastructure properties.    ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: Source: `api.properties`  ### Read-only infrastructure properties  | Setting | Description | Value | | :--- | :--- | :--- | | **`smsConfigEnabled`** | Determines whether sending of share passwords via SMS is **system-wide** enabled. | `true or false` | | **`mediaServerConfigEnabled`** | Determines whether media server is **system-wide** enabled. | `true or false` | | **`s3DefaultRegion`** | Suggested S3 region | `Region name` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemSettingsConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getInfrastructureProperties($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSettingsConfigApi->getInfrastructureProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\InfrastructureProperties**](../Model/InfrastructureProperties.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailServerConfig**
> \Swagger\Client\Model\MailServerConfig getMailServerConfig($x_sds_auth_token)

Get mail server settings

## &#9888; Deprecated since version 4.11.0  ### Functional Description:   DRACOON email server configuration entry point.   Returns a list of configurable email server settings.  ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: None.  ### Configurable email server settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`host`** | Email server host | `DNS name or IPv4 of an email server` | | **`port`** | Email server port | `Valid port number` | | **`username`** | Username for email server | `Username for authentication` | | **`passwordDefined`** | Determines whether _password_ is defined for email server. | `true or false` | | **`authenticationEnabled`** | Determines whether email server requires _authentication_. | `true or false` | | **`sslEnabled`** | Determines whether email server requires _SSL_ connection.<br>Requires **`starttlsEnabled`** to be `false`. | `true or false ` | | **`starttlsEnabled`** | Determines whether email server requires _StartTLS_ connection.<br>Requires **`sslEnabled`** to be `false`. | `true or false` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemSettingsConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getMailServerConfig($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSettingsConfigApi->getMailServerConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\MailServerConfig**](../Model/MailServerConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSyslogConfig**
> \Swagger\Client\Model\SyslogConfig getSyslogConfig($x_sds_auth_token)

Get syslog settings

### &#128640; Since version 4.6.0  ### Functional Description:   DRACOON syslog configuration entry point.   Returns a list of configurable syslog settings.  ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: None.  ### Configurable syslog settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`enabled`** | Determines whether syslog is enabled. | `true or false` | | **`host`** | Syslog server (IP or FQDN) | `DNS name or IPv4 of a syslog server` | | **`port`** | Syslog server port | `Valid port number` | | **`protocol`** | Protocol to connect to syslog server | `TCP or UDP` | | **`logIpEnabled`** | Determines whether user’s IP address is logged. | `true or false` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemSettingsConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getSyslogConfig($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSettingsConfigApi->getSyslogConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\SyslogConfig**](../Model/SyslogConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSystemDefaults**
> \Swagger\Client\Model\SystemDefaults getSystemDefaults($x_sds_auth_token)

Get system defaults

### &#128640; Since version 4.6.0  ### Functional Description:   DRACOON system defaults configuration entry point.   Returns a list of configurable system default values.  ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### &#9432; Further Information: None.  ### Configurable default values  | Setting | Description | Value | | :--- | :--- | :--- | | **`languageDefault`** | Defines which language should be default.<br>cf. [RFC 5646](https://tools.ietf.org/html/rfc5646) for ISO 639-1 codes | `ISO 639-1 code` | | **`downloadShareDefaultExpirationPeriod`** | Default expiration period for Download Shares in _days_. | `Integer between 0 and 9999` | | **`uploadShareDefaultExpirationPeriod`** | Default expiration period for Upload Shares in _days_. | `Integer between 0 and 9999` | | **`fileDefaultExpirationPeriod`** | Default expiration period for all uploaded files in _days_. | `Integer between 0 and 9999` | | **`nonmemberViewerDefault`** | Defines if new users get the role NONMEMBER_VIEWER by default | `true or false` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemSettingsConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getSystemDefaults($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSettingsConfigApi->getSystemDefaults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\SystemDefaults**](../Model/SystemDefaults.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAuthConfig**
> \Swagger\Client\Model\AuthConfig updateAuthConfig($body, $x_sds_auth_token)

Change authentication settings

### &#128640; Since version 4.6.0  ### Functional Description:   DRACOON authentication configuration entry point.   Change configurable authentication settings.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: One or more authentication methods gets changed.  ### &#9432; Further Information: Authentication methods are sorted by priority attribute.   Smaller values have higher priority.   Authentication method with highest priority is considered as default.   Priority **MUST** be a positive value.  ### Configurable authentication settings  | Authentication Method | Description | | :--- | :--- | | **`basic`** | **Basic** authentication globally allowed.<br>This option **MUST** be activated to allow users to log in with their credentials stored in the database.<br>Formerly known as **`sql`**. | | **`active_directory`** | **Active Directory** authentication globally allowed.<br>This option **MUST** be activated to allow users to log in with their Active Directory credentials. | | **`radius`** | **RADIUS** authentication globally allowed.<br>This option **MUST** be activated to allow users to log in with their RADIUS username, their PIN and a token password. | | **`openid`** | **OpenID Connect** authentication globally allowed.This option **MUST** be activated to allow users to log in with their OpenID Connect identity. |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemSettingsConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AuthConfig(); // \Swagger\Client\Model\AuthConfig | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->updateAuthConfig($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSettingsConfigApi->updateAuthConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AuthConfig**](../Model/AuthConfig.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\AuthConfig**](../Model/AuthConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBrandingConfig**
> \Swagger\Client\Model\BrandingConfig updateBrandingConfig($body, $x_sds_auth_token)

Change branding settings

## &#9888; Deprecated since version 4.10.0  ### Functional Description:   DRACOON branding configuration entry point.   Change configurable branding settings.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: One or more branding settings gets changed.  ### &#9432; Further Information: None.  ### Configurable branding settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`brandingProviderUrl`** | Access URL to to the Branding Portal | `String` | | **`brandingQualifier`** | Branding UUID | `String` | | **`resetBrandingProviderUrl`** | Set `true` to reset **`brandingProviderUrl`** | `true or false` | | **`resetBrandingQualifier`** | Set `true` to reset **`brandingQualifier`** | `true or false` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemSettingsConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateBrandingConfig(); // \Swagger\Client\Model\UpdateBrandingConfig | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->updateBrandingConfig($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSettingsConfigApi->updateBrandingConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateBrandingConfig**](../Model/UpdateBrandingConfig.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\BrandingConfig**](../Model/BrandingConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEventlogConfig**
> \Swagger\Client\Model\EventlogConfig updateEventlogConfig($body, $x_sds_auth_token)

Change eventlog settings

### &#128640; Since version 4.6.0  ### Functional Description:   DRACOON eventlog configuration entry point.   Change configurable eventlog settings.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: One or more eventlog settings gets changed.  ### &#9432; Further Information: None.  ### Configurable eventlog settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`enabled`** | Determines whether eventlog is enabled. | `true or false` | | **`retentionPeriod`** | Retention period (in _days_) of eventlog entries.<br>After that period, all entries are deleted. | `Integer between 0 and 9999`<br>If set to `0`: no logs are deleted<br>Recommended value: 7 | | **`logIpEnabled`** | Determines whether user’s IP address is logged. | `true or false` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemSettingsConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateEventlogConfig(); // \Swagger\Client\Model\UpdateEventlogConfig | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->updateEventlogConfig($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSettingsConfigApi->updateEventlogConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateEventlogConfig**](../Model/UpdateEventlogConfig.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\EventlogConfig**](../Model/EventlogConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGeneralSettings**
> \Swagger\Client\Model\GeneralSettings updateGeneralSettings($body, $x_sds_auth_token)

Change general settings

### &#128640; Since version 4.6.0  ### Functional Description:   DRACOON general settings configuration entry point.   Change configurable general settings.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: One or more general settings gets changed.  ### &#9432; Further Information: None.  ### Configurable general settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`sharePasswordSmsEnabled`** | Determines whether sending of share passwords via SMS is allowed. | `true or false` | | **`cryptoEnabled`** | Determines whether client-side encryption is enabled.<br>Can only be enabled once; disabling is **NOT** possible. | `true or false` | | **`emailNotificationButtonEnabled`** | Determines whether email notification button is enabled. | `true or false` | | **`eulaEnabled`** | Determines whether EULA is enabled.<br>Each user has to confirm the EULA at first login. | `true or false` | | **`s3TagsEnabled`** | Determines whether S3 tags are enabled | `true or false` | | **`hideLoginInputFields`** | Determines whether input fields for login should be enabled | `true or false` | | **`authTokenRestrictions`** | Determines auth token restrictions. (e.g. restricted access token validity) | `object` | | **`mediaServerEnabled`** **(`DEPRECATED`)** | Determines whether media server is enabled.<br>**CANNOT** be enabled if media server configuration is disabled in `api.properties`.<br>Check **`mediaServerConfigEnabled`** with `GET /system/config/settings/infrastructure`. | `true or false` | | **`weakPasswordEnabled`** **(`DEPRECATED`)** | Determines whether weak password (cf. _Password Policy_) is allowed.<br>Use `PUT /system/config/policies/passwords` API to change configured password policies. | `true or false` |  ---  ### `DEPRECATED` Password Policy  * A weak password has to fulfill the following criteria:       * is at least 8 characters long       * contains letters and numbers * A strong password has to fulfill the following criteria in addition:       * contains at least one special character       * contains upper and lower case characters  ---  ### Auth Token Restrictions      Auth token restrictions are enabled by default.      * Default access token validity: **2 hours**   * Default refresh token validity: **30 days**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemSettingsConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateGeneralSettings(); // \Swagger\Client\Model\UpdateGeneralSettings | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->updateGeneralSettings($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSettingsConfigApi->updateGeneralSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateGeneralSettings**](../Model/UpdateGeneralSettings.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\GeneralSettings**](../Model/GeneralSettings.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMailServerConfig**
> \Swagger\Client\Model\MailServerConfig updateMailServerConfig($body, $x_sds_auth_token)

Change mail server settings

## &#9888; Deprecated since version 4.11.0  ### Functional Description:   DRACOON email server configuration entry point.   Change configurable email server settings.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: One or more email server settings gets changed.  ### &#9432; Further Information: None.  ### Configurable email server settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`host`** | Email server host | `DNS name or IPv4 of an email server` | | **`port`** | Email server port | `Valid port number` | | **`username`** | Username for email server | `Username for authentication` | | **`password`** | Password for email server | `String` | | **`authenticationEnabled`** | Determines whether email server requires _authentication_. | `true or false` | | **`sslEnabled`** | Determines whether email server requires _SSL_ connection.<br>Requires **`starttlsEnabled`** to be `false`. | `true or false ` | | **`starttlsEnabled`** | Determines whether email server requires _StartTLS_ connection.<br>Requires **`sslEnabled`** to be `false`. | `true or false` | | **`resetUsername`** | Set `true` to reset email server **`username`** | `true or false` | | **`resetPassword`** | Set `true` to reset email server **`password`** | `true or false` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemSettingsConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateMailServerConfig(); // \Swagger\Client\Model\UpdateMailServerConfig | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->updateMailServerConfig($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSettingsConfigApi->updateMailServerConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateMailServerConfig**](../Model/UpdateMailServerConfig.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\MailServerConfig**](../Model/MailServerConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSyslogConfig**
> \Swagger\Client\Model\SyslogConfig updateSyslogConfig($body, $x_sds_auth_token)

Change syslog settings

### &#128640; Since version 4.6.0  ### Functional Description:   DRACOON syslog configuration entry point.   Change configurable syslog settings.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: One or more syslog settings gets changed.  ### &#9432; Further Information: None.  ### Configurable syslog settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`enabled`** | Set `true` to enable syslog. | `true or false` | | **`host`** | Syslog server (IP or FQDN) | `DNS name or IPv4 of a syslog server` | | **`port`** | Syslog server port | `Valid port number` | | **`protocol`** | Protocol to connect to syslog server | `TCP or UDP` | | **`logIpEnabled`** | Determines whether user’s IP address is logged. | `true or false` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemSettingsConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateSyslogConfig(); // \Swagger\Client\Model\UpdateSyslogConfig | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->updateSyslogConfig($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSettingsConfigApi->updateSyslogConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateSyslogConfig**](../Model/UpdateSyslogConfig.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\SyslogConfig**](../Model/SyslogConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSystemDefaults**
> \Swagger\Client\Model\SystemDefaults updateSystemDefaults($body, $x_sds_auth_token)

Change system defaults

### &#128640; Since version 4.6.0  ### Functional Description:   DRACOON system defaults configuration entry point.   Change configurable system default values.  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: One or more system default values gets changed.  ### &#9432; Further Information: None.  ### Configurable default values  | Setting | Description | Value | | :--- | :--- | :--- | | **`languageDefault`** | Defines which language should be default.<br>cf. [RFC 5646](https://tools.ietf.org/html/rfc5646) for ISO 639-1 codes | `ISO 639-1 code` | | **`downloadShareDefaultExpirationPeriod`** | Default expiration period for Download Shares in _days_. | `Integer between 0 and 9999`<br>Set `0` to disable. | | **`uploadShareDefaultExpirationPeriod`** | Default expiration period for Upload Shares in _days_. | `Integer between 0 and 9999`<br>Set `0` to disable. | | **`fileDefaultExpirationPeriod`** | Default expiration period for all uploaded files in _days_. | `Integer between 0 and 9999`<br>Set `0` to disable. | | **`nonmemberViewerDefault`** | Defines if new users get the role NONMEMBER_VIEWER by default | `true or false` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemSettingsConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateSystemDefaults(); // \Swagger\Client\Model\UpdateSystemDefaults | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->updateSystemDefaults($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSettingsConfigApi->updateSystemDefaults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateSystemDefaults**](../Model/UpdateSystemDefaults.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\SystemDefaults**](../Model/SystemDefaults.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

