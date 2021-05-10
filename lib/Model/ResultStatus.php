<?php
/**
 * ResultStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * HTTP API
 *
 * The Binance Chain HTTP API provides access to a Binance Chain node deployment and market data services.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
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
 * ResultStatus Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResultStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResultStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'validator_info' => '\Swagger\Client\Model\ValidatorInfo[]',
'sync_info' => '\Swagger\Client\Model\SyncInfo[]',
'node_info' => '\Swagger\Client\Model\NodeInfo[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'validator_info' => null,
'sync_info' => null,
'node_info' => null    ];

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
        'validator_info' => 'validator_info',
'sync_info' => 'sync_info',
'node_info' => 'node_info'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'validator_info' => 'setValidatorInfo',
'sync_info' => 'setSyncInfo',
'node_info' => 'setNodeInfo'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'validator_info' => 'getValidatorInfo',
'sync_info' => 'getSyncInfo',
'node_info' => 'getNodeInfo'    ];

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
        $this->container['validator_info'] = isset($data['validator_info']) ? $data['validator_info'] : null;
        $this->container['sync_info'] = isset($data['sync_info']) ? $data['sync_info'] : null;
        $this->container['node_info'] = isset($data['node_info']) ? $data['node_info'] : null;
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
     * Gets validator_info
     *
     * @return \Swagger\Client\Model\ValidatorInfo[]
     */
    public function getValidatorInfo()
    {
        return $this->container['validator_info'];
    }

    /**
     * Sets validator_info
     *
     * @param \Swagger\Client\Model\ValidatorInfo[] $validator_info validator_info
     *
     * @return $this
     */
    public function setValidatorInfo($validator_info)
    {
        $this->container['validator_info'] = $validator_info;

        return $this;
    }

    /**
     * Gets sync_info
     *
     * @return \Swagger\Client\Model\SyncInfo[]
     */
    public function getSyncInfo()
    {
        return $this->container['sync_info'];
    }

    /**
     * Sets sync_info
     *
     * @param \Swagger\Client\Model\SyncInfo[] $sync_info sync_info
     *
     * @return $this
     */
    public function setSyncInfo($sync_info)
    {
        $this->container['sync_info'] = $sync_info;

        return $this;
    }

    /**
     * Gets node_info
     *
     * @return \Swagger\Client\Model\NodeInfo[]
     */
    public function getNodeInfo()
    {
        return $this->container['node_info'];
    }

    /**
     * Sets node_info
     *
     * @param \Swagger\Client\Model\NodeInfo[] $node_info node_info
     *
     * @return $this
     */
    public function setNodeInfo($node_info)
    {
        $this->container['node_info'] = $node_info;

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