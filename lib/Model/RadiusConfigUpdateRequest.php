<?php
/**
 * RadiusConfigUpdateRequest
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
 * RadiusConfigUpdateRequest Class Doc Comment
 *
 * @category Class
 * @description Request model for updating a RADIUS configuration
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RadiusConfigUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RadiusConfigUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ip_address' => 'string',
        'port' => 'int',
        'shared_secret' => 'string',
        'otp_pin_first' => 'bool',
        'failover_server' => '\Swagger\Client\Model\FailoverServer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ip_address' => null,
        'port' => 'int32',
        'shared_secret' => null,
        'otp_pin_first' => null,
        'failover_server' => null
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
        'ip_address' => 'ipAddress',
        'port' => 'port',
        'shared_secret' => 'sharedSecret',
        'otp_pin_first' => 'otpPinFirst',
        'failover_server' => 'failoverServer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ip_address' => 'setIpAddress',
        'port' => 'setPort',
        'shared_secret' => 'setSharedSecret',
        'otp_pin_first' => 'setOtpPinFirst',
        'failover_server' => 'setFailoverServer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ip_address' => 'getIpAddress',
        'port' => 'getPort',
        'shared_secret' => 'getSharedSecret',
        'otp_pin_first' => 'getOtpPinFirst',
        'failover_server' => 'getFailoverServer'
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
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['shared_secret'] = isset($data['shared_secret']) ? $data['shared_secret'] : null;
        $this->container['otp_pin_first'] = isset($data['otp_pin_first']) ? $data['otp_pin_first'] : null;
        $this->container['failover_server'] = isset($data['failover_server']) ? $data['failover_server'] : null;
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
     * Gets ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string $ip_address RADIUS Server IP Address
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

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
     * @param int $port RADIUS Server Port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets shared_secret
     *
     * @return string
     */
    public function getSharedSecret()
    {
        return $this->container['shared_secret'];
    }

    /**
     * Sets shared_secret
     *
     * @param string $shared_secret Shared Secret to access the RADIUS server
     *
     * @return $this
     */
    public function setSharedSecret($shared_secret)
    {
        $this->container['shared_secret'] = $shared_secret;

        return $this;
    }

    /**
     * Gets otp_pin_first
     *
     * @return bool
     */
    public function getOtpPinFirst()
    {
        return $this->container['otp_pin_first'];
    }

    /**
     * Sets otp_pin_first
     *
     * @param bool $otp_pin_first Sequence order of concatenated PIN and one-time token (default: `true`)
     *
     * @return $this
     */
    public function setOtpPinFirst($otp_pin_first)
    {
        $this->container['otp_pin_first'] = $otp_pin_first;

        return $this;
    }

    /**
     * Gets failover_server
     *
     * @return \Swagger\Client\Model\FailoverServer
     */
    public function getFailoverServer()
    {
        return $this->container['failover_server'];
    }

    /**
     * Sets failover_server
     *
     * @param \Swagger\Client\Model\FailoverServer $failover_server RADIUS Failover Server
     *
     * @return $this
     */
    public function setFailoverServer($failover_server)
    {
        $this->container['failover_server'] = $failover_server;

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


