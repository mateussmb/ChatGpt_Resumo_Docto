<?php
/**
 * Email
 *
 * PHP version 5
 *
 * @category Class
 * @package  MimePost\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MimePost API Reference (Beta)
 *
 * MimePost API for sending email.  You can find out more about MimePost at [https://mimepost.com](http://mimepost.com). For this sample, you can use the api key `special-key` to test the authorization     filters.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: support@mimepost.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MimePost\Client\Model;

use \ArrayAccess;
use \MimePost\Client\ObjectSerializer;

/**
 * Email Class Doc Comment
 *
 * @category Class
 * @package  MimePost\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Email implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Email';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'html' => 'string',
        'subject' => 'string',
        'from_email' => 'string',
        'from_name' => 'string',
        'global_merge_vars' => '\MimePost\Client\Model\EmailGlobalMergeVars[]',
        'to' => '\MimePost\Client\Model\EmailTo[]',
        'cc' => 'string[]',
        'bcc' => 'string[]',
        'attachments' => '\MimePost\Client\Model\EmailAttachments[]',
        'vars' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'html' => null,
        'subject' => null,
        'from_email' => null,
        'from_name' => null,
        'global_merge_vars' => null,
        'to' => null,
        'cc' => null,
        'bcc' => null,
        'attachments' => null,
        'vars' => null
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
        'html' => 'html',
        'subject' => 'subject',
        'from_email' => 'from_email',
        'from_name' => 'from_name',
        'global_merge_vars' => 'global_merge_vars',
        'to' => 'to',
        'cc' => 'cc',
        'bcc' => 'bcc',
        'attachments' => 'attachments',
        'vars' => 'vars'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'html' => 'setHtml',
        'subject' => 'setSubject',
        'from_email' => 'setFromEmail',
        'from_name' => 'setFromName',
        'global_merge_vars' => 'setGlobalMergeVars',
        'to' => 'setTo',
        'cc' => 'setCc',
        'bcc' => 'setBcc',
        'attachments' => 'setAttachments',
        'vars' => 'setVars'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'html' => 'getHtml',
        'subject' => 'getSubject',
        'from_email' => 'getFromEmail',
        'from_name' => 'getFromName',
        'global_merge_vars' => 'getGlobalMergeVars',
        'to' => 'getTo',
        'cc' => 'getCc',
        'bcc' => 'getBcc',
        'attachments' => 'getAttachments',
        'vars' => 'getVars'
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
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['from_email'] = isset($data['from_email']) ? $data['from_email'] : null;
        $this->container['from_name'] = isset($data['from_name']) ? $data['from_name'] : null;
        $this->container['global_merge_vars'] = isset($data['global_merge_vars']) ? $data['global_merge_vars'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['bcc'] = isset($data['bcc']) ? $data['bcc'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['vars'] = isset($data['vars']) ? $data['vars'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['html'] === null) {
            $invalidProperties[] = "'html' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['from_email'] === null) {
            $invalidProperties[] = "'from_email' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
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
     * Gets html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string $html html
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets from_email
     *
     * @return string
     */
    public function getFromEmail()
    {
        return $this->container['from_email'];
    }

    /**
     * Sets from_email
     *
     * @param string $from_email from_email
     *
     * @return $this
     */
    public function setFromEmail($from_email)
    {
        $this->container['from_email'] = $from_email;

        return $this;
    }

    /**
     * Gets from_name
     *
     * @return string
     */
    public function getFromName()
    {
        return $this->container['from_name'];
    }

    /**
     * Sets from_name
     *
     * @param string $from_name from_name
     *
     * @return $this
     */
    public function setFromName($from_name)
    {
        $this->container['from_name'] = $from_name;

        return $this;
    }

    /**
     * Gets global_merge_vars
     *
     * @return \MimePost\Client\Model\EmailGlobalMergeVars[]
     */
    public function getGlobalMergeVars()
    {
        return $this->container['global_merge_vars'];
    }

    /**
     * Sets global_merge_vars
     *
     * @param \MimePost\Client\Model\EmailGlobalMergeVars[] $global_merge_vars global_merge_vars
     *
     * @return $this
     */
    public function setGlobalMergeVars($global_merge_vars)
    {
        $this->container['global_merge_vars'] = $global_merge_vars;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \MimePost\Client\Model\EmailTo[]
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \MimePost\Client\Model\EmailTo[] $to to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets cc
     *
     * @return string[]
     */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
     * Sets cc
     *
     * @param string[] $cc cc
     *
     * @return $this
     */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;

        return $this;
    }

    /**
     * Gets bcc
     *
     * @return string[]
     */
    public function getBcc()
    {
        return $this->container['bcc'];
    }

    /**
     * Sets bcc
     *
     * @param string[] $bcc bcc
     *
     * @return $this
     */
    public function setBcc($bcc)
    {
        $this->container['bcc'] = $bcc;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \MimePost\Client\Model\EmailAttachments[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \MimePost\Client\Model\EmailAttachments[] $attachments attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets vars
     *
     * @return map[string,string]
     */
    public function getVars()
    {
        return $this->container['vars'];
    }

    /**
     * Sets vars
     *
     * @param map[string,string] $vars vars
     *
     * @return $this
     */
    public function setVars($vars)
    {
        $this->container['vars'] = $vars;

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

