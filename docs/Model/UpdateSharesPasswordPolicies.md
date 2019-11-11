# UpdateSharesPasswordPolicies

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**character_rules** | [**\Swagger\Client\Model\CharacterRules**](CharacterRules.md) | Properties of character related password policies | [optional] 
**min_length** | **int** | Minimum number of characters a password must contain (must be between &#x60;1&#x60; and &#x60;1024&#x60;) | [optional] 
**reject_dictionary_words** | **bool** | Determines whether a password must NOT contain word(s) from a dictionary | [optional] 
**reject_user_info** | **bool** | Determines whether a password must NOT contain user info (first name, last name, email, user name) | [optional] 
**reject_keyboard_patterns** | **bool** | Determines whether a password must NOT contain keyboard patterns (e.g. &#x60;qwertz&#x60;, &#x60;asdf&#x60;) (min. 4 character pattern) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


