<?php
/**
 * CreateOpenIdIdpConfigRequest
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
 * CreateOpenIdIdpConfigRequest Class Doc Comment
 *
 * @category Class
 * @description Request model for creating an OpenID Connect IDP configuration
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateOpenIdIdpConfigRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateOpenIdIdpConfigRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'issuer' => 'string',
        'authorization_end_point_url' => 'string',
        'token_end_point_url' => 'string',
        'user_info_end_point_url' => 'string',
        'jwks_end_point_url' => 'string',
        'client_id' => 'string',
        'client_secret' => 'string',
        'flow' => 'string',
        'scopes' => 'string[]',
        'redirect_uris' => 'string[]',
        'mapping_claim' => 'string',
        'pkce_enabled' => 'bool',
        'pkce_challenge_method' => 'string',
        'fallback_mapping_claim' => 'string',
        'user_import_enabled' => 'bool',
        'user_import_group' => 'int',
        'user_update_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'issuer' => null,
        'authorization_end_point_url' => null,
        'token_end_point_url' => null,
        'user_info_end_point_url' => null,
        'jwks_end_point_url' => null,
        'client_id' => null,
        'client_secret' => null,
        'flow' => null,
        'scopes' => null,
        'redirect_uris' => null,
        'mapping_claim' => null,
        'pkce_enabled' => null,
        'pkce_challenge_method' => null,
        'fallback_mapping_claim' => null,
        'user_import_enabled' => null,
        'user_import_group' => 'int64',
        'user_update_enabled' => null
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
        'name' => 'name',
        'issuer' => 'issuer',
        'authorization_end_point_url' => 'authorizationEndPointUrl',
        'token_end_point_url' => 'tokenEndPointUrl',
        'user_info_end_point_url' => 'userInfoEndPointUrl',
        'jwks_end_point_url' => 'jwksEndPointUrl',
        'client_id' => 'clientId',
        'client_secret' => 'clientSecret',
        'flow' => 'flow',
        'scopes' => 'scopes',
        'redirect_uris' => 'redirectUris',
        'mapping_claim' => 'mappingClaim',
        'pkce_enabled' => 'pkceEnabled',
        'pkce_challenge_method' => 'pkceChallengeMethod',
        'fallback_mapping_claim' => 'fallbackMappingClaim',
        'user_import_enabled' => 'userImportEnabled',
        'user_import_group' => 'userImportGroup',
        'user_update_enabled' => 'userUpdateEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'issuer' => 'setIssuer',
        'authorization_end_point_url' => 'setAuthorizationEndPointUrl',
        'token_end_point_url' => 'setTokenEndPointUrl',
        'user_info_end_point_url' => 'setUserInfoEndPointUrl',
        'jwks_end_point_url' => 'setJwksEndPointUrl',
        'client_id' => 'setClientId',
        'client_secret' => 'setClientSecret',
        'flow' => 'setFlow',
        'scopes' => 'setScopes',
        'redirect_uris' => 'setRedirectUris',
        'mapping_claim' => 'setMappingClaim',
        'pkce_enabled' => 'setPkceEnabled',
        'pkce_challenge_method' => 'setPkceChallengeMethod',
        'fallback_mapping_claim' => 'setFallbackMappingClaim',
        'user_import_enabled' => 'setUserImportEnabled',
        'user_import_group' => 'setUserImportGroup',
        'user_update_enabled' => 'setUserUpdateEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'issuer' => 'getIssuer',
        'authorization_end_point_url' => 'getAuthorizationEndPointUrl',
        'token_end_point_url' => 'getTokenEndPointUrl',
        'user_info_end_point_url' => 'getUserInfoEndPointUrl',
        'jwks_end_point_url' => 'getJwksEndPointUrl',
        'client_id' => 'getClientId',
        'client_secret' => 'getClientSecret',
        'flow' => 'getFlow',
        'scopes' => 'getScopes',
        'redirect_uris' => 'getRedirectUris',
        'mapping_claim' => 'getMappingClaim',
        'pkce_enabled' => 'getPkceEnabled',
        'pkce_challenge_method' => 'getPkceChallengeMethod',
        'fallback_mapping_claim' => 'getFallbackMappingClaim',
        'user_import_enabled' => 'getUserImportEnabled',
        'user_import_group' => 'getUserImportGroup',
        'user_update_enabled' => 'getUserUpdateEnabled'
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

    const FLOW_AUTHORIZATION_CODE = 'authorization_code';
    const FLOW_HYBRID = 'hybrid';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlowAllowableValues()
    {
        return [
            self::FLOW_AUTHORIZATION_CODE,
            self::FLOW_HYBRID,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['authorization_end_point_url'] = isset($data['authorization_end_point_url']) ? $data['authorization_end_point_url'] : null;
        $this->container['token_end_point_url'] = isset($data['token_end_point_url']) ? $data['token_end_point_url'] : null;
        $this->container['user_info_end_point_url'] = isset($data['user_info_end_point_url']) ? $data['user_info_end_point_url'] : null;
        $this->container['jwks_end_point_url'] = isset($data['jwks_end_point_url']) ? $data['jwks_end_point_url'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['client_secret'] = isset($data['client_secret']) ? $data['client_secret'] : null;
        $this->container['flow'] = isset($data['flow']) ? $data['flow'] : null;
        $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
        $this->container['redirect_uris'] = isset($data['redirect_uris']) ? $data['redirect_uris'] : null;
        $this->container['mapping_claim'] = isset($data['mapping_claim']) ? $data['mapping_claim'] : null;
        $this->container['pkce_enabled'] = isset($data['pkce_enabled']) ? $data['pkce_enabled'] : null;
        $this->container['pkce_challenge_method'] = isset($data['pkce_challenge_method']) ? $data['pkce_challenge_method'] : null;
        $this->container['fallback_mapping_claim'] = isset($data['fallback_mapping_claim']) ? $data['fallback_mapping_claim'] : null;
        $this->container['user_import_enabled'] = isset($data['user_import_enabled']) ? $data['user_import_enabled'] : null;
        $this->container['user_import_group'] = isset($data['user_import_group']) ? $data['user_import_group'] : null;
        $this->container['user_update_enabled'] = isset($data['user_update_enabled']) ? $data['user_update_enabled'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['issuer'] === null) {
            $invalidProperties[] = "'issuer' can't be null";
        }
        if ($this->container['authorization_end_point_url'] === null) {
            $invalidProperties[] = "'authorization_end_point_url' can't be null";
        }
        if ($this->container['token_end_point_url'] === null) {
            $invalidProperties[] = "'token_end_point_url' can't be null";
        }
        if ($this->container['user_info_end_point_url'] === null) {
            $invalidProperties[] = "'user_info_end_point_url' can't be null";
        }
        if ($this->container['jwks_end_point_url'] === null) {
            $invalidProperties[] = "'jwks_end_point_url' can't be null";
        }
        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
        }
        if ($this->container['client_secret'] === null) {
            $invalidProperties[] = "'client_secret' can't be null";
        }
        $allowedValues = $this->getFlowAllowableValues();
        if (!is_null($this->container['flow']) && !in_array($this->container['flow'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'flow', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['scopes'] === null) {
            $invalidProperties[] = "'scopes' can't be null";
        }
        if ($this->container['redirect_uris'] === null) {
            $invalidProperties[] = "'redirect_uris' can't be null";
        }
        if ($this->container['mapping_claim'] === null) {
            $invalidProperties[] = "'mapping_claim' can't be null";
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
     * @param string $name Name of the IDP
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets issuer
     *
     * @return string
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     *
     * @param string $issuer Issuer identifier of the IDP The value is a case sensitive URL.
     *
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets authorization_end_point_url
     *
     * @return string
     */
    public function getAuthorizationEndPointUrl()
    {
        return $this->container['authorization_end_point_url'];
    }

    /**
     * Sets authorization_end_point_url
     *
     * @param string $authorization_end_point_url URL of the authorization endpoint
     *
     * @return $this
     */
    public function setAuthorizationEndPointUrl($authorization_end_point_url)
    {
        $this->container['authorization_end_point_url'] = $authorization_end_point_url;

        return $this;
    }

    /**
     * Gets token_end_point_url
     *
     * @return string
     */
    public function getTokenEndPointUrl()
    {
        return $this->container['token_end_point_url'];
    }

    /**
     * Sets token_end_point_url
     *
     * @param string $token_end_point_url URL of the token endpoint
     *
     * @return $this
     */
    public function setTokenEndPointUrl($token_end_point_url)
    {
        $this->container['token_end_point_url'] = $token_end_point_url;

        return $this;
    }

    /**
     * Gets user_info_end_point_url
     *
     * @return string
     */
    public function getUserInfoEndPointUrl()
    {
        return $this->container['user_info_end_point_url'];
    }

    /**
     * Sets user_info_end_point_url
     *
     * @param string $user_info_end_point_url URL of the user info endpoint
     *
     * @return $this
     */
    public function setUserInfoEndPointUrl($user_info_end_point_url)
    {
        $this->container['user_info_end_point_url'] = $user_info_end_point_url;

        return $this;
    }

    /**
     * Gets jwks_end_point_url
     *
     * @return string
     */
    public function getJwksEndPointUrl()
    {
        return $this->container['jwks_end_point_url'];
    }

    /**
     * Sets jwks_end_point_url
     *
     * @param string $jwks_end_point_url URL of the JWKS endpoint
     *
     * @return $this
     */
    public function setJwksEndPointUrl($jwks_end_point_url)
    {
        $this->container['jwks_end_point_url'] = $jwks_end_point_url;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id ID of the OAuth client
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
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
     * Gets flow
     *
     * @return string
     */
    public function getFlow()
    {
        return $this->container['flow'];
    }

    /**
     * Sets flow
     *
     * @param string $flow Flow, which is used at authentication (default: `authorization_code`).
     *
     * @return $this
     */
    public function setFlow($flow)
    {
        $allowedValues = $this->getFlowAllowableValues();
        if (!is_null($flow) && !in_array($flow, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'flow', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['flow'] = $flow;

        return $this;
    }

    /**
     * Gets scopes
     *
     * @return string[]
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     *
     * @param string[] $scopes List of requested scopes
     *
     * @return $this
     */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;

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
     * Gets mapping_claim
     *
     * @return string
     */
    public function getMappingClaim()
    {
        return $this->container['mapping_claim'];
    }

    /**
     * Sets mapping_claim
     *
     * @param string $mapping_claim Name of the claim which is used for the user mapping.
     *
     * @return $this
     */
    public function setMappingClaim($mapping_claim)
    {
        $this->container['mapping_claim'] = $mapping_claim;

        return $this;
    }

    /**
     * Gets pkce_enabled
     *
     * @return bool
     */
    public function getPkceEnabled()
    {
        return $this->container['pkce_enabled'];
    }

    /**
     * Sets pkce_enabled
     *
     * @param bool $pkce_enabled Determines whether PKCE is enabled. cf. [RFC 7636](https://tools.ietf.org/html/rfc7636) (default: `false`)
     *
     * @return $this
     */
    public function setPkceEnabled($pkce_enabled)
    {
        $this->container['pkce_enabled'] = $pkce_enabled;

        return $this;
    }

    /**
     * Gets pkce_challenge_method
     *
     * @return string
     */
    public function getPkceChallengeMethod()
    {
        return $this->container['pkce_challenge_method'];
    }

    /**
     * Sets pkce_challenge_method
     *
     * @param string $pkce_challenge_method PKCE code challenge method. cf. [RFC 7636](https://tools.ietf.org/html/rfc7636) (default: `plain`)
     *
     * @return $this
     */
    public function setPkceChallengeMethod($pkce_challenge_method)
    {
        $this->container['pkce_challenge_method'] = $pkce_challenge_method;

        return $this;
    }

    /**
     * Gets fallback_mapping_claim
     *
     * @return string
     */
    public function getFallbackMappingClaim()
    {
        return $this->container['fallback_mapping_claim'];
    }

    /**
     * Sets fallback_mapping_claim
     *
     * @param string $fallback_mapping_claim Name of the claim which is used for the user mapping fallback.
     *
     * @return $this
     */
    public function setFallbackMappingClaim($fallback_mapping_claim)
    {
        $this->container['fallback_mapping_claim'] = $fallback_mapping_claim;

        return $this;
    }

    /**
     * Gets user_import_enabled
     *
     * @return bool
     */
    public function getUserImportEnabled()
    {
        return $this->container['user_import_enabled'];
    }

    /**
     * Sets user_import_enabled
     *
     * @param bool $user_import_enabled Determines if a DRACOON account is automatically created for a new user who successfully logs on with his / her AD / IDP account. (default: `false`)
     *
     * @return $this
     */
    public function setUserImportEnabled($user_import_enabled)
    {
        $this->container['user_import_enabled'] = $user_import_enabled;

        return $this;
    }

    /**
     * Gets user_import_group
     *
     * @return int
     */
    public function getUserImportGroup()
    {
        return $this->container['user_import_group'];
    }

    /**
     * Sets user_import_group
     *
     * @param int $user_import_group User group that is assigned to users who are created by automatic import. Reset with `0`
     *
     * @return $this
     */
    public function setUserImportGroup($user_import_group)
    {
        $this->container['user_import_group'] = $user_import_group;

        return $this;
    }

    /**
     * Gets user_update_enabled
     *
     * @return bool
     */
    public function getUserUpdateEnabled()
    {
        return $this->container['user_update_enabled'];
    }

    /**
     * Sets user_update_enabled
     *
     * @param bool $user_update_enabled Determines if the DRACOON account is updated with data from AD / IDP. For OpenID Connect, the scopes `email` and `profile` are needed. (default: `false`)
     *
     * @return $this
     */
    public function setUserUpdateEnabled($user_update_enabled)
    {
        $this->container['user_update_enabled'] = $user_update_enabled;

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


