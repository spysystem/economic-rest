<?php
/**
 * Pagination
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
 * Pagination Class Doc Comment
 *
 * @category Class
 * @package  EconomicRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Pagination implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return PaginationModelFields
      */
    public static function GetModelFields(): PaginationModelFields
    {
        return new PaginationModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return PaginationModelAttributes
      */
    public static function GetModelAttributes(): PaginationModelAttributes
    {
        return new PaginationModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pagination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'max_page_size_allowed' => 'int',
        'skip_pages' => 'int',
        'page_size' => 'int',
        'results' => 'int',
        'results_without_filter' => 'int',
        'first_page' => 'string',
        'next_page' => 'string',
        'last_page' => 'string',
        'developer_hint' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'max_page_size_allowed' => null,
        'skip_pages' => null,
        'page_size' => null,
        'results' => null,
        'results_without_filter' => null,
        'first_page' => null,
        'next_page' => null,
        'last_page' => null,
        'developer_hint' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'max_page_size_allowed' => false,
        'skip_pages' => false,
        'page_size' => false,
        'results' => false,
        'results_without_filter' => false,
        'first_page' => false,
        'next_page' => false,
        'last_page' => false,
        'developer_hint' => false
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
        'max_page_size_allowed' => 'maxPageSizeAllowed',
        'skip_pages' => 'skipPages',
        'page_size' => 'pageSize',
        'results' => 'results',
        'results_without_filter' => 'resultsWithoutFilter',
        'first_page' => 'firstPage',
        'next_page' => 'nextPage',
        'last_page' => 'lastPage',
        'developer_hint' => 'developerHint'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_page_size_allowed' => 'setMaxPageSizeAllowed',
        'skip_pages' => 'setSkipPages',
        'page_size' => 'setPageSize',
        'results' => 'setResults',
        'results_without_filter' => 'setResultsWithoutFilter',
        'first_page' => 'setFirstPage',
        'next_page' => 'setNextPage',
        'last_page' => 'setLastPage',
        'developer_hint' => 'setDeveloperHint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_page_size_allowed' => 'getMaxPageSizeAllowed',
        'skip_pages' => 'getSkipPages',
        'page_size' => 'getPageSize',
        'results' => 'getResults',
        'results_without_filter' => 'getResultsWithoutFilter',
        'first_page' => 'getFirstPage',
        'next_page' => 'getNextPage',
        'last_page' => 'getLastPage',
        'developer_hint' => 'getDeveloperHint'
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
        $this->setIfExists('max_page_size_allowed', $data ?? [], null);
        $this->setIfExists('skip_pages', $data ?? [], null);
        $this->setIfExists('page_size', $data ?? [], null);
        $this->setIfExists('results', $data ?? [], null);
        $this->setIfExists('results_without_filter', $data ?? [], null);
        $this->setIfExists('first_page', $data ?? [], null);
        $this->setIfExists('next_page', $data ?? [], null);
        $this->setIfExists('last_page', $data ?? [], null);
        $this->setIfExists('developer_hint', $data ?? [], null);
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

        if ($this->container['max_page_size_allowed'] === null) {
            $invalidProperties[] = "'max_page_size_allowed' can't be null";
        }
        if ($this->container['skip_pages'] === null) {
            $invalidProperties[] = "'skip_pages' can't be null";
        }
        if ($this->container['page_size'] === null) {
            $invalidProperties[] = "'page_size' can't be null";
        }
        if ($this->container['results'] === null) {
            $invalidProperties[] = "'results' can't be null";
        }
        if ($this->container['results_without_filter'] === null) {
            $invalidProperties[] = "'results_without_filter' can't be null";
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
     * Gets max_page_size_allowed
     *
     * @return int
     */
    public function getMaxPageSizeAllowed()
    {
        return $this->container['max_page_size_allowed'];
    }

    /**
     * Sets max_page_size_allowed
     *
     * @param int $max_page_size_allowed max_page_size_allowed
     *
     * @return self
     */
    public function setMaxPageSizeAllowed($max_page_size_allowed)
    {
        if (is_null($max_page_size_allowed)) {
            throw new \InvalidArgumentException('non-nullable max_page_size_allowed cannot be null');
        }
        $this->container['max_page_size_allowed'] = $max_page_size_allowed;

        return $this;
    }

    /**
     * Gets skip_pages
     *
     * @return int
     */
    public function getSkipPages()
    {
        return $this->container['skip_pages'];
    }

    /**
     * Sets skip_pages
     *
     * @param int $skip_pages skip_pages
     *
     * @return self
     */
    public function setSkipPages($skip_pages)
    {
        if (is_null($skip_pages)) {
            throw new \InvalidArgumentException('non-nullable skip_pages cannot be null');
        }
        $this->container['skip_pages'] = $skip_pages;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size page_size
     *
     * @return self
     */
    public function setPageSize($page_size)
    {
        if (is_null($page_size)) {
            throw new \InvalidArgumentException('non-nullable page_size cannot be null');
        }
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets results
     *
     * @return int
     */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
     * Sets results
     *
     * @param int $results results
     *
     * @return self
     */
    public function setResults($results)
    {
        if (is_null($results)) {
            throw new \InvalidArgumentException('non-nullable results cannot be null');
        }
        $this->container['results'] = $results;

        return $this;
    }

    /**
     * Gets results_without_filter
     *
     * @return int
     */
    public function getResultsWithoutFilter()
    {
        return $this->container['results_without_filter'];
    }

    /**
     * Sets results_without_filter
     *
     * @param int $results_without_filter results_without_filter
     *
     * @return self
     */
    public function setResultsWithoutFilter($results_without_filter)
    {
        if (is_null($results_without_filter)) {
            throw new \InvalidArgumentException('non-nullable results_without_filter cannot be null');
        }
        $this->container['results_without_filter'] = $results_without_filter;

        return $this;
    }

    /**
     * Gets first_page
     *
     * @return string|null
     */
    public function getFirstPage()
    {
        return $this->container['first_page'];
    }

    /**
     * Sets first_page
     *
     * @param string|null $first_page first_page
     *
     * @return self
     */
    public function setFirstPage($first_page)
    {
        if (is_null($first_page)) {
            throw new \InvalidArgumentException('non-nullable first_page cannot be null');
        }
        $this->container['first_page'] = $first_page;

        return $this;
    }

    /**
     * Gets next_page
     *
     * @return string|null
     */
    public function getNextPage()
    {
        return $this->container['next_page'];
    }

    /**
     * Sets next_page
     *
     * @param string|null $next_page next_page
     *
     * @return self
     */
    public function setNextPage($next_page)
    {
        if (is_null($next_page)) {
            throw new \InvalidArgumentException('non-nullable next_page cannot be null');
        }
        $this->container['next_page'] = $next_page;

        return $this;
    }

    /**
     * Gets last_page
     *
     * @return string|null
     */
    public function getLastPage()
    {
        return $this->container['last_page'];
    }

    /**
     * Sets last_page
     *
     * @param string|null $last_page last_page
     *
     * @return self
     */
    public function setLastPage($last_page)
    {
        if (is_null($last_page)) {
            throw new \InvalidArgumentException('non-nullable last_page cannot be null');
        }
        $this->container['last_page'] = $last_page;

        return $this;
    }

    /**
     * Gets developer_hint
     *
     * @return string|null
     */
    public function getDeveloperHint()
    {
        return $this->container['developer_hint'];
    }

    /**
     * Sets developer_hint
     *
     * @param string|null $developer_hint developer_hint
     *
     * @return self
     */
    public function setDeveloperHint($developer_hint)
    {
        if (is_null($developer_hint)) {
            throw new \InvalidArgumentException('non-nullable developer_hint cannot be null');
        }
        $this->container['developer_hint'] = $developer_hint;

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


