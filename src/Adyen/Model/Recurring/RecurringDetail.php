<?php

/**
 * Adyen Recurring API
 *
 * The version of the OpenAPI document: 68
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Recurring;

use \ArrayAccess;
use Adyen\Model\Recurring\ObjectSerializer;

/**
 * RecurringDetail Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RecurringDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RecurringDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additionalData' => 'array<string,string>',
        'alias' => 'string',
        'aliasType' => 'string',
        'bank' => '\Adyen\Model\Recurring\BankAccount',
        'billingAddress' => '\Adyen\Model\Recurring\Address',
        'card' => '\Adyen\Model\Recurring\Card',
        'contractTypes' => 'string[]',
        'creationDate' => '\DateTime',
        'firstPspReference' => 'string',
        'name' => 'string',
        'networkTxReference' => 'string',
        'paymentMethodVariant' => 'string',
        'recurringDetailReference' => 'string',
        'shopperName' => '\Adyen\Model\Recurring\Name',
        'socialSecurityNumber' => 'string',
        'tokenDetails' => '\Adyen\Model\Recurring\TokenDetails',
        'variant' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additionalData' => null,
        'alias' => null,
        'aliasType' => null,
        'bank' => null,
        'billingAddress' => null,
        'card' => null,
        'contractTypes' => null,
        'creationDate' => 'date-time',
        'firstPspReference' => null,
        'name' => null,
        'networkTxReference' => null,
        'paymentMethodVariant' => null,
        'recurringDetailReference' => null,
        'shopperName' => null,
        'socialSecurityNumber' => null,
        'tokenDetails' => null,
        'variant' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'additionalData' => false,
        'alias' => false,
        'aliasType' => false,
        'bank' => false,
        'billingAddress' => false,
        'card' => false,
        'contractTypes' => false,
        'creationDate' => false,
        'firstPspReference' => false,
        'name' => false,
        'networkTxReference' => false,
        'paymentMethodVariant' => false,
        'recurringDetailReference' => false,
        'shopperName' => false,
        'socialSecurityNumber' => false,
        'tokenDetails' => false,
        'variant' => false
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
        'additionalData' => 'additionalData',
        'alias' => 'alias',
        'aliasType' => 'aliasType',
        'bank' => 'bank',
        'billingAddress' => 'billingAddress',
        'card' => 'card',
        'contractTypes' => 'contractTypes',
        'creationDate' => 'creationDate',
        'firstPspReference' => 'firstPspReference',
        'name' => 'name',
        'networkTxReference' => 'networkTxReference',
        'paymentMethodVariant' => 'paymentMethodVariant',
        'recurringDetailReference' => 'recurringDetailReference',
        'shopperName' => 'shopperName',
        'socialSecurityNumber' => 'socialSecurityNumber',
        'tokenDetails' => 'tokenDetails',
        'variant' => 'variant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additionalData' => 'setAdditionalData',
        'alias' => 'setAlias',
        'aliasType' => 'setAliasType',
        'bank' => 'setBank',
        'billingAddress' => 'setBillingAddress',
        'card' => 'setCard',
        'contractTypes' => 'setContractTypes',
        'creationDate' => 'setCreationDate',
        'firstPspReference' => 'setFirstPspReference',
        'name' => 'setName',
        'networkTxReference' => 'setNetworkTxReference',
        'paymentMethodVariant' => 'setPaymentMethodVariant',
        'recurringDetailReference' => 'setRecurringDetailReference',
        'shopperName' => 'setShopperName',
        'socialSecurityNumber' => 'setSocialSecurityNumber',
        'tokenDetails' => 'setTokenDetails',
        'variant' => 'setVariant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additionalData' => 'getAdditionalData',
        'alias' => 'getAlias',
        'aliasType' => 'getAliasType',
        'bank' => 'getBank',
        'billingAddress' => 'getBillingAddress',
        'card' => 'getCard',
        'contractTypes' => 'getContractTypes',
        'creationDate' => 'getCreationDate',
        'firstPspReference' => 'getFirstPspReference',
        'name' => 'getName',
        'networkTxReference' => 'getNetworkTxReference',
        'paymentMethodVariant' => 'getPaymentMethodVariant',
        'recurringDetailReference' => 'getRecurringDetailReference',
        'shopperName' => 'getShopperName',
        'socialSecurityNumber' => 'getSocialSecurityNumber',
        'tokenDetails' => 'getTokenDetails',
        'variant' => 'getVariant'
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
        $this->setIfExists('additionalData', $data ?? [], null);
        $this->setIfExists('alias', $data ?? [], null);
        $this->setIfExists('aliasType', $data ?? [], null);
        $this->setIfExists('bank', $data ?? [], null);
        $this->setIfExists('billingAddress', $data ?? [], null);
        $this->setIfExists('card', $data ?? [], null);
        $this->setIfExists('contractTypes', $data ?? [], null);
        $this->setIfExists('creationDate', $data ?? [], null);
        $this->setIfExists('firstPspReference', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('networkTxReference', $data ?? [], null);
        $this->setIfExists('paymentMethodVariant', $data ?? [], null);
        $this->setIfExists('recurringDetailReference', $data ?? [], null);
        $this->setIfExists('shopperName', $data ?? [], null);
        $this->setIfExists('socialSecurityNumber', $data ?? [], null);
        $this->setIfExists('tokenDetails', $data ?? [], null);
        $this->setIfExists('variant', $data ?? [], null);
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

        if ($this->container['recurringDetailReference'] === null) {
            $invalidProperties[] = "'recurringDetailReference' can't be null";
        }
        if ($this->container['variant'] === null) {
            $invalidProperties[] = "'variant' can't be null";
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
     * Gets additionalData
     *
     * @return array<string,string>|null
     */
    public function getAdditionalData()
    {
        return $this->container['additionalData'];
    }

    /**
     * Sets additionalData
     *
     * @param array<string,string>|null $additionalData This field contains additional data, which may be returned in a particular response.  The additionalData object consists of entries, each of which includes the key and value.
     *
     * @return self
     */
    public function setAdditionalData($additionalData)
    {
        if (is_null($additionalData)) {
            throw new \InvalidArgumentException('non-nullable additionalData cannot be null');
        }
        $this->container['additionalData'] = $additionalData;

        return $this;
    }

    /**
     * Gets alias
     *
     * @return string|null
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string|null $alias The alias of the credit card number.  Applies only to recurring contracts storing credit card details
     *
     * @return self
     */
    public function setAlias($alias)
    {
        if (is_null($alias)) {
            throw new \InvalidArgumentException('non-nullable alias cannot be null');
        }
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets aliasType
     *
     * @return string|null
     */
    public function getAliasType()
    {
        return $this->container['aliasType'];
    }

    /**
     * Sets aliasType
     *
     * @param string|null $aliasType The alias type of the credit card number.  Applies only to recurring contracts storing credit card details.
     *
     * @return self
     */
    public function setAliasType($aliasType)
    {
        if (is_null($aliasType)) {
            throw new \InvalidArgumentException('non-nullable aliasType cannot be null');
        }
        $this->container['aliasType'] = $aliasType;

        return $this;
    }

    /**
     * Gets bank
     *
     * @return \Adyen\Model\Recurring\BankAccount|null
     */
    public function getBank()
    {
        return $this->container['bank'];
    }

    /**
     * Sets bank
     *
     * @param \Adyen\Model\Recurring\BankAccount|null $bank bank
     *
     * @return self
     */
    public function setBank($bank)
    {
        if (is_null($bank)) {
            throw new \InvalidArgumentException('non-nullable bank cannot be null');
        }
        $this->container['bank'] = $bank;

        return $this;
    }

    /**
     * Gets billingAddress
     *
     * @return \Adyen\Model\Recurring\Address|null
     */
    public function getBillingAddress()
    {
        return $this->container['billingAddress'];
    }

    /**
     * Sets billingAddress
     *
     * @param \Adyen\Model\Recurring\Address|null $billingAddress billingAddress
     *
     * @return self
     */
    public function setBillingAddress($billingAddress)
    {
        if (is_null($billingAddress)) {
            throw new \InvalidArgumentException('non-nullable billingAddress cannot be null');
        }
        $this->container['billingAddress'] = $billingAddress;

        return $this;
    }

    /**
     * Gets card
     *
     * @return \Adyen\Model\Recurring\Card|null
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \Adyen\Model\Recurring\Card|null $card card
     *
     * @return self
     */
    public function setCard($card)
    {
        if (is_null($card)) {
            throw new \InvalidArgumentException('non-nullable card cannot be null');
        }
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets contractTypes
     *
     * @return string[]|null
     */
    public function getContractTypes()
    {
        return $this->container['contractTypes'];
    }

    /**
     * Sets contractTypes
     *
     * @param string[]|null $contractTypes Types of recurring contracts.
     *
     * @return self
     */
    public function setContractTypes($contractTypes)
    {
        if (is_null($contractTypes)) {
            throw new \InvalidArgumentException('non-nullable contractTypes cannot be null');
        }
        $this->container['contractTypes'] = $contractTypes;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return \DateTime|null
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param \DateTime|null $creationDate The date when the recurring details were created.
     *
     * @return self
     */
    public function setCreationDate($creationDate)
    {
        if (is_null($creationDate)) {
            throw new \InvalidArgumentException('non-nullable creationDate cannot be null');
        }
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets firstPspReference
     *
     * @return string|null
     */
    public function getFirstPspReference()
    {
        return $this->container['firstPspReference'];
    }

    /**
     * Sets firstPspReference
     *
     * @param string|null $firstPspReference The `pspReference` of the first recurring payment that created the recurring detail.
     *
     * @return self
     */
    public function setFirstPspReference($firstPspReference)
    {
        if (is_null($firstPspReference)) {
            throw new \InvalidArgumentException('non-nullable firstPspReference cannot be null');
        }
        $this->container['firstPspReference'] = $firstPspReference;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name An optional descriptive name for this recurring detail.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets networkTxReference
     *
     * @return string|null
     */
    public function getNetworkTxReference()
    {
        return $this->container['networkTxReference'];
    }

    /**
     * Sets networkTxReference
     *
     * @param string|null $networkTxReference Returned in the response if you are not tokenizing with Adyen and are using the Merchant-initiated transactions (MIT) framework from Mastercard or Visa.  This contains either the Mastercard Trace ID or the Visa Transaction ID.
     *
     * @return self
     */
    public function setNetworkTxReference($networkTxReference)
    {
        if (is_null($networkTxReference)) {
            throw new \InvalidArgumentException('non-nullable networkTxReference cannot be null');
        }
        $this->container['networkTxReference'] = $networkTxReference;

        return $this;
    }

    /**
     * Gets paymentMethodVariant
     *
     * @return string|null
     */
    public function getPaymentMethodVariant()
    {
        return $this->container['paymentMethodVariant'];
    }

    /**
     * Sets paymentMethodVariant
     *
     * @param string|null $paymentMethodVariant The  type or sub-brand of a payment method used, e.g. Visa Debit, Visa Corporate, etc. For more information, refer to [PaymentMethodVariant](https://docs.adyen.com/development-resources/paymentmethodvariant).
     *
     * @return self
     */
    public function setPaymentMethodVariant($paymentMethodVariant)
    {
        if (is_null($paymentMethodVariant)) {
            throw new \InvalidArgumentException('non-nullable paymentMethodVariant cannot be null');
        }
        $this->container['paymentMethodVariant'] = $paymentMethodVariant;

        return $this;
    }

    /**
     * Gets recurringDetailReference
     *
     * @return string
     */
    public function getRecurringDetailReference()
    {
        return $this->container['recurringDetailReference'];
    }

    /**
     * Sets recurringDetailReference
     *
     * @param string $recurringDetailReference The reference that uniquely identifies the recurring detail.
     *
     * @return self
     */
    public function setRecurringDetailReference($recurringDetailReference)
    {
        if (is_null($recurringDetailReference)) {
            throw new \InvalidArgumentException('non-nullable recurringDetailReference cannot be null');
        }
        $this->container['recurringDetailReference'] = $recurringDetailReference;

        return $this;
    }

    /**
     * Gets shopperName
     *
     * @return \Adyen\Model\Recurring\Name|null
     */
    public function getShopperName()
    {
        return $this->container['shopperName'];
    }

    /**
     * Sets shopperName
     *
     * @param \Adyen\Model\Recurring\Name|null $shopperName shopperName
     *
     * @return self
     */
    public function setShopperName($shopperName)
    {
        if (is_null($shopperName)) {
            throw new \InvalidArgumentException('non-nullable shopperName cannot be null');
        }
        $this->container['shopperName'] = $shopperName;

        return $this;
    }

    /**
     * Gets socialSecurityNumber
     *
     * @return string|null
     */
    public function getSocialSecurityNumber()
    {
        return $this->container['socialSecurityNumber'];
    }

    /**
     * Sets socialSecurityNumber
     *
     * @param string|null $socialSecurityNumber A shopper's social security number (only in countries where it is legal to collect).
     *
     * @return self
     */
    public function setSocialSecurityNumber($socialSecurityNumber)
    {
        if (is_null($socialSecurityNumber)) {
            throw new \InvalidArgumentException('non-nullable socialSecurityNumber cannot be null');
        }
        $this->container['socialSecurityNumber'] = $socialSecurityNumber;

        return $this;
    }

    /**
     * Gets tokenDetails
     *
     * @return \Adyen\Model\Recurring\TokenDetails|null
     */
    public function getTokenDetails()
    {
        return $this->container['tokenDetails'];
    }

    /**
     * Sets tokenDetails
     *
     * @param \Adyen\Model\Recurring\TokenDetails|null $tokenDetails tokenDetails
     *
     * @return self
     */
    public function setTokenDetails($tokenDetails)
    {
        if (is_null($tokenDetails)) {
            throw new \InvalidArgumentException('non-nullable tokenDetails cannot be null');
        }
        $this->container['tokenDetails'] = $tokenDetails;

        return $this;
    }

    /**
     * Gets variant
     *
     * @return string
     */
    public function getVariant()
    {
        return $this->container['variant'];
    }

    /**
     * Sets variant
     *
     * @param string $variant The payment method, such as “mc\", \"visa\", \"ideal\", \"paypal\".
     *
     * @return self
     */
    public function setVariant($variant)
    {
        if (is_null($variant)) {
            throw new \InvalidArgumentException('non-nullable variant cannot be null');
        }
        $this->container['variant'] = $variant;

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
