<?php
/**
 * Entry
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
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
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
 * Entry Class Doc Comment
 *
 * @category Class
 * @description A specific entry in the accounting year.
 * @package  EconomicRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Entry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return EntryModelFields
      */
    public static function GetModelFields(): EntryModelFields
    {
        return new EntryModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return EntryModelAttributes
      */
    public static function GetModelAttributes(): EntryModelAttributes
    {
        return new EntryModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Entry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account' => '\EconomicRest\Model\AccountHandler',
        'amount' => 'float',
        'supplier_invoice_number' => 'string',
        'amount_in_base_currency' => 'float',
        'currency' => 'string',
        'date' => 'string',
        'entry_number' => 'int',
        'text' => 'string',
        'entry_type' => 'string',
        'voucher_number' => 'int',
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
        'account' => null,
        'amount' => null,
        'supplier_invoice_number' => null,
        'amount_in_base_currency' => null,
        'currency' => null,
        'date' => 'full-date',
        'entry_number' => null,
        'text' => null,
        'entry_type' => null,
        'voucher_number' => null,
        'self' => 'uri'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account' => false,
		'amount' => false,
		'supplier_invoice_number' => false,
		'amount_in_base_currency' => false,
		'currency' => false,
		'date' => false,
		'entry_number' => false,
		'text' => false,
		'entry_type' => false,
		'voucher_number' => false,
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
        'account' => 'account',
        'amount' => 'amount',
        'supplier_invoice_number' => 'supplierInvoiceNumber',
        'amount_in_base_currency' => 'amountInBaseCurrency',
        'currency' => 'currency',
        'date' => 'date',
        'entry_number' => 'entryNumber',
        'text' => 'text',
        'entry_type' => 'entryType',
        'voucher_number' => 'voucherNumber',
        'self' => 'self'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'amount' => 'setAmount',
        'supplier_invoice_number' => 'setSupplierInvoiceNumber',
        'amount_in_base_currency' => 'setAmountInBaseCurrency',
        'currency' => 'setCurrency',
        'date' => 'setDate',
        'entry_number' => 'setEntryNumber',
        'text' => 'setText',
        'entry_type' => 'setEntryType',
        'voucher_number' => 'setVoucherNumber',
        'self' => 'setSelf'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'amount' => 'getAmount',
        'supplier_invoice_number' => 'getSupplierInvoiceNumber',
        'amount_in_base_currency' => 'getAmountInBaseCurrency',
        'currency' => 'getCurrency',
        'date' => 'getDate',
        'entry_number' => 'getEntryNumber',
        'text' => 'getText',
        'entry_type' => 'getEntryType',
        'voucher_number' => 'getVoucherNumber',
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

    public const ENTRY_TYPE_CUSTOMER_INVOICE = 'customerInvoice';
    public const ENTRY_TYPE_CUSTOMER_PAYMENT = 'customerPayment';
    public const ENTRY_TYPE_SUPPLIER_INVOICE = 'supplierInvoice';
    public const ENTRY_TYPE_SUPPLIER_PAYMENT = 'supplierPayment';
    public const ENTRY_TYPE_FINANCE_VOUCHER = 'financeVoucher';
    public const ENTRY_TYPE_REMINDER = 'reminder';
    public const ENTRY_TYPE_OPENING_ENTRY = 'openingEntry';
    public const ENTRY_TYPE_TRANSFERRED_OPENING_ENTRY = 'transferredOpeningEntry';
    public const ENTRY_TYPE_SYSTEM_ENTRY = 'systemEntry';
    public const ENTRY_TYPE_MANUAL_DEBTOR_INVOICE = 'manualDebtorInvoice';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEntryTypeAllowableValues()
    {
        return [
            self::ENTRY_TYPE_CUSTOMER_INVOICE,
            self::ENTRY_TYPE_CUSTOMER_PAYMENT,
            self::ENTRY_TYPE_SUPPLIER_INVOICE,
            self::ENTRY_TYPE_SUPPLIER_PAYMENT,
            self::ENTRY_TYPE_FINANCE_VOUCHER,
            self::ENTRY_TYPE_REMINDER,
            self::ENTRY_TYPE_OPENING_ENTRY,
            self::ENTRY_TYPE_TRANSFERRED_OPENING_ENTRY,
            self::ENTRY_TYPE_SYSTEM_ENTRY,
            self::ENTRY_TYPE_MANUAL_DEBTOR_INVOICE,
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
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('supplier_invoice_number', $data ?? [], null);
        $this->setIfExists('amount_in_base_currency', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('entry_number', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('entry_type', $data ?? [], null);
        $this->setIfExists('voucher_number', $data ?? [], null);
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

        if (!is_null($this->container['currency']) && !preg_match("/[a-zA-Z]{3}/", $this->container['currency'])) {
            $invalidProperties[] = "invalid value for 'currency', must be conform to the pattern /[a-zA-Z]{3}/.";
        }

        if (!is_null($this->container['date']) && !preg_match("/\\d{4}-\\d{2}-\\d{2}/", $this->container['date'])) {
            $invalidProperties[] = "invalid value for 'date', must be conform to the pattern /\\d{4}-\\d{2}-\\d{2}/.";
        }

        if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) > 255)) {
            $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 255.";
        }

        $allowedValues = $this->getEntryTypeAllowableValues();
        if (!is_null($this->container['entry_type']) && !in_array($this->container['entry_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'entry_type', must be one of '%s'",
                $this->container['entry_type'],
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
     * Gets account
     *
     * @return \EconomicRest\Model\AccountHandler|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \EconomicRest\Model\AccountHandler|null $account account
     *
     * @return self
     */
    public function setAccount($account)
    {
        if (is_null($account)) {
            throw new \InvalidArgumentException('non-nullable account cannot be null');
        }
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount The total entry amount.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets supplier_invoice_number
     *
     * @return string|null
     */
    public function getSupplierInvoiceNumber()
    {
        return $this->container['supplier_invoice_number'];
    }

    /**
     * Sets supplier_invoice_number
     *
     * @param string|null $supplier_invoice_number A unique identifier of the supplier invoice.
     *
     * @return self
     */
    public function setSupplierInvoiceNumber($supplier_invoice_number)
    {
        if (is_null($supplier_invoice_number)) {
            throw new \InvalidArgumentException('non-nullable supplier_invoice_number cannot be null');
        }
        $this->container['supplier_invoice_number'] = $supplier_invoice_number;

        return $this;
    }

    /**
     * Gets amount_in_base_currency
     *
     * @return float|null
     */
    public function getAmountInBaseCurrency()
    {
        return $this->container['amount_in_base_currency'];
    }

    /**
     * Sets amount_in_base_currency
     *
     * @param float|null $amount_in_base_currency The total entry amount in base currency.
     *
     * @return self
     */
    public function setAmountInBaseCurrency($amount_in_base_currency)
    {
        if (is_null($amount_in_base_currency)) {
            throw new \InvalidArgumentException('non-nullable amount_in_base_currency cannot be null');
        }
        $this->container['amount_in_base_currency'] = $amount_in_base_currency;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The ISO 4217 currency code of the entry.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }

        if ((!preg_match("/[a-zA-Z]{3}/", $currency))) {
            throw new \InvalidArgumentException("invalid value for \$currency when calling Entry., must conform to the pattern /[a-zA-Z]{3}/.");
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string|null $date Entry issue date. The date is formatted according to ISO-8601(YYYY-MM-DD).
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }

        if ((!preg_match("/\\d{4}-\\d{2}-\\d{2}/", $date))) {
            throw new \InvalidArgumentException("invalid value for \$date when calling Entry., must conform to the pattern /\\d{4}-\\d{2}-\\d{2}/.");
        }

        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets entry_number
     *
     * @return int|null
     */
    public function getEntryNumber()
    {
        return $this->container['entry_number'];
    }

    /**
     * Sets entry_number
     *
     * @param int|null $entry_number The unique identifier of the entry line.
     *
     * @return self
     */
    public function setEntryNumber($entry_number)
    {
        if (is_null($entry_number)) {
            throw new \InvalidArgumentException('non-nullable entry_number cannot be null');
        }
        $this->container['entry_number'] = $entry_number;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text A short description about the entry.
     *
     * @return self
     */
    public function setText($text)
    {
        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }
        if ((mb_strlen($text) > 255)) {
            throw new \InvalidArgumentException('invalid length for $text when calling Entry., must be smaller than or equal to 255.');
        }

        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets entry_type
     *
     * @return string|null
     */
    public function getEntryType()
    {
        return $this->container['entry_type'];
    }

    /**
     * Sets entry_type
     *
     * @param string|null $entry_type The type of entry.
     *
     * @return self
     */
    public function setEntryType($entry_type)
    {
        if (is_null($entry_type)) {
            throw new \InvalidArgumentException('non-nullable entry_type cannot be null');
        }
        $allowedValues = $this->getEntryTypeAllowableValues();
        if (!in_array($entry_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'entry_type', must be one of '%s'",
                    $entry_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['entry_type'] = $entry_type;

        return $this;
    }

    /**
     * Gets voucher_number
     *
     * @return int|null
     */
    public function getVoucherNumber()
    {
        return $this->container['voucher_number'];
    }

    /**
     * Sets voucher_number
     *
     * @param int|null $voucher_number The identifier of the voucher this entry belongs to.
     *
     * @return self
     */
    public function setVoucherNumber($voucher_number)
    {
        if (is_null($voucher_number)) {
            throw new \InvalidArgumentException('non-nullable voucher_number cannot be null');
        }
        $this->container['voucher_number'] = $voucher_number;

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
     * @param string|null $self A unique reference to the entry resource.
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


