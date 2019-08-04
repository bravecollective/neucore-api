<?php
/**
 * Character
 *
 * PHP version 5
 *
 * @category Class
 * @package  Brave\NeucoreApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Neucore API
 *
 * Client library of Neucore API
 *
 * The version of the OpenAPI document: 1.3.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Brave\NeucoreApi\Model;

use \ArrayAccess;
use \Brave\NeucoreApi\ObjectSerializer;

/**
 * Character Class Doc Comment
 *
 * @category Class
 * @package  Brave\NeucoreApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Character implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Character';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'main' => 'bool',
        'valid_token' => 'bool',
        'valid_token_time' => '\DateTime',
        'last_update' => '\DateTime',
        'corporation' => '\Brave\NeucoreApi\Model\Corporation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'name' => null,
        'main' => null,
        'valid_token' => null,
        'valid_token_time' => 'date-time',
        'last_update' => 'date-time',
        'corporation' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
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
        'main' => 'main',
        'valid_token' => 'validToken',
        'valid_token_time' => 'validTokenTime',
        'last_update' => 'lastUpdate',
        'corporation' => 'corporation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'main' => 'setMain',
        'valid_token' => 'setValidToken',
        'valid_token_time' => 'setValidTokenTime',
        'last_update' => 'setLastUpdate',
        'corporation' => 'setCorporation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'main' => 'getMain',
        'valid_token' => 'getValidToken',
        'valid_token_time' => 'getValidTokenTime',
        'last_update' => 'getLastUpdate',
        'corporation' => 'getCorporation'
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
        return self::$openAPIModelName;
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
        $this->container['main'] = isset($data['main']) ? $data['main'] : null;
        $this->container['valid_token'] = isset($data['valid_token']) ? $data['valid_token'] : null;
        $this->container['valid_token_time'] = isset($data['valid_token_time']) ? $data['valid_token_time'] : null;
        $this->container['last_update'] = isset($data['last_update']) ? $data['last_update'] : null;
        $this->container['corporation'] = isset($data['corporation']) ? $data['corporation'] : null;
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
     * @param int $id EVE character ID.
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
     * @param string $name EVE character name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets main
     *
     * @return bool|null
     */
    public function getMain()
    {
        return $this->container['main'];
    }

    /**
     * Sets main
     *
     * @param bool|null $main main
     *
     * @return $this
     */
    public function setMain($main)
    {
        $this->container['main'] = $main;

        return $this;
    }

    /**
     * Gets valid_token
     *
     * @return bool|null
     */
    public function getValidToken()
    {
        return $this->container['valid_token'];
    }

    /**
     * Sets valid_token
     *
     * @param bool|null $valid_token Shows if character's refresh token is valid or not.  If there is no refresh token this is null.
     *
     * @return $this
     */
    public function setValidToken($valid_token)
    {
        $this->container['valid_token'] = $valid_token;

        return $this;
    }

    /**
     * Gets valid_token_time
     *
     * @return \DateTime|null
     */
    public function getValidTokenTime()
    {
        return $this->container['valid_token_time'];
    }

    /**
     * Sets valid_token_time
     *
     * @param \DateTime|null $valid_token_time Date and time when that valid token property was last changed.
     *
     * @return $this
     */
    public function setValidTokenTime($valid_token_time)
    {
        $this->container['valid_token_time'] = $valid_token_time;

        return $this;
    }

    /**
     * Gets last_update
     *
     * @return \DateTime|null
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param \DateTime|null $last_update Last ESI update.
     *
     * @return $this
     */
    public function setLastUpdate($last_update)
    {
        $this->container['last_update'] = $last_update;

        return $this;
    }

    /**
     * Gets corporation
     *
     * @return \Brave\NeucoreApi\Model\Corporation|null
     */
    public function getCorporation()
    {
        return $this->container['corporation'];
    }

    /**
     * Sets corporation
     *
     * @param \Brave\NeucoreApi\Model\Corporation|null $corporation corporation
     *
     * @return $this
     */
    public function setCorporation($corporation)
    {
        $this->container['corporation'] = $corporation;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


