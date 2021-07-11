<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category Class
 * @package  Klarna\OrderManagementApiPhp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'given_name' => 'string',
        'family_name' => 'string',
        'title' => 'string',
        'street_address' => 'string',
        'street_address2' => 'string',
        'postal_code' => 'string',
        'city' => 'string',
        'region' => 'string',
        'country' => 'string',
        'email' => 'string',
        'phone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'given_name' => null,
        'family_name' => null,
        'title' => null,
        'street_address' => null,
        'street_address2' => null,
        'postal_code' => null,
        'city' => null,
        'region' => null,
        'country' => null,
        'email' => null,
        'phone' => null
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
        'given_name' => 'given_name',
        'family_name' => 'family_name',
        'title' => 'title',
        'street_address' => 'street_address',
        'street_address2' => 'street_address2',
        'postal_code' => 'postal_code',
        'city' => 'city',
        'region' => 'region',
        'country' => 'country',
        'email' => 'email',
        'phone' => 'phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'given_name' => 'setGivenName',
        'family_name' => 'setFamilyName',
        'title' => 'setTitle',
        'street_address' => 'setStreetAddress',
        'street_address2' => 'setStreetAddress2',
        'postal_code' => 'setPostalCode',
        'city' => 'setCity',
        'region' => 'setRegion',
        'country' => 'setCountry',
        'email' => 'setEmail',
        'phone' => 'setPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'given_name' => 'getGivenName',
        'family_name' => 'getFamilyName',
        'title' => 'getTitle',
        'street_address' => 'getStreetAddress',
        'street_address2' => 'getStreetAddress2',
        'postal_code' => 'getPostalCode',
        'city' => 'getCity',
        'region' => 'getRegion',
        'country' => 'getCountry',
        'email' => 'getEmail',
        'phone' => 'getPhone'
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
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['street_address'] = isset($data['street_address']) ? $data['street_address'] : null;
        $this->container['street_address2'] = isset($data['street_address2']) ? $data['street_address2'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['given_name']) && (mb_strlen($this->container['given_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'given_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['given_name']) && (mb_strlen($this->container['given_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'given_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['family_name']) && (mb_strlen($this->container['family_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'family_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['family_name']) && (mb_strlen($this->container['family_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'family_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 20)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['street_address']) && (mb_strlen($this->container['street_address']) > 100)) {
            $invalidProperties[] = "invalid value for 'street_address', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['street_address']) && (mb_strlen($this->container['street_address']) < 0)) {
            $invalidProperties[] = "invalid value for 'street_address', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['street_address2']) && (mb_strlen($this->container['street_address2']) > 100)) {
            $invalidProperties[] = "invalid value for 'street_address2', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['street_address2']) && (mb_strlen($this->container['street_address2']) < 0)) {
            $invalidProperties[] = "invalid value for 'street_address2', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 200)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) < 0)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 200)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 100)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 0)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 100)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 0)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 0.";
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
     * Gets given_name
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string $given_name Given name. Maximum 100 characters.
     *
     * @return $this
     */
    public function setGivenName($given_name)
    {
        if (!is_null($given_name) && (mb_strlen($given_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $given_name when calling Address., must be smaller than or equal to 100.');
        }
        if (!is_null($given_name) && (mb_strlen($given_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $given_name when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['given_name'] = $given_name;

        return $this;
    }

    /**
     * Gets family_name
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string $family_name Family name. Maximum 100 characters.
     *
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        if (!is_null($family_name) && (mb_strlen($family_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $family_name when calling Address., must be smaller than or equal to 100.');
        }
        if (!is_null($family_name) && (mb_strlen($family_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $family_name when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['family_name'] = $family_name;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title. Between 0 and 20 characters.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        if (!is_null($title) && (mb_strlen($title) > 20)) {
            throw new \InvalidArgumentException('invalid length for $title when calling Address., must be smaller than or equal to 20.');
        }
        if (!is_null($title) && (mb_strlen($title) < 0)) {
            throw new \InvalidArgumentException('invalid length for $title when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets street_address
     *
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->container['street_address'];
    }

    /**
     * Sets street_address
     *
     * @param string $street_address First line of street address. Maximum 100 characters.
     *
     * @return $this
     */
    public function setStreetAddress($street_address)
    {
        if (!is_null($street_address) && (mb_strlen($street_address) > 100)) {
            throw new \InvalidArgumentException('invalid length for $street_address when calling Address., must be smaller than or equal to 100.');
        }
        if (!is_null($street_address) && (mb_strlen($street_address) < 0)) {
            throw new \InvalidArgumentException('invalid length for $street_address when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['street_address'] = $street_address;

        return $this;
    }

    /**
     * Gets street_address2
     *
     * @return string
     */
    public function getStreetAddress2()
    {
        return $this->container['street_address2'];
    }

    /**
     * Sets street_address2
     *
     * @param string $street_address2 Second line of street address. Maximum 100 characters.
     *
     * @return $this
     */
    public function setStreetAddress2($street_address2)
    {
        if (!is_null($street_address2) && (mb_strlen($street_address2) > 100)) {
            throw new \InvalidArgumentException('invalid length for $street_address2 when calling Address., must be smaller than or equal to 100.');
        }
        if (!is_null($street_address2) && (mb_strlen($street_address2) < 0)) {
            throw new \InvalidArgumentException('invalid length for $street_address2 when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['street_address2'] = $street_address2;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Postcode. Maximum 10 characters.
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        if (!is_null($postal_code) && (mb_strlen($postal_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling Address., must be smaller than or equal to 10.');
        }
        if (!is_null($postal_code) && (mb_strlen($postal_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City. Maximum 200 characters.
     *
     * @return $this
     */
    public function setCity($city)
    {
        if (!is_null($city) && (mb_strlen($city) > 200)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be smaller than or equal to 200.');
        }
        if (!is_null($city) && (mb_strlen($city) < 0)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region State/Region. Required for US. Maximum 200 characters.
     *
     * @return $this
     */
    public function setRegion($region)
    {
        if (!is_null($region) && (mb_strlen($region) > 200)) {
            throw new \InvalidArgumentException('invalid length for $region when calling Address., must be smaller than or equal to 200.');
        }
        if (!is_null($region) && (mb_strlen($region) < 0)) {
            throw new \InvalidArgumentException('invalid length for $region when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Country. ISO 3166 alpha-2.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email E-mail address. Maximum 100 characters.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 100)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Address., must be smaller than or equal to 100.');
        }
        if (!is_null($email) && (mb_strlen($email) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Phone number. Maximum 100 characters.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        if (!is_null($phone) && (mb_strlen($phone) > 100)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling Address., must be smaller than or equal to 100.');
        }
        if (!is_null($phone) && (mb_strlen($phone) < 0)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['phone'] = $phone;

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


