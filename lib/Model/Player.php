<?php
/**
 * Player
 *
 * PHP version 5
 *
 * @category Class
 * @package  Brave\NeucoreApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Brave Collective Core Services API
 *
 * Client library of Brave Collective Core Services API
 *
 * OpenAPI spec version: 0.7.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Brave\NeucoreApi\Model;

use \ArrayAccess;
use \Brave\NeucoreApi\ObjectSerializer;

/**
 * Player Class Doc Comment
 *
 * @category Class
 * @package  Brave\NeucoreApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Player implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Player';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'status' => 'string',
        'roles' => '\Brave\NeucoreApi\Model\Role[]',
        'characters' => '\Brave\NeucoreApi\Model\Character[]',
        'applications' => '\Brave\NeucoreApi\Model\Group[]',
        'groups' => '\Brave\NeucoreApi\Model\Group[]',
        'manager_groups' => '\Brave\NeucoreApi\Model\Group[]',
        'manager_apps' => '\Brave\NeucoreApi\Model\App[]',
        'removed_characters' => '\Brave\NeucoreApi\Model\RemovedCharacter[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'roles' => null,
        'characters' => null,
        'applications' => null,
        'groups' => null,
        'manager_groups' => null,
        'manager_apps' => null,
        'removed_characters' => null
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
        'status' => 'status',
        'roles' => 'roles',
        'characters' => 'characters',
        'applications' => 'applications',
        'groups' => 'groups',
        'manager_groups' => 'managerGroups',
        'manager_apps' => 'managerApps',
        'removed_characters' => 'removedCharacters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'status' => 'setStatus',
        'roles' => 'setRoles',
        'characters' => 'setCharacters',
        'applications' => 'setApplications',
        'groups' => 'setGroups',
        'manager_groups' => 'setManagerGroups',
        'manager_apps' => 'setManagerApps',
        'removed_characters' => 'setRemovedCharacters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'status' => 'getStatus',
        'roles' => 'getRoles',
        'characters' => 'getCharacters',
        'applications' => 'getApplications',
        'groups' => 'getGroups',
        'manager_groups' => 'getManagerGroups',
        'manager_apps' => 'getManagerApps',
        'removed_characters' => 'getRemovedCharacters'
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

    const STATUS_STANDARD = 'standard';
    const STATUS_MANAGED = 'managed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_STANDARD,
            self::STATUS_MANAGED,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['characters'] = isset($data['characters']) ? $data['characters'] : null;
        $this->container['applications'] = isset($data['applications']) ? $data['applications'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['manager_groups'] = isset($data['manager_groups']) ? $data['manager_groups'] : null;
        $this->container['manager_apps'] = isset($data['manager_apps']) ? $data['manager_apps'] : null;
        $this->container['removed_characters'] = isset($data['removed_characters']) ? $data['removed_characters'] : null;
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
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        return true;
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
     * @param int $id id
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
     * @param string $name A name for the player.  This is the EVE character name of the current main character or of the last main character if there is currently none.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Player account status.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \Brave\NeucoreApi\Model\Role[]
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \Brave\NeucoreApi\Model\Role[] $roles Roles for authorization.
     *
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets characters
     *
     * @return \Brave\NeucoreApi\Model\Character[]
     */
    public function getCharacters()
    {
        return $this->container['characters'];
    }

    /**
     * Sets characters
     *
     * @param \Brave\NeucoreApi\Model\Character[] $characters characters
     *
     * @return $this
     */
    public function setCharacters($characters)
    {
        $this->container['characters'] = $characters;

        return $this;
    }

    /**
     * Gets applications
     *
     * @return \Brave\NeucoreApi\Model\Group[]
     */
    public function getApplications()
    {
        return $this->container['applications'];
    }

    /**
     * Sets applications
     *
     * @param \Brave\NeucoreApi\Model\Group[] $applications Group applications.
     *
     * @return $this
     */
    public function setApplications($applications)
    {
        $this->container['applications'] = $applications;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \Brave\NeucoreApi\Model\Group[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \Brave\NeucoreApi\Model\Group[] $groups Group membership.
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets manager_groups
     *
     * @return \Brave\NeucoreApi\Model\Group[]
     */
    public function getManagerGroups()
    {
        return $this->container['manager_groups'];
    }

    /**
     * Sets manager_groups
     *
     * @param \Brave\NeucoreApi\Model\Group[] $manager_groups Manager of groups.
     *
     * @return $this
     */
    public function setManagerGroups($manager_groups)
    {
        $this->container['manager_groups'] = $manager_groups;

        return $this;
    }

    /**
     * Gets manager_apps
     *
     * @return \Brave\NeucoreApi\Model\App[]
     */
    public function getManagerApps()
    {
        return $this->container['manager_apps'];
    }

    /**
     * Sets manager_apps
     *
     * @param \Brave\NeucoreApi\Model\App[] $manager_apps Manager of apps.
     *
     * @return $this
     */
    public function setManagerApps($manager_apps)
    {
        $this->container['manager_apps'] = $manager_apps;

        return $this;
    }

    /**
     * Gets removed_characters
     *
     * @return \Brave\NeucoreApi\Model\RemovedCharacter[]
     */
    public function getRemovedCharacters()
    {
        return $this->container['removed_characters'];
    }

    /**
     * Sets removed_characters
     *
     * @param \Brave\NeucoreApi\Model\RemovedCharacter[] $removed_characters Characters that were removed from a player (API: not included by default).
     *
     * @return $this
     */
    public function setRemovedCharacters($removed_characters)
    {
        $this->container['removed_characters'] = $removed_characters;

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


