<?php

/**
 * Adyen Checkout API
 *
 * The version of the OpenAPI document: 71
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Checkout;

use \ArrayAccess;
use Adyen\Model\Checkout\ObjectSerializer;

/**
 * AdditionalDataRatepay Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdditionalDataRatepay implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalDataRatepay';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ratepayInstallmentAmount' => 'string',
        'ratepayInterestRate' => 'string',
        'ratepayLastInstallmentAmount' => 'string',
        'ratepayPaymentFirstday' => 'string',
        'ratepaydataDeliveryDate' => 'string',
        'ratepaydataDueDate' => 'string',
        'ratepaydataInvoiceDate' => 'string',
        'ratepaydataInvoiceId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ratepayInstallmentAmount' => null,
        'ratepayInterestRate' => null,
        'ratepayLastInstallmentAmount' => null,
        'ratepayPaymentFirstday' => null,
        'ratepaydataDeliveryDate' => null,
        'ratepaydataDueDate' => null,
        'ratepaydataInvoiceDate' => null,
        'ratepaydataInvoiceId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'ratepayInstallmentAmount' => false,
        'ratepayInterestRate' => false,
        'ratepayLastInstallmentAmount' => false,
        'ratepayPaymentFirstday' => false,
        'ratepaydataDeliveryDate' => false,
        'ratepaydataDueDate' => false,
        'ratepaydataInvoiceDate' => false,
        'ratepaydataInvoiceId' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
        'ratepayInstallmentAmount' => 'ratepay.installmentAmount',
        'ratepayInterestRate' => 'ratepay.interestRate',
        'ratepayLastInstallmentAmount' => 'ratepay.lastInstallmentAmount',
        'ratepayPaymentFirstday' => 'ratepay.paymentFirstday',
        'ratepaydataDeliveryDate' => 'ratepaydata.deliveryDate',
        'ratepaydataDueDate' => 'ratepaydata.dueDate',
        'ratepaydataInvoiceDate' => 'ratepaydata.invoiceDate',
        'ratepaydataInvoiceId' => 'ratepaydata.invoiceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ratepayInstallmentAmount' => 'setRatepayInstallmentAmount',
        'ratepayInterestRate' => 'setRatepayInterestRate',
        'ratepayLastInstallmentAmount' => 'setRatepayLastInstallmentAmount',
        'ratepayPaymentFirstday' => 'setRatepayPaymentFirstday',
        'ratepaydataDeliveryDate' => 'setRatepaydataDeliveryDate',
        'ratepaydataDueDate' => 'setRatepaydataDueDate',
        'ratepaydataInvoiceDate' => 'setRatepaydataInvoiceDate',
        'ratepaydataInvoiceId' => 'setRatepaydataInvoiceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ratepayInstallmentAmount' => 'getRatepayInstallmentAmount',
        'ratepayInterestRate' => 'getRatepayInterestRate',
        'ratepayLastInstallmentAmount' => 'getRatepayLastInstallmentAmount',
        'ratepayPaymentFirstday' => 'getRatepayPaymentFirstday',
        'ratepaydataDeliveryDate' => 'getRatepaydataDeliveryDate',
        'ratepaydataDueDate' => 'getRatepaydataDueDate',
        'ratepaydataInvoiceDate' => 'getRatepaydataInvoiceDate',
        'ratepaydataInvoiceId' => 'getRatepaydataInvoiceId'
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
        $this->setIfExists('ratepayInstallmentAmount', $data ?? [], null);
        $this->setIfExists('ratepayInterestRate', $data ?? [], null);
        $this->setIfExists('ratepayLastInstallmentAmount', $data ?? [], null);
        $this->setIfExists('ratepayPaymentFirstday', $data ?? [], null);
        $this->setIfExists('ratepaydataDeliveryDate', $data ?? [], null);
        $this->setIfExists('ratepaydataDueDate', $data ?? [], null);
        $this->setIfExists('ratepaydataInvoiceDate', $data ?? [], null);
        $this->setIfExists('ratepaydataInvoiceId', $data ?? [], null);
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
     * Gets ratepayInstallmentAmount
     *
     * @return string|null
     */
    public function getRatepayInstallmentAmount()
    {
        return $this->container['ratepayInstallmentAmount'];
    }

    /**
     * Sets ratepayInstallmentAmount
     *
     * @param string|null $ratepayInstallmentAmount Amount the customer has to pay each month.
     *
     * @return self
     */
    public function setRatepayInstallmentAmount($ratepayInstallmentAmount)
    {
        if (is_null($ratepayInstallmentAmount)) {
            throw new \InvalidArgumentException('non-nullable ratepayInstallmentAmount cannot be null');
        }
        $this->container['ratepayInstallmentAmount'] = $ratepayInstallmentAmount;

        return $this;
    }

    /**
     * Gets ratepayInterestRate
     *
     * @return string|null
     */
    public function getRatepayInterestRate()
    {
        return $this->container['ratepayInterestRate'];
    }

    /**
     * Sets ratepayInterestRate
     *
     * @param string|null $ratepayInterestRate Interest rate of this installment.
     *
     * @return self
     */
    public function setRatepayInterestRate($ratepayInterestRate)
    {
        if (is_null($ratepayInterestRate)) {
            throw new \InvalidArgumentException('non-nullable ratepayInterestRate cannot be null');
        }
        $this->container['ratepayInterestRate'] = $ratepayInterestRate;

        return $this;
    }

    /**
     * Gets ratepayLastInstallmentAmount
     *
     * @return string|null
     */
    public function getRatepayLastInstallmentAmount()
    {
        return $this->container['ratepayLastInstallmentAmount'];
    }

    /**
     * Sets ratepayLastInstallmentAmount
     *
     * @param string|null $ratepayLastInstallmentAmount Amount of the last installment.
     *
     * @return self
     */
    public function setRatepayLastInstallmentAmount($ratepayLastInstallmentAmount)
    {
        if (is_null($ratepayLastInstallmentAmount)) {
            throw new \InvalidArgumentException('non-nullable ratepayLastInstallmentAmount cannot be null');
        }
        $this->container['ratepayLastInstallmentAmount'] = $ratepayLastInstallmentAmount;

        return $this;
    }

    /**
     * Gets ratepayPaymentFirstday
     *
     * @return string|null
     */
    public function getRatepayPaymentFirstday()
    {
        return $this->container['ratepayPaymentFirstday'];
    }

    /**
     * Sets ratepayPaymentFirstday
     *
     * @param string|null $ratepayPaymentFirstday Calendar day of the first payment.
     *
     * @return self
     */
    public function setRatepayPaymentFirstday($ratepayPaymentFirstday)
    {
        if (is_null($ratepayPaymentFirstday)) {
            throw new \InvalidArgumentException('non-nullable ratepayPaymentFirstday cannot be null');
        }
        $this->container['ratepayPaymentFirstday'] = $ratepayPaymentFirstday;

        return $this;
    }

    /**
     * Gets ratepaydataDeliveryDate
     *
     * @return string|null
     */
    public function getRatepaydataDeliveryDate()
    {
        return $this->container['ratepaydataDeliveryDate'];
    }

    /**
     * Sets ratepaydataDeliveryDate
     *
     * @param string|null $ratepaydataDeliveryDate Date the merchant delivered the goods to the customer.
     *
     * @return self
     */
    public function setRatepaydataDeliveryDate($ratepaydataDeliveryDate)
    {
        if (is_null($ratepaydataDeliveryDate)) {
            throw new \InvalidArgumentException('non-nullable ratepaydataDeliveryDate cannot be null');
        }
        $this->container['ratepaydataDeliveryDate'] = $ratepaydataDeliveryDate;

        return $this;
    }

    /**
     * Gets ratepaydataDueDate
     *
     * @return string|null
     */
    public function getRatepaydataDueDate()
    {
        return $this->container['ratepaydataDueDate'];
    }

    /**
     * Sets ratepaydataDueDate
     *
     * @param string|null $ratepaydataDueDate Date by which the customer must settle the payment.
     *
     * @return self
     */
    public function setRatepaydataDueDate($ratepaydataDueDate)
    {
        if (is_null($ratepaydataDueDate)) {
            throw new \InvalidArgumentException('non-nullable ratepaydataDueDate cannot be null');
        }
        $this->container['ratepaydataDueDate'] = $ratepaydataDueDate;

        return $this;
    }

    /**
     * Gets ratepaydataInvoiceDate
     *
     * @return string|null
     */
    public function getRatepaydataInvoiceDate()
    {
        return $this->container['ratepaydataInvoiceDate'];
    }

    /**
     * Sets ratepaydataInvoiceDate
     *
     * @param string|null $ratepaydataInvoiceDate Invoice date, defined by the merchant. If not included, the invoice date is set to the delivery date.
     *
     * @return self
     */
    public function setRatepaydataInvoiceDate($ratepaydataInvoiceDate)
    {
        if (is_null($ratepaydataInvoiceDate)) {
            throw new \InvalidArgumentException('non-nullable ratepaydataInvoiceDate cannot be null');
        }
        $this->container['ratepaydataInvoiceDate'] = $ratepaydataInvoiceDate;

        return $this;
    }

    /**
     * Gets ratepaydataInvoiceId
     *
     * @return string|null
     */
    public function getRatepaydataInvoiceId()
    {
        return $this->container['ratepaydataInvoiceId'];
    }

    /**
     * Sets ratepaydataInvoiceId
     *
     * @param string|null $ratepaydataInvoiceId Identification name or number for the invoice, defined by the merchant.
     *
     * @return self
     */
    public function setRatepaydataInvoiceId($ratepaydataInvoiceId)
    {
        if (is_null($ratepaydataInvoiceId)) {
            throw new \InvalidArgumentException('non-nullable ratepaydataInvoiceId cannot be null');
        }
        $this->container['ratepaydataInvoiceId'] = $ratepaydataInvoiceId;

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
}
