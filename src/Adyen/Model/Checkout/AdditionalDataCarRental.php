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
 * AdditionalDataCarRental Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdditionalDataCarRental implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalDataCarRental';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'carRentalCheckOutDate' => 'string',
        'carRentalCustomerServiceTollFreeNumber' => 'string',
        'carRentalDaysRented' => 'string',
        'carRentalFuelCharges' => 'string',
        'carRentalInsuranceCharges' => 'string',
        'carRentalLocationCity' => 'string',
        'carRentalLocationCountry' => 'string',
        'carRentalLocationStateProvince' => 'string',
        'carRentalNoShowIndicator' => 'string',
        'carRentalOneWayDropOffCharges' => 'string',
        'carRentalRate' => 'string',
        'carRentalRateIndicator' => 'string',
        'carRentalRentalAgreementNumber' => 'string',
        'carRentalRentalClassId' => 'string',
        'carRentalRenterName' => 'string',
        'carRentalReturnCity' => 'string',
        'carRentalReturnCountry' => 'string',
        'carRentalReturnDate' => 'string',
        'carRentalReturnLocationId' => 'string',
        'carRentalReturnStateProvince' => 'string',
        'carRentalTaxExemptIndicator' => 'string',
        'travelEntertainmentAuthDataDuration' => 'string',
        'travelEntertainmentAuthDataMarket' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'carRentalCheckOutDate' => null,
        'carRentalCustomerServiceTollFreeNumber' => null,
        'carRentalDaysRented' => null,
        'carRentalFuelCharges' => null,
        'carRentalInsuranceCharges' => null,
        'carRentalLocationCity' => null,
        'carRentalLocationCountry' => null,
        'carRentalLocationStateProvince' => null,
        'carRentalNoShowIndicator' => null,
        'carRentalOneWayDropOffCharges' => null,
        'carRentalRate' => null,
        'carRentalRateIndicator' => null,
        'carRentalRentalAgreementNumber' => null,
        'carRentalRentalClassId' => null,
        'carRentalRenterName' => null,
        'carRentalReturnCity' => null,
        'carRentalReturnCountry' => null,
        'carRentalReturnDate' => null,
        'carRentalReturnLocationId' => null,
        'carRentalReturnStateProvince' => null,
        'carRentalTaxExemptIndicator' => null,
        'travelEntertainmentAuthDataDuration' => null,
        'travelEntertainmentAuthDataMarket' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'carRentalCheckOutDate' => false,
        'carRentalCustomerServiceTollFreeNumber' => false,
        'carRentalDaysRented' => false,
        'carRentalFuelCharges' => false,
        'carRentalInsuranceCharges' => false,
        'carRentalLocationCity' => false,
        'carRentalLocationCountry' => false,
        'carRentalLocationStateProvince' => false,
        'carRentalNoShowIndicator' => false,
        'carRentalOneWayDropOffCharges' => false,
        'carRentalRate' => false,
        'carRentalRateIndicator' => false,
        'carRentalRentalAgreementNumber' => false,
        'carRentalRentalClassId' => false,
        'carRentalRenterName' => false,
        'carRentalReturnCity' => false,
        'carRentalReturnCountry' => false,
        'carRentalReturnDate' => false,
        'carRentalReturnLocationId' => false,
        'carRentalReturnStateProvince' => false,
        'carRentalTaxExemptIndicator' => false,
        'travelEntertainmentAuthDataDuration' => false,
        'travelEntertainmentAuthDataMarket' => false
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
        'carRentalCheckOutDate' => 'carRental.checkOutDate',
        'carRentalCustomerServiceTollFreeNumber' => 'carRental.customerServiceTollFreeNumber',
        'carRentalDaysRented' => 'carRental.daysRented',
        'carRentalFuelCharges' => 'carRental.fuelCharges',
        'carRentalInsuranceCharges' => 'carRental.insuranceCharges',
        'carRentalLocationCity' => 'carRental.locationCity',
        'carRentalLocationCountry' => 'carRental.locationCountry',
        'carRentalLocationStateProvince' => 'carRental.locationStateProvince',
        'carRentalNoShowIndicator' => 'carRental.noShowIndicator',
        'carRentalOneWayDropOffCharges' => 'carRental.oneWayDropOffCharges',
        'carRentalRate' => 'carRental.rate',
        'carRentalRateIndicator' => 'carRental.rateIndicator',
        'carRentalRentalAgreementNumber' => 'carRental.rentalAgreementNumber',
        'carRentalRentalClassId' => 'carRental.rentalClassId',
        'carRentalRenterName' => 'carRental.renterName',
        'carRentalReturnCity' => 'carRental.returnCity',
        'carRentalReturnCountry' => 'carRental.returnCountry',
        'carRentalReturnDate' => 'carRental.returnDate',
        'carRentalReturnLocationId' => 'carRental.returnLocationId',
        'carRentalReturnStateProvince' => 'carRental.returnStateProvince',
        'carRentalTaxExemptIndicator' => 'carRental.taxExemptIndicator',
        'travelEntertainmentAuthDataDuration' => 'travelEntertainmentAuthData.duration',
        'travelEntertainmentAuthDataMarket' => 'travelEntertainmentAuthData.market'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carRentalCheckOutDate' => 'setCarRentalCheckOutDate',
        'carRentalCustomerServiceTollFreeNumber' => 'setCarRentalCustomerServiceTollFreeNumber',
        'carRentalDaysRented' => 'setCarRentalDaysRented',
        'carRentalFuelCharges' => 'setCarRentalFuelCharges',
        'carRentalInsuranceCharges' => 'setCarRentalInsuranceCharges',
        'carRentalLocationCity' => 'setCarRentalLocationCity',
        'carRentalLocationCountry' => 'setCarRentalLocationCountry',
        'carRentalLocationStateProvince' => 'setCarRentalLocationStateProvince',
        'carRentalNoShowIndicator' => 'setCarRentalNoShowIndicator',
        'carRentalOneWayDropOffCharges' => 'setCarRentalOneWayDropOffCharges',
        'carRentalRate' => 'setCarRentalRate',
        'carRentalRateIndicator' => 'setCarRentalRateIndicator',
        'carRentalRentalAgreementNumber' => 'setCarRentalRentalAgreementNumber',
        'carRentalRentalClassId' => 'setCarRentalRentalClassId',
        'carRentalRenterName' => 'setCarRentalRenterName',
        'carRentalReturnCity' => 'setCarRentalReturnCity',
        'carRentalReturnCountry' => 'setCarRentalReturnCountry',
        'carRentalReturnDate' => 'setCarRentalReturnDate',
        'carRentalReturnLocationId' => 'setCarRentalReturnLocationId',
        'carRentalReturnStateProvince' => 'setCarRentalReturnStateProvince',
        'carRentalTaxExemptIndicator' => 'setCarRentalTaxExemptIndicator',
        'travelEntertainmentAuthDataDuration' => 'setTravelEntertainmentAuthDataDuration',
        'travelEntertainmentAuthDataMarket' => 'setTravelEntertainmentAuthDataMarket'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carRentalCheckOutDate' => 'getCarRentalCheckOutDate',
        'carRentalCustomerServiceTollFreeNumber' => 'getCarRentalCustomerServiceTollFreeNumber',
        'carRentalDaysRented' => 'getCarRentalDaysRented',
        'carRentalFuelCharges' => 'getCarRentalFuelCharges',
        'carRentalInsuranceCharges' => 'getCarRentalInsuranceCharges',
        'carRentalLocationCity' => 'getCarRentalLocationCity',
        'carRentalLocationCountry' => 'getCarRentalLocationCountry',
        'carRentalLocationStateProvince' => 'getCarRentalLocationStateProvince',
        'carRentalNoShowIndicator' => 'getCarRentalNoShowIndicator',
        'carRentalOneWayDropOffCharges' => 'getCarRentalOneWayDropOffCharges',
        'carRentalRate' => 'getCarRentalRate',
        'carRentalRateIndicator' => 'getCarRentalRateIndicator',
        'carRentalRentalAgreementNumber' => 'getCarRentalRentalAgreementNumber',
        'carRentalRentalClassId' => 'getCarRentalRentalClassId',
        'carRentalRenterName' => 'getCarRentalRenterName',
        'carRentalReturnCity' => 'getCarRentalReturnCity',
        'carRentalReturnCountry' => 'getCarRentalReturnCountry',
        'carRentalReturnDate' => 'getCarRentalReturnDate',
        'carRentalReturnLocationId' => 'getCarRentalReturnLocationId',
        'carRentalReturnStateProvince' => 'getCarRentalReturnStateProvince',
        'carRentalTaxExemptIndicator' => 'getCarRentalTaxExemptIndicator',
        'travelEntertainmentAuthDataDuration' => 'getTravelEntertainmentAuthDataDuration',
        'travelEntertainmentAuthDataMarket' => 'getTravelEntertainmentAuthDataMarket'
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
        $this->setIfExists('carRentalCheckOutDate', $data ?? [], null);
        $this->setIfExists('carRentalCustomerServiceTollFreeNumber', $data ?? [], null);
        $this->setIfExists('carRentalDaysRented', $data ?? [], null);
        $this->setIfExists('carRentalFuelCharges', $data ?? [], null);
        $this->setIfExists('carRentalInsuranceCharges', $data ?? [], null);
        $this->setIfExists('carRentalLocationCity', $data ?? [], null);
        $this->setIfExists('carRentalLocationCountry', $data ?? [], null);
        $this->setIfExists('carRentalLocationStateProvince', $data ?? [], null);
        $this->setIfExists('carRentalNoShowIndicator', $data ?? [], null);
        $this->setIfExists('carRentalOneWayDropOffCharges', $data ?? [], null);
        $this->setIfExists('carRentalRate', $data ?? [], null);
        $this->setIfExists('carRentalRateIndicator', $data ?? [], null);
        $this->setIfExists('carRentalRentalAgreementNumber', $data ?? [], null);
        $this->setIfExists('carRentalRentalClassId', $data ?? [], null);
        $this->setIfExists('carRentalRenterName', $data ?? [], null);
        $this->setIfExists('carRentalReturnCity', $data ?? [], null);
        $this->setIfExists('carRentalReturnCountry', $data ?? [], null);
        $this->setIfExists('carRentalReturnDate', $data ?? [], null);
        $this->setIfExists('carRentalReturnLocationId', $data ?? [], null);
        $this->setIfExists('carRentalReturnStateProvince', $data ?? [], null);
        $this->setIfExists('carRentalTaxExemptIndicator', $data ?? [], null);
        $this->setIfExists('travelEntertainmentAuthDataDuration', $data ?? [], null);
        $this->setIfExists('travelEntertainmentAuthDataMarket', $data ?? [], null);
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
     * Gets carRentalCheckOutDate
     *
     * @return string|null
     */
    public function getCarRentalCheckOutDate()
    {
        return $this->container['carRentalCheckOutDate'];
    }

    /**
     * Sets carRentalCheckOutDate
     *
     * @param string|null $carRentalCheckOutDate The pick-up date. * Date format: `yyyyMMdd`
     *
     * @return self
     */
    public function setCarRentalCheckOutDate($carRentalCheckOutDate)
    {
        if (is_null($carRentalCheckOutDate)) {
            throw new \InvalidArgumentException('non-nullable carRentalCheckOutDate cannot be null');
        }
        $this->container['carRentalCheckOutDate'] = $carRentalCheckOutDate;

        return $this;
    }

    /**
     * Gets carRentalCustomerServiceTollFreeNumber
     *
     * @return string|null
     */
    public function getCarRentalCustomerServiceTollFreeNumber()
    {
        return $this->container['carRentalCustomerServiceTollFreeNumber'];
    }

    /**
     * Sets carRentalCustomerServiceTollFreeNumber
     *
     * @param string|null $carRentalCustomerServiceTollFreeNumber The customer service phone number of the car rental company. * Format: Alphanumeric * maxLength: 17 * For US and CA numbers must be 10 characters in length * Must not start with a space * Must not contain any special characters such as + or - *Must not be all zeros.
     *
     * @return self
     */
    public function setCarRentalCustomerServiceTollFreeNumber($carRentalCustomerServiceTollFreeNumber)
    {
        if (is_null($carRentalCustomerServiceTollFreeNumber)) {
            throw new \InvalidArgumentException('non-nullable carRentalCustomerServiceTollFreeNumber cannot be null');
        }
        $this->container['carRentalCustomerServiceTollFreeNumber'] = $carRentalCustomerServiceTollFreeNumber;

        return $this;
    }

    /**
     * Gets carRentalDaysRented
     *
     * @return string|null
     */
    public function getCarRentalDaysRented()
    {
        return $this->container['carRentalDaysRented'];
    }

    /**
     * Sets carRentalDaysRented
     *
     * @param string|null $carRentalDaysRented Number of days for which the car is being rented. * Format: Numeric * maxLength: 4 * Must not be all spaces
     *
     * @return self
     */
    public function setCarRentalDaysRented($carRentalDaysRented)
    {
        if (is_null($carRentalDaysRented)) {
            throw new \InvalidArgumentException('non-nullable carRentalDaysRented cannot be null');
        }
        $this->container['carRentalDaysRented'] = $carRentalDaysRented;

        return $this;
    }

    /**
     * Gets carRentalFuelCharges
     *
     * @return string|null
     */
    public function getCarRentalFuelCharges()
    {
        return $this->container['carRentalFuelCharges'];
    }

    /**
     * Sets carRentalFuelCharges
     *
     * @param string|null $carRentalFuelCharges Any fuel charges associated with the rental, in [minor units](https://docs.adyen.com/development-resources/currency-codes). * Format: Numeric * maxLength: 12
     *
     * @return self
     */
    public function setCarRentalFuelCharges($carRentalFuelCharges)
    {
        if (is_null($carRentalFuelCharges)) {
            throw new \InvalidArgumentException('non-nullable carRentalFuelCharges cannot be null');
        }
        $this->container['carRentalFuelCharges'] = $carRentalFuelCharges;

        return $this;
    }

    /**
     * Gets carRentalInsuranceCharges
     *
     * @return string|null
     */
    public function getCarRentalInsuranceCharges()
    {
        return $this->container['carRentalInsuranceCharges'];
    }

    /**
     * Sets carRentalInsuranceCharges
     *
     * @param string|null $carRentalInsuranceCharges Any insurance charges associated with the rental, in [minor units](https://docs.adyen.com/development-resources/currency-codes). * Format: Numeric * maxLength: 12 * Must not be all spaces *Must not be all zeros.
     *
     * @return self
     */
    public function setCarRentalInsuranceCharges($carRentalInsuranceCharges)
    {
        if (is_null($carRentalInsuranceCharges)) {
            throw new \InvalidArgumentException('non-nullable carRentalInsuranceCharges cannot be null');
        }
        $this->container['carRentalInsuranceCharges'] = $carRentalInsuranceCharges;

        return $this;
    }

    /**
     * Gets carRentalLocationCity
     *
     * @return string|null
     */
    public function getCarRentalLocationCity()
    {
        return $this->container['carRentalLocationCity'];
    }

    /**
     * Sets carRentalLocationCity
     *
     * @param string|null $carRentalLocationCity The city where the car is rented. * Format: Alphanumeric * maxLength: 18 * Must not start with a space or be all spaces *Must not be all zeros.
     *
     * @return self
     */
    public function setCarRentalLocationCity($carRentalLocationCity)
    {
        if (is_null($carRentalLocationCity)) {
            throw new \InvalidArgumentException('non-nullable carRentalLocationCity cannot be null');
        }
        $this->container['carRentalLocationCity'] = $carRentalLocationCity;

        return $this;
    }

    /**
     * Gets carRentalLocationCountry
     *
     * @return string|null
     */
    public function getCarRentalLocationCountry()
    {
        return $this->container['carRentalLocationCountry'];
    }

    /**
     * Sets carRentalLocationCountry
     *
     * @param string|null $carRentalLocationCountry The country where the car is rented, in [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) format. * Format: Alphanumeric * maxLength: 2
     *
     * @return self
     */
    public function setCarRentalLocationCountry($carRentalLocationCountry)
    {
        if (is_null($carRentalLocationCountry)) {
            throw new \InvalidArgumentException('non-nullable carRentalLocationCountry cannot be null');
        }
        $this->container['carRentalLocationCountry'] = $carRentalLocationCountry;

        return $this;
    }

    /**
     * Gets carRentalLocationStateProvince
     *
     * @return string|null
     */
    public function getCarRentalLocationStateProvince()
    {
        return $this->container['carRentalLocationStateProvince'];
    }

    /**
     * Sets carRentalLocationStateProvince
     *
     * @param string|null $carRentalLocationStateProvince The state or province where the car is rented. * Format: Alphanumeric * maxLength: 2 * Must not start with a space or be all spaces *Must not be all zeros.
     *
     * @return self
     */
    public function setCarRentalLocationStateProvince($carRentalLocationStateProvince)
    {
        if (is_null($carRentalLocationStateProvince)) {
            throw new \InvalidArgumentException('non-nullable carRentalLocationStateProvince cannot be null');
        }
        $this->container['carRentalLocationStateProvince'] = $carRentalLocationStateProvince;

        return $this;
    }

    /**
     * Gets carRentalNoShowIndicator
     *
     * @return string|null
     */
    public function getCarRentalNoShowIndicator()
    {
        return $this->container['carRentalNoShowIndicator'];
    }

    /**
     * Sets carRentalNoShowIndicator
     *
     * @param string|null $carRentalNoShowIndicator Indicates if the customer didn't pick up their rental car. * Y - Customer did not pick up their car * N - Not applicable
     *
     * @return self
     */
    public function setCarRentalNoShowIndicator($carRentalNoShowIndicator)
    {
        if (is_null($carRentalNoShowIndicator)) {
            throw new \InvalidArgumentException('non-nullable carRentalNoShowIndicator cannot be null');
        }
        $this->container['carRentalNoShowIndicator'] = $carRentalNoShowIndicator;

        return $this;
    }

    /**
     * Gets carRentalOneWayDropOffCharges
     *
     * @return string|null
     */
    public function getCarRentalOneWayDropOffCharges()
    {
        return $this->container['carRentalOneWayDropOffCharges'];
    }

    /**
     * Sets carRentalOneWayDropOffCharges
     *
     * @param string|null $carRentalOneWayDropOffCharges The charge for not returning a car to the original rental location, in [minor units](https://docs.adyen.com/development-resources/currency-codes). * maxLength: 12
     *
     * @return self
     */
    public function setCarRentalOneWayDropOffCharges($carRentalOneWayDropOffCharges)
    {
        if (is_null($carRentalOneWayDropOffCharges)) {
            throw new \InvalidArgumentException('non-nullable carRentalOneWayDropOffCharges cannot be null');
        }
        $this->container['carRentalOneWayDropOffCharges'] = $carRentalOneWayDropOffCharges;

        return $this;
    }

    /**
     * Gets carRentalRate
     *
     * @return string|null
     */
    public function getCarRentalRate()
    {
        return $this->container['carRentalRate'];
    }

    /**
     * Sets carRentalRate
     *
     * @param string|null $carRentalRate The daily rental rate, in [minor units](https://docs.adyen.com/development-resources/currency-codes). * Format: Alphanumeric * maxLength: 12
     *
     * @return self
     */
    public function setCarRentalRate($carRentalRate)
    {
        if (is_null($carRentalRate)) {
            throw new \InvalidArgumentException('non-nullable carRentalRate cannot be null');
        }
        $this->container['carRentalRate'] = $carRentalRate;

        return $this;
    }

    /**
     * Gets carRentalRateIndicator
     *
     * @return string|null
     */
    public function getCarRentalRateIndicator()
    {
        return $this->container['carRentalRateIndicator'];
    }

    /**
     * Sets carRentalRateIndicator
     *
     * @param string|null $carRentalRateIndicator Specifies whether the given rate is applied daily or weekly. * D - Daily rate * W - Weekly rate
     *
     * @return self
     */
    public function setCarRentalRateIndicator($carRentalRateIndicator)
    {
        if (is_null($carRentalRateIndicator)) {
            throw new \InvalidArgumentException('non-nullable carRentalRateIndicator cannot be null');
        }
        $this->container['carRentalRateIndicator'] = $carRentalRateIndicator;

        return $this;
    }

    /**
     * Gets carRentalRentalAgreementNumber
     *
     * @return string|null
     */
    public function getCarRentalRentalAgreementNumber()
    {
        return $this->container['carRentalRentalAgreementNumber'];
    }

    /**
     * Sets carRentalRentalAgreementNumber
     *
     * @param string|null $carRentalRentalAgreementNumber The rental agreement number for the car rental. * Format: Alphanumeric * maxLength: 9 * Must not start with a space or be all spaces *Must not be all zeros.
     *
     * @return self
     */
    public function setCarRentalRentalAgreementNumber($carRentalRentalAgreementNumber)
    {
        if (is_null($carRentalRentalAgreementNumber)) {
            throw new \InvalidArgumentException('non-nullable carRentalRentalAgreementNumber cannot be null');
        }
        $this->container['carRentalRentalAgreementNumber'] = $carRentalRentalAgreementNumber;

        return $this;
    }

    /**
     * Gets carRentalRentalClassId
     *
     * @return string|null
     */
    public function getCarRentalRentalClassId()
    {
        return $this->container['carRentalRentalClassId'];
    }

    /**
     * Sets carRentalRentalClassId
     *
     * @param string|null $carRentalRentalClassId The classification of the rental car. * Format: Alphanumeric * maxLength: 4 * Must not start with a space or be all spaces *Must not be all zeros.
     *
     * @return self
     */
    public function setCarRentalRentalClassId($carRentalRentalClassId)
    {
        if (is_null($carRentalRentalClassId)) {
            throw new \InvalidArgumentException('non-nullable carRentalRentalClassId cannot be null');
        }
        $this->container['carRentalRentalClassId'] = $carRentalRentalClassId;

        return $this;
    }

    /**
     * Gets carRentalRenterName
     *
     * @return string|null
     */
    public function getCarRentalRenterName()
    {
        return $this->container['carRentalRenterName'];
    }

    /**
     * Sets carRentalRenterName
     *
     * @param string|null $carRentalRenterName The name of the person renting the car. * Format: Alphanumeric * maxLength: 26 * If you send more than 26 characters, the name is truncated * Must not start with a space or be all spaces *Must not be all zeros.
     *
     * @return self
     */
    public function setCarRentalRenterName($carRentalRenterName)
    {
        if (is_null($carRentalRenterName)) {
            throw new \InvalidArgumentException('non-nullable carRentalRenterName cannot be null');
        }
        $this->container['carRentalRenterName'] = $carRentalRenterName;

        return $this;
    }

    /**
     * Gets carRentalReturnCity
     *
     * @return string|null
     */
    public function getCarRentalReturnCity()
    {
        return $this->container['carRentalReturnCity'];
    }

    /**
     * Sets carRentalReturnCity
     *
     * @param string|null $carRentalReturnCity The city where the car must be returned. * Format: Alphanumeric * maxLength: 18 * Must not start with a space or be all spaces *Must not be all zeros.
     *
     * @return self
     */
    public function setCarRentalReturnCity($carRentalReturnCity)
    {
        if (is_null($carRentalReturnCity)) {
            throw new \InvalidArgumentException('non-nullable carRentalReturnCity cannot be null');
        }
        $this->container['carRentalReturnCity'] = $carRentalReturnCity;

        return $this;
    }

    /**
     * Gets carRentalReturnCountry
     *
     * @return string|null
     */
    public function getCarRentalReturnCountry()
    {
        return $this->container['carRentalReturnCountry'];
    }

    /**
     * Sets carRentalReturnCountry
     *
     * @param string|null $carRentalReturnCountry The country where the car must be returned, in [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) format. * Format: Alphanumeric * maxLength: 2
     *
     * @return self
     */
    public function setCarRentalReturnCountry($carRentalReturnCountry)
    {
        if (is_null($carRentalReturnCountry)) {
            throw new \InvalidArgumentException('non-nullable carRentalReturnCountry cannot be null');
        }
        $this->container['carRentalReturnCountry'] = $carRentalReturnCountry;

        return $this;
    }

    /**
     * Gets carRentalReturnDate
     *
     * @return string|null
     */
    public function getCarRentalReturnDate()
    {
        return $this->container['carRentalReturnDate'];
    }

    /**
     * Sets carRentalReturnDate
     *
     * @param string|null $carRentalReturnDate The last date to return the car by. * Date format: `yyyyMMdd` * maxLength: 8
     *
     * @return self
     */
    public function setCarRentalReturnDate($carRentalReturnDate)
    {
        if (is_null($carRentalReturnDate)) {
            throw new \InvalidArgumentException('non-nullable carRentalReturnDate cannot be null');
        }
        $this->container['carRentalReturnDate'] = $carRentalReturnDate;

        return $this;
    }

    /**
     * Gets carRentalReturnLocationId
     *
     * @return string|null
     */
    public function getCarRentalReturnLocationId()
    {
        return $this->container['carRentalReturnLocationId'];
    }

    /**
     * Sets carRentalReturnLocationId
     *
     * @param string|null $carRentalReturnLocationId The agency code, phone number, or address abbreviation * Format: Alphanumeric * maxLength: 10 * Must not start with a space or be all spaces *Must not be all zeros.
     *
     * @return self
     */
    public function setCarRentalReturnLocationId($carRentalReturnLocationId)
    {
        if (is_null($carRentalReturnLocationId)) {
            throw new \InvalidArgumentException('non-nullable carRentalReturnLocationId cannot be null');
        }
        $this->container['carRentalReturnLocationId'] = $carRentalReturnLocationId;

        return $this;
    }

    /**
     * Gets carRentalReturnStateProvince
     *
     * @return string|null
     */
    public function getCarRentalReturnStateProvince()
    {
        return $this->container['carRentalReturnStateProvince'];
    }

    /**
     * Sets carRentalReturnStateProvince
     *
     * @param string|null $carRentalReturnStateProvince The state or province where the car must be returned. * Format: Alphanumeric * maxLength: 3 * Must not start with a space or be all spaces *Must not be all zeros.
     *
     * @return self
     */
    public function setCarRentalReturnStateProvince($carRentalReturnStateProvince)
    {
        if (is_null($carRentalReturnStateProvince)) {
            throw new \InvalidArgumentException('non-nullable carRentalReturnStateProvince cannot be null');
        }
        $this->container['carRentalReturnStateProvince'] = $carRentalReturnStateProvince;

        return $this;
    }

    /**
     * Gets carRentalTaxExemptIndicator
     *
     * @return string|null
     */
    public function getCarRentalTaxExemptIndicator()
    {
        return $this->container['carRentalTaxExemptIndicator'];
    }

    /**
     * Sets carRentalTaxExemptIndicator
     *
     * @param string|null $carRentalTaxExemptIndicator Indicates if the goods or services were tax-exempt, or if tax was not paid on them.  Values: * Y - Goods or services were tax exempt * N - Tax was not collected
     *
     * @return self
     */
    public function setCarRentalTaxExemptIndicator($carRentalTaxExemptIndicator)
    {
        if (is_null($carRentalTaxExemptIndicator)) {
            throw new \InvalidArgumentException('non-nullable carRentalTaxExemptIndicator cannot be null');
        }
        $this->container['carRentalTaxExemptIndicator'] = $carRentalTaxExemptIndicator;

        return $this;
    }

    /**
     * Gets travelEntertainmentAuthDataDuration
     *
     * @return string|null
     */
    public function getTravelEntertainmentAuthDataDuration()
    {
        return $this->container['travelEntertainmentAuthDataDuration'];
    }

    /**
     * Sets travelEntertainmentAuthDataDuration
     *
     * @param string|null $travelEntertainmentAuthDataDuration Number of days the car is rented for. This should be included in the auth message. * Format: Numeric * maxLength: 4
     *
     * @return self
     */
    public function setTravelEntertainmentAuthDataDuration($travelEntertainmentAuthDataDuration)
    {
        if (is_null($travelEntertainmentAuthDataDuration)) {
            throw new \InvalidArgumentException('non-nullable travelEntertainmentAuthDataDuration cannot be null');
        }
        $this->container['travelEntertainmentAuthDataDuration'] = $travelEntertainmentAuthDataDuration;

        return $this;
    }

    /**
     * Gets travelEntertainmentAuthDataMarket
     *
     * @return string|null
     */
    public function getTravelEntertainmentAuthDataMarket()
    {
        return $this->container['travelEntertainmentAuthDataMarket'];
    }

    /**
     * Sets travelEntertainmentAuthDataMarket
     *
     * @param string|null $travelEntertainmentAuthDataMarket Indicates what market-specific dataset will be submitted or is being submitted. Value should be 'A' for car rental. This should be included in the auth message. * Format: Alphanumeric * maxLength: 1
     *
     * @return self
     */
    public function setTravelEntertainmentAuthDataMarket($travelEntertainmentAuthDataMarket)
    {
        if (is_null($travelEntertainmentAuthDataMarket)) {
            throw new \InvalidArgumentException('non-nullable travelEntertainmentAuthDataMarket cannot be null');
        }
        $this->container['travelEntertainmentAuthDataMarket'] = $travelEntertainmentAuthDataMarket;

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
