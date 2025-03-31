<?php
/**
 * DBRP
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
 * DBRP Class Doc Comment
 *
 * @category Class
 * @package  InfluxDB2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DBRP implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DBRP';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'org_id' => 'string',
        'bucket_id' => 'string',
        'database' => 'string',
        'retention_policy' => 'string',
        'default' => 'bool',
        'virtual' => 'bool',
        'links' => '\InfluxDB2\Model\Links'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'org_id' => null,
        'bucket_id' => null,
        'database' => null,
        'retention_policy' => null,
        'default' => null,
        'virtual' => null,
        'links' => null
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
        'org_id' => 'orgID',
        'bucket_id' => 'bucketID',
        'database' => 'database',
        'retention_policy' => 'retention_policy',
        'default' => 'default',
        'virtual' => 'virtual',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'org_id' => 'setOrgId',
        'bucket_id' => 'setBucketId',
        'database' => 'setDatabase',
        'retention_policy' => 'setRetentionPolicy',
        'default' => 'setDefault',
        'virtual' => 'setVirtual',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'org_id' => 'getOrgId',
        'bucket_id' => 'getBucketId',
        'database' => 'getDatabase',
        'retention_policy' => 'getRetentionPolicy',
        'default' => 'getDefault',
        'virtual' => 'getVirtual',
        'links' => 'getLinks'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['org_id'] = isset($data['org_id']) ? $data['org_id'] : null;
        $this->container['bucket_id'] = isset($data['bucket_id']) ? $data['bucket_id'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['retention_policy'] = isset($data['retention_policy']) ? $data['retention_policy'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['virtual'] = isset($data['virtual']) ? $data['virtual'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
        if ($this->container['org_id'] === null) {
            $invalidProperties[] = "'org_id' can't be null";
        }
        if ($this->container['bucket_id'] === null) {
            $invalidProperties[] = "'bucket_id' can't be null";
        }
        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }
        if ($this->container['retention_policy'] === null) {
            $invalidProperties[] = "'retention_policy' can't be null";
        }
        if ($this->container['default'] === null) {
            $invalidProperties[] = "'default' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The ID of the DBRP mapping.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets org_id
     *
     * @return string
     */
    public function getOrgId()
    {
        return $this->container['org_id'];
    }

    /**
     * Sets org_id
     *
     * @param string $org_id The ID of the organization.
     *
     * @return $this
     */
    public function setOrgId($org_id)
    {
        $this->container['org_id'] = $org_id;

        return $this;
    }

    /**
     * Gets bucket_id
     *
     * @return string
     */
    public function getBucketId()
    {
        return $this->container['bucket_id'];
    }

    /**
     * Sets bucket_id
     *
     * @param string $bucket_id The ID of the bucket used as the target for the translation.
     *
     * @return $this
     */
    public function setBucketId($bucket_id)
    {
        $this->container['bucket_id'] = $bucket_id;

        return $this;
    }

    /**
     * Gets database
     *
     * @return string
     */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
     * Sets database
     *
     * @param string $database InfluxDB v1 database
     *
     * @return $this
     */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;

        return $this;
    }

    /**
     * Gets retention_policy
     *
     * @return string
     */
    public function getRetentionPolicy()
    {
        return $this->container['retention_policy'];
    }

    /**
     * Sets retention_policy
     *
     * @param string $retention_policy InfluxDB v1 retention policy
     *
     * @return $this
     */
    public function setRetentionPolicy($retention_policy)
    {
        $this->container['retention_policy'] = $retention_policy;

        return $this;
    }

    /**
     * Gets default
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param bool $default Mapping represents the default retention policy for the database specified.
     *
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets virtual
     *
     * @return bool|null
     */
    public function getVirtual()
    {
        return $this->container['virtual'];
    }

    /**
     * Sets virtual
     *
     * @param bool|null $virtual Indicates an autogenerated, virtual mapping based on the bucket name. Currently only available in OSS.
     *
     * @return $this
     */
    public function setVirtual($virtual)
    {
        $this->container['virtual'] = $virtual;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \InfluxDB2\Model\Links|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \InfluxDB2\Model\Links|null $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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


