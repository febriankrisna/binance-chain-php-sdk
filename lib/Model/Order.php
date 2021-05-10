<?php
/**
 * Order
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
 * Order Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cumulate_quantity' => 'string',
'fee' => 'string',
'last_executed_price' => 'string',
'last_executed_quantity' => 'string',
'order_create_time' => '\DateTime',
'order_id' => 'string',
'owner' => 'string',
'price' => 'string',
'quantity' => 'string',
'side' => 'int',
'status' => 'string',
'symbol' => 'string',
'time_in_force' => 'int',
'trade_id' => 'string',
'transaction_hash' => 'string',
'transaction_time' => '\DateTime',
'type' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cumulate_quantity' => null,
'fee' => null,
'last_executed_price' => null,
'last_executed_quantity' => null,
'order_create_time' => 'date-time',
'order_id' => null,
'owner' => null,
'price' => null,
'quantity' => null,
'side' => 'int32',
'status' => null,
'symbol' => null,
'time_in_force' => 'int32',
'trade_id' => null,
'transaction_hash' => null,
'transaction_time' => 'date-time',
'type' => 'int32'    ];

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
        'cumulate_quantity' => 'cumulateQuantity',
'fee' => 'fee',
'last_executed_price' => 'lastExecutedPrice',
'last_executed_quantity' => 'lastExecutedQuantity',
'order_create_time' => 'orderCreateTime',
'order_id' => 'orderId',
'owner' => 'owner',
'price' => 'price',
'quantity' => 'quantity',
'side' => 'side',
'status' => 'status',
'symbol' => 'symbol',
'time_in_force' => 'timeInForce',
'trade_id' => 'tradeId',
'transaction_hash' => 'transactionHash',
'transaction_time' => 'transactionTime',
'type' => 'type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cumulate_quantity' => 'setCumulateQuantity',
'fee' => 'setFee',
'last_executed_price' => 'setLastExecutedPrice',
'last_executed_quantity' => 'setLastExecutedQuantity',
'order_create_time' => 'setOrderCreateTime',
'order_id' => 'setOrderId',
'owner' => 'setOwner',
'price' => 'setPrice',
'quantity' => 'setQuantity',
'side' => 'setSide',
'status' => 'setStatus',
'symbol' => 'setSymbol',
'time_in_force' => 'setTimeInForce',
'trade_id' => 'setTradeId',
'transaction_hash' => 'setTransactionHash',
'transaction_time' => 'setTransactionTime',
'type' => 'setType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cumulate_quantity' => 'getCumulateQuantity',
'fee' => 'getFee',
'last_executed_price' => 'getLastExecutedPrice',
'last_executed_quantity' => 'getLastExecutedQuantity',
'order_create_time' => 'getOrderCreateTime',
'order_id' => 'getOrderId',
'owner' => 'getOwner',
'price' => 'getPrice',
'quantity' => 'getQuantity',
'side' => 'getSide',
'status' => 'getStatus',
'symbol' => 'getSymbol',
'time_in_force' => 'getTimeInForce',
'trade_id' => 'getTradeId',
'transaction_hash' => 'getTransactionHash',
'transaction_time' => 'getTransactionTime',
'type' => 'getType'    ];

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
        $this->container['cumulate_quantity'] = isset($data['cumulate_quantity']) ? $data['cumulate_quantity'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['last_executed_price'] = isset($data['last_executed_price']) ? $data['last_executed_price'] : null;
        $this->container['last_executed_quantity'] = isset($data['last_executed_quantity']) ? $data['last_executed_quantity'] : null;
        $this->container['order_create_time'] = isset($data['order_create_time']) ? $data['order_create_time'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['symbol'] = isset($data['symbol']) ? $data['symbol'] : null;
        $this->container['time_in_force'] = isset($data['time_in_force']) ? $data['time_in_force'] : null;
        $this->container['trade_id'] = isset($data['trade_id']) ? $data['trade_id'] : null;
        $this->container['transaction_hash'] = isset($data['transaction_hash']) ? $data['transaction_hash'] : null;
        $this->container['transaction_time'] = isset($data['transaction_time']) ? $data['transaction_time'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * Gets cumulate_quantity
     *
     * @return string
     */
    public function getCumulateQuantity()
    {
        return $this->container['cumulate_quantity'];
    }

    /**
     * Sets cumulate_quantity
     *
     * @param string $cumulate_quantity total amount of trades that have made
     *
     * @return $this
     */
    public function setCumulateQuantity($cumulate_quantity)
    {
        $this->container['cumulate_quantity'] = $cumulate_quantity;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return string
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param string $fee trading fee on the latest updated block of this order. Multiple assets are split by semicolon.
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets last_executed_price
     *
     * @return string
     */
    public function getLastExecutedPrice()
    {
        return $this->container['last_executed_price'];
    }

    /**
     * Sets last_executed_price
     *
     * @param string $last_executed_price price of last execution
     *
     * @return $this
     */
    public function setLastExecutedPrice($last_executed_price)
    {
        $this->container['last_executed_price'] = $last_executed_price;

        return $this;
    }

    /**
     * Gets last_executed_quantity
     *
     * @return string
     */
    public function getLastExecutedQuantity()
    {
        return $this->container['last_executed_quantity'];
    }

    /**
     * Sets last_executed_quantity
     *
     * @param string $last_executed_quantity quantity of last execution
     *
     * @return $this
     */
    public function setLastExecutedQuantity($last_executed_quantity)
    {
        $this->container['last_executed_quantity'] = $last_executed_quantity;

        return $this;
    }

    /**
     * Gets order_create_time
     *
     * @return \DateTime
     */
    public function getOrderCreateTime()
    {
        return $this->container['order_create_time'];
    }

    /**
     * Sets order_create_time
     *
     * @param \DateTime $order_create_time time of order creation
     *
     * @return $this
     */
    public function setOrderCreateTime($order_create_time)
    {
        $this->container['order_create_time'] = $order_create_time;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order ID
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string $owner order issuer
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string $price order price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string $quantity order quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets side
     *
     * @return int
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side
     *
     * @param int $side 1 for buy and 2 for sell
     *
     * @return $this
     */
    public function setSide($side)
    {
        $this->container['side'] = $side;

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
     * @param string $status enum [Ack, PartialFill, IocNoFill, FullyFill, Canceled, Expired, FailedBlocking, FailedMatching, IocExpire]
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string $symbol trading pair symbol
     *
     * @return $this
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets time_in_force
     *
     * @return int
     */
    public function getTimeInForce()
    {
        return $this->container['time_in_force'];
    }

    /**
     * Sets time_in_force
     *
     * @param int $time_in_force 1 for Good Till Expire(GTE) order and 3 for Immediate Or Cancel (IOC)
     *
     * @return $this
     */
    public function setTimeInForce($time_in_force)
    {
        $this->container['time_in_force'] = $time_in_force;

        return $this;
    }

    /**
     * Gets trade_id
     *
     * @return string
     */
    public function getTradeId()
    {
        return $this->container['trade_id'];
    }

    /**
     * Sets trade_id
     *
     * @param string $trade_id trade ID
     *
     * @return $this
     */
    public function setTradeId($trade_id)
    {
        $this->container['trade_id'] = $trade_id;

        return $this;
    }

    /**
     * Gets transaction_hash
     *
     * @return string
     */
    public function getTransactionHash()
    {
        return $this->container['transaction_hash'];
    }

    /**
     * Sets transaction_hash
     *
     * @param string $transaction_hash hash of transaction
     *
     * @return $this
     */
    public function setTransactionHash($transaction_hash)
    {
        $this->container['transaction_hash'] = $transaction_hash;

        return $this;
    }

    /**
     * Gets transaction_time
     *
     * @return \DateTime
     */
    public function getTransactionTime()
    {
        return $this->container['transaction_time'];
    }

    /**
     * Sets transaction_time
     *
     * @param \DateTime $transaction_time time of latest order update, for example, cancel, expire
     *
     * @return $this
     */
    public function setTransactionTime($transaction_time)
    {
        $this->container['transaction_time'] = $transaction_time;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type only 2 is available for now, meaning limit order
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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