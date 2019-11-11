# UpdateLoginPasswordPolicies

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**character_rules** | [**\Swagger\Client\Model\CharacterRules**](CharacterRules.md) | Properties of character related password policies | [optional] 
**min_length** | **int** | Minimum number of characters a password must contain (must be between &#x60;1&#x60; and &#x60;1024&#x60;) | [optional] 
**reject_dictionary_words** | **bool** | Determines whether a password must NOT contain word(s) from a dictionary | [optional] 
**reject_user_info** | **bool** | Determines whether a password must NOT contain user info (first name, last name, email, user name) | [optional] 
**reject_keyboard_patterns** | **bool** | Determines whether a password must NOT contain keyboard patterns (e.g. &#x60;qwertz&#x60;, &#x60;asdf&#x60;) (min. 4 character pattern) | [optional] 
**number_of_archived_passwords** | **int** | Number of passwords to archive (must be between &#x60;0&#x60; and &#x60;10&#x60;; &#x60;0&#x60; means that password history is disabled) | [optional] 
**password_expiration** | [**\Swagger\Client\Model\PasswordExpiration**](PasswordExpiration.md) | Properties of password expiration policy | [optional] 
**user_lockout** | [**\Swagger\Client\Model\UserLockout**](UserLockout.md) | Properties of user lockout policy | [optional] 
**enforce_login_password_change** | **bool** | Determines whether a login password change should be enforced for all users Only takes effect, if login password policies get stricter (default: &#x60;false&#x60;) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


