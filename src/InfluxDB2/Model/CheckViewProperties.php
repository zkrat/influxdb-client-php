<?php
/**
 * CheckViewProperties
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
use \InfluxDB2\ObjectSerializer;

/**
 * CheckViewProperties Class Doc Comment
 *
 * @category Class
 * @package  InfluxDB2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CheckViewProperties extends ViewProperties
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CheckViewProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adaptive_zoom_hide' => 'bool',
        'type' => 'string',
        'shape' => 'string',
        'check_id' => 'string',
        'check' => '\InfluxDB2\Model\Check',
        'queries' => '\InfluxDB2\Model\DashboardQuery[]',
        'colors' => '\InfluxDB2\Model\DashboardColor[]',
        'legend_colorize_rows' => 'bool',
        'legend_hide' => 'bool',
        'legend_opacity' => 'float',
        'legend_orientation_threshold' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'adaptive_zoom_hide' => null,
        'type' => null,
        'shape' => null,
        'check_id' => null,
        'check' => null,
        'queries' => null,
        'colors' => null,
        'legend_colorize_rows' => null,
        'legend_hide' => null,
        'legend_opacity' => 'float',
        'legend_orientation_threshold' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'adaptive_zoom_hide' => 'adaptiveZoomHide',
        'type' => 'type',
        'shape' => 'shape',
        'check_id' => 'checkID',
        'check' => 'check',
        'queries' => 'queries',
        'colors' => 'colors',
        'legend_colorize_rows' => 'legendColorizeRows',
        'legend_hide' => 'legendHide',
        'legend_opacity' => 'legendOpacity',
        'legend_orientation_threshold' => 'legendOrientationThreshold'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adaptive_zoom_hide' => 'setAdaptiveZoomHide',
        'type' => 'setType',
        'shape' => 'setShape',
        'check_id' => 'setCheckId',
        'check' => 'setCheck',
        'queries' => 'setQueries',
        'colors' => 'setColors',
        'legend_colorize_rows' => 'setLegendColorizeRows',
        'legend_hide' => 'setLegendHide',
        'legend_opacity' => 'setLegendOpacity',
        'legend_orientation_threshold' => 'setLegendOrientationThreshold'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adaptive_zoom_hide' => 'getAdaptiveZoomHide',
        'type' => 'getType',
        'shape' => 'getShape',
        'check_id' => 'getCheckId',
        'check' => 'getCheck',
        'queries' => 'getQueries',
        'colors' => 'getColors',
        'legend_colorize_rows' => 'getLegendColorizeRows',
        'legend_hide' => 'getLegendHide',
        'legend_opacity' => 'getLegendOpacity',
        'legend_orientation_threshold' => 'getLegendOrientationThreshold'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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

    const TYPE_CHECK = 'check';
    const SHAPE_CHRONOGRAF_V2 = 'chronograf-v2';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CHECK,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShapeAllowableValues()
    {
        return [
            self::SHAPE_CHRONOGRAF_V2,
        ];
    }



    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array|null $data = null)
    {
        parent::__construct($data);

        $this->container['adaptive_zoom_hide'] = isset($data['adaptive_zoom_hide']) ? $data['adaptive_zoom_hide'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : TYPE_CHECK;
        $this->container['shape'] = isset($data['shape']) ? $data['shape'] : SHAPE_CHRONOGRAF_V2;
        $this->container['check_id'] = isset($data['check_id']) ? $data['check_id'] : null;
        $this->container['check'] = isset($data['check']) ? $data['check'] : null;
        $this->container['queries'] = isset($data['queries']) ? $data['queries'] : null;
        $this->container['colors'] = isset($data['colors']) ? $data['colors'] : null;
        $this->container['legend_colorize_rows'] = isset($data['legend_colorize_rows']) ? $data['legend_colorize_rows'] : null;
        $this->container['legend_hide'] = isset($data['legend_hide']) ? $data['legend_hide'] : null;
        $this->container['legend_opacity'] = isset($data['legend_opacity']) ? $data['legend_opacity'] : null;
        $this->container['legend_orientation_threshold'] = isset($data['legend_orientation_threshold']) ? $data['legend_orientation_threshold'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['shape'] === null) {
            $invalidProperties[] = "'shape' can't be null";
        }
        $allowedValues = $this->getShapeAllowableValues();
        if (!is_null($this->container['shape']) && !in_array($this->container['shape'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'shape', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['check_id'] === null) {
            $invalidProperties[] = "'check_id' can't be null";
        }
        if ($this->container['queries'] === null) {
            $invalidProperties[] = "'queries' can't be null";
        }
        if ($this->container['colors'] === null) {
            $invalidProperties[] = "'colors' can't be null";
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
     * Gets adaptive_zoom_hide
     *
     * @return bool|null
     */
    public function getAdaptiveZoomHide()
    {
        return $this->container['adaptive_zoom_hide'];
    }

    /**
     * Sets adaptive_zoom_hide
     *
     * @param bool|null $adaptive_zoom_hide adaptive_zoom_hide
     *
     * @return $this
     */
    public function setAdaptiveZoomHide($adaptive_zoom_hide)
    {
        $this->container['adaptive_zoom_hide'] = $adaptive_zoom_hide;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets shape
     *
     * @return string
     */
    public function getShape()
    {
        return $this->container['shape'];
    }

    /**
     * Sets shape
     *
     * @param string $shape shape
     *
     * @return $this
     */
    public function setShape($shape)
    {
        $allowedValues = $this->getShapeAllowableValues();
        if (!in_array($shape, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'shape', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shape'] = $shape;

        return $this;
    }

    /**
     * Gets check_id
     *
     * @return string
     */
    public function getCheckId()
    {
        return $this->container['check_id'];
    }

    /**
     * Sets check_id
     *
     * @param string $check_id check_id
     *
     * @return $this
     */
    public function setCheckId($check_id)
    {
        $this->container['check_id'] = $check_id;

        return $this;
    }

    /**
     * Gets check
     *
     * @return \InfluxDB2\Model\Check|null
     */
    public function getCheck()
    {
        return $this->container['check'];
    }

    /**
     * Sets check
     *
     * @param \InfluxDB2\Model\Check|null $check check
     *
     * @return $this
     */
    public function setCheck($check)
    {
        $this->container['check'] = $check;

        return $this;
    }

    /**
     * Gets queries
     *
     * @return \InfluxDB2\Model\DashboardQuery[]
     */
    public function getQueries()
    {
        return $this->container['queries'];
    }

    /**
     * Sets queries
     *
     * @param \InfluxDB2\Model\DashboardQuery[] $queries queries
     *
     * @return $this
     */
    public function setQueries($queries)
    {
        $this->container['queries'] = $queries;

        return $this;
    }

    /**
     * Gets colors
     *
     * @return \InfluxDB2\Model\DashboardColor[]
     */
    public function getColors()
    {
        return $this->container['colors'];
    }

    /**
     * Sets colors
     *
     * @param \InfluxDB2\Model\DashboardColor[] $colors Colors define color encoding of data into a visualization
     *
     * @return $this
     */
    public function setColors($colors)
    {
        $this->container['colors'] = $colors;

        return $this;
    }

    /**
     * Gets legend_colorize_rows
     *
     * @return bool|null
     */
    public function getLegendColorizeRows()
    {
        return $this->container['legend_colorize_rows'];
    }

    /**
     * Sets legend_colorize_rows
     *
     * @param bool|null $legend_colorize_rows legend_colorize_rows
     *
     * @return $this
     */
    public function setLegendColorizeRows($legend_colorize_rows)
    {
        $this->container['legend_colorize_rows'] = $legend_colorize_rows;

        return $this;
    }

    /**
     * Gets legend_hide
     *
     * @return bool|null
     */
    public function getLegendHide()
    {
        return $this->container['legend_hide'];
    }

    /**
     * Sets legend_hide
     *
     * @param bool|null $legend_hide legend_hide
     *
     * @return $this
     */
    public function setLegendHide($legend_hide)
    {
        $this->container['legend_hide'] = $legend_hide;

        return $this;
    }

    /**
     * Gets legend_opacity
     *
     * @return float|null
     */
    public function getLegendOpacity()
    {
        return $this->container['legend_opacity'];
    }

    /**
     * Sets legend_opacity
     *
     * @param float|null $legend_opacity legend_opacity
     *
     * @return $this
     */
    public function setLegendOpacity($legend_opacity)
    {
        $this->container['legend_opacity'] = $legend_opacity;

        return $this;
    }

    /**
     * Gets legend_orientation_threshold
     *
     * @return int|null
     */
    public function getLegendOrientationThreshold()
    {
        return $this->container['legend_orientation_threshold'];
    }

    /**
     * Sets legend_orientation_threshold
     *
     * @param int|null $legend_orientation_threshold legend_orientation_threshold
     *
     * @return $this
     */
    public function setLegendOrientationThreshold($legend_orientation_threshold)
    {
        $this->container['legend_orientation_threshold'] = $legend_orientation_threshold;

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


