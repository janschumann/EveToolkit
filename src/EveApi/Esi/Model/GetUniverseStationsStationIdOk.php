<?php
/**
 * GetUniverseStationsStationIdOk
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
 * GetUniverseStationsStationIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  App\EveApi\Esi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetUniverseStationsStationIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_universe_stations_station_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_dockable_ship_volume' => 'float',
        'name' => 'string',
        'office_rental_cost' => 'float',
        'owner' => 'int',
        'position' => '\App\EveApi\Esi\Model\GetUniverseStationsStationIdPosition',
        'race_id' => 'int',
        'reprocessing_efficiency' => 'float',
        'reprocessing_stations_take' => 'float',
        'services' => 'string[]',
        'station_id' => 'int',
        'system_id' => 'int',
        'type_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'max_dockable_ship_volume' => 'float',
        'name' => null,
        'office_rental_cost' => 'float',
        'owner' => 'int32',
        'position' => null,
        'race_id' => 'int32',
        'reprocessing_efficiency' => 'float',
        'reprocessing_stations_take' => 'float',
        'services' => null,
        'station_id' => 'int32',
        'system_id' => 'int32',
        'type_id' => 'int32'
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
        'max_dockable_ship_volume' => 'max_dockable_ship_volume',
        'name' => 'name',
        'office_rental_cost' => 'office_rental_cost',
        'owner' => 'owner',
        'position' => 'position',
        'race_id' => 'race_id',
        'reprocessing_efficiency' => 'reprocessing_efficiency',
        'reprocessing_stations_take' => 'reprocessing_stations_take',
        'services' => 'services',
        'station_id' => 'station_id',
        'system_id' => 'system_id',
        'type_id' => 'type_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_dockable_ship_volume' => 'setMaxDockableShipVolume',
        'name' => 'setName',
        'office_rental_cost' => 'setOfficeRentalCost',
        'owner' => 'setOwner',
        'position' => 'setPosition',
        'race_id' => 'setRaceId',
        'reprocessing_efficiency' => 'setReprocessingEfficiency',
        'reprocessing_stations_take' => 'setReprocessingStationsTake',
        'services' => 'setServices',
        'station_id' => 'setStationId',
        'system_id' => 'setSystemId',
        'type_id' => 'setTypeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_dockable_ship_volume' => 'getMaxDockableShipVolume',
        'name' => 'getName',
        'office_rental_cost' => 'getOfficeRentalCost',
        'owner' => 'getOwner',
        'position' => 'getPosition',
        'race_id' => 'getRaceId',
        'reprocessing_efficiency' => 'getReprocessingEfficiency',
        'reprocessing_stations_take' => 'getReprocessingStationsTake',
        'services' => 'getServices',
        'station_id' => 'getStationId',
        'system_id' => 'getSystemId',
        'type_id' => 'getTypeId'
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

    const SERVICES_BOUNTY_MISSIONS = 'bounty-missions';
    const SERVICES_ASSASINATION_MISSIONS = 'assasination-missions';
    const SERVICES_COURIER_MISSIONS = 'courier-missions';
    const SERVICES_INTERBUS = 'interbus';
    const SERVICES_REPROCESSING_PLANT = 'reprocessing-plant';
    const SERVICES_REFINERY = 'refinery';
    const SERVICES_MARKET = 'market';
    const SERVICES_BLACK_MARKET = 'black-market';
    const SERVICES_STOCK_EXCHANGE = 'stock-exchange';
    const SERVICES_CLONING = 'cloning';
    const SERVICES_SURGERY = 'surgery';
    const SERVICES_DNA_THERAPY = 'dna-therapy';
    const SERVICES_REPAIR_FACILITIES = 'repair-facilities';
    const SERVICES_FACTORY = 'factory';
    const SERVICES_LABRATORY = 'labratory';
    const SERVICES_GAMBLING = 'gambling';
    const SERVICES_FITTING = 'fitting';
    const SERVICES_PAINTSHOP = 'paintshop';
    const SERVICES_NEWS = 'news';
    const SERVICES_STORAGE = 'storage';
    const SERVICES_INSURANCE = 'insurance';
    const SERVICES_DOCKING = 'docking';
    const SERVICES_OFFICE_RENTAL = 'office-rental';
    const SERVICES_JUMP_CLONE_FACILITY = 'jump-clone-facility';
    const SERVICES_LOYALTY_POINT_STORE = 'loyalty-point-store';
    const SERVICES_NAVY_OFFICES = 'navy-offices';
    const SERVICES_SECURITY_OFFICES = 'security-offices';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getServicesAllowableValues()
    {
        return [
            self::SERVICES_BOUNTY_MISSIONS,
            self::SERVICES_ASSASINATION_MISSIONS,
            self::SERVICES_COURIER_MISSIONS,
            self::SERVICES_INTERBUS,
            self::SERVICES_REPROCESSING_PLANT,
            self::SERVICES_REFINERY,
            self::SERVICES_MARKET,
            self::SERVICES_BLACK_MARKET,
            self::SERVICES_STOCK_EXCHANGE,
            self::SERVICES_CLONING,
            self::SERVICES_SURGERY,
            self::SERVICES_DNA_THERAPY,
            self::SERVICES_REPAIR_FACILITIES,
            self::SERVICES_FACTORY,
            self::SERVICES_LABRATORY,
            self::SERVICES_GAMBLING,
            self::SERVICES_FITTING,
            self::SERVICES_PAINTSHOP,
            self::SERVICES_NEWS,
            self::SERVICES_STORAGE,
            self::SERVICES_INSURANCE,
            self::SERVICES_DOCKING,
            self::SERVICES_OFFICE_RENTAL,
            self::SERVICES_JUMP_CLONE_FACILITY,
            self::SERVICES_LOYALTY_POINT_STORE,
            self::SERVICES_NAVY_OFFICES,
            self::SERVICES_SECURITY_OFFICES,
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
        $this->container['max_dockable_ship_volume'] = isset($data['max_dockable_ship_volume']) ? $data['max_dockable_ship_volume'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['office_rental_cost'] = isset($data['office_rental_cost']) ? $data['office_rental_cost'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['race_id'] = isset($data['race_id']) ? $data['race_id'] : null;
        $this->container['reprocessing_efficiency'] = isset($data['reprocessing_efficiency']) ? $data['reprocessing_efficiency'] : null;
        $this->container['reprocessing_stations_take'] = isset($data['reprocessing_stations_take']) ? $data['reprocessing_stations_take'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['station_id'] = isset($data['station_id']) ? $data['station_id'] : null;
        $this->container['system_id'] = isset($data['system_id']) ? $data['system_id'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['max_dockable_ship_volume'] === null) {
            $invalidProperties[] = "'max_dockable_ship_volume' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['office_rental_cost'] === null) {
            $invalidProperties[] = "'office_rental_cost' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['reprocessing_efficiency'] === null) {
            $invalidProperties[] = "'reprocessing_efficiency' can't be null";
        }
        if ($this->container['reprocessing_stations_take'] === null) {
            $invalidProperties[] = "'reprocessing_stations_take' can't be null";
        }
        if ($this->container['services'] === null) {
            $invalidProperties[] = "'services' can't be null";
        }
        if ($this->container['station_id'] === null) {
            $invalidProperties[] = "'station_id' can't be null";
        }
        if ($this->container['system_id'] === null) {
            $invalidProperties[] = "'system_id' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalidProperties[] = "'type_id' can't be null";
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

        if ($this->container['max_dockable_ship_volume'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['office_rental_cost'] === null) {
            return false;
        }
        if ($this->container['position'] === null) {
            return false;
        }
        if ($this->container['reprocessing_efficiency'] === null) {
            return false;
        }
        if ($this->container['reprocessing_stations_take'] === null) {
            return false;
        }
        if ($this->container['services'] === null) {
            return false;
        }
        if ($this->container['station_id'] === null) {
            return false;
        }
        if ($this->container['system_id'] === null) {
            return false;
        }
        if ($this->container['type_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets max_dockable_ship_volume
     *
     * @return float
     */
    public function getMaxDockableShipVolume()
    {
        return $this->container['max_dockable_ship_volume'];
    }

    /**
     * Sets max_dockable_ship_volume
     *
     * @param float $max_dockable_ship_volume max_dockable_ship_volume number
     *
     * @return $this
     */
    public function setMaxDockableShipVolume($max_dockable_ship_volume)
    {
        $this->container['max_dockable_ship_volume'] = $max_dockable_ship_volume;

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
     * @param string $name name string
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets office_rental_cost
     *
     * @return float
     */
    public function getOfficeRentalCost()
    {
        return $this->container['office_rental_cost'];
    }

    /**
     * Sets office_rental_cost
     *
     * @param float $office_rental_cost office_rental_cost number
     *
     * @return $this
     */
    public function setOfficeRentalCost($office_rental_cost)
    {
        $this->container['office_rental_cost'] = $office_rental_cost;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return int
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param int $owner ID of the corporation that controls this station
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets position
     *
     * @return \App\EveApi\Esi\Model\GetUniverseStationsStationIdPosition
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param \App\EveApi\Esi\Model\GetUniverseStationsStationIdPosition $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets race_id
     *
     * @return int
     */
    public function getRaceId()
    {
        return $this->container['race_id'];
    }

    /**
     * Sets race_id
     *
     * @param int $race_id race_id integer
     *
     * @return $this
     */
    public function setRaceId($race_id)
    {
        $this->container['race_id'] = $race_id;

        return $this;
    }

    /**
     * Gets reprocessing_efficiency
     *
     * @return float
     */
    public function getReprocessingEfficiency()
    {
        return $this->container['reprocessing_efficiency'];
    }

    /**
     * Sets reprocessing_efficiency
     *
     * @param float $reprocessing_efficiency reprocessing_efficiency number
     *
     * @return $this
     */
    public function setReprocessingEfficiency($reprocessing_efficiency)
    {
        $this->container['reprocessing_efficiency'] = $reprocessing_efficiency;

        return $this;
    }

    /**
     * Gets reprocessing_stations_take
     *
     * @return float
     */
    public function getReprocessingStationsTake()
    {
        return $this->container['reprocessing_stations_take'];
    }

    /**
     * Sets reprocessing_stations_take
     *
     * @param float $reprocessing_stations_take reprocessing_stations_take number
     *
     * @return $this
     */
    public function setReprocessingStationsTake($reprocessing_stations_take)
    {
        $this->container['reprocessing_stations_take'] = $reprocessing_stations_take;

        return $this;
    }

    /**
     * Gets services
     *
     * @return string[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param string[] $services services array
     *
     * @return $this
     */
    public function setServices($services)
    {
        $allowedValues = $this->getServicesAllowableValues();
        if (array_diff($services, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'services', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets station_id
     *
     * @return int
     */
    public function getStationId()
    {
        return $this->container['station_id'];
    }

    /**
     * Sets station_id
     *
     * @param int $station_id station_id integer
     *
     * @return $this
     */
    public function setStationId($station_id)
    {
        $this->container['station_id'] = $station_id;

        return $this;
    }

    /**
     * Gets system_id
     *
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     *
     * @param int $system_id The solar system this station is in
     *
     * @return $this
     */
    public function setSystemId($system_id)
    {
        $this->container['system_id'] = $system_id;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id type_id integer
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

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


