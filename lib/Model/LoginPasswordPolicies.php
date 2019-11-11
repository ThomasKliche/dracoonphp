<?php
/**
 * LoginPasswordPolicies
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DRACOON
 *
 * REST Web Services for DRACOON<br>Version: 4.14.4  - built at: 2019-11-04 11:46:45<br><br><a title='Developer Information' href='https://developer.dracoon.com'>Developer Information</a>&emsp;&emsp;<a title='Get SDKs on GitHub' href='https://github.com/dracoon'>Get SDKs on GitHub</a>
 *
 * OpenAPI spec version: 4.14.4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.9
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * LoginPasswordPolicies Class Doc Comment
 *
 * @category Class
 * @description Login password policies
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoginPasswordPolicies implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LoginPasswordPolicies';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'character_rules' => '\Swagger\Client\Model\CharacterRules',
        'min_length' => 'int',
        'reject_dictionary_words' => 'bool',
        'reject_user_info' => 'bool',
        'reject_keyboard_patterns' => 'bool',
        'number_of_archived_passwords' => 'int',
        'password_expiration' => '\Swagger\Client\Model\PasswordExpiration',
        'user_lockout' => '\Swagger\Client\Model\UserLockout',
        'updated_at' => '\DateTime',
        'updated_by' => '\Swagger\Client\Model\UserInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'character_rules' => null,
        'min_length' => 'int32',
        'reject_dictionary_words' => null,
        'reject_user_info' => null,
        'reject_keyboard_patterns' => null,
        'number_of_archived_passwords' => 'int32',
        'password_expiration' => null,
        'user_lockout' => null,
        'updated_at' => 'date-time',
        'updated_by' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'character_rules' => 'characterRules',
        'min_length' => 'minLength',
        'reject_dictionary_words' => 'rejectDictionaryWords',
        'reject_user_info' => 'rejectUserInfo',
        'reject_keyboard_patterns' => 'rejectKeyboardPatterns',
        'number_of_archived_passwords' => 'numberOfArchivedPasswords',
        'password_expiration' => 'passwordExpiration',
        'user_lockout' => 'userLockout',
        'updated_at' => 'updatedAt',
        'updated_by' => 'updatedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'character_rules' => 'setCharacterRules',
        'min_length' => 'setMinLength',
        'reject_dictionary_words' => 'setRejectDictionaryWords',
        'reject_user_info' => 'setRejectUserInfo',
        'reject_keyboard_patterns' => 'setRejectKeyboardPatterns',
        'number_of_archived_passwords' => 'setNumberOfArchivedPasswords',
        'password_expiration' => 'setPasswordExpiration',
        'user_lockout' => 'setUserLockout',
        'updated_at' => 'setUpdatedAt',
        'updated_by' => 'setUpdatedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'character_rules' => 'getCharacterRules',
        'min_length' => 'getMinLength',
        'reject_dictionary_words' => 'getRejectDictionaryWords',
        'reject_user_info' => 'getRejectUserInfo',
        'reject_keyboard_patterns' => 'getRejectKeyboardPatterns',
        'number_of_archived_passwords' => 'getNumberOfArchivedPasswords',
        'password_expiration' => 'getPasswordExpiration',
        'user_lockout' => 'getUserLockout',
        'updated_at' => 'getUpdatedAt',
        'updated_by' => 'getUpdatedBy'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['character_rules'] = isset($data['character_rules']) ? $data['character_rules'] : null;
        $this->container['min_length'] = isset($data['min_length']) ? $data['min_length'] : null;
        $this->container['reject_dictionary_words'] = isset($data['reject_dictionary_words']) ? $data['reject_dictionary_words'] : null;
        $this->container['reject_user_info'] = isset($data['reject_user_info']) ? $data['reject_user_info'] : null;
        $this->container['reject_keyboard_patterns'] = isset($data['reject_keyboard_patterns']) ? $data['reject_keyboard_patterns'] : null;
        $this->container['number_of_archived_passwords'] = isset($data['number_of_archived_passwords']) ? $data['number_of_archived_passwords'] : null;
        $this->container['password_expiration'] = isset($data['password_expiration']) ? $data['password_expiration'] : null;
        $this->container['user_lockout'] = isset($data['user_lockout']) ? $data['user_lockout'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['updated_by'] = isset($data['updated_by']) ? $data['updated_by'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets character_rules
     *
     * @return \Swagger\Client\Model\CharacterRules
     */
    public function getCharacterRules()
    {
        return $this->container['character_rules'];
    }

    /**
     * Sets character_rules
     *
     * @param \Swagger\Client\Model\CharacterRules $character_rules Properties of character related password policies
     *
     * @return $this
     */
    public function setCharacterRules($character_rules)
    {
        $this->container['character_rules'] = $character_rules;

        return $this;
    }

    /**
     * Gets min_length
     *
     * @return int
     */
    public function getMinLength()
    {
        return $this->container['min_length'];
    }

    /**
     * Sets min_length
     *
     * @param int $min_length Minimum number of characters a password must contain (must be between `1` and `1024`)
     *
     * @return $this
     */
    public function setMinLength($min_length)
    {
        $this->container['min_length'] = $min_length;

        return $this;
    }

    /**
     * Gets reject_dictionary_words
     *
     * @return bool
     */
    public function getRejectDictionaryWords()
    {
        return $this->container['reject_dictionary_words'];
    }

    /**
     * Sets reject_dictionary_words
     *
     * @param bool $reject_dictionary_words Determines whether a password must NOT contain word(s) from a dictionary
     *
     * @return $this
     */
    public function setRejectDictionaryWords($reject_dictionary_words)
    {
        $this->container['reject_dictionary_words'] = $reject_dictionary_words;

        return $this;
    }

    /**
     * Gets reject_user_info
     *
     * @return bool
     */
    public function getRejectUserInfo()
    {
        return $this->container['reject_user_info'];
    }

    /**
     * Sets reject_user_info
     *
     * @param bool $reject_user_info Determines whether a password must NOT contain user info (first name, last name, email, user name)
     *
     * @return $this
     */
    public function setRejectUserInfo($reject_user_info)
    {
        $this->container['reject_user_info'] = $reject_user_info;

        return $this;
    }

    /**
     * Gets reject_keyboard_patterns
     *
     * @return bool
     */
    public function getRejectKeyboardPatterns()
    {
        return $this->container['reject_keyboard_patterns'];
    }

    /**
     * Sets reject_keyboard_patterns
     *
     * @param bool $reject_keyboard_patterns Determines whether a password must NOT contain keyboard patterns (e.g. `qwertz`, `asdf`) (min. 4 character pattern)
     *
     * @return $this
     */
    public function setRejectKeyboardPatterns($reject_keyboard_patterns)
    {
        $this->container['reject_keyboard_patterns'] = $reject_keyboard_patterns;

        return $this;
    }

    /**
     * Gets number_of_archived_passwords
     *
     * @return int
     */
    public function getNumberOfArchivedPasswords()
    {
        return $this->container['number_of_archived_passwords'];
    }

    /**
     * Sets number_of_archived_passwords
     *
     * @param int $number_of_archived_passwords Number of passwords to archive (must be between `0` and `10`; `0` means that password history is disabled)
     *
     * @return $this
     */
    public function setNumberOfArchivedPasswords($number_of_archived_passwords)
    {
        $this->container['number_of_archived_passwords'] = $number_of_archived_passwords;

        return $this;
    }

    /**
     * Gets password_expiration
     *
     * @return \Swagger\Client\Model\PasswordExpiration
     */
    public function getPasswordExpiration()
    {
        return $this->container['password_expiration'];
    }

    /**
     * Sets password_expiration
     *
     * @param \Swagger\Client\Model\PasswordExpiration $password_expiration Properties of password expiration policy
     *
     * @return $this
     */
    public function setPasswordExpiration($password_expiration)
    {
        $this->container['password_expiration'] = $password_expiration;

        return $this;
    }

    /**
     * Gets user_lockout
     *
     * @return \Swagger\Client\Model\UserLockout
     */
    public function getUserLockout()
    {
        return $this->container['user_lockout'];
    }

    /**
     * Sets user_lockout
     *
     * @param \Swagger\Client\Model\UserLockout $user_lockout Properties of user lockout policy
     *
     * @return $this
     */
    public function setUserLockout($user_lockout)
    {
        $this->container['user_lockout'] = $user_lockout;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Modification date
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets updated_by
     *
     * @return \Swagger\Client\Model\UserInfo
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     *
     * @param \Swagger\Client\Model\UserInfo $updated_by Modified by user
     *
     * @return $this
     */
    public function setUpdatedBy($updated_by)
    {
        $this->container['updated_by'] = $updated_by;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


