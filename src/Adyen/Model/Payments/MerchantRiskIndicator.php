<?php

/**
 * Adyen Payment API
 *
 * The version of the OpenAPI document: 68
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Payments;

use \ArrayAccess;
use Adyen\Model\Payments\ObjectSerializer;

/**
 * MerchantRiskIndicator Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MerchantRiskIndicator implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantRiskIndicator';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'addressMatch' => 'bool',
        'deliveryAddressIndicator' => 'string',
        'deliveryEmail' => 'string',
        'deliveryEmailAddress' => 'string',
        'deliveryTimeframe' => 'string',
        'giftCardAmount' => '\Adyen\Model\Payments\Amount',
        'giftCardCount' => 'int',
        'giftCardCurr' => 'string',
        'preOrderDate' => '\DateTime',
        'preOrderPurchase' => 'bool',
        'preOrderPurchaseInd' => 'string',
        'reorderItems' => 'bool',
        'reorderItemsInd' => 'string',
        'shipIndicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'addressMatch' => null,
        'deliveryAddressIndicator' => null,
        'deliveryEmail' => null,
        'deliveryEmailAddress' => null,
        'deliveryTimeframe' => null,
        'giftCardAmount' => null,
        'giftCardCount' => 'int32',
        'giftCardCurr' => null,
        'preOrderDate' => 'date-time',
        'preOrderPurchase' => null,
        'preOrderPurchaseInd' => null,
        'reorderItems' => null,
        'reorderItemsInd' => null,
        'shipIndicator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'addressMatch' => false,
        'deliveryAddressIndicator' => false,
        'deliveryEmail' => false,
        'deliveryEmailAddress' => false,
        'deliveryTimeframe' => false,
        'giftCardAmount' => false,
        'giftCardCount' => true,
        'giftCardCurr' => false,
        'preOrderDate' => false,
        'preOrderPurchase' => false,
        'preOrderPurchaseInd' => false,
        'reorderItems' => false,
        'reorderItemsInd' => false,
        'shipIndicator' => false
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
        'addressMatch' => 'addressMatch',
        'deliveryAddressIndicator' => 'deliveryAddressIndicator',
        'deliveryEmail' => 'deliveryEmail',
        'deliveryEmailAddress' => 'deliveryEmailAddress',
        'deliveryTimeframe' => 'deliveryTimeframe',
        'giftCardAmount' => 'giftCardAmount',
        'giftCardCount' => 'giftCardCount',
        'giftCardCurr' => 'giftCardCurr',
        'preOrderDate' => 'preOrderDate',
        'preOrderPurchase' => 'preOrderPurchase',
        'preOrderPurchaseInd' => 'preOrderPurchaseInd',
        'reorderItems' => 'reorderItems',
        'reorderItemsInd' => 'reorderItemsInd',
        'shipIndicator' => 'shipIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addressMatch' => 'setAddressMatch',
        'deliveryAddressIndicator' => 'setDeliveryAddressIndicator',
        'deliveryEmail' => 'setDeliveryEmail',
        'deliveryEmailAddress' => 'setDeliveryEmailAddress',
        'deliveryTimeframe' => 'setDeliveryTimeframe',
        'giftCardAmount' => 'setGiftCardAmount',
        'giftCardCount' => 'setGiftCardCount',
        'giftCardCurr' => 'setGiftCardCurr',
        'preOrderDate' => 'setPreOrderDate',
        'preOrderPurchase' => 'setPreOrderPurchase',
        'preOrderPurchaseInd' => 'setPreOrderPurchaseInd',
        'reorderItems' => 'setReorderItems',
        'reorderItemsInd' => 'setReorderItemsInd',
        'shipIndicator' => 'setShipIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addressMatch' => 'getAddressMatch',
        'deliveryAddressIndicator' => 'getDeliveryAddressIndicator',
        'deliveryEmail' => 'getDeliveryEmail',
        'deliveryEmailAddress' => 'getDeliveryEmailAddress',
        'deliveryTimeframe' => 'getDeliveryTimeframe',
        'giftCardAmount' => 'getGiftCardAmount',
        'giftCardCount' => 'getGiftCardCount',
        'giftCardCurr' => 'getGiftCardCurr',
        'preOrderDate' => 'getPreOrderDate',
        'preOrderPurchase' => 'getPreOrderPurchase',
        'preOrderPurchaseInd' => 'getPreOrderPurchaseInd',
        'reorderItems' => 'getReorderItems',
        'reorderItemsInd' => 'getReorderItemsInd',
        'shipIndicator' => 'getShipIndicator'
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

    public const DELIVERY_ADDRESS_INDICATOR_SHIP_TO_BILLING_ADDRESS = 'shipToBillingAddress';
    public const DELIVERY_ADDRESS_INDICATOR_SHIP_TO_VERIFIED_ADDRESS = 'shipToVerifiedAddress';
    public const DELIVERY_ADDRESS_INDICATOR_SHIP_TO_NEW_ADDRESS = 'shipToNewAddress';
    public const DELIVERY_ADDRESS_INDICATOR_SHIP_TO_STORE = 'shipToStore';
    public const DELIVERY_ADDRESS_INDICATOR_DIGITAL_GOODS = 'digitalGoods';
    public const DELIVERY_ADDRESS_INDICATOR_GOODS_NOT_SHIPPED = 'goodsNotShipped';
    public const DELIVERY_ADDRESS_INDICATOR_OTHER = 'other';
    public const DELIVERY_TIMEFRAME_ELECTRONIC_DELIVERY = 'electronicDelivery';
    public const DELIVERY_TIMEFRAME_SAME_DAY_SHIPPING = 'sameDayShipping';
    public const DELIVERY_TIMEFRAME_OVERNIGHT_SHIPPING = 'overnightShipping';
    public const DELIVERY_TIMEFRAME_TWO_OR_MORE_DAYS_SHIPPING = 'twoOrMoreDaysShipping';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliveryAddressIndicatorAllowableValues()
    {
        return [
            self::DELIVERY_ADDRESS_INDICATOR_SHIP_TO_BILLING_ADDRESS,
            self::DELIVERY_ADDRESS_INDICATOR_SHIP_TO_VERIFIED_ADDRESS,
            self::DELIVERY_ADDRESS_INDICATOR_SHIP_TO_NEW_ADDRESS,
            self::DELIVERY_ADDRESS_INDICATOR_SHIP_TO_STORE,
            self::DELIVERY_ADDRESS_INDICATOR_DIGITAL_GOODS,
            self::DELIVERY_ADDRESS_INDICATOR_GOODS_NOT_SHIPPED,
            self::DELIVERY_ADDRESS_INDICATOR_OTHER,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliveryTimeframeAllowableValues()
    {
        return [
            self::DELIVERY_TIMEFRAME_ELECTRONIC_DELIVERY,
            self::DELIVERY_TIMEFRAME_SAME_DAY_SHIPPING,
            self::DELIVERY_TIMEFRAME_OVERNIGHT_SHIPPING,
            self::DELIVERY_TIMEFRAME_TWO_OR_MORE_DAYS_SHIPPING,
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
        $this->setIfExists('addressMatch', $data ?? [], null);
        $this->setIfExists('deliveryAddressIndicator', $data ?? [], null);
        $this->setIfExists('deliveryEmail', $data ?? [], null);
        $this->setIfExists('deliveryEmailAddress', $data ?? [], null);
        $this->setIfExists('deliveryTimeframe', $data ?? [], null);
        $this->setIfExists('giftCardAmount', $data ?? [], null);
        $this->setIfExists('giftCardCount', $data ?? [], null);
        $this->setIfExists('giftCardCurr', $data ?? [], null);
        $this->setIfExists('preOrderDate', $data ?? [], null);
        $this->setIfExists('preOrderPurchase', $data ?? [], null);
        $this->setIfExists('preOrderPurchaseInd', $data ?? [], null);
        $this->setIfExists('reorderItems', $data ?? [], null);
        $this->setIfExists('reorderItemsInd', $data ?? [], null);
        $this->setIfExists('shipIndicator', $data ?? [], null);
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

        $allowedValues = $this->getDeliveryAddressIndicatorAllowableValues();
        if (!is_null($this->container['deliveryAddressIndicator']) && !in_array($this->container['deliveryAddressIndicator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'deliveryAddressIndicator', must be one of '%s'",
                $this->container['deliveryAddressIndicator'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDeliveryTimeframeAllowableValues();
        if (!is_null($this->container['deliveryTimeframe']) && !in_array($this->container['deliveryTimeframe'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'deliveryTimeframe', must be one of '%s'",
                $this->container['deliveryTimeframe'],
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
     * Gets addressMatch
     *
     * @return bool|null
     */
    public function getAddressMatch()
    {
        return $this->container['addressMatch'];
    }

    /**
     * Sets addressMatch
     *
     * @param bool|null $addressMatch Whether the chosen delivery address is identical to the billing address.
     *
     * @return self
     */
    public function setAddressMatch($addressMatch)
    {
        if (is_null($addressMatch)) {
            throw new \InvalidArgumentException('non-nullable addressMatch cannot be null');
        }
        $this->container['addressMatch'] = $addressMatch;

        return $this;
    }

    /**
     * Gets deliveryAddressIndicator
     *
     * @return string|null
     */
    public function getDeliveryAddressIndicator()
    {
        return $this->container['deliveryAddressIndicator'];
    }

    /**
     * Sets deliveryAddressIndicator
     *
     * @param string|null $deliveryAddressIndicator Indicator regarding the delivery address. Allowed values: * `shipToBillingAddress` * `shipToVerifiedAddress` * `shipToNewAddress` * `shipToStore` * `digitalGoods` * `goodsNotShipped` * `other`
     *
     * @return self
     */
    public function setDeliveryAddressIndicator($deliveryAddressIndicator)
    {
        if (is_null($deliveryAddressIndicator)) {
            throw new \InvalidArgumentException('non-nullable deliveryAddressIndicator cannot be null');
        }
        $allowedValues = $this->getDeliveryAddressIndicatorAllowableValues();
        if (!in_array($deliveryAddressIndicator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'deliveryAddressIndicator', must be one of '%s'",
                    $deliveryAddressIndicator,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deliveryAddressIndicator'] = $deliveryAddressIndicator;

        return $this;
    }

    /**
     * Gets deliveryEmail
     *
     * @return string|null
     * @deprecated
     */
    public function getDeliveryEmail()
    {
        return $this->container['deliveryEmail'];
    }

    /**
     * Sets deliveryEmail
     *
     * @param string|null $deliveryEmail The delivery email address (for digital goods).
     *
     * @return self
     * @deprecated
     */
    public function setDeliveryEmail($deliveryEmail)
    {
        if (is_null($deliveryEmail)) {
            throw new \InvalidArgumentException('non-nullable deliveryEmail cannot be null');
        }
        $this->container['deliveryEmail'] = $deliveryEmail;

        return $this;
    }

    /**
     * Gets deliveryEmailAddress
     *
     * @return string|null
     */
    public function getDeliveryEmailAddress()
    {
        return $this->container['deliveryEmailAddress'];
    }

    /**
     * Sets deliveryEmailAddress
     *
     * @param string|null $deliveryEmailAddress For Electronic delivery, the email address to which the merchandise was delivered. Maximum length: 254 characters.
     *
     * @return self
     */
    public function setDeliveryEmailAddress($deliveryEmailAddress)
    {
        if (is_null($deliveryEmailAddress)) {
            throw new \InvalidArgumentException('non-nullable deliveryEmailAddress cannot be null');
        }
        $this->container['deliveryEmailAddress'] = $deliveryEmailAddress;

        return $this;
    }

    /**
     * Gets deliveryTimeframe
     *
     * @return string|null
     */
    public function getDeliveryTimeframe()
    {
        return $this->container['deliveryTimeframe'];
    }

    /**
     * Sets deliveryTimeframe
     *
     * @param string|null $deliveryTimeframe The estimated delivery time for the shopper to receive the goods. Allowed values: * `electronicDelivery` * `sameDayShipping` * `overnightShipping` * `twoOrMoreDaysShipping`
     *
     * @return self
     */
    public function setDeliveryTimeframe($deliveryTimeframe)
    {
        if (is_null($deliveryTimeframe)) {
            throw new \InvalidArgumentException('non-nullable deliveryTimeframe cannot be null');
        }
        $allowedValues = $this->getDeliveryTimeframeAllowableValues();
        if (!in_array($deliveryTimeframe, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'deliveryTimeframe', must be one of '%s'",
                    $deliveryTimeframe,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deliveryTimeframe'] = $deliveryTimeframe;

        return $this;
    }

    /**
     * Gets giftCardAmount
     *
     * @return \Adyen\Model\Payments\Amount|null
     */
    public function getGiftCardAmount()
    {
        return $this->container['giftCardAmount'];
    }

    /**
     * Sets giftCardAmount
     *
     * @param \Adyen\Model\Payments\Amount|null $giftCardAmount giftCardAmount
     *
     * @return self
     */
    public function setGiftCardAmount($giftCardAmount)
    {
        if (is_null($giftCardAmount)) {
            throw new \InvalidArgumentException('non-nullable giftCardAmount cannot be null');
        }
        $this->container['giftCardAmount'] = $giftCardAmount;

        return $this;
    }

    /**
     * Gets giftCardCount
     *
     * @return int|null
     */
    public function getGiftCardCount()
    {
        return $this->container['giftCardCount'];
    }

    /**
     * Sets giftCardCount
     *
     * @param int|null $giftCardCount For prepaid or gift card purchase, total count of individual prepaid or gift cards/codes purchased.
     *
     * @return self
     */
    public function setGiftCardCount($giftCardCount)
    {
        // Do nothing for nullable integers
        $this->container['giftCardCount'] = $giftCardCount;

        return $this;
    }

    /**
     * Gets giftCardCurr
     *
     * @return string|null
     */
    public function getGiftCardCurr()
    {
        return $this->container['giftCardCurr'];
    }

    /**
     * Sets giftCardCurr
     *
     * @param string|null $giftCardCurr For prepaid or gift card purchase, [ISO 4217](https://www.iso.org/iso-4217-currency-codes.html) three-digit currency code of the gift card, other than those listed in Table A.5 of the EMVCo 3D Secure Protocol and Core Functions Specification.
     *
     * @return self
     */
    public function setGiftCardCurr($giftCardCurr)
    {
        if (is_null($giftCardCurr)) {
            throw new \InvalidArgumentException('non-nullable giftCardCurr cannot be null');
        }
        $this->container['giftCardCurr'] = $giftCardCurr;

        return $this;
    }

    /**
     * Gets preOrderDate
     *
     * @return \DateTime|null
     */
    public function getPreOrderDate()
    {
        return $this->container['preOrderDate'];
    }

    /**
     * Sets preOrderDate
     *
     * @param \DateTime|null $preOrderDate For pre-order purchases, the expected date this product will be available to the shopper.
     *
     * @return self
     */
    public function setPreOrderDate($preOrderDate)
    {
        if (is_null($preOrderDate)) {
            throw new \InvalidArgumentException('non-nullable preOrderDate cannot be null');
        }
        $this->container['preOrderDate'] = $preOrderDate;

        return $this;
    }

    /**
     * Gets preOrderPurchase
     *
     * @return bool|null
     */
    public function getPreOrderPurchase()
    {
        return $this->container['preOrderPurchase'];
    }

    /**
     * Sets preOrderPurchase
     *
     * @param bool|null $preOrderPurchase Indicator for whether this transaction is for pre-ordering a product.
     *
     * @return self
     */
    public function setPreOrderPurchase($preOrderPurchase)
    {
        if (is_null($preOrderPurchase)) {
            throw new \InvalidArgumentException('non-nullable preOrderPurchase cannot be null');
        }
        $this->container['preOrderPurchase'] = $preOrderPurchase;

        return $this;
    }

    /**
     * Gets preOrderPurchaseInd
     *
     * @return string|null
     */
    public function getPreOrderPurchaseInd()
    {
        return $this->container['preOrderPurchaseInd'];
    }

    /**
     * Sets preOrderPurchaseInd
     *
     * @param string|null $preOrderPurchaseInd Indicates whether Cardholder is placing an order for merchandise with a future availability or release date.
     *
     * @return self
     */
    public function setPreOrderPurchaseInd($preOrderPurchaseInd)
    {
        if (is_null($preOrderPurchaseInd)) {
            throw new \InvalidArgumentException('non-nullable preOrderPurchaseInd cannot be null');
        }
        $this->container['preOrderPurchaseInd'] = $preOrderPurchaseInd;

        return $this;
    }

    /**
     * Gets reorderItems
     *
     * @return bool|null
     */
    public function getReorderItems()
    {
        return $this->container['reorderItems'];
    }

    /**
     * Sets reorderItems
     *
     * @param bool|null $reorderItems Indicator for whether the shopper has already purchased the same items in the past.
     *
     * @return self
     */
    public function setReorderItems($reorderItems)
    {
        if (is_null($reorderItems)) {
            throw new \InvalidArgumentException('non-nullable reorderItems cannot be null');
        }
        $this->container['reorderItems'] = $reorderItems;

        return $this;
    }

    /**
     * Gets reorderItemsInd
     *
     * @return string|null
     */
    public function getReorderItemsInd()
    {
        return $this->container['reorderItemsInd'];
    }

    /**
     * Sets reorderItemsInd
     *
     * @param string|null $reorderItemsInd Indicates whether the cardholder is reordering previously purchased merchandise.
     *
     * @return self
     */
    public function setReorderItemsInd($reorderItemsInd)
    {
        if (is_null($reorderItemsInd)) {
            throw new \InvalidArgumentException('non-nullable reorderItemsInd cannot be null');
        }
        $this->container['reorderItemsInd'] = $reorderItemsInd;

        return $this;
    }

    /**
     * Gets shipIndicator
     *
     * @return string|null
     */
    public function getShipIndicator()
    {
        return $this->container['shipIndicator'];
    }

    /**
     * Sets shipIndicator
     *
     * @param string|null $shipIndicator Indicates shipping method chosen for the transaction.
     *
     * @return self
     */
    public function setShipIndicator($shipIndicator)
    {
        if (is_null($shipIndicator)) {
            throw new \InvalidArgumentException('non-nullable shipIndicator cannot be null');
        }
        $this->container['shipIndicator'] = $shipIndicator;

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
