<?php
/**
 * UpdateMerchantReferences
 *
 * PHP version 5
 *
 * @category Class
 * @package  Klarna\OrderManagementApiPhp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Klarna Order Managment API
 *
 * API to handle order lifecycle
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Klarna\OrderManagementApiPhp\Model;

use \ArrayAccess;
use \Klarna\OrderManagementApiPhp\ObjectSerializer;

/**
 * UpdateMerchantReferences Class Doc Comment
 *
 * @category Class
 * @package  Klarna\OrderManagementApiPhp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateMerchantReferences implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Update merchant references';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant_reference1' => 'string',
        'merchant_reference2' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant_reference1' => null,
        'merchant_reference2' => null
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
        'merchant_reference1' => 'merchant_reference1',
        'merchant_reference2' => 'merchant_reference2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_reference1' => 'setMerchantReference1',
        'merchant_reference2' => 'setMerchantReference2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_reference1' => 'getMerchantReference1',
        'merchant_reference2' => 'getMerchantReference2'
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
        $this->container['merchant_reference1'] = isset($data['merchant_reference1']) ? $data['merchant_reference1'] : null;
        $this->container['merchant_reference2'] = isset($data['merchant_reference2']) ? $data['merchant_reference2'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['merchant_reference1']) && (mb_strlen($this->container['merchant_reference1']) > 255)) {
            $invalidProperties[] = "invalid value for 'merchant_reference1', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['merchant_reference1']) && (mb_strlen($this->container['merchant_reference1']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchant_reference1', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['merchant_reference2']) && (mb_strlen($this->container['merchant_reference2']) > 255)) {
            $invalidProperties[] = "invalid value for 'merchant_reference2', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['merchant_reference2']) && (mb_strlen($this->container['merchant_reference2']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchant_reference2', the character length must be bigger than or equal to 0.";
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
     * Gets merchant_reference1
     *
     * @return string
     */
    public function getMerchantReference1()
    {
        return $this->container['merchant_reference1'];
    }

    /**
     * Sets merchant_reference1
     *
     * @param string $merchant_reference1 New merchant reference 1. Old reference will be overwritten if this field is present.
     *
     * @return $this
     */
    public function setMerchantReference1($merchant_reference1)
    {
        if (!is_null($merchant_reference1) && (mb_strlen($merchant_reference1) > 255)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference1 when calling UpdateMerchantReferences., must be smaller than or equal to 255.');
        }
        if (!is_null($merchant_reference1) && (mb_strlen($merchant_reference1) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference1 when calling UpdateMerchantReferences., must be bigger than or equal to 0.');
        }

        $this->container['merchant_reference1'] = $merchant_reference1;

        return $this;
    }

    /**
     * Gets merchant_reference2
     *
     * @return string
     */
    public function getMerchantReference2()
    {
        return $this->container['merchant_reference2'];
    }

    /**
     * Sets merchant_reference2
     *
     * @param string $merchant_reference2 New merchant reference 2. Old reference will be overwritten if this field is present.
     *
     * @return $this
     */
    public function setMerchantReference2($merchant_reference2)
    {
        if (!is_null($merchant_reference2) && (mb_strlen($merchant_reference2) > 255)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference2 when calling UpdateMerchantReferences., must be smaller than or equal to 255.');
        }
        if (!is_null($merchant_reference2) && (mb_strlen($merchant_reference2) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference2 when calling UpdateMerchantReferences., must be bigger than or equal to 0.');
        }

        $this->container['merchant_reference2'] = $merchant_reference2;

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


