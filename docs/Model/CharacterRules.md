# CharacterRules

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**must_contain_characters** | **string[]** | Characters which a password must contain: * &#x60;alpha&#x60; - at least one alphabetical character (&#x60;uppercase&#x60; OR &#x60;lowercase&#x60;) * &#x60;uppercase&#x60; - at least one uppercase character * &#x60;lowercase&#x60; - at least one lowercase character * &#x60;numeric&#x60; - at least one numeric character * &#x60;special&#x60; - at least one special character (letters and digits excluded) * &#x60;all&#x60; - combination of &#x60;uppercase&#x60;, &#x60;lowercase&#x60;, &#x60;numeric&#x60; and &#x60;special&#x60; | 
**number_of_characteristics_to_enforce** | **int** | Number of characteristics to enforce e.g. from &#x60;[\&quot;uppercase\&quot;, \&quot;lowercase\&quot;, \&quot;numeric\&quot;, \&quot;special\&quot;]&#x60; all 4 character sets can be enforced; but also only 2 of them (must be between 0 and 4) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


