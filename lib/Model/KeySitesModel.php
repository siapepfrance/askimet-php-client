<?php
/**
 * KeySitesModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  SiapepFranceAskimet\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Akismet API
 *
 * Documentation of the Akismet API
 *
 * The version of the OpenAPI document: 1.2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SiapepFranceAskimet\Client\Model;

use \ArrayAccess;
use \SiapepFranceAskimet\Client\ObjectSerializer;

/**
 * KeySitesModel Class Doc Comment
 *
 * @category Class
 * @package  SiapepFranceAskimet\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class KeySitesModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'KeySitesModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'api_key' => 'string',
        'month' => 'string',
        'format' => 'string',
        'order' => 'string',
        'limit' => 'int',
        'offset' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'api_key' => null,
        'month' => null,
        'format' => null,
        'order' => null,
        'limit' => null,
        'offset' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'api_key' => false,
		'month' => false,
		'format' => false,
		'order' => false,
		'limit' => false,
		'offset' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'api_key' => 'api_key',
        'month' => 'month',
        'format' => 'format',
        'order' => 'order',
        'limit' => 'limit',
        'offset' => 'offset'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_key' => 'setApiKey',
        'month' => 'setMonth',
        'format' => 'setFormat',
        'order' => 'setOrder',
        'limit' => 'setLimit',
        'offset' => 'setOffset'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_key' => 'getApiKey',
        'month' => 'getMonth',
        'format' => 'getFormat',
        'order' => 'getOrder',
        'limit' => 'getLimit',
        'offset' => 'getOffset'
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

    public const FORMAT_JSON = 'json';
    public const FORMAT_CSV = 'csv';
    public const ORDER_TOTAL = 'total';
    public const ORDER_SPAM = 'spam';
    public const ORDER_HAM = 'ham';
    public const ORDER_MISSED_SPAM = 'missed_spam';
    public const ORDER_FALSE_POSITIVES = 'false_positives';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_JSON,
            self::FORMAT_CSV,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_TOTAL,
            self::ORDER_SPAM,
            self::ORDER_HAM,
            self::ORDER_MISSED_SPAM,
            self::ORDER_FALSE_POSITIVES,
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
        $this->setIfExists('api_key', $data ?? [], null);
        $this->setIfExists('month', $data ?? [], null);
        $this->setIfExists('format', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('offset', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'format', must be one of '%s'",
                $this->container['format'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrderAllowableValues();
        if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'order', must be one of '%s'",
                $this->container['order'],
                implode("', '", $allowedValues)
            );
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
     * Gets api_key
     *
     * @return string|null
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string|null $api_key api_key
     *
     * @return self
     */
    public function setApiKey($api_key)
    {
        if (is_null($api_key)) {
            throw new \InvalidArgumentException('non-nullable api_key cannot be null');
        }
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets month
     *
     * @return string|null
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param string|null $month month
     *
     * @return self
     */
    public function setMonth($month)
    {
        if (is_null($month)) {
            throw new \InvalidArgumentException('non-nullable month cannot be null');
        }
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format format
     *
     * @return self
     */
    public function setFormat($format)
    {
        if (is_null($format)) {
            throw new \InvalidArgumentException('non-nullable format cannot be null');
        }
        $allowedValues = $this->getFormatAllowableValues();
        if (!in_array($format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'format', must be one of '%s'",
                    $format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets order
     *
     * @return string|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $allowedValues = $this->getOrderAllowableValues();
        if (!in_array($order, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'order', must be one of '%s'",
                    $order,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit limit
     *
     * @return self
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            throw new \InvalidArgumentException('non-nullable limit cannot be null');
        }
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int|null $offset offset
     *
     * @return self
     */
    public function setOffset($offset)
    {
        if (is_null($offset)) {
            throw new \InvalidArgumentException('non-nullable offset cannot be null');
        }
        $this->container['offset'] = $offset;

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
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

