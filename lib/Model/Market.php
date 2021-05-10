<?php
/**
 * Market
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
 * Market Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Market implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Market';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'base_asset_symbol' => 'string',
'quote_asset_symbol' => 'string',
'list_price' => 'string',
'tick_size' => 'string',
'lot_size' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'base_asset_symbol' => 'currency',
'quote_asset_symbol' => 'currency',
'list_price' => 'fixed8',
'tick_size' => 'fixed8',
'lot_size' => 'fixed8'    ];

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
        'base_asset_symbol' => 'base_asset_symbol',
'quote_asset_symbol' => 'quote_asset_symbol',
'list_price' => 'list_price',
'tick_size' => 'tick_size',
'lot_size' => 'lot_size'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base_asset_symbol' => 'setBaseAssetSymbol',
'quote_asset_symbol' => 'setQuoteAssetSymbol',
'list_price' => 'setListPrice',
'tick_size' => 'setTickSize',
'lot_size' => 'setLotSize'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base_asset_symbol' => 'getBaseAssetSymbol',
'quote_asset_symbol' => 'getQuoteAssetSymbol',
'list_price' => 'getListPrice',
'tick_size' => 'getTickSize',
'lot_size' => 'getLotSize'    ];

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
        $this->container['base_asset_symbol'] = isset($data['base_asset_symbol']) ? $data['base_asset_symbol'] : null;
        $this->container['quote_asset_symbol'] = isset($data['quote_asset_symbol']) ? $data['quote_asset_symbol'] : null;
        $this->container['list_price'] = isset($data['list_price']) ? $data['list_price'] : null;
        $this->container['tick_size'] = isset($data['tick_size']) ? $data['tick_size'] : null;
        $this->container['lot_size'] = isset($data['lot_size']) ? $data['lot_size'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['base_asset_symbol'] === null) {
            $invalidProperties[] = "'base_asset_symbol' can't be null";
        }
        if ($this->container['quote_asset_symbol'] === null) {
            $invalidProperties[] = "'quote_asset_symbol' can't be null";
        }
        if ($this->container['list_price'] === null) {
            $invalidProperties[] = "'list_price' can't be null";
        }
        if ($this->container['tick_size'] === null) {
            $invalidProperties[] = "'tick_size' can't be null";
        }
        if ($this->container['lot_size'] === null) {
            $invalidProperties[] = "'lot_size' can't be null";
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
     * Gets base_asset_symbol
     *
     * @return string
     */
    public function getBaseAssetSymbol()
    {
        return $this->container['base_asset_symbol'];
    }

    /**
     * Sets base_asset_symbol
     *
     * @param string $base_asset_symbol symbol of base asset
     *
     * @return $this
     */
    public function setBaseAssetSymbol($base_asset_symbol)
    {
        $this->container['base_asset_symbol'] = $base_asset_symbol;

        return $this;
    }

    /**
     * Gets quote_asset_symbol
     *
     * @return string
     */
    public function getQuoteAssetSymbol()
    {
        return $this->container['quote_asset_symbol'];
    }

    /**
     * Sets quote_asset_symbol
     *
     * @param string $quote_asset_symbol symbol of quote asset
     *
     * @return $this
     */
    public function setQuoteAssetSymbol($quote_asset_symbol)
    {
        $this->container['quote_asset_symbol'] = $quote_asset_symbol;

        return $this;
    }

    /**
     * Gets list_price
     *
     * @return string
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price
     *
     * @param string $list_price In decimal form
     *
     * @return $this
     */
    public function setListPrice($list_price)
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets tick_size
     *
     * @return string
     */
    public function getTickSize()
    {
        return $this->container['tick_size'];
    }

    /**
     * Sets tick_size
     *
     * @param string $tick_size Minimium price change in decimal form
     *
     * @return $this
     */
    public function setTickSize($tick_size)
    {
        $this->container['tick_size'] = $tick_size;

        return $this;
    }

    /**
     * Gets lot_size
     *
     * @return string
     */
    public function getLotSize()
    {
        return $this->container['lot_size'];
    }

    /**
     * Sets lot_size
     *
     * @param string $lot_size Minimium trading quantity in decimal form
     *
     * @return $this
     */
    public function setLotSize($lot_size)
    {
        $this->container['lot_size'] = $lot_size;

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
