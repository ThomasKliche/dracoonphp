<?php
/**
 * RoomUser
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
 * RoomUser Class Doc Comment
 *
 * @category Class
 * @description User information
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoomUser implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RoomUser';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_info' => '\Swagger\Client\Model\UserInfo',
        'is_granted' => 'bool',
        'id' => 'int',
        'login' => 'string',
        'display_name' => 'string',
        'email' => 'string',
        'permissions' => '\Swagger\Client\Model\NodePermissions',
        'public_key_container' => '\Swagger\Client\Model\PublicKeyContainer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user_info' => null,
        'is_granted' => null,
        'id' => 'int64',
        'login' => null,
        'display_name' => null,
        'email' => null,
        'permissions' => null,
        'public_key_container' => null
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
        'user_info' => 'userInfo',
        'is_granted' => 'isGranted',
        'id' => 'id',
        'login' => 'login',
        'display_name' => 'displayName',
        'email' => 'email',
        'permissions' => 'permissions',
        'public_key_container' => 'publicKeyContainer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_info' => 'setUserInfo',
        'is_granted' => 'setIsGranted',
        'id' => 'setId',
        'login' => 'setLogin',
        'display_name' => 'setDisplayName',
        'email' => 'setEmail',
        'permissions' => 'setPermissions',
        'public_key_container' => 'setPublicKeyContainer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_info' => 'getUserInfo',
        'is_granted' => 'getIsGranted',
        'id' => 'getId',
        'login' => 'getLogin',
        'display_name' => 'getDisplayName',
        'email' => 'getEmail',
        'permissions' => 'getPermissions',
        'public_key_container' => 'getPublicKeyContainer'
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
        $this->container['user_info'] = isset($data['user_info']) ? $data['user_info'] : null;
        $this->container['is_granted'] = isset($data['is_granted']) ? $data['is_granted'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['public_key_container'] = isset($data['public_key_container']) ? $data['public_key_container'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['user_info'] === null) {
            $invalidProperties[] = "'user_info' can't be null";
        }
        if ($this->container['is_granted'] === null) {
            $invalidProperties[] = "'is_granted' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['login'] === null) {
            $invalidProperties[] = "'login' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
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
     * Gets user_info
     *
     * @return \Swagger\Client\Model\UserInfo
     */
    public function getUserInfo()
    {
        return $this->container['user_info'];
    }

    /**
     * Sets user_info
     *
     * @param \Swagger\Client\Model\UserInfo $user_info Information about the user  [Since version 4.11.0]
     *
     * @return $this
     */
    public function setUserInfo($user_info)
    {
        $this->container['user_info'] = $user_info;

        return $this;
    }

    /**
     * Gets is_granted
     *
     * @return bool
     */
    public function getIsGranted()
    {
        return $this->container['is_granted'];
    }

    /**
     * Sets is_granted
     *
     * @param bool $is_granted Is user granted room permissions
     *
     * @return $this
     */
    public function setIsGranted($is_granted)
    {
        $this->container['is_granted'] = $is_granted;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id `DEPRECATED`: Unique identifier for the user use `id` from `UserInfo` instead  [Deprecated since version 4.11.0]
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param string $login `DEPRECATED`: User login name will be removed  [Deprecated since version 4.11.0]
     *
     * @return $this
     */
    public function setLogin($login)
    {
        $this->container['login'] = $login;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name `DEPRECATED`: Display name use information from `UserInfo` instead to combine a display name  [Deprecated since version 4.11.0]
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email `DEPRECATED`: Email  use `email` from `UserInfo` instead  [Deprecated since version 4.11.0]
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \Swagger\Client\Model\NodePermissions
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \Swagger\Client\Model\NodePermissions $permissions Available permissions for this node
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets public_key_container
     *
     * @return \Swagger\Client\Model\PublicKeyContainer
     */
    public function getPublicKeyContainer()
    {
        return $this->container['public_key_container'];
    }

    /**
     * Sets public_key_container
     *
     * @param \Swagger\Client\Model\PublicKeyContainer $public_key_container Public key container (private key and version)
     *
     * @return $this
     */
    public function setPublicKeyContainer($public_key_container)
    {
        $this->container['public_key_container'] = $public_key_container;

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


