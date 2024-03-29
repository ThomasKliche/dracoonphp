<?php
/**
 * EncryptionPasswordPolicies
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
 * EncryptionPasswordPolicies Class Doc Comment
 *
 * @category Class
 * @description Encryption password policies
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EncryptionPasswordPolicies implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EncryptionPasswordPolicies';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'character_rules' => '\Swagger\Client\Model\CharacterRules',
        'min_length' => 'int',
        'reject_user_info' => 'bool',
        'reject_keyboard_patterns' => 'bool',
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
        'reject_user_info' => null,
        'reject_keyboard_patterns' => null,
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
        'reject_user_info' => 'rejectUserInfo',
        'reject_keyboard_patterns' => 'rejectKeyboardPatterns',
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
        'reject_user_info' => 'setRejectUserInfo',
        'reject_keyboard_patterns' => 'setRejectKeyboardPatterns',
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
        'reject_user_info' => 'getRejectUserInfo',
        'reject_keyboard_patterns' => 'getRejectKeyboardPatterns',
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
        $this->container['reject_user_info'] = isset($data['reject_user_info']) ? $data['reject_user_info'] : null;
        $this->container['reject_keyboard_patterns'] = isset($data['reject_keyboard_patterns']) ? $data['reject_keyboard_patterns'] : null;
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


