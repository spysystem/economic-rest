<?php
/**
 * CustomerPaymentEntry
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
 * CustomerPaymentEntry Class Doc Comment
 *
 * @category Class
 * @description Customer Payment entry.
 * @package  EconomicRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerPaymentEntry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return CustomerPaymentEntryModelFields
      */
    public static function GetModelFields(): CustomerPaymentEntryModelFields
    {
        return new CustomerPaymentEntryModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return CustomerPaymentEntryModelAttributes
      */
    public static function GetModelAttributes(): CustomerPaymentEntryModelAttributes
    {
        return new CustomerPaymentEntryModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerPaymentEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'text' => 'string',
        'journal' => '\EconomicRest\Model\JournalHandler',
        'amount' => 'float',
        'contra_account' => '\EconomicRest\Model\AccountHandler',
        'contra_vat_account' => '\EconomicRest\Model\VatCodeHandler',
        'currency' => '\EconomicRest\Model\CurrencyHandler',
        'date' => 'string',
        'departmental_distribution' => '\EconomicRest\Model\DepartmentalDistributionHandler',
        'exchange_rate' => 'float',
        'entry_type' => 'string',
        'voucher' => '\EconomicRest\Model\VoucherHandler',
        'contra_vat_amount' => 'float',
        'contra_vat_amount_in_base_currency' => 'float',
        'amount_base_currency' => 'float',
        'remainder' => 'float',
        'remainder_in_default_currency' => 'float',
        'customer' => '\EconomicRest\Model\CustomerHandler',
        'customer_invoice' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'text' => null,
        'journal' => null,
        'amount' => null,
        'contra_account' => null,
        'contra_vat_account' => null,
        'currency' => null,
        'date' => 'full-date',
        'departmental_distribution' => null,
        'exchange_rate' => null,
        'entry_type' => null,
        'voucher' => null,
        'contra_vat_amount' => null,
        'contra_vat_amount_in_base_currency' => null,
        'amount_base_currency' => null,
        'remainder' => null,
        'remainder_in_default_currency' => null,
        'customer' => null,
        'customer_invoice' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'text' => false,
		'journal' => false,
		'amount' => false,
		'contra_account' => false,
		'contra_vat_account' => false,
		'currency' => false,
		'date' => false,
		'departmental_distribution' => false,
		'exchange_rate' => false,
		'entry_type' => false,
		'voucher' => false,
		'contra_vat_amount' => false,
		'contra_vat_amount_in_base_currency' => false,
		'amount_base_currency' => false,
		'remainder' => false,
		'remainder_in_default_currency' => false,
		'customer' => false,
		'customer_invoice' => false
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
        'text' => 'text',
        'journal' => 'journal',
        'amount' => 'amount',
        'contra_account' => 'contraAccount',
        'contra_vat_account' => 'contraVatAccount',
        'currency' => 'currency',
        'date' => 'date',
        'departmental_distribution' => 'departmentalDistribution',
        'exchange_rate' => 'exchangeRate',
        'entry_type' => 'entryType',
        'voucher' => 'voucher',
        'contra_vat_amount' => 'contraVatAmount',
        'contra_vat_amount_in_base_currency' => 'contraVatAmountInBaseCurrency',
        'amount_base_currency' => 'amountBaseCurrency',
        'remainder' => 'remainder',
        'remainder_in_default_currency' => 'remainderInDefaultCurrency',
        'customer' => 'customer',
        'customer_invoice' => 'customerInvoice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'journal' => 'setJournal',
        'amount' => 'setAmount',
        'contra_account' => 'setContraAccount',
        'contra_vat_account' => 'setContraVatAccount',
        'currency' => 'setCurrency',
        'date' => 'setDate',
        'departmental_distribution' => 'setDepartmentalDistribution',
        'exchange_rate' => 'setExchangeRate',
        'entry_type' => 'setEntryType',
        'voucher' => 'setVoucher',
        'contra_vat_amount' => 'setContraVatAmount',
        'contra_vat_amount_in_base_currency' => 'setContraVatAmountInBaseCurrency',
        'amount_base_currency' => 'setAmountBaseCurrency',
        'remainder' => 'setRemainder',
        'remainder_in_default_currency' => 'setRemainderInDefaultCurrency',
        'customer' => 'setCustomer',
        'customer_invoice' => 'setCustomerInvoice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'journal' => 'getJournal',
        'amount' => 'getAmount',
        'contra_account' => 'getContraAccount',
        'contra_vat_account' => 'getContraVatAccount',
        'currency' => 'getCurrency',
        'date' => 'getDate',
        'departmental_distribution' => 'getDepartmentalDistribution',
        'exchange_rate' => 'getExchangeRate',
        'entry_type' => 'getEntryType',
        'voucher' => 'getVoucher',
        'contra_vat_amount' => 'getContraVatAmount',
        'contra_vat_amount_in_base_currency' => 'getContraVatAmountInBaseCurrency',
        'amount_base_currency' => 'getAmountBaseCurrency',
        'remainder' => 'getRemainder',
        'remainder_in_default_currency' => 'getRemainderInDefaultCurrency',
        'customer' => 'getCustomer',
        'customer_invoice' => 'getCustomerInvoice'
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

    public const ENTRY_TYPE_CUSTOMER_PAYMENT = 'customerPayment';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEntryTypeAllowableValues()
    {
        return [
            self::ENTRY_TYPE_CUSTOMER_PAYMENT,
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
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('journal', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('contra_account', $data ?? [], null);
        $this->setIfExists('contra_vat_account', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('departmental_distribution', $data ?? [], null);
        $this->setIfExists('exchange_rate', $data ?? [], null);
        $this->setIfExists('entry_type', $data ?? [], null);
        $this->setIfExists('voucher', $data ?? [], null);
        $this->setIfExists('contra_vat_amount', $data ?? [], null);
        $this->setIfExists('contra_vat_amount_in_base_currency', $data ?? [], null);
        $this->setIfExists('amount_base_currency', $data ?? [], null);
        $this->setIfExists('remainder', $data ?? [], null);
        $this->setIfExists('remainder_in_default_currency', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('customer_invoice', $data ?? [], null);
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

        if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) > 250)) {
            $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['date']) && !preg_match("/\\d{4}-\\d{2}-\\d{2}/", $this->container['date'])) {
            $invalidProperties[] = "invalid value for 'date', must be conform to the pattern /\\d{4}-\\d{2}-\\d{2}/.";
        }

        $allowedValues = $this->getEntryTypeAllowableValues();
        if (!is_null($this->container['entry_type']) && !in_array($this->container['entry_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'entry_type', must be one of '%s'",
                $this->container['entry_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['customer_invoice']) && ($this->container['customer_invoice'] < 1)) {
            $invalidProperties[] = "invalid value for 'customer_invoice', must be bigger than or equal to 1.";
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
     * @param string|null $text Entry description.
     *
     * @return self
     */
    public function setText($text)
    {
        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }
        if ((mb_strlen($text) > 250)) {
            throw new \InvalidArgumentException('invalid length for $text when calling CustomerPaymentEntry., must be smaller than or equal to 250.');
        }

        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets journal
     *
     * @return \EconomicRest\Model\JournalHandler|null
     */
    public function getJournal()
    {
        return $this->container['journal'];
    }

    /**
     * Sets journal
     *
     * @param \EconomicRest\Model\JournalHandler|null $journal journal
     *
     * @return self
     */
    public function setJournal($journal)
    {
        if (is_null($journal)) {
            throw new \InvalidArgumentException('non-nullable journal cannot be null');
        }
        $this->container['journal'] = $journal;

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
     * @param float|null $amount amount
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
     * Gets contra_account
     *
     * @return \EconomicRest\Model\AccountHandler|null
     */
    public function getContraAccount()
    {
        return $this->container['contra_account'];
    }

    /**
     * Sets contra_account
     *
     * @param \EconomicRest\Model\AccountHandler|null $contra_account contra_account
     *
     * @return self
     */
    public function setContraAccount($contra_account)
    {
        if (is_null($contra_account)) {
            throw new \InvalidArgumentException('non-nullable contra_account cannot be null');
        }
        $this->container['contra_account'] = $contra_account;

        return $this;
    }

    /**
     * Gets contra_vat_account
     *
     * @return \EconomicRest\Model\VatCodeHandler|null
     */
    public function getContraVatAccount()
    {
        return $this->container['contra_vat_account'];
    }

    /**
     * Sets contra_vat_account
     *
     * @param \EconomicRest\Model\VatCodeHandler|null $contra_vat_account contra_vat_account
     *
     * @return self
     */
    public function setContraVatAccount($contra_vat_account)
    {
        if (is_null($contra_vat_account)) {
            throw new \InvalidArgumentException('non-nullable contra_vat_account cannot be null');
        }
        $this->container['contra_vat_account'] = $contra_vat_account;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \EconomicRest\Model\CurrencyHandler|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \EconomicRest\Model\CurrencyHandler|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
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
     * @param string|null $date Entry date. Format according to ISO-8601 (YYYY-MM-DD).
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }

        if ((!preg_match("/\\d{4}-\\d{2}-\\d{2}/", $date))) {
            throw new \InvalidArgumentException("invalid value for \$date when calling CustomerPaymentEntry., must conform to the pattern /\\d{4}-\\d{2}-\\d{2}/.");
        }

        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets departmental_distribution
     *
     * @return \EconomicRest\Model\DepartmentalDistributionHandler|null
     */
    public function getDepartmentalDistribution()
    {
        return $this->container['departmental_distribution'];
    }

    /**
     * Sets departmental_distribution
     *
     * @param \EconomicRest\Model\DepartmentalDistributionHandler|null $departmental_distribution departmental_distribution
     *
     * @return self
     */
    public function setDepartmentalDistribution($departmental_distribution)
    {
        if (is_null($departmental_distribution)) {
            throw new \InvalidArgumentException('non-nullable departmental_distribution cannot be null');
        }
        $this->container['departmental_distribution'] = $departmental_distribution;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return float|null
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param float|null $exchange_rate The exchange rate between the base currency and the invoice currency.
     *
     * @return self
     */
    public function setExchangeRate($exchange_rate)
    {
        if (is_null($exchange_rate)) {
            throw new \InvalidArgumentException('non-nullable exchange_rate cannot be null');
        }
        $this->container['exchange_rate'] = $exchange_rate;

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
     * @param string|null $entry_type Type of the journal entry. This is automatically set to customerPayment.
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
     * Gets voucher
     *
     * @return \EconomicRest\Model\VoucherHandler|null
     */
    public function getVoucher()
    {
        return $this->container['voucher'];
    }

    /**
     * Sets voucher
     *
     * @param \EconomicRest\Model\VoucherHandler|null $voucher voucher
     *
     * @return self
     */
    public function setVoucher($voucher)
    {
        if (is_null($voucher)) {
            throw new \InvalidArgumentException('non-nullable voucher cannot be null');
        }
        $this->container['voucher'] = $voucher;

        return $this;
    }

    /**
     * Gets contra_vat_amount
     *
     * @return float|null
     */
    public function getContraVatAmount()
    {
        return $this->container['contra_vat_amount'];
    }

    /**
     * Sets contra_vat_amount
     *
     * @param float|null $contra_vat_amount The amount of VAT on the entry on the contra account.
     *
     * @return self
     */
    public function setContraVatAmount($contra_vat_amount)
    {
        if (is_null($contra_vat_amount)) {
            throw new \InvalidArgumentException('non-nullable contra_vat_amount cannot be null');
        }
        $this->container['contra_vat_amount'] = $contra_vat_amount;

        return $this;
    }

    /**
     * Gets contra_vat_amount_in_base_currency
     *
     * @return float|null
     */
    public function getContraVatAmountInBaseCurrency()
    {
        return $this->container['contra_vat_amount_in_base_currency'];
    }

    /**
     * Sets contra_vat_amount_in_base_currency
     *
     * @param float|null $contra_vat_amount_in_base_currency The amount of VAT on the entry on the contra account in base currency.
     *
     * @return self
     */
    public function setContraVatAmountInBaseCurrency($contra_vat_amount_in_base_currency)
    {
        if (is_null($contra_vat_amount_in_base_currency)) {
            throw new \InvalidArgumentException('non-nullable contra_vat_amount_in_base_currency cannot be null');
        }
        $this->container['contra_vat_amount_in_base_currency'] = $contra_vat_amount_in_base_currency;

        return $this;
    }

    /**
     * Gets amount_base_currency
     *
     * @return float|null
     */
    public function getAmountBaseCurrency()
    {
        return $this->container['amount_base_currency'];
    }

    /**
     * Sets amount_base_currency
     *
     * @param float|null $amount_base_currency The amount in base currency.
     *
     * @return self
     */
    public function setAmountBaseCurrency($amount_base_currency)
    {
        if (is_null($amount_base_currency)) {
            throw new \InvalidArgumentException('non-nullable amount_base_currency cannot be null');
        }
        $this->container['amount_base_currency'] = $amount_base_currency;

        return $this;
    }

    /**
     * Gets remainder
     *
     * @return float|null
     */
    public function getRemainder()
    {
        return $this->container['remainder'];
    }

    /**
     * Sets remainder
     *
     * @param float|null $remainder Remaining amount to be paid.
     *
     * @return self
     */
    public function setRemainder($remainder)
    {
        if (is_null($remainder)) {
            throw new \InvalidArgumentException('non-nullable remainder cannot be null');
        }
        $this->container['remainder'] = $remainder;

        return $this;
    }

    /**
     * Gets remainder_in_default_currency
     *
     * @return float|null
     */
    public function getRemainderInDefaultCurrency()
    {
        return $this->container['remainder_in_default_currency'];
    }

    /**
     * Sets remainder_in_default_currency
     *
     * @param float|null $remainder_in_default_currency Remaining amount to be paid in default currency.
     *
     * @return self
     */
    public function setRemainderInDefaultCurrency($remainder_in_default_currency)
    {
        if (is_null($remainder_in_default_currency)) {
            throw new \InvalidArgumentException('non-nullable remainder_in_default_currency cannot be null');
        }
        $this->container['remainder_in_default_currency'] = $remainder_in_default_currency;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \EconomicRest\Model\CustomerHandler|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \EconomicRest\Model\CustomerHandler|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets customer_invoice
     *
     * @return int|null
     */
    public function getCustomerInvoice()
    {
        return $this->container['customer_invoice'];
    }

    /**
     * Sets customer_invoice
     *
     * @param int|null $customer_invoice Customer invoice number.
     *
     * @return self
     */
    public function setCustomerInvoice($customer_invoice)
    {
        if (is_null($customer_invoice)) {
            throw new \InvalidArgumentException('non-nullable customer_invoice cannot be null');
        }

        if (($customer_invoice < 1)) {
            throw new \InvalidArgumentException('invalid value for $customer_invoice when calling CustomerPaymentEntry., must be bigger than or equal to 1.');
        }

        $this->container['customer_invoice'] = $customer_invoice;

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


