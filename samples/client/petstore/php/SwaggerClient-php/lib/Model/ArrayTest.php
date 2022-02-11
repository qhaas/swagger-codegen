<?php
/**
 * ArrayTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34-SNAPSHOT
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
 * ArrayTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ArrayTest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ArrayTest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'array_of_string' => 'string[]',
'array_array_of_integer' => 'int[][]',
'array_array_of_model' => '\Swagger\Client\Model\ReadOnlyFirst[][]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'array_of_string' => null,
'array_array_of_integer' => 'int64',
'array_array_of_model' => null    ];

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
        'array_of_string' => 'array_of_string',
'array_array_of_integer' => 'array_array_of_integer',
'array_array_of_model' => 'array_array_of_model'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'array_of_string' => 'setArrayOfString',
'array_array_of_integer' => 'setArrayArrayOfInteger',
'array_array_of_model' => 'setArrayArrayOfModel'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'array_of_string' => 'getArrayOfString',
'array_array_of_integer' => 'getArrayArrayOfInteger',
'array_array_of_model' => 'getArrayArrayOfModel'    ];

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
        $this->container['array_of_string'] = isset($data['array_of_string']) ? $data['array_of_string'] : null;
        $this->container['array_array_of_integer'] = isset($data['array_array_of_integer']) ? $data['array_array_of_integer'] : null;
        $this->container['array_array_of_model'] = isset($data['array_array_of_model']) ? $data['array_array_of_model'] : null;
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
     * Gets array_of_string
     *
     * @return string[]
     */
    public function getArrayOfString()
    {
        return $this->container['array_of_string'];
    }

    /**
     * Sets array_of_string
     *
     * @param string[] $array_of_string array_of_string
     *
     * @return $this
     */
    public function setArrayOfString($array_of_string)
    {
        $this->container['array_of_string'] = $array_of_string;

        return $this;
    }

    /**
     * Gets array_array_of_integer
     *
     * @return int[][]
     */
    public function getArrayArrayOfInteger()
    {
        return $this->container['array_array_of_integer'];
    }

    /**
     * Sets array_array_of_integer
     *
     * @param int[][] $array_array_of_integer array_array_of_integer
     *
     * @return $this
     */
    public function setArrayArrayOfInteger($array_array_of_integer)
    {
        $this->container['array_array_of_integer'] = $array_array_of_integer;

        return $this;
    }

    /**
     * Gets array_array_of_model
     *
     * @return \Swagger\Client\Model\ReadOnlyFirst[][]
     */
    public function getArrayArrayOfModel()
    {
        return $this->container['array_array_of_model'];
    }

    /**
     * Sets array_array_of_model
     *
     * @param \Swagger\Client\Model\ReadOnlyFirst[][] $array_array_of_model array_array_of_model
     *
     * @return $this
     */
    public function setArrayArrayOfModel($array_array_of_model)
    {
        $this->container['array_array_of_model'] = $array_array_of_model;

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
