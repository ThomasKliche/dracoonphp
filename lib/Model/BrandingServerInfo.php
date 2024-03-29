<?php
/**
 * BrandingServerInfo
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
 * BrandingServerInfo Class Doc Comment
 *
 * @category Class
 * @description DEPRECATED Branding information
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BrandingServerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BrandingServerInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'branding_server_branding_id' => 'string',
        'branding_server_customer' => 'string',
        'branding_server_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'branding_server_branding_id' => null,
        'branding_server_customer' => null,
        'branding_server_url' => null
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
        'branding_server_branding_id' => 'brandingServerBrandingId',
        'branding_server_customer' => 'brandingServerCustomer',
        'branding_server_url' => 'brandingServerUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'branding_server_branding_id' => 'setBrandingServerBrandingId',
        'branding_server_customer' => 'setBrandingServerCustomer',
        'branding_server_url' => 'setBrandingServerUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'branding_server_branding_id' => 'getBrandingServerBrandingId',
        'branding_server_customer' => 'getBrandingServerCustomer',
        'branding_server_url' => 'getBrandingServerUrl'
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
        $this->container['branding_server_branding_id'] = isset($data['branding_server_branding_id']) ? $data['branding_server_branding_id'] : null;
        $this->container['branding_server_customer'] = isset($data['branding_server_customer']) ? $data['branding_server_customer'] : null;
        $this->container['branding_server_url'] = isset($data['branding_server_url']) ? $data['branding_server_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['branding_server_branding_id'] === null) {
            $invalidProperties[] = "'branding_server_branding_id' can't be null";
        }
        if ($this->container['branding_server_customer'] === null) {
            $invalidProperties[] = "'branding_server_customer' can't be null";
        }
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
     * Gets branding_server_branding_id
     *
     * @return string
     */
    public function getBrandingServerBrandingId()
    {
        return $this->container['branding_server_branding_id'];
    }

    /**
     * Sets branding_server_branding_id
     *
     * @param string $branding_server_branding_id UUID of Branding
     *
     * @return $this
     */
    public function setBrandingServerBrandingId($branding_server_branding_id)
    {
        $this->container['branding_server_branding_id'] = $branding_server_branding_id;

        return $this;
    }

    /**
     * Gets branding_server_customer
     *
     * @return string
     */
    public function getBrandingServerCustomer()
    {
        return $this->container['branding_server_customer'];
    }

    /**
     * Sets branding_server_customer
     *
     * @param string $branding_server_customer `DEPRECATED`: Branding server customer UUID  [Deprecated since version 4.6.0]
     *
     * @return $this
     */
    public function setBrandingServerCustomer($branding_server_customer)
    {
        $this->container['branding_server_customer'] = $branding_server_customer;

        return $this;
    }

    /**
     * Gets branding_server_url
     *
     * @return string
     */
    public function getBrandingServerUrl()
    {
        return $this->container['branding_server_url'];
    }

    /**
     * Sets branding_server_url
     *
     * @param string $branding_server_url `DEPRECATED`: Branding server URL  [Deprecated since version 4.6.0]
     *
     * @return $this
     */
    public function setBrandingServerUrl($branding_server_url)
    {
        $this->container['branding_server_url'] = $branding_server_url;

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


