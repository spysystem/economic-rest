<?php
/**
 * Period
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  EconomicRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * e-conomic JSON-schema REST API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EconomicRest\Model;

use \ArrayAccess;
use \EconomicRest\ObjectSerializer;

/**
 * Period Class Doc Comment
 *
 * @category Class
 * @description A schema for retrieving a period of an accounting year.
 * @package  EconomicRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Period implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return PeriodModelFields
      */
    public static function GetModelFields(): PeriodModelFields
    {
        return new PeriodModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return PeriodModelAttributes
      */
    public static function GetModelAttributes(): PeriodModelAttributes
    {
        return new PeriodModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Period';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'period_number' => 'int',
        'accounting_year' => '\EconomicRest\Model\AccountingYearHandler',
        'from_date' => 'string',
        'to_date' => 'string',
        'barred' => 'bool',
        'closed' => 'bool',
        'entries' => 'string',
        'totals' => 'string',
        'self' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'period_number' => null,
        'accounting_year' => null,
        'from_date' => 'full-date',
        'to_date' => 'full-date',
        'barred' => null,
        'closed' => null,
        'entries' => 'uri',
        'totals' => 'uri',
        'self' => 'uri'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'period_number' => false,
        'accounting_year' => false,
        'from_date' => false,
        'to_date' => false,
        'barred' => false,
        'closed' => false,
        'entries' => false,
        'totals' => false,
        'self' => false
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
        'period_number' => 'periodNumber',
        'accounting_year' => 'accountingYear',
        'from_date' => 'fromDate',
        'to_date' => 'toDate',
        'barred' => 'barred',
        'closed' => 'closed',
        'entries' => 'entries',
        'totals' => 'totals',
        'self' => 'self'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'period_number' => 'setPeriodNumber',
        'accounting_year' => 'setAccountingYear',
        'from_date' => 'setFromDate',
        'to_date' => 'setToDate',
        'barred' => 'setBarred',
        'closed' => 'setClosed',
        'entries' => 'setEntries',
        'totals' => 'setTotals',
        'self' => 'setSelf'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'period_number' => 'getPeriodNumber',
        'accounting_year' => 'getAccountingYear',
        'from_date' => 'getFromDate',
        'to_date' => 'getToDate',
        'barred' => 'getBarred',
        'closed' => 'getClosed',
        'entries' => 'getEntries',
        'totals' => 'getTotals',
        'self' => 'getSelf'
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
        $this->setIfExists('period_number', $data ?? [], null);
        $this->setIfExists('accounting_year', $data ?? [], null);
        $this->setIfExists('from_date', $data ?? [], null);
        $this->setIfExists('to_date', $data ?? [], null);
        $this->setIfExists('barred', $data ?? [], null);
        $this->setIfExists('closed', $data ?? [], null);
        $this->setIfExists('entries', $data ?? [], null);
        $this->setIfExists('totals', $data ?? [], null);
        $this->setIfExists('self', $data ?? [], null);
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

        if (!is_null($this->container['period_number']) && ($this->container['period_number'] < 1)) {
            $invalidProperties[] = "invalid value for 'period_number', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['from_date']) && !preg_match("/\\d{4}-\\d{2}-\\d{2}/", $this->container['from_date'])) {
            $invalidProperties[] = "invalid value for 'from_date', must be conform to the pattern /\\d{4}-\\d{2}-\\d{2}/.";
        }

        if (!is_null($this->container['to_date']) && !preg_match("/\\d{4}-\\d{2}-\\d{2}/", $this->container['to_date'])) {
            $invalidProperties[] = "invalid value for 'to_date', must be conform to the pattern /\\d{4}-\\d{2}-\\d{2}/.";
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
     * Gets period_number
     *
     * @return int|null
     */
    public function getPeriodNumber()
    {
        return $this->container['period_number'];
    }

    /**
     * Sets period_number
     *
     * @param int|null $period_number A unique identifier of the period.
     *
     * @return self
     */
    public function setPeriodNumber($period_number)
    {
        if (is_null($period_number)) {
            throw new \InvalidArgumentException('non-nullable period_number cannot be null');
        }

        if (($period_number < 1)) {
            throw new \InvalidArgumentException('invalid value for $period_number when calling Period., must be bigger than or equal to 1.');
        }

        $this->container['period_number'] = $period_number;

        return $this;
    }

    /**
     * Gets accounting_year
     *
     * @return \EconomicRest\Model\AccountingYearHandler|null
     */
    public function getAccountingYear()
    {
        return $this->container['accounting_year'];
    }

    /**
     * Sets accounting_year
     *
     * @param \EconomicRest\Model\AccountingYearHandler|null $accounting_year accounting_year
     *
     * @return self
     */
    public function setAccountingYear($accounting_year)
    {
        if (is_null($accounting_year)) {
            throw new \InvalidArgumentException('non-nullable accounting_year cannot be null');
        }
        $this->container['accounting_year'] = $accounting_year;

        return $this;
    }

    /**
     * Gets from_date
     *
     * @return string|null
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param string|null $from_date The first date in the period formatted according to ISO-8601(YYYY-MM-DD).
     *
     * @return self
     */
    public function setFromDate($from_date)
    {
        if (is_null($from_date)) {
            throw new \InvalidArgumentException('non-nullable from_date cannot be null');
        }

        if ((!preg_match("/\\d{4}-\\d{2}-\\d{2}/", ObjectSerializer::toString($from_date)))) {
            throw new \InvalidArgumentException("invalid value for \$from_date when calling Period., must conform to the pattern /\\d{4}-\\d{2}-\\d{2}/.");
        }

        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets to_date
     *
     * @return string|null
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param string|null $to_date The last date in the period formatted according to ISO-8601(YYYY-MM-DD).
     *
     * @return self
     */
    public function setToDate($to_date)
    {
        if (is_null($to_date)) {
            throw new \InvalidArgumentException('non-nullable to_date cannot be null');
        }

        if ((!preg_match("/\\d{4}-\\d{2}-\\d{2}/", ObjectSerializer::toString($to_date)))) {
            throw new \InvalidArgumentException("invalid value for \$to_date when calling Period., must conform to the pattern /\\d{4}-\\d{2}-\\d{2}/.");
        }

        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets barred
     *
     * @return bool|null
     */
    public function getBarred()
    {
        return $this->container['barred'];
    }

    /**
     * Sets barred
     *
     * @param bool|null $barred If true this indicates that the accounting period is barred for further transactions.
     *
     * @return self
     */
    public function setBarred($barred)
    {
        if (is_null($barred)) {
            throw new \InvalidArgumentException('non-nullable barred cannot be null');
        }
        $this->container['barred'] = $barred;

        return $this;
    }

    /**
     * Gets closed
     *
     * @return bool|null
     */
    public function getClosed()
    {
        return $this->container['closed'];
    }

    /**
     * Sets closed
     *
     * @param bool|null $closed If true this indicates that the accounting period is within a closed accounting year and no further transaction can be created.
     *
     * @return self
     */
    public function setClosed($closed)
    {
        if (is_null($closed)) {
            throw new \InvalidArgumentException('non-nullable closed cannot be null');
        }
        $this->container['closed'] = $closed;

        return $this;
    }

    /**
     * Gets entries
     *
     * @return string|null
     */
    public function getEntries()
    {
        return $this->container['entries'];
    }

    /**
     * Sets entries
     *
     * @param string|null $entries A link to a collection of all entries booked in the period.
     *
     * @return self
     */
    public function setEntries($entries)
    {
        if (is_null($entries)) {
            throw new \InvalidArgumentException('non-nullable entries cannot be null');
        }
        $this->container['entries'] = $entries;

        return $this;
    }

    /**
     * Gets totals
     *
     * @return string|null
     */
    public function getTotals()
    {
        return $this->container['totals'];
    }

    /**
     * Sets totals
     *
     * @param string|null $totals A link to the chart of accounts with the periods total in base currency.
     *
     * @return self
     */
    public function setTotals($totals)
    {
        if (is_null($totals)) {
            throw new \InvalidArgumentException('non-nullable totals cannot be null');
        }
        $this->container['totals'] = $totals;

        return $this;
    }

    /**
     * Gets self
     *
     * @return string|null
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param string|null $self A unique link reference to the period item.
     *
     * @return self
     */
    public function setSelf($self)
    {
        if (is_null($self)) {
            throw new \InvalidArgumentException('non-nullable self cannot be null');
        }
        $this->container['self'] = $self;

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
        return (string)json_encode(
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


