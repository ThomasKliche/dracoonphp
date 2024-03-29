<?php
/**
 * PasswordPoliciesConfig
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
 * PasswordPoliciesConfig Class Doc Comment
 *
 * @category Class
 * @description Set of password policies
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PasswordPoliciesConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PasswordPoliciesConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'login_password_policies' => '\Swagger\Client\Model\LoginPasswordPolicies',
        'shares_password_policies' => '\Swagger\Client\Model\SharesPasswordPolicies',
        'encryption_password_policies' => '\Swagger\Client\Model\EncryptionPasswordPolicies'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'login_password_policies' => null,
        'shares_password_policies' => null,
        'encryption_password_policies' => null
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
        'login_password_policies' => 'loginPasswordPolicies',
        'shares_password_policies' => 'sharesPasswordPolicies',
        'encryption_password_policies' => 'encryptionPasswordPolicies'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'login_password_policies' => 'setLoginPasswordPolicies',
        'shares_password_policies' => 'setSharesPasswordPolicies',
        'encryption_password_policies' => 'setEncryptionPasswordPolicies'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'login_password_policies' => 'getLoginPasswordPolicies',
        'shares_password_policies' => 'getSharesPasswordPolicies',
        'encryption_password_policies' => 'getEncryptionPasswordPolicies'
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
        $this->container['login_password_policies'] = isset($data['login_password_policies']) ? $data['login_password_policies'] : null;
        $this->container['shares_password_policies'] = isset($data['shares_password_policies']) ? $data['shares_password_policies'] : null;
        $this->container['encryption_password_policies'] = isset($data['encryption_password_policies']) ? $data['encryption_password_policies'] : null;
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
     * Gets login_password_policies
     *
     * @return \Swagger\Client\Model\LoginPasswordPolicies
     */
    public function getLoginPasswordPolicies()
    {
        return $this->container['login_password_policies'];
    }

    /**
     * Sets login_password_policies
     *
     * @param \Swagger\Client\Model\LoginPasswordPolicies $login_password_policies Set of policies a login password must fulfill
     *
     * @return $this
     */
    public function setLoginPasswordPolicies($login_password_policies)
    {
        $this->container['login_password_policies'] = $login_password_policies;

        return $this;
    }

    /**
     * Gets shares_password_policies
     *
     * @return \Swagger\Client\Model\SharesPasswordPolicies
     */
    public function getSharesPasswordPolicies()
    {
        return $this->container['shares_password_policies'];
    }

    /**
     * Sets shares_password_policies
     *
     * @param \Swagger\Client\Model\SharesPasswordPolicies $shares_password_policies Set of policies a shares password must fulfill
     *
     * @return $this
     */
    public function setSharesPasswordPolicies($shares_password_policies)
    {
        $this->container['shares_password_policies'] = $shares_password_policies;

        return $this;
    }

    /**
     * Gets encryption_password_policies
     *
     * @return \Swagger\Client\Model\EncryptionPasswordPolicies
     */
    public function getEncryptionPasswordPolicies()
    {
        return $this->container['encryption_password_policies'];
    }

    /**
     * Sets encryption_password_policies
     *
     * @param \Swagger\Client\Model\EncryptionPasswordPolicies $encryption_password_policies Set of policies a encryption password must fulfill
     *
     * @return $this
     */
    public function setEncryptionPasswordPolicies($encryption_password_policies)
    {
        $this->container['encryption_password_policies'] = $encryption_password_policies;

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


