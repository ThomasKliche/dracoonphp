<?php
/**
 * CreateUploadShareRequest
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
 * CreateUploadShareRequest Class Doc Comment
 *
 * @category Class
 * @description Request model for creating an Upload Share
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateUploadShareRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateUploadShareRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'target_id' => 'int',
        'name' => 'string',
        'password' => 'string',
        'expiration' => '\Swagger\Client\Model\ObjectExpiration',
        'files_expiry_period' => 'int',
        'internal_notes' => 'string',
        'notes' => 'string',
        'notify_creator' => 'bool',
        'show_uploaded_files' => 'bool',
        'max_slots' => 'int',
        'max_size' => 'int',
        'creator_language' => 'string',
        'receiver_language' => 'string',
        'text_message_recipients' => 'string[]',
        'show_creator_name' => 'bool',
        'show_creator_username' => 'bool',
        'send_mail' => 'bool',
        'mail_recipients' => 'string',
        'mail_subject' => 'string',
        'mail_body' => 'string',
        'send_sms' => 'bool',
        'sms_recipients' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'target_id' => 'int64',
        'name' => null,
        'password' => null,
        'expiration' => null,
        'files_expiry_period' => 'int32',
        'internal_notes' => null,
        'notes' => null,
        'notify_creator' => null,
        'show_uploaded_files' => null,
        'max_slots' => 'int32',
        'max_size' => 'int64',
        'creator_language' => null,
        'receiver_language' => null,
        'text_message_recipients' => null,
        'show_creator_name' => null,
        'show_creator_username' => null,
        'send_mail' => null,
        'mail_recipients' => null,
        'mail_subject' => null,
        'mail_body' => null,
        'send_sms' => null,
        'sms_recipients' => null
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
        'target_id' => 'targetId',
        'name' => 'name',
        'password' => 'password',
        'expiration' => 'expiration',
        'files_expiry_period' => 'filesExpiryPeriod',
        'internal_notes' => 'internalNotes',
        'notes' => 'notes',
        'notify_creator' => 'notifyCreator',
        'show_uploaded_files' => 'showUploadedFiles',
        'max_slots' => 'maxSlots',
        'max_size' => 'maxSize',
        'creator_language' => 'creatorLanguage',
        'receiver_language' => 'receiverLanguage',
        'text_message_recipients' => 'textMessageRecipients',
        'show_creator_name' => 'showCreatorName',
        'show_creator_username' => 'showCreatorUsername',
        'send_mail' => 'sendMail',
        'mail_recipients' => 'mailRecipients',
        'mail_subject' => 'mailSubject',
        'mail_body' => 'mailBody',
        'send_sms' => 'sendSms',
        'sms_recipients' => 'smsRecipients'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'target_id' => 'setTargetId',
        'name' => 'setName',
        'password' => 'setPassword',
        'expiration' => 'setExpiration',
        'files_expiry_period' => 'setFilesExpiryPeriod',
        'internal_notes' => 'setInternalNotes',
        'notes' => 'setNotes',
        'notify_creator' => 'setNotifyCreator',
        'show_uploaded_files' => 'setShowUploadedFiles',
        'max_slots' => 'setMaxSlots',
        'max_size' => 'setMaxSize',
        'creator_language' => 'setCreatorLanguage',
        'receiver_language' => 'setReceiverLanguage',
        'text_message_recipients' => 'setTextMessageRecipients',
        'show_creator_name' => 'setShowCreatorName',
        'show_creator_username' => 'setShowCreatorUsername',
        'send_mail' => 'setSendMail',
        'mail_recipients' => 'setMailRecipients',
        'mail_subject' => 'setMailSubject',
        'mail_body' => 'setMailBody',
        'send_sms' => 'setSendSms',
        'sms_recipients' => 'setSmsRecipients'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'target_id' => 'getTargetId',
        'name' => 'getName',
        'password' => 'getPassword',
        'expiration' => 'getExpiration',
        'files_expiry_period' => 'getFilesExpiryPeriod',
        'internal_notes' => 'getInternalNotes',
        'notes' => 'getNotes',
        'notify_creator' => 'getNotifyCreator',
        'show_uploaded_files' => 'getShowUploadedFiles',
        'max_slots' => 'getMaxSlots',
        'max_size' => 'getMaxSize',
        'creator_language' => 'getCreatorLanguage',
        'receiver_language' => 'getReceiverLanguage',
        'text_message_recipients' => 'getTextMessageRecipients',
        'show_creator_name' => 'getShowCreatorName',
        'show_creator_username' => 'getShowCreatorUsername',
        'send_mail' => 'getSendMail',
        'mail_recipients' => 'getMailRecipients',
        'mail_subject' => 'getMailSubject',
        'mail_body' => 'getMailBody',
        'send_sms' => 'getSendSms',
        'sms_recipients' => 'getSmsRecipients'
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
        $this->container['target_id'] = isset($data['target_id']) ? $data['target_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
        $this->container['files_expiry_period'] = isset($data['files_expiry_period']) ? $data['files_expiry_period'] : null;
        $this->container['internal_notes'] = isset($data['internal_notes']) ? $data['internal_notes'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['notify_creator'] = isset($data['notify_creator']) ? $data['notify_creator'] : null;
        $this->container['show_uploaded_files'] = isset($data['show_uploaded_files']) ? $data['show_uploaded_files'] : null;
        $this->container['max_slots'] = isset($data['max_slots']) ? $data['max_slots'] : null;
        $this->container['max_size'] = isset($data['max_size']) ? $data['max_size'] : null;
        $this->container['creator_language'] = isset($data['creator_language']) ? $data['creator_language'] : null;
        $this->container['receiver_language'] = isset($data['receiver_language']) ? $data['receiver_language'] : null;
        $this->container['text_message_recipients'] = isset($data['text_message_recipients']) ? $data['text_message_recipients'] : null;
        $this->container['show_creator_name'] = isset($data['show_creator_name']) ? $data['show_creator_name'] : null;
        $this->container['show_creator_username'] = isset($data['show_creator_username']) ? $data['show_creator_username'] : null;
        $this->container['send_mail'] = isset($data['send_mail']) ? $data['send_mail'] : null;
        $this->container['mail_recipients'] = isset($data['mail_recipients']) ? $data['mail_recipients'] : null;
        $this->container['mail_subject'] = isset($data['mail_subject']) ? $data['mail_subject'] : null;
        $this->container['mail_body'] = isset($data['mail_body']) ? $data['mail_body'] : null;
        $this->container['send_sms'] = isset($data['send_sms']) ? $data['send_sms'] : null;
        $this->container['sms_recipients'] = isset($data['sms_recipients']) ? $data['sms_recipients'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['target_id'] === null) {
            $invalidProperties[] = "'target_id' can't be null";
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
     * Gets target_id
     *
     * @return int
     */
    public function getTargetId()
    {
        return $this->container['target_id'];
    }

    /**
     * Sets target_id
     *
     * @param int $target_id Target room or folder ID
     *
     * @return $this
     */
    public function setTargetId($target_id)
    {
        $this->container['target_id'] = $target_id;

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
     * @param string $name Alias name (default: name of the shared node)
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return \Swagger\Client\Model\ObjectExpiration
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param \Swagger\Client\Model\ObjectExpiration $expiration Expiration date / time
     *
     * @return $this
     */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets files_expiry_period
     *
     * @return int
     */
    public function getFilesExpiryPeriod()
    {
        return $this->container['files_expiry_period'];
    }

    /**
     * Sets files_expiry_period
     *
     * @param int $files_expiry_period Number of days after which uploaded files expire
     *
     * @return $this
     */
    public function setFilesExpiryPeriod($files_expiry_period)
    {
        $this->container['files_expiry_period'] = $files_expiry_period;

        return $this;
    }

    /**
     * Gets internal_notes
     *
     * @return string
     */
    public function getInternalNotes()
    {
        return $this->container['internal_notes'];
    }

    /**
     * Sets internal_notes
     *
     * @param string $internal_notes Internal notes (limited to 255 characters)
     *
     * @return $this
     */
    public function setInternalNotes($internal_notes)
    {
        $this->container['internal_notes'] = $internal_notes;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes User notes (limited to 255 characters)
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets notify_creator
     *
     * @return bool
     */
    public function getNotifyCreator()
    {
        return $this->container['notify_creator'];
    }

    /**
     * Sets notify_creator
     *
     * @param bool $notify_creator Notify creator on every upload. (default: `false`)
     *
     * @return $this
     */
    public function setNotifyCreator($notify_creator)
    {
        $this->container['notify_creator'] = $notify_creator;

        return $this;
    }

    /**
     * Gets show_uploaded_files
     *
     * @return bool
     */
    public function getShowUploadedFiles()
    {
        return $this->container['show_uploaded_files'];
    }

    /**
     * Sets show_uploaded_files
     *
     * @param bool $show_uploaded_files Allow display of already uploaded files (default: `false`)
     *
     * @return $this
     */
    public function setShowUploadedFiles($show_uploaded_files)
    {
        $this->container['show_uploaded_files'] = $show_uploaded_files;

        return $this;
    }

    /**
     * Gets max_slots
     *
     * @return int
     */
    public function getMaxSlots()
    {
        return $this->container['max_slots'];
    }

    /**
     * Sets max_slots
     *
     * @param int $max_slots Maximal amount of files to upload
     *
     * @return $this
     */
    public function setMaxSlots($max_slots)
    {
        $this->container['max_slots'] = $max_slots;

        return $this;
    }

    /**
     * Gets max_size
     *
     * @return int
     */
    public function getMaxSize()
    {
        return $this->container['max_size'];
    }

    /**
     * Sets max_size
     *
     * @param int $max_size Maximal total size of uploaded files (in bytes)
     *
     * @return $this
     */
    public function setMaxSize($max_size)
    {
        $this->container['max_size'] = $max_size;

        return $this;
    }

    /**
     * Gets creator_language
     *
     * @return string
     */
    public function getCreatorLanguage()
    {
        return $this->container['creator_language'];
    }

    /**
     * Sets creator_language
     *
     * @param string $creator_language Language tag for messages to creator
     *
     * @return $this
     */
    public function setCreatorLanguage($creator_language)
    {
        $this->container['creator_language'] = $creator_language;

        return $this;
    }

    /**
     * Gets receiver_language
     *
     * @return string
     */
    public function getReceiverLanguage()
    {
        return $this->container['receiver_language'];
    }

    /**
     * Sets receiver_language
     *
     * @param string $receiver_language Language tag for messages to receiver
     *
     * @return $this
     */
    public function setReceiverLanguage($receiver_language)
    {
        $this->container['receiver_language'] = $receiver_language;

        return $this;
    }

    /**
     * Gets text_message_recipients
     *
     * @return string[]
     */
    public function getTextMessageRecipients()
    {
        return $this->container['text_message_recipients'];
    }

    /**
     * Sets text_message_recipients
     *
     * @param string[] $text_message_recipients List of recipient FQTNs E.123 / E.164 Format
     *
     * @return $this
     */
    public function setTextMessageRecipients($text_message_recipients)
    {
        $this->container['text_message_recipients'] = $text_message_recipients;

        return $this;
    }

    /**
     * Gets show_creator_name
     *
     * @return bool
     */
    public function getShowCreatorName()
    {
        return $this->container['show_creator_name'];
    }

    /**
     * Sets show_creator_name
     *
     * @param bool $show_creator_name Show creator first and last name. (default: `false`)
     *
     * @return $this
     */
    public function setShowCreatorName($show_creator_name)
    {
        $this->container['show_creator_name'] = $show_creator_name;

        return $this;
    }

    /**
     * Gets show_creator_username
     *
     * @return bool
     */
    public function getShowCreatorUsername()
    {
        return $this->container['show_creator_username'];
    }

    /**
     * Sets show_creator_username
     *
     * @param bool $show_creator_username Show creator email address. (default: `false`)
     *
     * @return $this
     */
    public function setShowCreatorUsername($show_creator_username)
    {
        $this->container['show_creator_username'] = $show_creator_username;

        return $this;
    }

    /**
     * Gets send_mail
     *
     * @return bool
     */
    public function getSendMail()
    {
        return $this->container['send_mail'];
    }

    /**
     * Sets send_mail
     *
     * @param bool $send_mail `DEPRECATED`: Notify recipients via email (default: `false`) Please use `POST /shares/uploads/{share_id}/email` API instead.
     *
     * @return $this
     */
    public function setSendMail($send_mail)
    {
        $this->container['send_mail'] = $send_mail;

        return $this;
    }

    /**
     * Gets mail_recipients
     *
     * @return string
     */
    public function getMailRecipients()
    {
        return $this->container['mail_recipients'];
    }

    /**
     * Sets mail_recipients
     *
     * @param string $mail_recipients `DEPRECATED`: CSV string of recipient email addresses
     *
     * @return $this
     */
    public function setMailRecipients($mail_recipients)
    {
        $this->container['mail_recipients'] = $mail_recipients;

        return $this;
    }

    /**
     * Gets mail_subject
     *
     * @return string
     */
    public function getMailSubject()
    {
        return $this->container['mail_subject'];
    }

    /**
     * Sets mail_subject
     *
     * @param string $mail_subject `DEPRECATED`: Notification email subject
     *
     * @return $this
     */
    public function setMailSubject($mail_subject)
    {
        $this->container['mail_subject'] = $mail_subject;

        return $this;
    }

    /**
     * Gets mail_body
     *
     * @return string
     */
    public function getMailBody()
    {
        return $this->container['mail_body'];
    }

    /**
     * Sets mail_body
     *
     * @param string $mail_body `DEPRECATED`: Notification email content
     *
     * @return $this
     */
    public function setMailBody($mail_body)
    {
        $this->container['mail_body'] = $mail_body;

        return $this;
    }

    /**
     * Gets send_sms
     *
     * @return bool
     */
    public function getSendSms()
    {
        return $this->container['send_sms'];
    }

    /**
     * Sets send_sms
     *
     * @param bool $send_sms `DEPRECATED`: Send share password via SMS (default: `false`) Please use `textMessageRecipients` attribute instead.
     *
     * @return $this
     */
    public function setSendSms($send_sms)
    {
        $this->container['send_sms'] = $send_sms;

        return $this;
    }

    /**
     * Gets sms_recipients
     *
     * @return string
     */
    public function getSmsRecipients()
    {
        return $this->container['sms_recipients'];
    }

    /**
     * Sets sms_recipients
     *
     * @param string $sms_recipients `DEPRECATED`: CSV string of recipient MSISDNs
     *
     * @return $this
     */
    public function setSmsRecipients($sms_recipients)
    {
        $this->container['sms_recipients'] = $sms_recipients;

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


