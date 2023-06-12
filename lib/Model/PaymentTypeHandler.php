<?php
/**
 * PaymentTypeHandler
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
 * PaymentTypeHandler Class Doc Comment
 *
 * @category Class
 * @description A specific payment type on the entry.
 * @package  EconomicRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentTypeHandler implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return PaymentTypeHandlerModelFields
      */
    public static function GetModelFields(): PaymentTypeHandlerModelFields
    {
        return new PaymentTypeHandlerModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return PaymentTypeHandlerModelAttributes
      */
    public static function GetModelAttributes(): PaymentTypeHandlerModelAttributes
    {
        return new PaymentTypeHandlerModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentTypeHandler';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_type_number' => 'int',
        'self' => 'string',
        'fi_supplier_no' => 'string',
        'ocr_line' => 'string',
        'message' => 'string',
        'giro_account' => 'string',
        'account_no' => 'string',
        'iban_swift' => 'string',
        'ocr_line_message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payment_type_number' => null,
        'self' => 'uri',
        'fi_supplier_no' => null,
        'ocr_line' => null,
        'message' => null,
        'giro_account' => null,
        'account_no' => null,
        'iban_swift' => null,
        'ocr_line_message' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'payment_type_number' => false,
		'self' => false,
		'fi_supplier_no' => false,
		'ocr_line' => false,
		'message' => false,
		'giro_account' => false,
		'account_no' => false,
		'iban_swift' => false,
		'ocr_line_message' => false
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
        'payment_type_number' => 'paymentTypeNumber',
        'self' => 'self',
        'fi_supplier_no' => 'fiSupplierNo',
        'ocr_line' => 'ocrLine',
        'message' => 'message',
        'giro_account' => 'giroAccount',
        'account_no' => 'accountNo',
        'iban_swift' => 'ibanSwift',
        'ocr_line_message' => 'ocrLineMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_type_number' => 'setPaymentTypeNumber',
        'self' => 'setSelf',
        'fi_supplier_no' => 'setFiSupplierNo',
        'ocr_line' => 'setOcrLine',
        'message' => 'setMessage',
        'giro_account' => 'setGiroAccount',
        'account_no' => 'setAccountNo',
        'iban_swift' => 'setIbanSwift',
        'ocr_line_message' => 'setOcrLineMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_type_number' => 'getPaymentTypeNumber',
        'self' => 'getSelf',
        'fi_supplier_no' => 'getFiSupplierNo',
        'ocr_line' => 'getOcrLine',
        'message' => 'getMessage',
        'giro_account' => 'getGiroAccount',
        'account_no' => 'getAccountNo',
        'iban_swift' => 'getIbanSwift',
        'ocr_line_message' => 'getOcrLineMessage'
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
        $this->setIfExists('payment_type_number', $data ?? [], null);
        $this->setIfExists('self', $data ?? [], null);
        $this->setIfExists('fi_supplier_no', $data ?? [], null);
        $this->setIfExists('ocr_line', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('giro_account', $data ?? [], null);
        $this->setIfExists('account_no', $data ?? [], null);
        $this->setIfExists('iban_swift', $data ?? [], null);
        $this->setIfExists('ocr_line_message', $data ?? [], null);
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

        if (!is_null($this->container['ocr_line']) && (mb_strlen($this->container['ocr_line']) > 16)) {
            $invalidProperties[] = "invalid value for 'ocr_line', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['ocr_line']) && (mb_strlen($this->container['ocr_line']) < 16)) {
            $invalidProperties[] = "invalid value for 'ocr_line', the character length must be bigger than or equal to 16.";
        }

        if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 100)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 5)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 5.";
        }

        if (!is_null($this->container['ocr_line_message']) && (mb_strlen($this->container['ocr_line_message']) > 157)) {
            $invalidProperties[] = "invalid value for 'ocr_line_message', the character length must be smaller than or equal to 157.";
        }

        if (!is_null($this->container['ocr_line_message']) && (mb_strlen($this->container['ocr_line_message']) < 16)) {
            $invalidProperties[] = "invalid value for 'ocr_line_message', the character length must be bigger than or equal to 16.";
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
     * Gets payment_type_number
     *
     * @return int|null
     */
    public function getPaymentTypeNumber()
    {
        return $this->container['payment_type_number'];
    }

    /**
     * Sets payment_type_number
     *
     * @param int|null $payment_type_number The payment type number is a positive unique numerical identifier.
     *
     * @return self
     */
    public function setPaymentTypeNumber($payment_type_number)
    {
        if (is_null($payment_type_number)) {
            throw new \InvalidArgumentException('non-nullable payment_type_number cannot be null');
        }
        $this->container['payment_type_number'] = $payment_type_number;

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
     * @param string|null $self A unique link reference to the payment type item.
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
     * Gets fi_supplier_no
     *
     * @return string|null
     */
    public function getFiSupplierNo()
    {
        return $this->container['fi_supplier_no'];
    }

    /**
     * Sets fi_supplier_no
     *
     * @param string|null $fi_supplier_no fi_supplier_no
     *
     * @return self
     */
    public function setFiSupplierNo($fi_supplier_no)
    {
        if (is_null($fi_supplier_no)) {
            throw new \InvalidArgumentException('non-nullable fi_supplier_no cannot be null');
        }
        $this->container['fi_supplier_no'] = $fi_supplier_no;

        return $this;
    }

    /**
     * Gets ocr_line
     *
     * @return string|null
     */
    public function getOcrLine()
    {
        return $this->container['ocr_line'];
    }

    /**
     * Sets ocr_line
     *
     * @param string|null $ocr_line ocr_line
     *
     * @return self
     */
    public function setOcrLine($ocr_line)
    {
        if (is_null($ocr_line)) {
            throw new \InvalidArgumentException('non-nullable ocr_line cannot be null');
        }
        if ((mb_strlen($ocr_line) > 16)) {
            throw new \InvalidArgumentException('invalid length for $ocr_line when calling PaymentTypeHandler., must be smaller than or equal to 16.');
        }
        if ((mb_strlen($ocr_line) < 16)) {
            throw new \InvalidArgumentException('invalid length for $ocr_line when calling PaymentTypeHandler., must be bigger than or equal to 16.');
        }

        $this->container['ocr_line'] = $ocr_line;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        if ((mb_strlen($message) > 100)) {
            throw new \InvalidArgumentException('invalid length for $message when calling PaymentTypeHandler., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($message) < 5)) {
            throw new \InvalidArgumentException('invalid length for $message when calling PaymentTypeHandler., must be bigger than or equal to 5.');
        }

        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets giro_account
     *
     * @return string|null
     */
    public function getGiroAccount()
    {
        return $this->container['giro_account'];
    }

    /**
     * Sets giro_account
     *
     * @param string|null $giro_account giro_account
     *
     * @return self
     */
    public function setGiroAccount($giro_account)
    {
        if (is_null($giro_account)) {
            throw new \InvalidArgumentException('non-nullable giro_account cannot be null');
        }
        $this->container['giro_account'] = $giro_account;

        return $this;
    }

    /**
     * Gets account_no
     *
     * @return string|null
     */
    public function getAccountNo()
    {
        return $this->container['account_no'];
    }

    /**
     * Sets account_no
     *
     * @param string|null $account_no account_no
     *
     * @return self
     */
    public function setAccountNo($account_no)
    {
        if (is_null($account_no)) {
            throw new \InvalidArgumentException('non-nullable account_no cannot be null');
        }
        $this->container['account_no'] = $account_no;

        return $this;
    }

    /**
     * Gets iban_swift
     *
     * @return string|null
     */
    public function getIbanSwift()
    {
        return $this->container['iban_swift'];
    }

    /**
     * Sets iban_swift
     *
     * @param string|null $iban_swift iban_swift
     *
     * @return self
     */
    public function setIbanSwift($iban_swift)
    {
        if (is_null($iban_swift)) {
            throw new \InvalidArgumentException('non-nullable iban_swift cannot be null');
        }
        $this->container['iban_swift'] = $iban_swift;

        return $this;
    }

    /**
     * Gets ocr_line_message
     *
     * @return string|null
     */
    public function getOcrLineMessage()
    {
        return $this->container['ocr_line_message'];
    }

    /**
     * Sets ocr_line_message
     *
     * @param string|null $ocr_line_message ocr_line_message
     *
     * @return self
     */
    public function setOcrLineMessage($ocr_line_message)
    {
        if (is_null($ocr_line_message)) {
            throw new \InvalidArgumentException('non-nullable ocr_line_message cannot be null');
        }
        if ((mb_strlen($ocr_line_message) > 157)) {
            throw new \InvalidArgumentException('invalid length for $ocr_line_message when calling PaymentTypeHandler., must be smaller than or equal to 157.');
        }
        if ((mb_strlen($ocr_line_message) < 16)) {
            throw new \InvalidArgumentException('invalid length for $ocr_line_message when calling PaymentTypeHandler., must be bigger than or equal to 16.');
        }

        $this->container['ocr_line_message'] = $ocr_line_message;

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


