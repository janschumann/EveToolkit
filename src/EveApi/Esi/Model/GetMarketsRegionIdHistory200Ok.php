<?php
/**
 * GetMarketsRegionIdHistory200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  App\EveApi\Esi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.8.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace App\EveApi\Esi\Model;

use \ArrayAccess;
use \App\EveApi\Esi\ObjectSerializer;

/**
 * GetMarketsRegionIdHistory200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  App\EveApi\Esi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetMarketsRegionIdHistory200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_markets_region_id_history_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'average' => 'double',
        'date' => '\DateTime',
        'highest' => 'double',
        'lowest' => 'double',
        'order_count' => 'int',
        'volume' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'average' => 'double',
        'date' => 'date',
        'highest' => 'double',
        'lowest' => 'double',
        'order_count' => 'int64',
        'volume' => 'int64'
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
        'average' => 'average',
        'date' => 'date',
        'highest' => 'highest',
        'lowest' => 'lowest',
        'order_count' => 'order_count',
        'volume' => 'volume'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'average' => 'setAverage',
        'date' => 'setDate',
        'highest' => 'setHighest',
        'lowest' => 'setLowest',
        'order_count' => 'setOrderCount',
        'volume' => 'setVolume'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'average' => 'getAverage',
        'date' => 'getDate',
        'highest' => 'getHighest',
        'lowest' => 'getLowest',
        'order_count' => 'getOrderCount',
        'volume' => 'getVolume'
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
        $this->container['average'] = isset($data['average']) ? $data['average'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['highest'] = isset($data['highest']) ? $data['highest'] : null;
        $this->container['lowest'] = isset($data['lowest']) ? $data['lowest'] : null;
        $this->container['order_count'] = isset($data['order_count']) ? $data['order_count'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['average'] === null) {
            $invalidProperties[] = "'average' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['highest'] === null) {
            $invalidProperties[] = "'highest' can't be null";
        }
        if ($this->container['lowest'] === null) {
            $invalidProperties[] = "'lowest' can't be null";
        }
        if ($this->container['order_count'] === null) {
            $invalidProperties[] = "'order_count' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
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

        if ($this->container['average'] === null) {
            return false;
        }
        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['highest'] === null) {
            return false;
        }
        if ($this->container['lowest'] === null) {
            return false;
        }
        if ($this->container['order_count'] === null) {
            return false;
        }
        if ($this->container['volume'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets average
     *
     * @return double
     */
    public function getAverage()
    {
        return $this->container['average'];
    }

    /**
     * Sets average
     *
     * @param double $average average number
     *
     * @return $this
     */
    public function setAverage($average)
    {
        $this->container['average'] = $average;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date The date of this historical statistic entry
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets highest
     *
     * @return double
     */
    public function getHighest()
    {
        return $this->container['highest'];
    }

    /**
     * Sets highest
     *
     * @param double $highest highest number
     *
     * @return $this
     */
    public function setHighest($highest)
    {
        $this->container['highest'] = $highest;

        return $this;
    }

    /**
     * Gets lowest
     *
     * @return double
     */
    public function getLowest()
    {
        return $this->container['lowest'];
    }

    /**
     * Sets lowest
     *
     * @param double $lowest lowest number
     *
     * @return $this
     */
    public function setLowest($lowest)
    {
        $this->container['lowest'] = $lowest;

        return $this;
    }

    /**
     * Gets order_count
     *
     * @return int
     */
    public function getOrderCount()
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count
     *
     * @param int $order_count Total number of orders happened that day
     *
     * @return $this
     */
    public function setOrderCount($order_count)
    {
        $this->container['order_count'] = $order_count;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return int
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param int $volume Total
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

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

