<?php
/**
 * OrganizationLinks
 *
 * PHP version 5
 *
 * @category Class
 * @package  InfluxDB2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * InfluxDB OSS API Service
 *
 * The InfluxDB v2 API provides a programmatic interface for all interactions with InfluxDB. Access the InfluxDB API using the `/api/v2/` endpoint.
 *
 * OpenAPI spec version: 2.0.0
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace InfluxDB2\Model;

use \ArrayAccess;
use \InfluxDB2\ObjectSerializer;

/**
 * OrganizationLinks Class Doc Comment
 *
 * @category Class
 * @package  InfluxDB2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrganizationLinks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Organization_links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'self' => 'string',
        'members' => 'string',
        'owners' => 'string',
        'labels' => 'string',
        'secrets' => 'string',
        'buckets' => 'string',
        'tasks' => 'string',
        'dashboards' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'self' => 'uri',
        'members' => 'uri',
        'owners' => 'uri',
        'labels' => 'uri',
        'secrets' => 'uri',
        'buckets' => 'uri',
        'tasks' => 'uri',
        'dashboards' => 'uri'
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
        'self' => 'self',
        'members' => 'members',
        'owners' => 'owners',
        'labels' => 'labels',
        'secrets' => 'secrets',
        'buckets' => 'buckets',
        'tasks' => 'tasks',
        'dashboards' => 'dashboards'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'self' => 'setSelf',
        'members' => 'setMembers',
        'owners' => 'setOwners',
        'labels' => 'setLabels',
        'secrets' => 'setSecrets',
        'buckets' => 'setBuckets',
        'tasks' => 'setTasks',
        'dashboards' => 'setDashboards'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'self' => 'getSelf',
        'members' => 'getMembers',
        'owners' => 'getOwners',
        'labels' => 'getLabels',
        'secrets' => 'getSecrets',
        'buckets' => 'getBuckets',
        'tasks' => 'getTasks',
        'dashboards' => 'getDashboards'
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
    public function __construct(array|null $data = null)
    {
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['owners'] = isset($data['owners']) ? $data['owners'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['secrets'] = isset($data['secrets']) ? $data['secrets'] : null;
        $this->container['buckets'] = isset($data['buckets']) ? $data['buckets'] : null;
        $this->container['tasks'] = isset($data['tasks']) ? $data['tasks'] : null;
        $this->container['dashboards'] = isset($data['dashboards']) ? $data['dashboards'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets self
     *
     * @return string|null
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param string|null $self URI of resource.
     *
     * @return $this
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets members
     *
     * @return string|null
     */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
     * Sets members
     *
     * @param string|null $members URI of resource.
     *
     * @return $this
     */
    public function setMembers($members)
    {
        $this->container['members'] = $members;

        return $this;
    }

    /**
     * Gets owners
     *
     * @return string|null
     */
    public function getOwners()
    {
        return $this->container['owners'];
    }

    /**
     * Sets owners
     *
     * @param string|null $owners URI of resource.
     *
     * @return $this
     */
    public function setOwners($owners)
    {
        $this->container['owners'] = $owners;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return string|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param string|null $labels URI of resource.
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets secrets
     *
     * @return string|null
     */
    public function getSecrets()
    {
        return $this->container['secrets'];
    }

    /**
     * Sets secrets
     *
     * @param string|null $secrets URI of resource.
     *
     * @return $this
     */
    public function setSecrets($secrets)
    {
        $this->container['secrets'] = $secrets;

        return $this;
    }

    /**
     * Gets buckets
     *
     * @return string|null
     */
    public function getBuckets()
    {
        return $this->container['buckets'];
    }

    /**
     * Sets buckets
     *
     * @param string|null $buckets URI of resource.
     *
     * @return $this
     */
    public function setBuckets($buckets)
    {
        $this->container['buckets'] = $buckets;

        return $this;
    }

    /**
     * Gets tasks
     *
     * @return string|null
     */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
     * Sets tasks
     *
     * @param string|null $tasks URI of resource.
     *
     * @return $this
     */
    public function setTasks($tasks)
    {
        $this->container['tasks'] = $tasks;

        return $this;
    }

    /**
     * Gets dashboards
     *
     * @return string|null
     */
    public function getDashboards()
    {
        return $this->container['dashboards'];
    }

    /**
     * Sets dashboards
     *
     * @param string|null $dashboards URI of resource.
     *
     * @return $this
     */
    public function setDashboards($dashboards)
    {
        $this->container['dashboards'] = $dashboards;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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


