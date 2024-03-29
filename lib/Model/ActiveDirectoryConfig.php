<?php
/**
 * ActiveDirectoryConfig
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
 * ActiveDirectoryConfig Class Doc Comment
 *
 * @category Class
 * @description Active Directory configuration
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActiveDirectoryConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ActiveDirectoryConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'alias' => 'string',
        'server_ip' => 'string',
        'server_port' => 'int',
        'server_admin_name' => 'string',
        'ldap_users_domain' => 'string',
        'user_filter' => 'string',
        'user_import' => 'bool',
        'ad_export_group' => 'string',
        'use_ldaps' => 'bool',
        'sds_import_group' => 'int',
        'ssl_finger_print' => 'string',
        'home_folder_parent' => 'int',
        'create_home_folder' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'alias' => null,
        'server_ip' => null,
        'server_port' => 'int32',
        'server_admin_name' => null,
        'ldap_users_domain' => null,
        'user_filter' => null,
        'user_import' => null,
        'ad_export_group' => null,
        'use_ldaps' => null,
        'sds_import_group' => 'int64',
        'ssl_finger_print' => null,
        'home_folder_parent' => 'int64',
        'create_home_folder' => null
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
        'alias' => 'alias',
        'server_ip' => 'serverIp',
        'server_port' => 'serverPort',
        'server_admin_name' => 'serverAdminName',
        'ldap_users_domain' => 'ldapUsersDomain',
        'user_filter' => 'userFilter',
        'user_import' => 'userImport',
        'ad_export_group' => 'adExportGroup',
        'use_ldaps' => 'useLdaps',
        'sds_import_group' => 'sdsImportGroup',
        'ssl_finger_print' => 'sslFingerPrint',
        'home_folder_parent' => 'homeFolderParent',
        'create_home_folder' => 'createHomeFolder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'alias' => 'setAlias',
        'server_ip' => 'setServerIp',
        'server_port' => 'setServerPort',
        'server_admin_name' => 'setServerAdminName',
        'ldap_users_domain' => 'setLdapUsersDomain',
        'user_filter' => 'setUserFilter',
        'user_import' => 'setUserImport',
        'ad_export_group' => 'setAdExportGroup',
        'use_ldaps' => 'setUseLdaps',
        'sds_import_group' => 'setSdsImportGroup',
        'ssl_finger_print' => 'setSslFingerPrint',
        'home_folder_parent' => 'setHomeFolderParent',
        'create_home_folder' => 'setCreateHomeFolder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'alias' => 'getAlias',
        'server_ip' => 'getServerIp',
        'server_port' => 'getServerPort',
        'server_admin_name' => 'getServerAdminName',
        'ldap_users_domain' => 'getLdapUsersDomain',
        'user_filter' => 'getUserFilter',
        'user_import' => 'getUserImport',
        'ad_export_group' => 'getAdExportGroup',
        'use_ldaps' => 'getUseLdaps',
        'sds_import_group' => 'getSdsImportGroup',
        'ssl_finger_print' => 'getSslFingerPrint',
        'home_folder_parent' => 'getHomeFolderParent',
        'create_home_folder' => 'getCreateHomeFolder'
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
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['server_ip'] = isset($data['server_ip']) ? $data['server_ip'] : null;
        $this->container['server_port'] = isset($data['server_port']) ? $data['server_port'] : null;
        $this->container['server_admin_name'] = isset($data['server_admin_name']) ? $data['server_admin_name'] : null;
        $this->container['ldap_users_domain'] = isset($data['ldap_users_domain']) ? $data['ldap_users_domain'] : null;
        $this->container['user_filter'] = isset($data['user_filter']) ? $data['user_filter'] : null;
        $this->container['user_import'] = isset($data['user_import']) ? $data['user_import'] : null;
        $this->container['ad_export_group'] = isset($data['ad_export_group']) ? $data['ad_export_group'] : null;
        $this->container['use_ldaps'] = isset($data['use_ldaps']) ? $data['use_ldaps'] : null;
        $this->container['sds_import_group'] = isset($data['sds_import_group']) ? $data['sds_import_group'] : null;
        $this->container['ssl_finger_print'] = isset($data['ssl_finger_print']) ? $data['ssl_finger_print'] : null;
        $this->container['home_folder_parent'] = isset($data['home_folder_parent']) ? $data['home_folder_parent'] : null;
        $this->container['create_home_folder'] = isset($data['create_home_folder']) ? $data['create_home_folder'] : null;
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
        if ($this->container['alias'] === null) {
            $invalidProperties[] = "'alias' can't be null";
        }
        if ($this->container['server_ip'] === null) {
            $invalidProperties[] = "'server_ip' can't be null";
        }
        if ($this->container['server_port'] === null) {
            $invalidProperties[] = "'server_port' can't be null";
        }
        if ($this->container['server_admin_name'] === null) {
            $invalidProperties[] = "'server_admin_name' can't be null";
        }
        if ($this->container['ldap_users_domain'] === null) {
            $invalidProperties[] = "'ldap_users_domain' can't be null";
        }
        if ($this->container['user_filter'] === null) {
            $invalidProperties[] = "'user_filter' can't be null";
        }
        if ($this->container['user_import'] === null) {
            $invalidProperties[] = "'user_import' can't be null";
        }
        if ($this->container['ad_export_group'] === null) {
            $invalidProperties[] = "'ad_export_group' can't be null";
        }
        if ($this->container['use_ldaps'] === null) {
            $invalidProperties[] = "'use_ldaps' can't be null";
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
     * @param int $id ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string $alias Unique name for an Active Directory configuration
     *
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets server_ip
     *
     * @return string
     */
    public function getServerIp()
    {
        return $this->container['server_ip'];
    }

    /**
     * Sets server_ip
     *
     * @param string $server_ip IPv4 or IPv6 address or host name
     *
     * @return $this
     */
    public function setServerIp($server_ip)
    {
        $this->container['server_ip'] = $server_ip;

        return $this;
    }

    /**
     * Gets server_port
     *
     * @return int
     */
    public function getServerPort()
    {
        return $this->container['server_port'];
    }

    /**
     * Sets server_port
     *
     * @param int $server_port Port
     *
     * @return $this
     */
    public function setServerPort($server_port)
    {
        $this->container['server_port'] = $server_port;

        return $this;
    }

    /**
     * Gets server_admin_name
     *
     * @return string
     */
    public function getServerAdminName()
    {
        return $this->container['server_admin_name'];
    }

    /**
     * Sets server_admin_name
     *
     * @param string $server_admin_name Distinguished Name (DN) of Active Directory administrative account
     *
     * @return $this
     */
    public function setServerAdminName($server_admin_name)
    {
        $this->container['server_admin_name'] = $server_admin_name;

        return $this;
    }

    /**
     * Gets ldap_users_domain
     *
     * @return string
     */
    public function getLdapUsersDomain()
    {
        return $this->container['ldap_users_domain'];
    }

    /**
     * Sets ldap_users_domain
     *
     * @param string $ldap_users_domain Search scope of Active Directory; only users below this node can log on.
     *
     * @return $this
     */
    public function setLdapUsersDomain($ldap_users_domain)
    {
        $this->container['ldap_users_domain'] = $ldap_users_domain;

        return $this;
    }

    /**
     * Gets user_filter
     *
     * @return string
     */
    public function getUserFilter()
    {
        return $this->container['user_filter'];
    }

    /**
     * Sets user_filter
     *
     * @param string $user_filter Name of Active Directory attribute that is used as login name.
     *
     * @return $this
     */
    public function setUserFilter($user_filter)
    {
        $this->container['user_filter'] = $user_filter;

        return $this;
    }

    /**
     * Gets user_import
     *
     * @return bool
     */
    public function getUserImport()
    {
        return $this->container['user_import'];
    }

    /**
     * Sets user_import
     *
     * @param bool $user_import Determines if a DRACOON account is automatically created for a new user who successfully logs on with his / her AD / IDP account.
     *
     * @return $this
     */
    public function setUserImport($user_import)
    {
        $this->container['user_import'] = $user_import;

        return $this;
    }

    /**
     * Gets ad_export_group
     *
     * @return string
     */
    public function getAdExportGroup()
    {
        return $this->container['ad_export_group'];
    }

    /**
     * Sets ad_export_group
     *
     * @param string $ad_export_group If `userImport` is set to `true`, the user must be member of this Active Directory group to receive a newly created DRACOON account.
     *
     * @return $this
     */
    public function setAdExportGroup($ad_export_group)
    {
        $this->container['ad_export_group'] = $ad_export_group;

        return $this;
    }

    /**
     * Gets use_ldaps
     *
     * @return bool
     */
    public function getUseLdaps()
    {
        return $this->container['use_ldaps'];
    }

    /**
     * Sets use_ldaps
     *
     * @param bool $use_ldaps Determines whether LDAPS should be used instead of plain LDAP.
     *
     * @return $this
     */
    public function setUseLdaps($use_ldaps)
    {
        $this->container['use_ldaps'] = $use_ldaps;

        return $this;
    }

    /**
     * Gets sds_import_group
     *
     * @return int
     */
    public function getSdsImportGroup()
    {
        return $this->container['sds_import_group'];
    }

    /**
     * Sets sds_import_group
     *
     * @param int $sds_import_group User group that is assigned to users who are created by automatic import. Reset with `0`
     *
     * @return $this
     */
    public function setSdsImportGroup($sds_import_group)
    {
        $this->container['sds_import_group'] = $sds_import_group;

        return $this;
    }

    /**
     * Gets ssl_finger_print
     *
     * @return string
     */
    public function getSslFingerPrint()
    {
        return $this->container['ssl_finger_print'];
    }

    /**
     * Sets ssl_finger_print
     *
     * @param string $ssl_finger_print SSL finger print of Active Directory server. Mandatory for LDAPS connections. Format: `Algorithm/Fingerprint`
     *
     * @return $this
     */
    public function setSslFingerPrint($ssl_finger_print)
    {
        $this->container['ssl_finger_print'] = $ssl_finger_print;

        return $this;
    }

    /**
     * Gets home_folder_parent
     *
     * @return int
     */
    public function getHomeFolderParent()
    {
        return $this->container['home_folder_parent'];
    }

    /**
     * Sets home_folder_parent
     *
     * @param int $home_folder_parent DEPRECATED, will be ignored ID of the room in which the individual rooms for users will be created.  [Deprecated since version 4.10.2]
     *
     * @return $this
     */
    public function setHomeFolderParent($home_folder_parent)
    {
        $this->container['home_folder_parent'] = $home_folder_parent;

        return $this;
    }

    /**
     * Gets create_home_folder
     *
     * @return bool
     */
    public function getCreateHomeFolder()
    {
        return $this->container['create_home_folder'];
    }

    /**
     * Sets create_home_folder
     *
     * @param bool $create_home_folder DEPRECATED, will be ignored Determines whether a room is created for each user that is created by automatic import (like a home folder). Room's name will equal the user's login name. (default: `false`)  [Deprecated since version 4.10.2]
     *
     * @return $this
     */
    public function setCreateHomeFolder($create_home_folder)
    {
        $this->container['create_home_folder'] = $create_home_folder;

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


