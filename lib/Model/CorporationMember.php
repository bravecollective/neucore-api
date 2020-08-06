<?php
/**
 * CorporationMember
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
 * The version of the OpenAPI document: 1.14.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
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
 * CorporationMember Class Doc Comment
 *
 * @category Class
 * @description The player property contains only id and name, character does not contain corporation.
 * @package  Brave\NeucoreApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CorporationMember implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CorporationMember';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'player' => '\Brave\NeucoreApi\Model\Player',
        'id' => 'int',
        'name' => 'string',
        'location' => '\Brave\NeucoreApi\Model\EsiLocation',
        'logoff_date' => '\DateTime',
        'logon_date' => '\DateTime',
        'ship_type' => '\Brave\NeucoreApi\Model\EsiType',
        'start_date' => '\DateTime',
        'character' => '\Brave\NeucoreApi\Model\Character',
        'missing_character_mail_sent_date' => '\DateTime',
        'missing_character_mail_sent_result' => 'string',
        'missing_character_mail_sent_number' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'player' => null,
        'id' => 'int64',
        'name' => null,
        'location' => null,
        'logoff_date' => 'date-time',
        'logon_date' => 'date-time',
        'ship_type' => null,
        'start_date' => 'date-time',
        'character' => null,
        'missing_character_mail_sent_date' => 'date-time',
        'missing_character_mail_sent_result' => null,
        'missing_character_mail_sent_number' => null
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
        'player' => 'player',
        'id' => 'id',
        'name' => 'name',
        'location' => 'location',
        'logoff_date' => 'logoffDate',
        'logon_date' => 'logonDate',
        'ship_type' => 'shipType',
        'start_date' => 'startDate',
        'character' => 'character',
        'missing_character_mail_sent_date' => 'missingCharacterMailSentDate',
        'missing_character_mail_sent_result' => 'missingCharacterMailSentResult',
        'missing_character_mail_sent_number' => 'missingCharacterMailSentNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'player' => 'setPlayer',
        'id' => 'setId',
        'name' => 'setName',
        'location' => 'setLocation',
        'logoff_date' => 'setLogoffDate',
        'logon_date' => 'setLogonDate',
        'ship_type' => 'setShipType',
        'start_date' => 'setStartDate',
        'character' => 'setCharacter',
        'missing_character_mail_sent_date' => 'setMissingCharacterMailSentDate',
        'missing_character_mail_sent_result' => 'setMissingCharacterMailSentResult',
        'missing_character_mail_sent_number' => 'setMissingCharacterMailSentNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'player' => 'getPlayer',
        'id' => 'getId',
        'name' => 'getName',
        'location' => 'getLocation',
        'logoff_date' => 'getLogoffDate',
        'logon_date' => 'getLogonDate',
        'ship_type' => 'getShipType',
        'start_date' => 'getStartDate',
        'character' => 'getCharacter',
        'missing_character_mail_sent_date' => 'getMissingCharacterMailSentDate',
        'missing_character_mail_sent_result' => 'getMissingCharacterMailSentResult',
        'missing_character_mail_sent_number' => 'getMissingCharacterMailSentNumber'
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
        $this->container['player'] = isset($data['player']) ? $data['player'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['logoff_date'] = isset($data['logoff_date']) ? $data['logoff_date'] : null;
        $this->container['logon_date'] = isset($data['logon_date']) ? $data['logon_date'] : null;
        $this->container['ship_type'] = isset($data['ship_type']) ? $data['ship_type'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['character'] = isset($data['character']) ? $data['character'] : null;
        $this->container['missing_character_mail_sent_date'] = isset($data['missing_character_mail_sent_date']) ? $data['missing_character_mail_sent_date'] : null;
        $this->container['missing_character_mail_sent_result'] = isset($data['missing_character_mail_sent_result']) ? $data['missing_character_mail_sent_result'] : null;
        $this->container['missing_character_mail_sent_number'] = isset($data['missing_character_mail_sent_number']) ? $data['missing_character_mail_sent_number'] : null;
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
     * Gets player
     *
     * @return \Brave\NeucoreApi\Model\Player|null
     */
    public function getPlayer()
    {
        return $this->container['player'];
    }

    /**
     * Sets player
     *
     * @param \Brave\NeucoreApi\Model\Player|null $player player
     *
     * @return $this
     */
    public function setPlayer($player)
    {
        $this->container['player'] = $player;

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
     * @param int $id EVE Character ID.
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
     * @param string $name EVE Character name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Brave\NeucoreApi\Model\EsiLocation|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Brave\NeucoreApi\Model\EsiLocation|null $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets logoff_date
     *
     * @return \DateTime|null
     */
    public function getLogoffDate()
    {
        return $this->container['logoff_date'];
    }

    /**
     * Sets logoff_date
     *
     * @param \DateTime|null $logoff_date logoff_date
     *
     * @return $this
     */
    public function setLogoffDate($logoff_date)
    {
        $this->container['logoff_date'] = $logoff_date;

        return $this;
    }

    /**
     * Gets logon_date
     *
     * @return \DateTime|null
     */
    public function getLogonDate()
    {
        return $this->container['logon_date'];
    }

    /**
     * Sets logon_date
     *
     * @param \DateTime|null $logon_date logon_date
     *
     * @return $this
     */
    public function setLogonDate($logon_date)
    {
        $this->container['logon_date'] = $logon_date;

        return $this;
    }

    /**
     * Gets ship_type
     *
     * @return \Brave\NeucoreApi\Model\EsiType|null
     */
    public function getShipType()
    {
        return $this->container['ship_type'];
    }

    /**
     * Sets ship_type
     *
     * @param \Brave\NeucoreApi\Model\EsiType|null $ship_type ship_type
     *
     * @return $this
     */
    public function setShipType($ship_type)
    {
        $this->container['ship_type'] = $ship_type;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets character
     *
     * @return \Brave\NeucoreApi\Model\Character|null
     */
    public function getCharacter()
    {
        return $this->container['character'];
    }

    /**
     * Sets character
     *
     * @param \Brave\NeucoreApi\Model\Character|null $character character
     *
     * @return $this
     */
    public function setCharacter($character)
    {
        $this->container['character'] = $character;

        return $this;
    }

    /**
     * Gets missing_character_mail_sent_date
     *
     * @return \DateTime|null
     */
    public function getMissingCharacterMailSentDate()
    {
        return $this->container['missing_character_mail_sent_date'];
    }

    /**
     * Sets missing_character_mail_sent_date
     *
     * @param \DateTime|null $missing_character_mail_sent_date Date and time of the last sent mail.
     *
     * @return $this
     */
    public function setMissingCharacterMailSentDate($missing_character_mail_sent_date)
    {
        $this->container['missing_character_mail_sent_date'] = $missing_character_mail_sent_date;

        return $this;
    }

    /**
     * Gets missing_character_mail_sent_result
     *
     * @return string|null
     */
    public function getMissingCharacterMailSentResult()
    {
        return $this->container['missing_character_mail_sent_result'];
    }

    /**
     * Sets missing_character_mail_sent_result
     *
     * @param string|null $missing_character_mail_sent_result Result of the last sent mail (OK, Blocked, CSPA charge > 0)
     *
     * @return $this
     */
    public function setMissingCharacterMailSentResult($missing_character_mail_sent_result)
    {
        $this->container['missing_character_mail_sent_result'] = $missing_character_mail_sent_result;

        return $this;
    }

    /**
     * Gets missing_character_mail_sent_number
     *
     * @return int|null
     */
    public function getMissingCharacterMailSentNumber()
    {
        return $this->container['missing_character_mail_sent_number'];
    }

    /**
     * Sets missing_character_mail_sent_number
     *
     * @param int|null $missing_character_mail_sent_number Number of mails sent, is reset when the character is added.
     *
     * @return $this
     */
    public function setMissingCharacterMailSentNumber($missing_character_mail_sent_number)
    {
        $this->container['missing_character_mail_sent_number'] = $missing_character_mail_sent_number;

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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


