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
 * ServiceError Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ServiceError implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ServiceError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additionalData' => 'array<string,string>',
        'errorCode' => 'string',
        'errorType' => 'string',
        'message' => 'string',
        'pspReference' => 'string',
        'status' => 'int'
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
        'errorCode' => null,
        'errorType' => null,
        'message' => null,
        'pspReference' => null,
        'status' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'additionalData' => false,
        'errorCode' => false,
        'errorType' => false,
        'message' => false,
        'pspReference' => false,
        'status' => true
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
        'errorCode' => 'errorCode',
        'errorType' => 'errorType',
        'message' => 'message',
        'pspReference' => 'pspReference',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additionalData' => 'setAdditionalData',
        'errorCode' => 'setErrorCode',
        'errorType' => 'setErrorType',
        'message' => 'setMessage',
        'pspReference' => 'setPspReference',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additionalData' => 'getAdditionalData',
        'errorCode' => 'getErrorCode',
        'errorType' => 'getErrorType',
        'message' => 'getMessage',
        'pspReference' => 'getPspReference',
        'status' => 'getStatus'
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
        $this->setIfExists('errorCode', $data ?? [], null);
        $this->setIfExists('errorType', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('pspReference', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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
     * @param array<string,string>|null $additionalData Contains additional information about the payment. Some data fields are included only if you select them first. Go to **Customer Area** > **Developers** > **Additional data**.
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
     * Gets errorCode
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
     * Sets errorCode
     *
     * @param string|null $errorCode The error code mapped to the error message.
     *
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        if (is_null($errorCode)) {
            throw new \InvalidArgumentException('non-nullable errorCode cannot be null');
        }
        $this->container['errorCode'] = $errorCode;

        return $this;
    }

    /**
     * Gets errorType
     *
     * @return string|null
     */
    public function getErrorType()
    {
        return $this->container['errorType'];
    }

    /**
     * Sets errorType
     *
     * @param string|null $errorType The category of the error.
     *
     * @return self
     */
    public function setErrorType($errorType)
    {
        if (is_null($errorType)) {
            throw new \InvalidArgumentException('non-nullable errorType cannot be null');
        }
        $this->container['errorType'] = $errorType;

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
     * @param string|null $message A short explanation of the issue.
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets pspReference
     *
     * @return string|null
     */
    public function getPspReference()
    {
        return $this->container['pspReference'];
    }

    /**
     * Sets pspReference
     *
     * @param string|null $pspReference The PSP reference of the payment.
     *
     * @return self
     */
    public function setPspReference($pspReference)
    {
        if (is_null($pspReference)) {
            throw new \InvalidArgumentException('non-nullable pspReference cannot be null');
        }
        $this->container['pspReference'] = $pspReference;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status The HTTP response status.
     *
     * @return self
     */
    public function setStatus($status)
    {
        // Do nothing for nullable integers
        $this->container['status'] = $status;

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
