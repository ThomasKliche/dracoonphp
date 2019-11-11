# Swagger\Client\ConfigApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGeneralSettingsInfo**](ConfigApi.md#getGeneralSettingsInfo) | **GET** /v4/config/info/general | Get general settings
[**getInfrastructurePropertiesInfo**](ConfigApi.md#getInfrastructurePropertiesInfo) | **GET** /v4/config/info/infrastructure | Get infrastructure properties
[**getPasswordPoliciesConfigInfo**](ConfigApi.md#getPasswordPoliciesConfigInfo) | **GET** /v4/config/info/policies/passwords | Get password policies 🞂 NEW 🞀
[**getS3TagsInfo**](ConfigApi.md#getS3TagsInfo) | **GET** /v4/config/info/s3_tags | Get list of configured S3 tags
[**getSystemDefaultsInfo**](ConfigApi.md#getSystemDefaultsInfo) | **GET** /v4/config/info/defaults | Get default values
[**getSystemSettings**](ConfigApi.md#getSystemSettings) | **GET** /v4/config/settings | Get system settings
[**setSystemSetting**](ConfigApi.md#setSystemSetting) | **PUT** /v4/config/settings | Change system settings


# **getGeneralSettingsInfo**
> \Swagger\Client\Model\GeneralSettingsInfo getGeneralSettingsInfo($x_sds_auth_token)

Get general settings

### &#128640; Since version 4.6.0  ### Functional Description: Returns a list of configurable general settings.  ### Precondition: Authenticated user.  ### Effects: None.  ### &#9432; Further Information: None.  ### Configurable general settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`sharePasswordSmsEnabled`** | Determines whether sending of share passwords via SMS is allowed. | `true or false` | | **`cryptoEnabled`** | Determines whether client-side encryption is enabled.<br>Can only be enabled once; disabling is **NOT** possible. | `true or false` | | **`emailNotificationButtonEnabled`** | Determines whether email notification button is enabled. | `true or false` | | **`eulaEnabled`** | Determines whether EULA is enabled.<br>Each user has to confirm the EULA at first login. | `true or false` | | **`useS3Storage`** | Defines if S3 is used as storage backend.<br>Can only be enabled once; disabling is **NOT** possible. | `true or false` | | **`s3TagsEnabled`** | Determines whether S3 tags are enabled | `true or false` | | **`homeRoomsActive`** | Determines whether each AD user has a personal home room | `true or false` | | **`homeRoomParentId`** | Defines a node under which all personal home rooms are located. NULL if `homeRoomsActive` is `false` | `Long` | | **`mediaServerEnabled`** **(`DEPRECATED`)** | Determines whether media server is enabled.<br>Returns boolean value dependent on conjunction of **`mediaServerConfigEnabled`** AND **`mediaServerEnabled`** | `true or false` | | **`weakPasswordEnabled`** **(`DEPRECATED`)** | Determines whether weak password (cf. _Password Policy_) is allowed.<br>Use `GET /system/config/policies/passwords` API to get configured password policies. | `true or false` |  ---  ### `DEPRECATED` Password Policy  * A weak password has to fulfill the following criteria:       * is at least 8 characters long       * contains letters and numbers * A strong password has to fulfill the following criteria in addition:       * contains at least one special character       * contains upper and lower case characters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getGeneralSettingsInfo($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->getGeneralSettingsInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\GeneralSettingsInfo**](../Model/GeneralSettingsInfo.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInfrastructurePropertiesInfo**
> \Swagger\Client\Model\InfrastructureProperties getInfrastructurePropertiesInfo($x_sds_auth_token)

Get infrastructure properties

### &#128640; Since version 4.6.0  ### Functional Description:   Returns a list of read-only infrastructure properties.    ### Precondition: Authenticated user.  ### Effects: None.  ### &#9432; Further Information: Source: `api.properties`  ### Read-only infrastructure properties  | Setting | Description | Value | | :--- | :--- | :--- | | **`smsConfigEnabled`** | Determines whether sending of share passwords via SMS is **system-wide** enabled. | `true or false` | | **`mediaServerConfigEnabled`** | Determines whether media server is **system-wide** enabled. | `true or false` | | **`s3DefaultRegion`** | Suggested S3 region | `Region name` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getInfrastructurePropertiesInfo($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->getInfrastructurePropertiesInfo: ', $e->getMessage(), PHP_EOL;
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

# **getPasswordPoliciesConfigInfo**
> \Swagger\Client\Model\PasswordPoliciesConfig getPasswordPoliciesConfigInfo($x_sds_auth_token)

Get password policies 🞂 NEW 🞀

### &#128640; Since version 4.14.0  ### Functional Description:   Retrieve a list of configured password policies for all password types:   * `login` * `shares` * `encryption`  ### Precondition: Authenticated user.  ### Effects: None.  ### Further Information:  ### Available password policies  | Name | Description | Value | Password Type | | :--- | :--- | :--- | :--- | | **`mustContainCharacters`** | Characters which a password must contain:<br><ul><li>`alpha` - at least one alphabetical character (`uppercase` **OR** `lowercase`)<pre>a b c d e f g h i j k l m n o p q r s t u v w x y z<br>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</pre></li><li>`uppercase` - at least one uppercase character<pre>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</pre></li><li>`lowercase` - at least one lowercase character<pre>a b c d e f g h i j k l m n o p q r s t u v w x y z</pre></li><li>`numeric` - at least one numeric character<pre>0 1 2 3 4 5 6 7 8 9</pre></li><li>`special` - at least one special character (letters and digits excluded)<pre>! \" # $ % & ' ( ) * + , - . / : ; = ? @ [ \\ ] ^ _ { &#124; } ~</pre></li><li>`none` - none of the above</li></ul> | <ul><li>`alpha`</li><li>`uppercase`</li><li>`lowercase`</li><li>`numeric`</li><li>`special`</li><li>`none`</li></ul> | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`numberOfCharacteristicsToEnforce`** | Number of characteristics to enforce.<br>e.g. from `[\"uppercase\", \"lowercase\", \"numeric\", \"special\"]`<br>all 4 character sets can be enforced; but also only 2 of them | `Integer between 0 and 4` | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`minLength`** | Minimum number of characters a password must contain. | `Integer between 1 and 1024` | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`rejectDictionaryWords`** | Determines whether a password must **NOT** contain word(s) from a dictionary.<br>In `api.properties` a path to directory with dictionary files (`*.txt`) can be defined<br>cf. `policies.passwords.dictionary.directory`.<br><br>If this rule gets enabled `policies.passwords.dictionary.directory` must be defined and contain dictionary files.<br>Otherwise, the rule will not have any effect on password validation process. | `true or false` | <ul><li>`login`</li><li>`shares`</li></ul> | | **`rejectUserInfo`** | Determines whether a password must **NOT** contain user info.<br>Affects user's **first name**, **last name**, **email** and **user name**. | `true or false` | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`rejectKeyboardPatterns`** | Determines whether a password must **NOT** contain keyboard patterns.<br>e.g. `qwertz`, `asdf` (min. 4 character pattern) | `true or false` | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`numberOfArchivedPasswords`** | Number of passwords to archive.<br>Value `0` means that password history is disabled. | `Integer between 0 and 10` | <ul><li>`login`</li></ul> | | **`passwordExpiration.enabled`** | Determines whether password expiration is enabled. | `true or false` | <ul><li>`login`</li></ul> | | **`maxPasswordAge`** | Maximum allowed password age (in **days**) | `positive Integer` | <ul><li>`login`</li></ul> | | **`userLockout.enabled`** | Determines whether user lockout is enabled. | `true or false` | <ul><li>`login`</li></ul> | | **`maxNumberOfLoginFailures`** | Maximum allowed number of failed login attempts. | `positive Integer` | <ul><li>`login`</li></ul> | | **`lockoutPeriod`** | Amount of **minutes** a user has to wait to make another login attempt<br>after **`maxNumberOfLoginFailures`** has been exceeded. | `positive Integer` | <ul><li>`login`</li></ul> |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getPasswordPoliciesConfigInfo($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->getPasswordPoliciesConfigInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\PasswordPoliciesConfig**](../Model/PasswordPoliciesConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getS3TagsInfo**
> \Swagger\Client\Model\S3TagList getS3TagsInfo($x_sds_auth_token)

Get list of configured S3 tags

### &#128640; Since version 4.9.0  ### Functional Description: Retrieve all configured S3 tags.  ### Precondition: Authenticated user.  ### Effects: None.  ### &#9432; Further Information: An empty list is returned if no S3 tags are found / configured.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getS3TagsInfo($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->getS3TagsInfo: ', $e->getMessage(), PHP_EOL;
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

# **getSystemDefaultsInfo**
> \Swagger\Client\Model\SystemDefaults getSystemDefaultsInfo($x_sds_auth_token)

Get default values

### &#128640; Since version 4.6.0  ### Functional Description:   Returns a list of configurable system default values.  ### Precondition: Authenticated user.  ### Effects: None.  ### &#9432; Further Information: None.  ### Configurable default values  | Setting | Description | Value | | :--- | :--- | :--- | | **`languageDefault`** | Defines which language should be default.<br>cf. [RFC 5646](https://tools.ietf.org/html/rfc5646) for ISO 639-1 codes | `ISO 639-1 code` | | **`downloadShareDefaultExpirationPeriod`** | Default expiration period for Download Shares in _days_. | `Integer between 0 and 9999` | | **`uploadShareDefaultExpirationPeriod`** | Default expiration period for Upload Shares in _days_. | `Integer between 0 and 9999` | | **`fileDefaultExpirationPeriod`** | Default expiration period for all uploaded files in _days_. | `Integer between 0 and 9999` | | **`nonmemberViewerDefault`** | Defines if new users get the role NONMEMBER_VIEWER by default | `true or false` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getSystemDefaultsInfo($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->getSystemDefaultsInfo: ', $e->getMessage(), PHP_EOL;
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

# **getSystemSettings**
> \Swagger\Client\Model\ConfigOptionList getSystemSettings($x_sds_auth_token)

Get system settings

## &#9888; Deprecated since version 4.6.0  ### Functional Description:   Returns a list of configurable system settings.  ### Precondition: Right _\"read global config\"_ required.  ### Effects: None.  ### &#9432; Further Information: This API is **`DEPRECATED`** and will be removed in the future.   Check for every settings key new corresponding API and key below.  ### Attention If `eula_active` is true, but **NOT** accepted yet, or password **MUST** be changed, only the following two values are returned: * **`allow_system_global_weak_password`** * **`eula_active`**  ### Configurable settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`branding_server_branding_id`** | The branding UUID, which corresponds to _BRANDING-QUALIFIER_ in the new branding server.<br>cf. `GET /system/config/settings/branding` **`BrandingConfig.brandingQualifier`** | `String` | | **`branding_portal_url`** | Access URL to to the Branding Portal<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `GET /system/config/settings/branding` **`BrandingConfig.brandingProviderUrl`** | `String` | | **`dblog`** | Write logs to local database.<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `GET /system/config/settings/eventlog` **`EventlogConfig.enabled`** | `true or false` | | **`default_downloadshare_expiration_period`** | Default expiration period for Download Shares in days<br>cf. `GET /system/config/settings/defaults` **`SystemDefaults.downloadShareDefaultExpirationPeriod`** | `Integer between 0 and 9999` | | **`default_file_upload_expiration_date`** | Default expiration period for all uploaded files in days<br>cf. `GET /system/config/settings/defaults` **`SystemDefaults.fileDefaultExpirationPeriod`** | `Integer between 0 and 9999` | | **`default_language`** | Define which language should be default.<br>cf. `GET /system/config/settings/defaults` **`SystemDefaults.languageDefault`** | cf. `GET /public/system/info` - **`SystemInfo.languageDefault`** | | **`default_uploadshare_expiration_period`** | Default expiration period for Upload Shares in days<br>cf. `GET /system/config/settings/defaults` **`SystemDefaults.uploadShareDefaultExpirationPeriod`** | `Integer between 0 and 9999` | | **`enable_client_side_crypto`** | Activation status of client-side encryption<br>Can only be enabled once; disabling is **NOT** possible.<br>cf. `GET /system/config/settings/general` **`GeneralSettings.cryptoEnabled`** | `true or false`<br>default: `false` | | **`eula_active`** | Each user has to confirm the EULA at first login.<br>cf. `GET /system/config/settings/general` **`GeneralSettings.eulaEnabled`** | `true or false` | | **`eventlog_retention_period`** | Retention period (in days) of event log entries<br>After that period, all entries are deleted.<br>cf. `GET /system/config/settings/eventlog` **`EventlogConfig.retentionPeriod`** | `Integer between 0 and 9999`<br>If set to `0`: no logs are deleted<br>Recommended value: `7` | | **`ip_address_logging`** | Determines whether a user's IP address is logged.<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `GET /system/config/settings/eventlog` **`EventlogConfig.logIpEnabled`**<br>cf. `GET /system/config/settings/syslog` **`SyslogConfig.logIpEnabled`** | `true or false` | | **`mailserver`** | Email server to send emails.<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `GET /system/config/settings/mail_server` **`MailServerConfig.host`** | `DNS name or IPv4 of an email server` | | **`mailserver_authentication_necessary`** | Set to `true` if the email server requires authentication.<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `GET /system/config/settings/mail_server` **`MailServerConfig.authenticationEnabled`** | `true or false` | | **`mailserver_password`** | **Password is no longer returned.**<br>Check **`mailserver_password_set`** to determine whether password is set. |  | | **`mailserver_password_set`** | Indicates if a password is set for the mailserver (because **`mailserver_password`** is always returned empty).<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `GET /system/config/settings/mail_server` **`MailServerConfig.passwordDefined`** | `true or false` | | **`mailserver_port`** | Email server port<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `GET /system/config/settings/mail_server` **`MailServerConfig.port`** | `Valid port number` | | **`mailserver_username`** | User ame for email server<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `GET /system/config/settings/mail_server` **`MailServerConfig.username`** | `Username for authentication` | | **`mailserver_use_ssl`** | Email server requires SSL connection?<br>Only visible for _Config Manager_ of Provider Customer.<br>Requires **`mailserver_use_starttls`** to be `false`<br>cf. `GET /system/config/settings/mail_server` **`MailServerConfig.username`** | `true or false` | | **`mailserver_use_starttls`** | Email server requires StartTLS connection?<br>Only visible for _Config Manager_ of Provider Customer.<br>Requires **`mailserver_use_ssl`** to be `false`<br>cf. `GET /system/config/settings/mail_server` **`MailServerConfig.starttlsEnabled`** | `true or false` | | **`syslog`** | Write logs to a syslog interface.<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `GET /system/config/settings/syslog` **`SyslogConfig.enabled`** | `true or false` | | **`syslog_host`** | Syslog server (IP or FQDN)<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `GET /system/config/settings/syslog` **`SyslogConfig.host`** | `DNS name or IPv4 of a syslog server` | | **`syslog_port`** | Syslog server port<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `GET /system/config/settings/syslog` **`SyslogConfig.port`** | `Valid port number` | | **`syslog_protocol`** | Protocol to connect to syslog server.<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `GET /system/config/settings/syslog` **`SyslogConfig.protocol`** | `TCP or UDP` | | **`enable_email_notification_button`** | Enable mail notification button.<br>cf. `GET /system/config/settings/general` **`GeneralSettings.emailNotificationButtonEnabled`** | `true or false` | | **`allow_share_password_sms`** | Allow sending of share passwords via SMS.<br>cf. `GET /system/config/settings/general` **`GeneralSettings.sharePasswordSmsEnabled`** | `true or false` | | **`globally_allow_share_password_sms`** | Allow sending of share passwords via SMS **system-wide** (read-only).<br>cf. `GET /system/config/settings/infrastructure` **`InfrastructureProperties.smsConfigEnabled`** | `true or false` | | **`use_s3_storage`** | Defines if S3 is used as storage backend.<br>Can only be enabled once; disabling is **NOT** possible.<br>cf. `GET /system/config/settings/general` **`GeneralSettings.useS3Storage`** | `true or false` | | **`s3_default_region`** |Suggested S3 region (read-only)<br>cf. `GET /system/config/settings/infrastructure` **`InfrastructureProperties.s3DefaultRegion`** | `Region name` |  ### `DEPRECATED` settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`allow_system_global_weak_password`** **(`DEPRECATED`)** | Determines whether weak password (cf. _Password Policy_ below) is allowed.<br>cf. `GET /system/config/settings/general` **`GeneralSettings.weakPasswordEnabled`**<br>Use `GET /system/config/policies/passwords` API to get configured password policies. | `true or false` | | **`branding_server_customer`** (**`DEPRECATED`**) | The UUID of the branding server customer, which corresponds to customer key in the branding server. | `String` | | **`branding_server_url`** (**`DEPRECATED`**) | Access URL to to the Branding Server.<br>Only visible for _Config Manager_ of Provider Customer. | `String` | | **`email_from`** (**`DEPRECATED`**) | Sender of system-generated emails<br>Only visible for _Config Manager_ of Provider Customer.<br>**Moved to branding** | `Valid email address` | | **`email_to_sales`** (**`DEPRECATED`**) | Contact email address for customers to request more user licenses or data volume.<br>**Moved to branding** | `Valid email address` | | **`email_to_support`** (**`DEPRECATED`**) | Support email address for users<br>**Moved to branding** | `Valid email address` | | **`file_size_js`** (**`DEPRECATED`**) | Maximum file size (in bytes) for downloads of encrypted files with JavaScript.<br>Bigger files will require a JavaApplet. | `Integer`<br>Recommended value: `10485760` (=`10MB`) | | **`system_name`** (**`DEPRECATED`**) | System name<br>**Moved to branding; use `product.title`** | `Display name of the DRACOON` |  ---  ### `DEPRECATED` Password Policy  * A weak password has to fulfill the following criteria:       * is at least 8 characters long       * contains letters and numbers * A strong password has to fulfill the following criteria in addition:       * contains at least one special character       * contains upper and lower case characters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getSystemSettings($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->getSystemSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\ConfigOptionList**](../Model/ConfigOptionList.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSystemSetting**
> setSystemSetting($body, $x_sds_auth_token)

Change system settings

## &#9888; Deprecated since version 4.6.0  ### Functional Description: Change configurable settings.  ### Precondition: Right _\"change global config\"_ required.  ### Effects: One or more global settings gets changed.  ### &#9432; Further Information: This API is **`DEPRECATED`** and will be removed in the future.   Check for every settings key new corresponding API and key below.  ### Attention Only visible for _Config Manager_ of Provider Customer.  ### Settings  ### Configurable settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`branding_server_branding_id`** | The branding UUID, which corresponds to _BRANDING-QUALIFIER_ in the new branding server.<br>cf. `PUT /system/config/settings/branding` **`BrandingConfig.brandingQualifier`** | `String` | | **`branding_portal_url`** | Access URL to to the Branding Portal<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `PUT /system/config/settings/branding` **`BrandingConfig.brandingProviderUrl`** | `String` | | **`dblog`** | Write logs to local database.<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `PUT /system/config/settings/eventlog` **`EventlogConfig.enabled`** | `true or false` | | **`default_downloadshare_expiration_period`** | Default expiration period for Download Shares in days<br>cf. `PUT /system/config/settings/defaults` **`SystemDefaults.downloadShareDefaultExpirationPeriod`** | `Integer between 0 and 9999`<br>Set `0` to disable. | | **`default_file_upload_expiration_date`** | Default expiration period for all uploaded files in days<br>cf. `PUT /system/config/settings/defaults` **`SystemDefaults.fileDefaultExpirationPeriod`** | `Integer between 0 and 9999`<br>Set `0` to disable. | | **`default_language`** | Define which language should be default.<br>cf. `PUT /system/config/settings/defaults` **`SystemDefaults.languageDefault`** | cf. `GET /public/system/info` - **`SystemInfo.languageDefault`** | | **`default_uploadshare_expiration_period`** | Default expiration period for Upload Shares in days<br>cf. `PUT /system/config/settings/defaults` **`SystemDefaults.uploadShareDefaultExpirationPeriod`** | `Integer between 0 and 9999`<br>Set `0` to disable. | | **`enable_client_side_crypto`** | Activation status of client-side encryption<br>Can only be enabled once; disabling is **NOT** possible.<br>cf. `PUT /system/config/settings/general` **`GeneralSettings.cryptoEnabled`** | `true or false`<br>default: `false` | | **`eula_active`** | Each user has to confirm the EULA at first login.<br>cf. `PUT /system/config/settings/general` **`GeneralSettings.eulaEnabled`** | `true or false` | | **`eventlog_retention_period`** | Retention period (in days) of event log entries<br>After that period, all entries are deleted.<br>cf. `PUT /system/config/settings/eventlog` **`EventlogConfig.retentionPeriod`** | `Integer between 0 and 9999`<br>If set to `0`: no logs are deleted<br>Recommended value: `7` | | **`ip_address_logging`** | Determines whether a user's IP address is logged.<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `PUT /system/config/settings/eventlog` **`EventlogConfig.logIpEnabled`**<br>cf. `PUT /system/config/settings/syslog` **`SyslogConfig.logIpEnabled`** | `true or false` | | **`mailserver`** | Email server to send emails.<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `PUT /system/config/settings/mail_server` **`MailServerConfig.host`** | `DNS name or IPv4 of an email server` | | **`mailserver_authentication_necessary`** | Set to `true` if the email server requires authentication.<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `PUT /system/config/settings/mail_server` **`MailServerConfig.authenticationEnabled`** | `true or false` | | **`mailserver_password`** | Password for email server<br>cf. `PUT /system/config/settings/mail_server` **`MailServerConfig.password`** | `Password for authentication` | | **`mailserver_port`** | Email server port<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `PUT /system/config/settings/mail_server` **`MailServerConfig.port`** | `Valid port number` | | **`mailserver_username`** | Username for email server<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `PUT /system/config/settings/mail_server` **`MailServerConfig.username`** | `Username for authentication` | | **`mailserver_use_ssl`** | Email server requires SSL connection?<br>Only visible for _Config Manager_ of Provider Customer.<br>Requires **`mailserver_use_starttls`** to be `false`<br>cf. `PUT /system/config/settings/mail_server` **`MailServerConfig.username`** | `true or false` | | **`mailserver_use_starttls`** | Email server requires StartTLS connection?<br>Only visible for _Config Manager_ of Provider Customer.<br>Requires **`mailserver_use_ssl`** to be `false`<br>cf. `PUT /system/config/settings/mail_server` **`MailServerConfig.starttlsEnabled`** | `true or false` | | **`syslog`** | Write logs to a syslog interface.<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `PUT /system/config/settings/syslog` **`SyslogConfig.enabled`** | `true or false` | | **`syslog_host`** | Syslog server (IP or FQDN)<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `PUT /system/config/settings/syslog` **`SyslogConfig.host`** | `DNS name or IPv4 of a syslog server` | | **`syslog_port`** | Syslog server port<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `PUT /system/config/settings/syslog` **`SyslogConfig.port`** | `Valid port number` | | **`syslog_protocol`** | Protocol to connect to syslog server.<br>Only visible for _Config Manager_ of Provider Customer.<br>cf. `PUT /system/config/settings/syslog` **`SyslogConfig.protocol`** | `TCP or UDP` | | **`enable_email_notification_button`** | Enable mail notification button.<br>cf. `PUT /system/config/settings/general` **`GeneralSettings.emailNotificationButtonEnabled`** | `true or false` | | **`allow_share_password_sms`** | Allow sending of share passwords via SMS.<br>cf. `PUT /system/config/settings/general` **`GeneralSettings.sharePasswordSmsEnabled`** | `true or false` |  ### `DEPRECATED` settings  | Setting | Description | Value | | :--- | :--- | :--- | | **`allow_system_global_weak_password`** **(`DEPRECATED`)** | Determines whether weak password (cf. _Password Policy_ below) is allowed.<br>cf. `PUT /system/config/settings/general` **`GeneralSettings.weakPasswordEnabled`**<br>Use `PUT /system/config/policies/passwords` API to change configured password policies. | `true or false` | | **`branding_server_customer`** (**`DEPRECATED`**) | The UUID of the branding server customer, which corresponds to customer key in the branding server. | `String` | | **`branding_server_url`** (**`DEPRECATED`**) | Access URL to to the Branding Server.<br>Only visible for _Config Manager_ of Provider Customer. | `String` | | **`email_from`** (**`DEPRECATED`**) | Sender of system-generated emails<br>Only visible for _Config Manager_ of Provider Customer.<br>**Moved to branding** | `Valid email address` | | **`email_to_sales`** (**`DEPRECATED`**) | Contact email address for customers to request more user licenses or data volume.<br>**Moved to branding** | `Valid email address` | | **`email_to_support`** (**`DEPRECATED`**) | Support email address for users<br>**Moved to branding** | `Valid email address` | | **`file_size_js`** (**`DEPRECATED`**) | Maximum file size (in bytes) for downloads of encrypted files with JavaScript.<br>Bigger files will require a JavaApplet. | `Integer`<br>Recommended value: `10485760` (=`10MB`) | | **`system_name`** (**`DEPRECATED`**) | System name<br>**Moved to branding; use `product.title`** | `Display name of the DRACOON` |  ---  ### `DEPRECATED` Password Policy  * A weak password has to fulfill the following criteria:       * is at least 8 characters long       * contains letters and numbers * A strong password has to fulfill the following criteria in addition:       * contains at least one special character       * contains upper and lower case characters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConfigOptionList(); // \Swagger\Client\Model\ConfigOptionList | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $apiInstance->setSystemSetting($body, $x_sds_auth_token);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->setSystemSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigOptionList**](../Model/ConfigOptionList.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

void (empty response body)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

