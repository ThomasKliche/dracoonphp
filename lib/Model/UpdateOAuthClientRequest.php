<?php
/**
 * UpdateOAuthClientRequest
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
 * UpdateOAuthClientRequest Class Doc Comment
 *
 * @category Class
 * @description Request model for updating an OAuth client
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateOAuthClientRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateOAuthClientRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_secret' => 'string',
        'client_name' => 'string',
        'client_type' => 'string',
        'is_enabled' => 'bool',
        'grant_types' => 'string[]',
        'redirect_uris' => 'string[]',
        'access_token_validity' => 'int',
        'refresh_token_validity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_secret' => null,
        'client_name' => null,
        'client_type' => null,
        'is_enabled' => null,
        'grant_types' => null,
        'redirect_uris' => null,
        'access_token_validity' => 'int32',
        'refresh_token_validity' => 'int32'
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
        'client_secret' => 'clientSecret',
        'client_name' => 'clientName',
        'client_type' => 'clientType',
        'is_enabled' => 'isEnabled',
        'grant_types' => 'grantTypes',
        'redirect_uris' => 'redirectUris',
        'access_token_validity' => 'accessTokenValidity',
        'refresh_token_validity' => 'refreshTokenValidity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_secret' => 'setClientSecret',
        'client_name' => 'setClientName',
        'client_type' => 'setClientType',
        'is_enabled' => 'setIsEnabled',
        'grant_types' => 'setGrantTypes',
        'redirect_uris' => 'setRedirectUris',
        'access_token_validity' => 'setAccessTokenValidity',
        'refresh_token_validity' => 'setRefreshTokenValidity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_secret' => 'getClientSecret',
        'client_name' => 'getClientName',
        'client_type' => 'getClientType',
        'is_enabled' => 'getIsEnabled',
        'grant_types' => 'getGrantTypes',
        'redirect_uris' => 'getRedirectUris',
        'access_token_validity' => 'getAccessTokenValidity',
        'refresh_token_validity' => 'getRefreshTokenValidity'
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

    const CLIENT_TYPE_CONFIDENTIAL = 'confidential';
    const CLIENT_TYPE__PUBLIC = 'public';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClientTypeAllowableValues()
    {
        return [
            self::CLIENT_TYPE_CONFIDENTIAL,
            self::CLIENT_TYPE__PUBLIC,
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
        $this->container['client_secret'] = isset($data['client_secret']) ? $data['client_secret'] : null;
        $this->container['client_name'] = isset($data['client_name']) ? $data['client_name'] : null;
        $this->container['client_type'] = isset($data['client_type']) ? $data['client_type'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['grant_types'] = isset($data['grant_types']) ? $data['grant_types'] : null;
        $this->container['redirect_uris'] = isset($data['redirect_uris']) ? $data['redirect_uris'] : null;
        $this->container['access_token_validity'] = isset($data['access_token_validity']) ? $data['access_token_validity'] : null;
        $this->container['refresh_token_validity'] = isset($data['refresh_token_validity']) ? $data['refresh_token_validity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getClientTypeAllowableValues();
        if (!is_null($this->container['client_type']) && !in_array($this->container['client_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'client_type', must be one of '%s'",
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
     * Gets client_secret
     *
     * @return string
     */
    public function getClientSecret()
    {
        return $this->container['client_secret'];
    }

    /**
     * Sets client_secret
     *
     * @param string $client_secret Secret, which client uses at authentication.
     *
     * @return $this
     */
    public function setClientSecret($client_secret)
    {
        $this->container['client_secret'] = $client_secret;

        return $this;
    }

    /**
     * Gets client_name
     *
     * @return string
     */
    public function getClientName()
    {
        return $this->container['client_name'];
    }

    /**
     * Sets client_name
     *
     * @param string $client_name Name, which is shown at the client configuration and authorization.
     *
     * @return $this
     */
    public function setClientName($client_name)
    {
        $this->container['client_name'] = $client_name;

        return $this;
    }

    /**
     * Gets client_type
     *
     * @return string
     */
    public function getClientType()
    {
        return $this->container['client_type'];
    }

    /**
     * Sets client_type
     *
     * @param string $client_type Determines whether client is a confidential or public client.
     *
     * @return $this
     */
    public function setClientType($client_type)
    {
        $allowedValues = $this->getClientTypeAllowableValues();
        if (!is_null($client_type) && !in_array($client_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'client_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['client_type'] = $client_type;

        return $this;
    }

    /**
     * Gets is_enabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool $is_enabled Determines whether client is enabled.
     *
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets grant_types
     *
     * @return string[]
     */
    public function getGrantTypes()
    {
        return $this->container['grant_types'];
    }

    /**
     * Sets grant_types
     *
     * @param string[] $grant_types Authorized grant types * `authorization_code` * `implicit` * `password` * `client_credentials` * `refresh_token`  cf. [RFC 6749](https://tools.ietf.org/html/rfc6749)
     *
     * @return $this
     */
    public function setGrantTypes($grant_types)
    {
        $this->container['grant_types'] = $grant_types;

        return $this;
    }

    /**
     * Gets redirect_uris
     *
     * @return string[]
     */
    public function getRedirectUris()
    {
        return $this->container['redirect_uris'];
    }

    /**
     * Sets redirect_uris
     *
     * @param string[] $redirect_uris URIs, to which a user is redirected after authorization.
     *
     * @return $this
     */
    public function setRedirectUris($redirect_uris)
    {
        $this->container['redirect_uris'] = $redirect_uris;

        return $this;
    }

    /**
     * Gets access_token_validity
     *
     * @return int
     */
    public function getAccessTokenValidity()
    {
        return $this->container['access_token_validity'];
    }

    /**
     * Sets access_token_validity
     *
     * @param int $access_token_validity Validity of the access token in seconds.
     *
     * @return $this
     */
    public function setAccessTokenValidity($access_token_validity)
    {
        $this->container['access_token_validity'] = $access_token_validity;

        return $this;
    }

    /**
     * Gets refresh_token_validity
     *
     * @return int
     */
    public function getRefreshTokenValidity()
    {
        return $this->container['refresh_token_validity'];
    }

    /**
     * Sets refresh_token_validity
     *
     * @param int $refresh_token_validity Validity of the refresh token in seconds.
     *
     * @return $this
     */
    public function setRefreshTokenValidity($refresh_token_validity)
    {
        $this->container['refresh_token_validity'] = $refresh_token_validity;

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


