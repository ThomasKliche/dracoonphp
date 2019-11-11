<?php
/**
 * UpdateCustomerResponse
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
 * UpdateCustomerResponse Class Doc Comment
 *
 * @category Class
 * @description Customer information
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateCustomerResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateCustomerResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'company_name' => 'string',
        'customer_contract_type' => 'string',
        'quota_max' => 'int',
        'user_max' => 'int',
        'is_locked' => 'bool',
        'lock_status' => 'bool',
        'trial_days' => 'int',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'customer_attributes' => '\Swagger\Client\Model\CustomerAttributes',
        'activation_code' => 'string',
        'provider_customer_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'company_name' => null,
        'customer_contract_type' => null,
        'quota_max' => 'int64',
        'user_max' => 'int32',
        'is_locked' => null,
        'lock_status' => null,
        'trial_days' => 'int32',
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'customer_attributes' => null,
        'activation_code' => null,
        'provider_customer_id' => null
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
        'company_name' => 'companyName',
        'customer_contract_type' => 'customerContractType',
        'quota_max' => 'quotaMax',
        'user_max' => 'userMax',
        'is_locked' => 'isLocked',
        'lock_status' => 'lockStatus',
        'trial_days' => 'trialDays',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'customer_attributes' => 'customerAttributes',
        'activation_code' => 'activationCode',
        'provider_customer_id' => 'providerCustomerId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'company_name' => 'setCompanyName',
        'customer_contract_type' => 'setCustomerContractType',
        'quota_max' => 'setQuotaMax',
        'user_max' => 'setUserMax',
        'is_locked' => 'setIsLocked',
        'lock_status' => 'setLockStatus',
        'trial_days' => 'setTrialDays',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'customer_attributes' => 'setCustomerAttributes',
        'activation_code' => 'setActivationCode',
        'provider_customer_id' => 'setProviderCustomerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'company_name' => 'getCompanyName',
        'customer_contract_type' => 'getCustomerContractType',
        'quota_max' => 'getQuotaMax',
        'user_max' => 'getUserMax',
        'is_locked' => 'getIsLocked',
        'lock_status' => 'getLockStatus',
        'trial_days' => 'getTrialDays',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'customer_attributes' => 'getCustomerAttributes',
        'activation_code' => 'getActivationCode',
        'provider_customer_id' => 'getProviderCustomerId'
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

    const CUSTOMER_CONTRACT_TYPE_FREE = 'free';
    const CUSTOMER_CONTRACT_TYPE_DEMO = 'demo';
    const CUSTOMER_CONTRACT_TYPE_PAY = 'pay';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCustomerContractTypeAllowableValues()
    {
        return [
            self::CUSTOMER_CONTRACT_TYPE_FREE,
            self::CUSTOMER_CONTRACT_TYPE_DEMO,
            self::CUSTOMER_CONTRACT_TYPE_PAY,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['customer_contract_type'] = isset($data['customer_contract_type']) ? $data['customer_contract_type'] : null;
        $this->container['quota_max'] = isset($data['quota_max']) ? $data['quota_max'] : null;
        $this->container['user_max'] = isset($data['user_max']) ? $data['user_max'] : null;
        $this->container['is_locked'] = isset($data['is_locked']) ? $data['is_locked'] : null;
        $this->container['lock_status'] = isset($data['lock_status']) ? $data['lock_status'] : null;
        $this->container['trial_days'] = isset($data['trial_days']) ? $data['trial_days'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['customer_attributes'] = isset($data['customer_attributes']) ? $data['customer_attributes'] : null;
        $this->container['activation_code'] = isset($data['activation_code']) ? $data['activation_code'] : null;
        $this->container['provider_customer_id'] = isset($data['provider_customer_id']) ? $data['provider_customer_id'] : null;
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
        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if ($this->container['customer_contract_type'] === null) {
            $invalidProperties[] = "'customer_contract_type' can't be null";
        }
        $allowedValues = $this->getCustomerContractTypeAllowableValues();
        if (!is_null($this->container['customer_contract_type']) && !in_array($this->container['customer_contract_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'customer_contract_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['quota_max'] === null) {
            $invalidProperties[] = "'quota_max' can't be null";
        }
        if ($this->container['user_max'] === null) {
            $invalidProperties[] = "'user_max' can't be null";
        }
        if ($this->container['lock_status'] === null) {
            $invalidProperties[] = "'lock_status' can't be null";
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
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name Company name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets customer_contract_type
     *
     * @return string
     */
    public function getCustomerContractType()
    {
        return $this->container['customer_contract_type'];
    }

    /**
     * Sets customer_contract_type
     *
     * @param string $customer_contract_type Customer type
     *
     * @return $this
     */
    public function setCustomerContractType($customer_contract_type)
    {
        $allowedValues = $this->getCustomerContractTypeAllowableValues();
        if (!in_array($customer_contract_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'customer_contract_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['customer_contract_type'] = $customer_contract_type;

        return $this;
    }

    /**
     * Gets quota_max
     *
     * @return int
     */
    public function getQuotaMax()
    {
        return $this->container['quota_max'];
    }

    /**
     * Sets quota_max
     *
     * @param int $quota_max Maximal disc space which can be allocated by customer in bytes. -1 for unlimited
     *
     * @return $this
     */
    public function setQuotaMax($quota_max)
    {
        $this->container['quota_max'] = $quota_max;

        return $this;
    }

    /**
     * Gets user_max
     *
     * @return int
     */
    public function getUserMax()
    {
        return $this->container['user_max'];
    }

    /**
     * Sets user_max
     *
     * @param int $user_max Maximal number of users
     *
     * @return $this
     */
    public function setUserMax($user_max)
    {
        $this->container['user_max'] = $user_max;

        return $this;
    }

    /**
     * Gets is_locked
     *
     * @return bool
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     *
     * @param bool $is_locked Customer is locked: * `false` - unlocked * `true` - locked  All users of this customer will be blocked and can not login anymore. (default: `false`)
     *
     * @return $this
     */
    public function setIsLocked($is_locked)
    {
        $this->container['is_locked'] = $is_locked;

        return $this;
    }

    /**
     * Gets lock_status
     *
     * @return bool
     */
    public function getLockStatus()
    {
        return $this->container['lock_status'];
    }

    /**
     * Sets lock_status
     *
     * @param bool $lock_status `DEPRECATED`: Customer lock status: * `false` - unlocked * `true` - locked  Please use `isLocked` instead. All users of this customer will be blocked and can not login anymore. (default: `false`)  [Deprecated since version 4.7.0]
     *
     * @return $this
     */
    public function setLockStatus($lock_status)
    {
        $this->container['lock_status'] = $lock_status;

        return $this;
    }

    /**
     * Gets trial_days
     *
     * @return int
     */
    public function getTrialDays()
    {
        return $this->container['trial_days'];
    }

    /**
     * Sets trial_days
     *
     * @param int $trial_days Number of days left for trial period (relevant only for type `demo`) (not used)
     *
     * @return $this
     */
    public function setTrialDays($trial_days)
    {
        $this->container['trial_days'] = $trial_days;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Creation date
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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
     * Gets customer_attributes
     *
     * @return \Swagger\Client\Model\CustomerAttributes
     */
    public function getCustomerAttributes()
    {
        return $this->container['customer_attributes'];
    }

    /**
     * Sets customer_attributes
     *
     * @param \Swagger\Client\Model\CustomerAttributes $customer_attributes Customer attributes
     *
     * @return $this
     */
    public function setCustomerAttributes($customer_attributes)
    {
        $this->container['customer_attributes'] = $customer_attributes;

        return $this;
    }

    /**
     * Gets activation_code
     *
     * @return string
     */
    public function getActivationCode()
    {
        return $this->container['activation_code'];
    }

    /**
     * Sets activation_code
     *
     * @param string $activation_code `DEPRECATED`: Customer activation code string: * valid only for types `free` and `demo` * for `pay` customers it is empty  [Deprecated since version 4.8.0]
     *
     * @return $this
     */
    public function setActivationCode($activation_code)
    {
        $this->container['activation_code'] = $activation_code;

        return $this;
    }

    /**
     * Gets provider_customer_id
     *
     * @return string
     */
    public function getProviderCustomerId()
    {
        return $this->container['provider_customer_id'];
    }

    /**
     * Sets provider_customer_id
     *
     * @param string $provider_customer_id Provider customer ID
     *
     * @return $this
     */
    public function setProviderCustomerId($provider_customer_id)
    {
        $this->container['provider_customer_id'] = $provider_customer_id;

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


