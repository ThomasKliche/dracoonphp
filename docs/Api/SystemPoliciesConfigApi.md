# Swagger\Client\SystemPoliciesConfigApi

All URIs are relative to *https://fileshare.kps-partner.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changePasswordPoliciesConfig**](SystemPoliciesConfigApi.md#changePasswordPoliciesConfig) | **PUT** /v4/system/config/policies/passwords | Change password policies 🞂 NEW 🞀
[**getPasswordPoliciesConfig**](SystemPoliciesConfigApi.md#getPasswordPoliciesConfig) | **GET** /v4/system/config/policies/passwords | Get password policies 🞂 NEW 🞀
[**getPasswordPoliciesForPasswordType**](SystemPoliciesConfigApi.md#getPasswordPoliciesForPasswordType) | **GET** /v4/system/config/policies/passwords/{password_type} | Get password policies for a certain password type 🞂 NEW 🞀


# **changePasswordPoliciesConfig**
> \Swagger\Client\Model\PasswordPoliciesConfig changePasswordPoliciesConfig($body, $x_sds_auth_token)

Change password policies 🞂 NEW 🞀

### &#128640; Since version 4.14.0  ### Functional Description:   Change current password policies for any password types:   * `login` * `shares` * `encryption`  ### Precondition: Right _\"change global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: Password policies get changed.  ### Further Information:  ### Available password policies  | Name | Description | Value | Recommended Value | Password Type | | :--- | :--- | :--- | :--- | :--- | | **`mustContainCharacters`** | Characters which a password must contain:<br><ul><li>`alpha` - at least one alphabetical character (`uppercase` **OR** `lowercase`)<pre>a b c d e f g h i j k l m n o p q r s t u v w x y z<br>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</pre></li><li>`uppercase` - at least one uppercase character<pre>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</pre></li><li>`lowercase` - at least one lowercase character<pre>a b c d e f g h i j k l m n o p q r s t u v w x y z</pre></li><li>`numeric` - at least one numeric character<pre>0 1 2 3 4 5 6 7 8 9</pre></li><li>`special` - at least one special character (letters and digits excluded)<pre>! \" # $ % & ' ( ) * + , - . / : ; = ? @ [ \\ ] ^ _ { &#124; } ~</pre></li><li>`none` - none of the above</li><li>`all` - combination of `uppercase`, `lowercase`, `numeric` and `special`</li></ul> | <ul><li>`alpha`</li><li>`uppercase`</li><li>`lowercase`</li><li>`numeric`</li><li>`special`</li><li>`none`</li><li>`all`</li></ul> | <ul><li>`uppercase`</li><li>`lowercase`</li><li>`numeric`</li></ul>  | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`numberOfCharacteristicsToEnforce`** | Number of characteristics to enforce.<br>e.g. from `[\"uppercase\", \"lowercase\", \"numeric\", \"special\"]`<br>all 4 character sets can be enforced; but also only 2 of them | `Integer between 0 and 4`<br><br>default:<ul><li>`none` - `0`</li><li>`all` - `4`</li><li>otherwise - amount of distinct values<br>cf. **`mustContainCharacters`** matrix</li></ul> | `3` | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`minLength`** | Minimum number of characters a password must contain. | `Integer between 1 and 1024` | <ul><li>`login`: `12`</li><li>`shares`: `12`</li><li>`encryption`: `14`</li></ul> | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`rejectDictionaryWords`** | Determines whether a password must **NOT** contain word(s) from a dictionary.<br>In `api.properties` a path to directory with dictionary files (`*.txt`) can be defined<br>cf. `policies.passwords.dictionary.directory`.<br><br>If this rule gets enabled `policies.passwords.dictionary.directory` must be defined and contain dictionary files.<br>Otherwise, the rule will not have any effect on password validation process. | `true or false` | `true` | <ul><li>`login`</li><li>`shares`</li></ul> | | **`rejectUserInfo`** | Determines whether a password must **NOT** contain user info.<br>Affects user's **first name**, **last name**, **email** and **user name**. | `true or false` | `true` | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`rejectKeyboardPatterns`** | Determines whether a password must **NOT** contain keyboard patterns.<br>e.g. `qwertz`, `asdf` (min. 4 character pattern) | `true or false` | `true` | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`numberOfArchivedPasswords`** | Number of passwords to archive. | `Integer between 0 and 10`<br>Set `0` to disable password history. | `3` | <ul><li>`login`</li></ul> | | **`passwordExpiration.enabled`** | Determines whether password expiration is enabled.<br>Password expiration policy can only be enabled in context with **`enforceLoginPasswordChange`**. | `true or false` | `false` | <ul><li>`login`</li></ul> | | **`maxPasswordAge`** | Maximum allowed password age (in **days**) | `positive Integer` |  | <ul><li>`login`</li></ul> | | **`userLockout.enabled`** | Determines whether user lockout is enabled. | `true or false` | `true` | <ul><li>`login`</li></ul> | | **`maxNumberOfLoginFailures`** | Maximum allowed number of failed login attempts. | `positive Integer` | `5` | <ul><li>`login`</li></ul> | | **`lockoutPeriod`** | Amount of **minutes** a user has to wait to make another login attempt<br>after **`maxNumberOfLoginFailures`** has been exceeded. | `positive Integer` | `10` | <ul><li>`login`</li></ul> | | **`enforceLoginPasswordChange`** | Determines whether a login password change should be enforced for all users.<br>Only takes effect, if login password policies get stricter. | `true or false`<br>default: `false` |  | <ul><li>`login`</li></ul> |  ---  ### **`mustContainCharacters`** matrix  |  | `alpha` | `uppercase` | `lowercase` | `numeric` | `special` | `all` | `none` | | :---: | :---: | :---: | :---: | :---: | :---: | :---: | :---: | | **`alpha`** | `alpha` | `uppercase` | `lowercase` | `alpha`<br>`numeric` | `alpha`<br>`special` | `all` | `none` | | **`uppercase`** | `uppercase` | `uppercase` | `uppercase`<br>`lowercase` | `uppercase`<br>`numeric` | `uppercase`<br>`special` | `all` | `none` | | **`lowercase`** | `lowercase` | `uppercase`<br>`lowercase` | `lowercase` | `lowercase`<br>`numeric` | `lowercase`<br>`special` | `all` | `none` | | **`numeric`** | `alpha`<br>`numeric` | `uppercase`<br>`numeric` | `lowercase`<br>`numeric` | `numeric` | `numeric`<br>`special` | `all` | `none` | | **`special`** | `alpha`<br>`special` | `uppercase`<br>`special` | `lowercase`<br>`special` | `numeric`<br>`special` | `special` | `all` | `none` | | **`all`** | `all` | `all` | `all` | `all` | `all` | `all` | `none` | | **`none`** | `none` | `none` |  `none` | `none` | `none` | `none` | `none` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemPoliciesConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdatePasswordPoliciesConfig(); // \Swagger\Client\Model\UpdatePasswordPoliciesConfig | body
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->changePasswordPoliciesConfig($body, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPoliciesConfigApi->changePasswordPoliciesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdatePasswordPoliciesConfig**](../Model/UpdatePasswordPoliciesConfig.md)| body |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\PasswordPoliciesConfig**](../Model/PasswordPoliciesConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPasswordPoliciesConfig**
> \Swagger\Client\Model\PasswordPoliciesConfig getPasswordPoliciesConfig($x_sds_auth_token)

Get password policies 🞂 NEW 🞀

### &#128640; Since version 4.14.0  ### Functional Description:   Retrieve a list of configured password policies for all password types:   * `login` * `shares` * `encryption`  ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### Further Information:  ### Available password policies  | Name | Description | Value | Password Type | | :--- | :--- | :--- | :--- | | **`mustContainCharacters`** | Characters which a password must contain:<br><ul><li>`alpha` - at least one alphabetical character (`uppercase` **OR** `lowercase`)<pre>a b c d e f g h i j k l m n o p q r s t u v w x y z<br>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</pre></li><li>`uppercase` - at least one uppercase character<pre>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</pre></li><li>`lowercase` - at least one lowercase character<pre>a b c d e f g h i j k l m n o p q r s t u v w x y z</pre></li><li>`numeric` - at least one numeric character<pre>0 1 2 3 4 5 6 7 8 9</pre></li><li>`special` - at least one special character (letters and digits excluded)<pre>! \" # $ % & ' ( ) * + , - . / : ; = ? @ [ \\ ] ^ _ { &#124; } ~</pre></li><li>`none` - none of the above</li></ul> | <ul><li>`alpha`</li><li>`uppercase`</li><li>`lowercase`</li><li>`numeric`</li><li>`special`</li><li>`none`</li></ul> | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`numberOfCharacteristicsToEnforce`** | Number of characteristics to enforce.<br>e.g. from `[\"uppercase\", \"lowercase\", \"numeric\", \"special\"]`<br>all 4 character sets can be enforced; but also only 2 of them | `Integer between 0 and 4` | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`minLength`** | Minimum number of characters a password must contain. | `Integer between 1 and 1024` | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`rejectDictionaryWords`** | Determines whether a password must **NOT** contain word(s) from a dictionary.<br>In `api.properties` a path to directory with dictionary files (`*.txt`) can be defined<br>cf. `policies.passwords.dictionary.directory`.<br><br>If this rule gets enabled `policies.passwords.dictionary.directory` must be defined and contain dictionary files.<br>Otherwise, the rule will not have any effect on password validation process. | `true or false` | <ul><li>`login`</li><li>`shares`</li></ul> | | **`rejectUserInfo`** | Determines whether a password must **NOT** contain user info.<br>Affects user's **first name**, **last name**, **email** and **user name**. | `true or false` | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`rejectKeyboardPatterns`** | Determines whether a password must **NOT** contain keyboard patterns.<br>e.g. `qwertz`, `asdf` (min. 4 character pattern) | `true or false` | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`numberOfArchivedPasswords`** | Number of passwords to archive.<br>Value `0` means that password history is disabled. | `Integer between 0 and 10` | <ul><li>`login`</li></ul> | | **`passwordExpiration.enabled`** | Determines whether password expiration is enabled. | `true or false` | <ul><li>`login`</li></ul> | | **`maxPasswordAge`** | Maximum allowed password age (in **days**) | `positive Integer` | <ul><li>`login`</li></ul> | | **`userLockout.enabled`** | Determines whether user lockout is enabled. | `true or false` | <ul><li>`login`</li></ul> | | **`maxNumberOfLoginFailures`** | Maximum allowed number of failed login attempts. | `positive Integer` | <ul><li>`login`</li></ul> | | **`lockoutPeriod`** | Amount of **minutes** a user has to wait to make another login attempt<br>after **`maxNumberOfLoginFailures`** has been exceeded. | `positive Integer` | <ul><li>`login`</li></ul> |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemPoliciesConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getPasswordPoliciesConfig($x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPoliciesConfigApi->getPasswordPoliciesConfig: ', $e->getMessage(), PHP_EOL;
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

# **getPasswordPoliciesForPasswordType**
> \Swagger\Client\Model\PasswordPoliciesConfig getPasswordPoliciesForPasswordType($password_type, $x_sds_auth_token)

Get password policies for a certain password type 🞂 NEW 🞀

### &#128640; Since version 4.14.0  ### Functional Description:   Retrieve a list of configured password policies for a certain password type:   * `login` * `shares` * `encryption`  ### Precondition: Right _\"read global config\"_ required.   Role _Config Manager_ of the Provider Customer.  ### Effects: None.  ### Further Information:  ### Available password policies  | Name | Description | Value | Password Type | | :--- | :--- | :--- | :--- | | **`mustContainCharacters`** | Characters which a password must contain:<br><ul><li>`alpha` - at least one alphabetical character (`uppercase` **OR** `lowercase`)<pre>a b c d e f g h i j k l m n o p q r s t u v w x y z<br>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</pre></li><li>`uppercase` - at least one uppercase character<pre>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</pre></li><li>`lowercase` - at least one lowercase character<pre>a b c d e f g h i j k l m n o p q r s t u v w x y z</pre></li><li>`numeric` - at least one numeric character<pre>0 1 2 3 4 5 6 7 8 9</pre></li><li>`special` - at least one special character (letters and digits excluded)<pre>! \" # $ % & ' ( ) * + , - . / : ; = ? @ [ \\ ] ^ _ { &#124; } ~</pre></li><li>`none` - none of the above</li></ul> | <ul><li>`alpha`</li><li>`uppercase`</li><li>`lowercase`</li><li>`numeric`</li><li>`special`</li><li>`none`</li></ul> | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`numberOfCharacteristicsToEnforce`** | Number of characteristics to enforce.<br>e.g. from `[\"uppercase\", \"lowercase\", \"numeric\", \"special\"]`<br>all 4 character sets can be enforced; but also only 2 of them | `Integer between 0 and 4` | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`minLength`** | Minimum number of characters a password must contain. | `Integer between 1 and 1024` | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`rejectDictionaryWords`** | Determines whether a password must **NOT** contain word(s) from a dictionary.<br>In `api.properties` a path to directory with dictionary files (`*.txt`) can be defined<br>cf. `policies.passwords.dictionary.directory`.<br><br>If this rule gets enabled `policies.passwords.dictionary.directory` must be defined and contain dictionary files.<br>Otherwise, the rule will not have any effect on password validation process. | `true or false` | <ul><li>`login`</li><li>`shares`</li></ul> | | **`rejectUserInfo`** | Determines whether a password must **NOT** contain user info.<br>Affects user's **first name**, **last name**, **email** and **user name**. | `true or false` | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`rejectKeyboardPatterns`** | Determines whether a password must **NOT** contain keyboard patterns.<br>e.g. `qwertz`, `asdf` (min. 4 character pattern) | `true or false` | <ul><li>`login`</li><li>`shares`</li><li>`encryption`</li></ul> | | **`numberOfArchivedPasswords`** | Number of passwords to archive.<br>Value `0` means that password history is disabled. | `Integer between 0 and 10` | <ul><li>`login`</li></ul> | | **`passwordExpiration.enabled`** | Determines whether password expiration is enabled. | `true or false` | <ul><li>`login`</li></ul> | | **`maxPasswordAge`** | Maximum allowed password age (in **days**) | `positive Integer` | <ul><li>`login`</li></ul> | | **`userLockout.enabled`** | Determines whether user lockout is enabled. | `true or false` | <ul><li>`login`</li></ul> | | **`maxNumberOfLoginFailures`** | Maximum allowed number of failed login attempts. | `positive Integer` | <ul><li>`login`</li></ul> | | **`lockoutPeriod`** | Amount of **minutes** a user has to wait to make another login attempt<br>after **`maxNumberOfLoginFailures`** has been exceeded. | `positive Integer` | <ul><li>`login`</li></ul> |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: DRACOON-OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SystemPoliciesConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$password_type = "password_type_example"; // string | Password type: * `login` * `shares` * `encryption`
$x_sds_auth_token = "x_sds_auth_token_example"; // string | Authentication token

try {
    $result = $apiInstance->getPasswordPoliciesForPasswordType($password_type, $x_sds_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPoliciesConfigApi->getPasswordPoliciesForPasswordType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password_type** | **string**| Password type: * &#x60;login&#x60; * &#x60;shares&#x60; * &#x60;encryption&#x60; |
 **x_sds_auth_token** | **string**| Authentication token | [optional]

### Return type

[**\Swagger\Client\Model\PasswordPoliciesConfig**](../Model/PasswordPoliciesConfig.md)

### Authorization

[DRACOON-OAuth](../../README.md#DRACOON-OAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

