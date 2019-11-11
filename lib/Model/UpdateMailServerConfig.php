<?php
/**
 * UpdateMailServerConfig
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
 * UpdateMailServerConfig Class Doc Comment
 *
 * @category Class
 * @description Request model for updating mail server settings
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateMailServerConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateMailServerConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'host' => 'string',
        'port' => 'int',
        'username' => 'string',
        'password' => 'string',
        'authentication_enabled' => 'bool',
        'ssl_enabled' => 'bool',
        'starttls_enabled' => 'bool',
        'reset_username' => 'bool',
        'reset_password' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'host' => null,
        'port' => 'int32',
        'username' => null,
        'password' => null,
        'authentication_enabled' => null,
        'ssl_enabled' => null,
        'starttls_enabled' => null,
        'reset_username' => null,
        'reset_password' => null
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
        'host' => 'host',
        'port' => 'port',
        'username' => 'username',
        'password' => 'password',
        'authentication_enabled' => 'authenticationEnabled',
        'ssl_enabled' => 'sslEnabled',
        'starttls_enabled' => 'starttlsEnabled',
        'reset_username' => 'resetUsername',
        'reset_password' => 'resetPassword'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'host' => 'setHost',
        'port' => 'setPort',
        'username' => 'setUsername',
        'password' => 'setPassword',
        'authentication_enabled' => 'setAuthenticationEnabled',
        'ssl_enabled' => 'setSslEnabled',
        'starttls_enabled' => 'setStarttlsEnabled',
        'reset_username' => 'setResetUsername',
        'reset_password' => 'setResetPassword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'host' => 'getHost',
        'port' => 'getPort',
        'username' => 'getUsername',
        'password' => 'getPassword',
        'authentication_enabled' => 'getAuthenticationEnabled',
        'ssl_enabled' => 'getSslEnabled',
        'starttls_enabled' => 'getStarttlsEnabled',
        'reset_username' => 'getResetUsername',
        'reset_password' => 'getResetPassword'
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
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['authentication_enabled'] = isset($data['authentication_enabled']) ? $data['authentication_enabled'] : null;
        $this->container['ssl_enabled'] = isset($data['ssl_enabled']) ? $data['ssl_enabled'] : null;
        $this->container['starttls_enabled'] = isset($data['starttls_enabled']) ? $data['starttls_enabled'] : null;
        $this->container['reset_username'] = isset($data['reset_username']) ? $data['reset_username'] : null;
        $this->container['reset_password'] = isset($data['reset_password']) ? $data['reset_password'] : null;
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
     * Gets host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string $host Email server host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int $port Email server port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username Username for email server
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Password for email server
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets authentication_enabled
     *
     * @return bool
     */
    public function getAuthenticationEnabled()
    {
        return $this->container['authentication_enabled'];
    }

    /**
     * Sets authentication_enabled
     *
     * @param bool $authentication_enabled Set `true` if the email server requires authentication.
     *
     * @return $this
     */
    public function setAuthenticationEnabled($authentication_enabled)
    {
        $this->container['authentication_enabled'] = $authentication_enabled;

        return $this;
    }

    /**
     * Gets ssl_enabled
     *
     * @return bool
     */
    public function getSslEnabled()
    {
        return $this->container['ssl_enabled'];
    }

    /**
     * Sets ssl_enabled
     *
     * @param bool $ssl_enabled Email server requires SSL connection? Requires `starttlsEnabled` to be `false`
     *
     * @return $this
     */
    public function setSslEnabled($ssl_enabled)
    {
        $this->container['ssl_enabled'] = $ssl_enabled;

        return $this;
    }

    /**
     * Gets starttls_enabled
     *
     * @return bool
     */
    public function getStarttlsEnabled()
    {
        return $this->container['starttls_enabled'];
    }

    /**
     * Sets starttls_enabled
     *
     * @param bool $starttls_enabled Email server requires StartTLS connection? Requires `sslEnabled` to be `false`
     *
     * @return $this
     */
    public function setStarttlsEnabled($starttls_enabled)
    {
        $this->container['starttls_enabled'] = $starttls_enabled;

        return $this;
    }

    /**
     * Gets reset_username
     *
     * @return bool
     */
    public function getResetUsername()
    {
        return $this->container['reset_username'];
    }

    /**
     * Sets reset_username
     *
     * @param bool $reset_username Set `true` to reset email server `username`.
     *
     * @return $this
     */
    public function setResetUsername($reset_username)
    {
        $this->container['reset_username'] = $reset_username;

        return $this;
    }

    /**
     * Gets reset_password
     *
     * @return bool
     */
    public function getResetPassword()
    {
        return $this->container['reset_password'];
    }

    /**
     * Sets reset_password
     *
     * @param bool $reset_password Set `true` to reset email server `password`.
     *
     * @return $this
     */
    public function setResetPassword($reset_password)
    {
        $this->container['reset_password'] = $reset_password;

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

