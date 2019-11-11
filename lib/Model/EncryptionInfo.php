<?php
/**
 * EncryptionInfo
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
 * EncryptionInfo Class Doc Comment
 *
 * @category Class
 * @description Encryption states
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EncryptionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EncryptionInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_key_state' => 'string',
        'room_key_state' => 'string',
        'data_space_key_state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user_key_state' => null,
        'room_key_state' => null,
        'data_space_key_state' => null
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
        'user_key_state' => 'userKeyState',
        'room_key_state' => 'roomKeyState',
        'data_space_key_state' => 'dataSpaceKeyState'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_key_state' => 'setUserKeyState',
        'room_key_state' => 'setRoomKeyState',
        'data_space_key_state' => 'setDataSpaceKeyState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_key_state' => 'getUserKeyState',
        'room_key_state' => 'getRoomKeyState',
        'data_space_key_state' => 'getDataSpaceKeyState'
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

    const USER_KEY_STATE_NONE = 'none';
    const USER_KEY_STATE_PENDING = 'pending';
    const USER_KEY_STATE_AVAILABLE = 'available';
    const ROOM_KEY_STATE_NONE = 'none';
    const ROOM_KEY_STATE_PENDING = 'pending';
    const ROOM_KEY_STATE_AVAILABLE = 'available';
    const DATA_SPACE_KEY_STATE_NONE = 'none';
    const DATA_SPACE_KEY_STATE_PENDING = 'pending';
    const DATA_SPACE_KEY_STATE_AVAILABLE = 'available';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUserKeyStateAllowableValues()
    {
        return [
            self::USER_KEY_STATE_NONE,
            self::USER_KEY_STATE_PENDING,
            self::USER_KEY_STATE_AVAILABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoomKeyStateAllowableValues()
    {
        return [
            self::ROOM_KEY_STATE_NONE,
            self::ROOM_KEY_STATE_PENDING,
            self::ROOM_KEY_STATE_AVAILABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDataSpaceKeyStateAllowableValues()
    {
        return [
            self::DATA_SPACE_KEY_STATE_NONE,
            self::DATA_SPACE_KEY_STATE_PENDING,
            self::DATA_SPACE_KEY_STATE_AVAILABLE,
        ];
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
        $this->container['user_key_state'] = isset($data['user_key_state']) ? $data['user_key_state'] : null;
        $this->container['room_key_state'] = isset($data['room_key_state']) ? $data['room_key_state'] : null;
        $this->container['data_space_key_state'] = isset($data['data_space_key_state']) ? $data['data_space_key_state'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['user_key_state'] === null) {
            $invalidProperties[] = "'user_key_state' can't be null";
        }
        $allowedValues = $this->getUserKeyStateAllowableValues();
        if (!is_null($this->container['user_key_state']) && !in_array($this->container['user_key_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'user_key_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['room_key_state'] === null) {
            $invalidProperties[] = "'room_key_state' can't be null";
        }
        $allowedValues = $this->getRoomKeyStateAllowableValues();
        if (!is_null($this->container['room_key_state']) && !in_array($this->container['room_key_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'room_key_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['data_space_key_state'] === null) {
            $invalidProperties[] = "'data_space_key_state' can't be null";
        }
        $allowedValues = $this->getDataSpaceKeyStateAllowableValues();
        if (!is_null($this->container['data_space_key_state']) && !in_array($this->container['data_space_key_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'data_space_key_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets user_key_state
     *
     * @return string
     */
    public function getUserKeyState()
    {
        return $this->container['user_key_state'];
    }

    /**
     * Sets user_key_state
     *
     * @param string $user_key_state User key state
     *
     * @return $this
     */
    public function setUserKeyState($user_key_state)
    {
        $allowedValues = $this->getUserKeyStateAllowableValues();
        if (!in_array($user_key_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'user_key_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['user_key_state'] = $user_key_state;

        return $this;
    }

    /**
     * Gets room_key_state
     *
     * @return string
     */
    public function getRoomKeyState()
    {
        return $this->container['room_key_state'];
    }

    /**
     * Sets room_key_state
     *
     * @param string $room_key_state Room key state
     *
     * @return $this
     */
    public function setRoomKeyState($room_key_state)
    {
        $allowedValues = $this->getRoomKeyStateAllowableValues();
        if (!in_array($room_key_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'room_key_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['room_key_state'] = $room_key_state;

        return $this;
    }

    /**
     * Gets data_space_key_state
     *
     * @return string
     */
    public function getDataSpaceKeyState()
    {
        return $this->container['data_space_key_state'];
    }

    /**
     * Sets data_space_key_state
     *
     * @param string $data_space_key_state DRACOON key state
     *
     * @return $this
     */
    public function setDataSpaceKeyState($data_space_key_state)
    {
        $allowedValues = $this->getDataSpaceKeyStateAllowableValues();
        if (!in_array($data_space_key_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'data_space_key_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['data_space_key_state'] = $data_space_key_state;

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


