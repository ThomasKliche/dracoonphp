<?php
/**
 * SystemDefaults
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
 * SystemDefaults Class Doc Comment
 *
 * @category Class
 * @description System defaults
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SystemDefaults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SystemDefaults';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'language_default' => 'string',
        'download_share_default_expiration_period' => 'int',
        'upload_share_default_expiration_period' => 'int',
        'file_default_expiration_period' => 'int',
        'nonmember_viewer_default' => 'bool',
        'hide_login_input_fields' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'language_default' => null,
        'download_share_default_expiration_period' => 'int32',
        'upload_share_default_expiration_period' => 'int32',
        'file_default_expiration_period' => 'int32',
        'nonmember_viewer_default' => null,
        'hide_login_input_fields' => null
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
        'language_default' => 'languageDefault',
        'download_share_default_expiration_period' => 'downloadShareDefaultExpirationPeriod',
        'upload_share_default_expiration_period' => 'uploadShareDefaultExpirationPeriod',
        'file_default_expiration_period' => 'fileDefaultExpirationPeriod',
        'nonmember_viewer_default' => 'nonmemberViewerDefault',
        'hide_login_input_fields' => 'hideLoginInputFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language_default' => 'setLanguageDefault',
        'download_share_default_expiration_period' => 'setDownloadShareDefaultExpirationPeriod',
        'upload_share_default_expiration_period' => 'setUploadShareDefaultExpirationPeriod',
        'file_default_expiration_period' => 'setFileDefaultExpirationPeriod',
        'nonmember_viewer_default' => 'setNonmemberViewerDefault',
        'hide_login_input_fields' => 'setHideLoginInputFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language_default' => 'getLanguageDefault',
        'download_share_default_expiration_period' => 'getDownloadShareDefaultExpirationPeriod',
        'upload_share_default_expiration_period' => 'getUploadShareDefaultExpirationPeriod',
        'file_default_expiration_period' => 'getFileDefaultExpirationPeriod',
        'nonmember_viewer_default' => 'getNonmemberViewerDefault',
        'hide_login_input_fields' => 'getHideLoginInputFields'
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
        $this->container['language_default'] = isset($data['language_default']) ? $data['language_default'] : null;
        $this->container['download_share_default_expiration_period'] = isset($data['download_share_default_expiration_period']) ? $data['download_share_default_expiration_period'] : null;
        $this->container['upload_share_default_expiration_period'] = isset($data['upload_share_default_expiration_period']) ? $data['upload_share_default_expiration_period'] : null;
        $this->container['file_default_expiration_period'] = isset($data['file_default_expiration_period']) ? $data['file_default_expiration_period'] : null;
        $this->container['nonmember_viewer_default'] = isset($data['nonmember_viewer_default']) ? $data['nonmember_viewer_default'] : null;
        $this->container['hide_login_input_fields'] = isset($data['hide_login_input_fields']) ? $data['hide_login_input_fields'] : null;
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
     * Gets language_default
     *
     * @return string
     */
    public function getLanguageDefault()
    {
        return $this->container['language_default'];
    }

    /**
     * Sets language_default
     *
     * @param string $language_default Define which language should be default.
     *
     * @return $this
     */
    public function setLanguageDefault($language_default)
    {
        $this->container['language_default'] = $language_default;

        return $this;
    }

    /**
     * Gets download_share_default_expiration_period
     *
     * @return int
     */
    public function getDownloadShareDefaultExpirationPeriod()
    {
        return $this->container['download_share_default_expiration_period'];
    }

    /**
     * Sets download_share_default_expiration_period
     *
     * @param int $download_share_default_expiration_period Default expiration period for Download Shares in days.
     *
     * @return $this
     */
    public function setDownloadShareDefaultExpirationPeriod($download_share_default_expiration_period)
    {
        $this->container['download_share_default_expiration_period'] = $download_share_default_expiration_period;

        return $this;
    }

    /**
     * Gets upload_share_default_expiration_period
     *
     * @return int
     */
    public function getUploadShareDefaultExpirationPeriod()
    {
        return $this->container['upload_share_default_expiration_period'];
    }

    /**
     * Sets upload_share_default_expiration_period
     *
     * @param int $upload_share_default_expiration_period Default expiration period for Upload Shares in days.
     *
     * @return $this
     */
    public function setUploadShareDefaultExpirationPeriod($upload_share_default_expiration_period)
    {
        $this->container['upload_share_default_expiration_period'] = $upload_share_default_expiration_period;

        return $this;
    }

    /**
     * Gets file_default_expiration_period
     *
     * @return int
     */
    public function getFileDefaultExpirationPeriod()
    {
        return $this->container['file_default_expiration_period'];
    }

    /**
     * Sets file_default_expiration_period
     *
     * @param int $file_default_expiration_period Default expiration period for all uploaded files in days.
     *
     * @return $this
     */
    public function setFileDefaultExpirationPeriod($file_default_expiration_period)
    {
        $this->container['file_default_expiration_period'] = $file_default_expiration_period;

        return $this;
    }

    /**
     * Gets nonmember_viewer_default
     *
     * @return bool
     */
    public function getNonmemberViewerDefault()
    {
        return $this->container['nonmember_viewer_default'];
    }

    /**
     * Sets nonmember_viewer_default
     *
     * @param bool $nonmember_viewer_default Defines if new users get the role NONMEMBER_VIEWER by default  [Since version 4.12.0]
     *
     * @return $this
     */
    public function setNonmemberViewerDefault($nonmember_viewer_default)
    {
        $this->container['nonmember_viewer_default'] = $nonmember_viewer_default;

        return $this;
    }

    /**
     * Gets hide_login_input_fields
     *
     * @return bool
     */
    public function getHideLoginInputFields()
    {
        return $this->container['hide_login_input_fields'];
    }

    /**
     * Sets hide_login_input_fields
     *
     * @param bool $hide_login_input_fields Defines if login fields should be hidden  [Since version 4.13.0]
     *
     * @return $this
     */
    public function setHideLoginInputFields($hide_login_input_fields)
    {
        $this->container['hide_login_input_fields'] = $hide_login_input_fields;

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


