<?php
/**
 * CustomerData
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
 * CustomerData Class Doc Comment
 *
 * @category Class
 * @description Customer information
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'is_provider_customer' => 'bool',
        'space_limit' => 'int',
        'space_used' => 'int',
        'accounts_limit' => 'int',
        'accounts_used' => 'int',
        'customer_encryption_enabled' => 'bool',
        'cnt_files' => 'int',
        'cnt_folders' => 'int',
        'cnt_rooms' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'is_provider_customer' => null,
        'space_limit' => 'int64',
        'space_used' => 'int64',
        'accounts_limit' => 'int32',
        'accounts_used' => 'int32',
        'customer_encryption_enabled' => null,
        'cnt_files' => 'int64',
        'cnt_folders' => 'int64',
        'cnt_rooms' => 'int64'
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
        'id' => 'id',
        'name' => 'name',
        'is_provider_customer' => 'isProviderCustomer',
        'space_limit' => 'spaceLimit',
        'space_used' => 'spaceUsed',
        'accounts_limit' => 'accountsLimit',
        'accounts_used' => 'accountsUsed',
        'customer_encryption_enabled' => 'customerEncryptionEnabled',
        'cnt_files' => 'cntFiles',
        'cnt_folders' => 'cntFolders',
        'cnt_rooms' => 'cntRooms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'is_provider_customer' => 'setIsProviderCustomer',
        'space_limit' => 'setSpaceLimit',
        'space_used' => 'setSpaceUsed',
        'accounts_limit' => 'setAccountsLimit',
        'accounts_used' => 'setAccountsUsed',
        'customer_encryption_enabled' => 'setCustomerEncryptionEnabled',
        'cnt_files' => 'setCntFiles',
        'cnt_folders' => 'setCntFolders',
        'cnt_rooms' => 'setCntRooms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'is_provider_customer' => 'getIsProviderCustomer',
        'space_limit' => 'getSpaceLimit',
        'space_used' => 'getSpaceUsed',
        'accounts_limit' => 'getAccountsLimit',
        'accounts_used' => 'getAccountsUsed',
        'customer_encryption_enabled' => 'getCustomerEncryptionEnabled',
        'cnt_files' => 'getCntFiles',
        'cnt_folders' => 'getCntFolders',
        'cnt_rooms' => 'getCntRooms'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['is_provider_customer'] = isset($data['is_provider_customer']) ? $data['is_provider_customer'] : null;
        $this->container['space_limit'] = isset($data['space_limit']) ? $data['space_limit'] : null;
        $this->container['space_used'] = isset($data['space_used']) ? $data['space_used'] : null;
        $this->container['accounts_limit'] = isset($data['accounts_limit']) ? $data['accounts_limit'] : null;
        $this->container['accounts_used'] = isset($data['accounts_used']) ? $data['accounts_used'] : null;
        $this->container['customer_encryption_enabled'] = isset($data['customer_encryption_enabled']) ? $data['customer_encryption_enabled'] : null;
        $this->container['cnt_files'] = isset($data['cnt_files']) ? $data['cnt_files'] : null;
        $this->container['cnt_folders'] = isset($data['cnt_folders']) ? $data['cnt_folders'] : null;
        $this->container['cnt_rooms'] = isset($data['cnt_rooms']) ? $data['cnt_rooms'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['is_provider_customer'] === null) {
            $invalidProperties[] = "'is_provider_customer' can't be null";
        }
        if ($this->container['space_limit'] === null) {
            $invalidProperties[] = "'space_limit' can't be null";
        }
        if ($this->container['space_used'] === null) {
            $invalidProperties[] = "'space_used' can't be null";
        }
        if ($this->container['accounts_limit'] === null) {
            $invalidProperties[] = "'accounts_limit' can't be null";
        }
        if ($this->container['accounts_used'] === null) {
            $invalidProperties[] = "'accounts_used' can't be null";
        }
        if ($this->container['customer_encryption_enabled'] === null) {
            $invalidProperties[] = "'customer_encryption_enabled' can't be null";
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
     * @param int $id Unique identifier for the customer
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Customer name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets is_provider_customer
     *
     * @return bool
     */
    public function getIsProviderCustomer()
    {
        return $this->container['is_provider_customer'];
    }

    /**
     * Sets is_provider_customer
     *
     * @param bool $is_provider_customer Customer is Provider Customer
     *
     * @return $this
     */
    public function setIsProviderCustomer($is_provider_customer)
    {
        $this->container['is_provider_customer'] = $is_provider_customer;

        return $this;
    }

    /**
     * Gets space_limit
     *
     * @return int
     */
    public function getSpaceLimit()
    {
        return $this->container['space_limit'];
    }

    /**
     * Sets space_limit
     *
     * @param int $space_limit Space limit (in bytes). -1 for unlimited
     *
     * @return $this
     */
    public function setSpaceLimit($space_limit)
    {
        $this->container['space_limit'] = $space_limit;

        return $this;
    }

    /**
     * Gets space_used
     *
     * @return int
     */
    public function getSpaceUsed()
    {
        return $this->container['space_used'];
    }

    /**
     * Sets space_used
     *
     * @param int $space_used Space used (in bytes)
     *
     * @return $this
     */
    public function setSpaceUsed($space_used)
    {
        $this->container['space_used'] = $space_used;

        return $this;
    }

    /**
     * Gets accounts_limit
     *
     * @return int
     */
    public function getAccountsLimit()
    {
        return $this->container['accounts_limit'];
    }

    /**
     * Sets accounts_limit
     *
     * @param int $accounts_limit User accounts limit
     *
     * @return $this
     */
    public function setAccountsLimit($accounts_limit)
    {
        $this->container['accounts_limit'] = $accounts_limit;

        return $this;
    }

    /**
     * Gets accounts_used
     *
     * @return int
     */
    public function getAccountsUsed()
    {
        return $this->container['accounts_used'];
    }

    /**
     * Sets accounts_used
     *
     * @param int $accounts_used User accounts used
     *
     * @return $this
     */
    public function setAccountsUsed($accounts_used)
    {
        $this->container['accounts_used'] = $accounts_used;

        return $this;
    }

    /**
     * Gets customer_encryption_enabled
     *
     * @return bool
     */
    public function getCustomerEncryptionEnabled()
    {
        return $this->container['customer_encryption_enabled'];
    }

    /**
     * Sets customer_encryption_enabled
     *
     * @param bool $customer_encryption_enabled Clientside encryption for customer enabled
     *
     * @return $this
     */
    public function setCustomerEncryptionEnabled($customer_encryption_enabled)
    {
        $this->container['customer_encryption_enabled'] = $customer_encryption_enabled;

        return $this;
    }

    /**
     * Gets cnt_files
     *
     * @return int
     */
    public function getCntFiles()
    {
        return $this->container['cnt_files'];
    }

    /**
     * Sets cnt_files
     *
     * @param int $cnt_files Total number of files Visible only with at least one global role.  [Deprecated since version 4.11.0]
     *
     * @return $this
     */
    public function setCntFiles($cnt_files)
    {
        $this->container['cnt_files'] = $cnt_files;

        return $this;
    }

    /**
     * Gets cnt_folders
     *
     * @return int
     */
    public function getCntFolders()
    {
        return $this->container['cnt_folders'];
    }

    /**
     * Sets cnt_folders
     *
     * @param int $cnt_folders Total number of folders Visible only with at least one global role.  [Deprecated since version 4.11.0]
     *
     * @return $this
     */
    public function setCntFolders($cnt_folders)
    {
        $this->container['cnt_folders'] = $cnt_folders;

        return $this;
    }

    /**
     * Gets cnt_rooms
     *
     * @return int
     */
    public function getCntRooms()
    {
        return $this->container['cnt_rooms'];
    }

    /**
     * Sets cnt_rooms
     *
     * @param int $cnt_rooms Total number of rooms Visible only with at least one global role.  [Deprecated since version 4.11.0]
     *
     * @return $this
     */
    public function setCntRooms($cnt_rooms)
    {
        $this->container['cnt_rooms'] = $cnt_rooms;

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


