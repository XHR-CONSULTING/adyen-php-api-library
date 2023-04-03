<?php
/**
 * Configuration API
 *
 * The Configuration API enables you to create a platform where you can onboard your users as account holders and create balance accounts, cards, and business accounts.  ## Authentication Your Adyen contact will provide your API credential and an API key. To connect to the API, add an `X-API-Key` header with the API key as the value, for example:   ``` curl -H \"Content-Type: application/json\" \\ -H \"X-API-Key: YOUR_API_KEY\" \\ ... ```  Alternatively, you can use the username and password to connect to the API using basic authentication. For example:  ``` curl -H \"Content-Type: application/json\" \\ -U \"ws@BalancePlatform.YOUR_BALANCE_PLATFORM\":\"YOUR_WS_PASSWORD\" \\ ... ``` ## Versioning The Configuration API supports [versioning](https://docs.adyen.com/development-resources/versioning) using a version suffix in the endpoint URL. This suffix has the following format: \"vXX\", where XX is the version number.  For example: ``` https://balanceplatform-api-test.adyen.com/bcl/v2/accountHolders ``` ## Going live When going live, your Adyen contact will provide your API credential for the live environment. You can then use the API key or the username and password to send requests to `https://balanceplatform-api-live.adyen.com/bcl/v2`.
 *
 * The version of the OpenAPI document: 2
 * Contact: developer-experience@adyen.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Adyen\Service\BalancePlatform;

use Adyen\AdyenException;
use Adyen\Client;
use Adyen\Service;
use Adyen\Model\BalancePlatform\ObjectSerializer;

class PaymentInstrumentsApi extends Service
{
    /**
     * @var array|string|string[]
     */
    private $baseURL;

    /**
     * PaymentInstrumentsApi constructor.
     *
     * @param \Adyen\Client $client
     * @throws AdyenException
     */
    public function __construct(Client $client)
    {
        parent::__construct($client);

        // Create the baseUrl based on live/test and optional live-url-prefix
        $this->baseURL = $this->createBaseUrl("https://balanceplatform-api-test.adyen.com/bcl/v2");
    }

    /**
    * Get a payment instrument
    *
    * @param string $id
    * @param array|null $requestOptions ['idempotencyKey' => string]
    * @return \Adyen\Model\BalancePlatform\PaymentInstrument
    * @throws AdyenException
    */
    public function getPaymentInstrument(string $id, array $requestOptions = null): \Adyen\Model\BalancePlatform\PaymentInstrument
    {
        $endpoint = $this->baseURL . str_replace(['{id}'], [$id], "/paymentInstruments/{id}");
        $response = $this->requestHttp($endpoint, strtolower('GET'), null, $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\BalancePlatform\PaymentInstrument::class);
    }

    /**
    * Get the PAN of a payment instrument
    *
    * @param string $id
    * @param array|null $requestOptions ['idempotencyKey' => string]
    * @return \Adyen\Model\BalancePlatform\PaymentInstrumentRevealInfo
    * @throws AdyenException
    */
    public function getPanOfPaymentInstrument(string $id, array $requestOptions = null): \Adyen\Model\BalancePlatform\PaymentInstrumentRevealInfo
    {
        $endpoint = $this->baseURL . str_replace(['{id}'], [$id], "/paymentInstruments/{id}/reveal");
        $response = $this->requestHttp($endpoint, strtolower('GET'), null, $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\BalancePlatform\PaymentInstrumentRevealInfo::class);
    }

    /**
    * Get all transaction rules for a payment instrument
    *
    * @param string $id
    * @param array|null $requestOptions ['idempotencyKey' => string]
    * @return \Adyen\Model\BalancePlatform\TransactionRulesResponse
    * @throws AdyenException
    */
    public function getAllTransactionRulesForPaymentInstrument(string $id, array $requestOptions = null): \Adyen\Model\BalancePlatform\TransactionRulesResponse
    {
        $endpoint = $this->baseURL . str_replace(['{id}'], [$id], "/paymentInstruments/{id}/transactionRules");
        $response = $this->requestHttp($endpoint, strtolower('GET'), null, $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\BalancePlatform\TransactionRulesResponse::class);
    }

    /**
    * Update a payment instrument
    *
    * @param string $id
    * @param \Adyen\Model\BalancePlatform\PaymentInstrumentUpdateRequest $paymentInstrumentUpdateRequest
    * @param array|null $requestOptions ['idempotencyKey' => string]
    * @return \Adyen\Model\BalancePlatform\UpdatePaymentInstrument
    * @throws AdyenException
    */
    public function updatePaymentInstrument(string $id, \Adyen\Model\BalancePlatform\PaymentInstrumentUpdateRequest $paymentInstrumentUpdateRequest, array $requestOptions = null): \Adyen\Model\BalancePlatform\UpdatePaymentInstrument
    {
        $endpoint = $this->baseURL . str_replace(['{id}'], [$id], "/paymentInstruments/{id}");
        $response = $this->requestHttp($endpoint, strtolower('PATCH'), (array) $paymentInstrumentUpdateRequest->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\BalancePlatform\UpdatePaymentInstrument::class);
    }

    /**
    * Create a payment instrument
    *
    * @param \Adyen\Model\BalancePlatform\PaymentInstrumentInfo $paymentInstrumentInfo
    * @param array|null $requestOptions ['idempotencyKey' => string]
    * @return \Adyen\Model\BalancePlatform\PaymentInstrument
    * @throws AdyenException
    */
    public function createPaymentInstrument(\Adyen\Model\BalancePlatform\PaymentInstrumentInfo $paymentInstrumentInfo, array $requestOptions = null): \Adyen\Model\BalancePlatform\PaymentInstrument
    {
        $endpoint = $this->baseURL . "/paymentInstruments";
        $response = $this->requestHttp($endpoint, strtolower('POST'), (array) $paymentInstrumentInfo->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\BalancePlatform\PaymentInstrument::class);
    }
}
