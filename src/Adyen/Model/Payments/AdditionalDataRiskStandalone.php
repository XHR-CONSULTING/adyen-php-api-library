<?php

/**
 * Adyen Payment API
 *
 * The version of the OpenAPI document: 68
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Payments;

use \ArrayAccess;
use Adyen\Model\Payments\ObjectSerializer;

/**
 * AdditionalDataRiskStandalone Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdditionalDataRiskStandalone implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalDataRiskStandalone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payPalCountryCode' => 'string',
        'payPalEmailId' => 'string',
        'payPalFirstName' => 'string',
        'payPalLastName' => 'string',
        'payPalPayerId' => 'string',
        'payPalPhone' => 'string',
        'payPalProtectionEligibility' => 'string',
        'payPalTransactionId' => 'string',
        'avsResultRaw' => 'string',
        'bin' => 'string',
        'cvcResultRaw' => 'string',
        'riskToken' => 'string',
        'threeDAuthenticated' => 'string',
        'threeDOffered' => 'string',
        'tokenDataType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payPalCountryCode' => null,
        'payPalEmailId' => null,
        'payPalFirstName' => null,
        'payPalLastName' => null,
        'payPalPayerId' => null,
        'payPalPhone' => null,
        'payPalProtectionEligibility' => null,
        'payPalTransactionId' => null,
        'avsResultRaw' => null,
        'bin' => null,
        'cvcResultRaw' => null,
        'riskToken' => null,
        'threeDAuthenticated' => null,
        'threeDOffered' => null,
        'tokenDataType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'payPalCountryCode' => false,
        'payPalEmailId' => false,
        'payPalFirstName' => false,
        'payPalLastName' => false,
        'payPalPayerId' => false,
        'payPalPhone' => false,
        'payPalProtectionEligibility' => false,
        'payPalTransactionId' => false,
        'avsResultRaw' => false,
        'bin' => false,
        'cvcResultRaw' => false,
        'riskToken' => false,
        'threeDAuthenticated' => false,
        'threeDOffered' => false,
        'tokenDataType' => false
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
        'payPalCountryCode' => 'PayPal.CountryCode',
        'payPalEmailId' => 'PayPal.EmailId',
        'payPalFirstName' => 'PayPal.FirstName',
        'payPalLastName' => 'PayPal.LastName',
        'payPalPayerId' => 'PayPal.PayerId',
        'payPalPhone' => 'PayPal.Phone',
        'payPalProtectionEligibility' => 'PayPal.ProtectionEligibility',
        'payPalTransactionId' => 'PayPal.TransactionId',
        'avsResultRaw' => 'avsResultRaw',
        'bin' => 'bin',
        'cvcResultRaw' => 'cvcResultRaw',
        'riskToken' => 'riskToken',
        'threeDAuthenticated' => 'threeDAuthenticated',
        'threeDOffered' => 'threeDOffered',
        'tokenDataType' => 'tokenDataType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payPalCountryCode' => 'setPayPalCountryCode',
        'payPalEmailId' => 'setPayPalEmailId',
        'payPalFirstName' => 'setPayPalFirstName',
        'payPalLastName' => 'setPayPalLastName',
        'payPalPayerId' => 'setPayPalPayerId',
        'payPalPhone' => 'setPayPalPhone',
        'payPalProtectionEligibility' => 'setPayPalProtectionEligibility',
        'payPalTransactionId' => 'setPayPalTransactionId',
        'avsResultRaw' => 'setAvsResultRaw',
        'bin' => 'setBin',
        'cvcResultRaw' => 'setCvcResultRaw',
        'riskToken' => 'setRiskToken',
        'threeDAuthenticated' => 'setThreeDAuthenticated',
        'threeDOffered' => 'setThreeDOffered',
        'tokenDataType' => 'setTokenDataType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payPalCountryCode' => 'getPayPalCountryCode',
        'payPalEmailId' => 'getPayPalEmailId',
        'payPalFirstName' => 'getPayPalFirstName',
        'payPalLastName' => 'getPayPalLastName',
        'payPalPayerId' => 'getPayPalPayerId',
        'payPalPhone' => 'getPayPalPhone',
        'payPalProtectionEligibility' => 'getPayPalProtectionEligibility',
        'payPalTransactionId' => 'getPayPalTransactionId',
        'avsResultRaw' => 'getAvsResultRaw',
        'bin' => 'getBin',
        'cvcResultRaw' => 'getCvcResultRaw',
        'riskToken' => 'getRiskToken',
        'threeDAuthenticated' => 'getThreeDAuthenticated',
        'threeDOffered' => 'getThreeDOffered',
        'tokenDataType' => 'getTokenDataType'
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
        $this->setIfExists('payPalCountryCode', $data ?? [], null);
        $this->setIfExists('payPalEmailId', $data ?? [], null);
        $this->setIfExists('payPalFirstName', $data ?? [], null);
        $this->setIfExists('payPalLastName', $data ?? [], null);
        $this->setIfExists('payPalPayerId', $data ?? [], null);
        $this->setIfExists('payPalPhone', $data ?? [], null);
        $this->setIfExists('payPalProtectionEligibility', $data ?? [], null);
        $this->setIfExists('payPalTransactionId', $data ?? [], null);
        $this->setIfExists('avsResultRaw', $data ?? [], null);
        $this->setIfExists('bin', $data ?? [], null);
        $this->setIfExists('cvcResultRaw', $data ?? [], null);
        $this->setIfExists('riskToken', $data ?? [], null);
        $this->setIfExists('threeDAuthenticated', $data ?? [], null);
        $this->setIfExists('threeDOffered', $data ?? [], null);
        $this->setIfExists('tokenDataType', $data ?? [], null);
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
     * Gets payPalCountryCode
     *
     * @return string|null
     */
    public function getPayPalCountryCode()
    {
        return $this->container['payPalCountryCode'];
    }

    /**
     * Sets payPalCountryCode
     *
     * @param string|null $payPalCountryCode Shopper's country of residence in the form of ISO standard 3166 2-character country codes.
     *
     * @return self
     */
    public function setPayPalCountryCode($payPalCountryCode)
    {
        if (is_null($payPalCountryCode)) {
            throw new \InvalidArgumentException('non-nullable payPalCountryCode cannot be null');
        }
        $this->container['payPalCountryCode'] = $payPalCountryCode;

        return $this;
    }

    /**
     * Gets payPalEmailId
     *
     * @return string|null
     */
    public function getPayPalEmailId()
    {
        return $this->container['payPalEmailId'];
    }

    /**
     * Sets payPalEmailId
     *
     * @param string|null $payPalEmailId Shopper's email.
     *
     * @return self
     */
    public function setPayPalEmailId($payPalEmailId)
    {
        if (is_null($payPalEmailId)) {
            throw new \InvalidArgumentException('non-nullable payPalEmailId cannot be null');
        }
        $this->container['payPalEmailId'] = $payPalEmailId;

        return $this;
    }

    /**
     * Gets payPalFirstName
     *
     * @return string|null
     */
    public function getPayPalFirstName()
    {
        return $this->container['payPalFirstName'];
    }

    /**
     * Sets payPalFirstName
     *
     * @param string|null $payPalFirstName Shopper's first name.
     *
     * @return self
     */
    public function setPayPalFirstName($payPalFirstName)
    {
        if (is_null($payPalFirstName)) {
            throw new \InvalidArgumentException('non-nullable payPalFirstName cannot be null');
        }
        $this->container['payPalFirstName'] = $payPalFirstName;

        return $this;
    }

    /**
     * Gets payPalLastName
     *
     * @return string|null
     */
    public function getPayPalLastName()
    {
        return $this->container['payPalLastName'];
    }

    /**
     * Sets payPalLastName
     *
     * @param string|null $payPalLastName Shopper's last name.
     *
     * @return self
     */
    public function setPayPalLastName($payPalLastName)
    {
        if (is_null($payPalLastName)) {
            throw new \InvalidArgumentException('non-nullable payPalLastName cannot be null');
        }
        $this->container['payPalLastName'] = $payPalLastName;

        return $this;
    }

    /**
     * Gets payPalPayerId
     *
     * @return string|null
     */
    public function getPayPalPayerId()
    {
        return $this->container['payPalPayerId'];
    }

    /**
     * Sets payPalPayerId
     *
     * @param string|null $payPalPayerId Unique PayPal Customer Account identification number. Character length and limitations: 13 single-byte alphanumeric characters.
     *
     * @return self
     */
    public function setPayPalPayerId($payPalPayerId)
    {
        if (is_null($payPalPayerId)) {
            throw new \InvalidArgumentException('non-nullable payPalPayerId cannot be null');
        }
        $this->container['payPalPayerId'] = $payPalPayerId;

        return $this;
    }

    /**
     * Gets payPalPhone
     *
     * @return string|null
     */
    public function getPayPalPhone()
    {
        return $this->container['payPalPhone'];
    }

    /**
     * Sets payPalPhone
     *
     * @param string|null $payPalPhone Shopper's phone number.
     *
     * @return self
     */
    public function setPayPalPhone($payPalPhone)
    {
        if (is_null($payPalPhone)) {
            throw new \InvalidArgumentException('non-nullable payPalPhone cannot be null');
        }
        $this->container['payPalPhone'] = $payPalPhone;

        return $this;
    }

    /**
     * Gets payPalProtectionEligibility
     *
     * @return string|null
     */
    public function getPayPalProtectionEligibility()
    {
        return $this->container['payPalProtectionEligibility'];
    }

    /**
     * Sets payPalProtectionEligibility
     *
     * @param string|null $payPalProtectionEligibility Allowed values: * **Eligible** — Merchant is protected by PayPal's Seller Protection Policy for Unauthorized Payments and Item Not Received.  * **PartiallyEligible** — Merchant is protected by PayPal's Seller Protection Policy for Item Not Received.  * **Ineligible** — Merchant is not protected under the Seller Protection Policy.
     *
     * @return self
     */
    public function setPayPalProtectionEligibility($payPalProtectionEligibility)
    {
        if (is_null($payPalProtectionEligibility)) {
            throw new \InvalidArgumentException('non-nullable payPalProtectionEligibility cannot be null');
        }
        $this->container['payPalProtectionEligibility'] = $payPalProtectionEligibility;

        return $this;
    }

    /**
     * Gets payPalTransactionId
     *
     * @return string|null
     */
    public function getPayPalTransactionId()
    {
        return $this->container['payPalTransactionId'];
    }

    /**
     * Sets payPalTransactionId
     *
     * @param string|null $payPalTransactionId Unique transaction ID of the payment.
     *
     * @return self
     */
    public function setPayPalTransactionId($payPalTransactionId)
    {
        if (is_null($payPalTransactionId)) {
            throw new \InvalidArgumentException('non-nullable payPalTransactionId cannot be null');
        }
        $this->container['payPalTransactionId'] = $payPalTransactionId;

        return $this;
    }

    /**
     * Gets avsResultRaw
     *
     * @return string|null
     */
    public function getAvsResultRaw()
    {
        return $this->container['avsResultRaw'];
    }

    /**
     * Sets avsResultRaw
     *
     * @param string|null $avsResultRaw Raw AVS result received from the acquirer, where available. Example: D
     *
     * @return self
     */
    public function setAvsResultRaw($avsResultRaw)
    {
        if (is_null($avsResultRaw)) {
            throw new \InvalidArgumentException('non-nullable avsResultRaw cannot be null');
        }
        $this->container['avsResultRaw'] = $avsResultRaw;

        return $this;
    }

    /**
     * Gets bin
     *
     * @return string|null
     */
    public function getBin()
    {
        return $this->container['bin'];
    }

    /**
     * Sets bin
     *
     * @param string|null $bin The Bank Identification Number of a credit card, which is the first six digits of a card number. Required for [tokenized card request](https://docs.adyen.com/risk-management/standalone-risk#tokenised-pan-request).
     *
     * @return self
     */
    public function setBin($bin)
    {
        if (is_null($bin)) {
            throw new \InvalidArgumentException('non-nullable bin cannot be null');
        }
        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets cvcResultRaw
     *
     * @return string|null
     */
    public function getCvcResultRaw()
    {
        return $this->container['cvcResultRaw'];
    }

    /**
     * Sets cvcResultRaw
     *
     * @param string|null $cvcResultRaw Raw CVC result received from the acquirer, where available. Example: 1
     *
     * @return self
     */
    public function setCvcResultRaw($cvcResultRaw)
    {
        if (is_null($cvcResultRaw)) {
            throw new \InvalidArgumentException('non-nullable cvcResultRaw cannot be null');
        }
        $this->container['cvcResultRaw'] = $cvcResultRaw;

        return $this;
    }

    /**
     * Gets riskToken
     *
     * @return string|null
     */
    public function getRiskToken()
    {
        return $this->container['riskToken'];
    }

    /**
     * Sets riskToken
     *
     * @param string|null $riskToken Unique identifier or token for the shopper's card details.
     *
     * @return self
     */
    public function setRiskToken($riskToken)
    {
        if (is_null($riskToken)) {
            throw new \InvalidArgumentException('non-nullable riskToken cannot be null');
        }
        $this->container['riskToken'] = $riskToken;

        return $this;
    }

    /**
     * Gets threeDAuthenticated
     *
     * @return string|null
     */
    public function getThreeDAuthenticated()
    {
        return $this->container['threeDAuthenticated'];
    }

    /**
     * Sets threeDAuthenticated
     *
     * @param string|null $threeDAuthenticated A Boolean value indicating whether 3DS authentication was completed on this payment. Example: true
     *
     * @return self
     */
    public function setThreeDAuthenticated($threeDAuthenticated)
    {
        if (is_null($threeDAuthenticated)) {
            throw new \InvalidArgumentException('non-nullable threeDAuthenticated cannot be null');
        }
        $this->container['threeDAuthenticated'] = $threeDAuthenticated;

        return $this;
    }

    /**
     * Gets threeDOffered
     *
     * @return string|null
     */
    public function getThreeDOffered()
    {
        return $this->container['threeDOffered'];
    }

    /**
     * Sets threeDOffered
     *
     * @param string|null $threeDOffered A Boolean value indicating whether 3DS was offered for this payment. Example: true
     *
     * @return self
     */
    public function setThreeDOffered($threeDOffered)
    {
        if (is_null($threeDOffered)) {
            throw new \InvalidArgumentException('non-nullable threeDOffered cannot be null');
        }
        $this->container['threeDOffered'] = $threeDOffered;

        return $this;
    }

    /**
     * Gets tokenDataType
     *
     * @return string|null
     */
    public function getTokenDataType()
    {
        return $this->container['tokenDataType'];
    }

    /**
     * Sets tokenDataType
     *
     * @param string|null $tokenDataType Required for PayPal payments only. The only supported value is: **paypal**.
     *
     * @return self
     */
    public function setTokenDataType($tokenDataType)
    {
        if (is_null($tokenDataType)) {
            throw new \InvalidArgumentException('non-nullable tokenDataType cannot be null');
        }
        $this->container['tokenDataType'] = $tokenDataType;

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
