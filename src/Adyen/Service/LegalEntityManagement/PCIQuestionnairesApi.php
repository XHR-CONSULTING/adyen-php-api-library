<?php
/**
 * Legal Entity Management API
 *
 * The version of the OpenAPI document: 3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Adyen\Service\LegalEntityManagement;

use Adyen\AdyenException;
use Adyen\Client;
use Adyen\Service;
use Adyen\Model\LegalEntityManagement\ObjectSerializer;

class PCIQuestionnairesApi extends Service
{
    /**
     * @var array|string|string[]
     */
    private $baseURL;

    /**
     * PCIQuestionnairesApi constructor.
     *
     * @param \Adyen\Client $client
     * @throws AdyenException
     */
    public function __construct(Client $client)
    {
        parent::__construct($client);

        // Create the baseUrl based on live/test and optional live-url-prefix
        $this->baseURL = $this->createBaseUrl("https://kyc-test.adyen.com/lem/v3");
    }

    /**
    * Generate PCI questionnaire
    *
    * @param string $id
    * @param \Adyen\Model\LegalEntityManagement\GeneratePciDescriptionRequest $generatePciDescriptionRequest
    * @param array|null $requestOptions
    * @return \Adyen\Model\LegalEntityManagement\GeneratePciDescriptionResponse
    * @throws AdyenException
    */
    public function generatePciQuestionnaire(string $id, \Adyen\Model\LegalEntityManagement\GeneratePciDescriptionRequest $generatePciDescriptionRequest, array $requestOptions = null): \Adyen\Model\LegalEntityManagement\GeneratePciDescriptionResponse
    {
        $endpoint = $this->baseURL . str_replace(['{id}'], [$id], "/legalEntities/{id}/pciQuestionnaires/generatePciTemplates");
        $response = $this->requestHttp($endpoint, strtolower('POST'), (array) $generatePciDescriptionRequest->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\LegalEntityManagement\GeneratePciDescriptionResponse::class);
    }

    /**
    * Get PCI questionnaire
    *
    * @param string $id
    * @param string $pciid
    * @param array|null $requestOptions
    * @return \Adyen\Model\LegalEntityManagement\GetPciQuestionnaireResponse
    * @throws AdyenException
    */
    public function getPciQuestionnaire(string $id, string $pciid, array $requestOptions = null): \Adyen\Model\LegalEntityManagement\GetPciQuestionnaireResponse
    {
        $endpoint = $this->baseURL . str_replace(['{id}', '{pciid}'], [$id, $pciid], "/legalEntities/{id}/pciQuestionnaires/{pciid}");
        $response = $this->requestHttp($endpoint, strtolower('GET'), null, $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\LegalEntityManagement\GetPciQuestionnaireResponse::class);
    }

    /**
    * Get PCI questionnaire details
    *
    * @param string $id
    * @param array|null $requestOptions
    * @return \Adyen\Model\LegalEntityManagement\GetPciQuestionnaireInfosResponse
    * @throws AdyenException
    */
    public function getPciQuestionnaireDetails(string $id, array $requestOptions = null): \Adyen\Model\LegalEntityManagement\GetPciQuestionnaireInfosResponse
    {
        $endpoint = $this->baseURL . str_replace(['{id}'], [$id], "/legalEntities/{id}/pciQuestionnaires");
        $response = $this->requestHttp($endpoint, strtolower('GET'), null, $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\LegalEntityManagement\GetPciQuestionnaireInfosResponse::class);
    }

    /**
    * Sign PCI questionnaire
    *
    * @param string $id
    * @param \Adyen\Model\LegalEntityManagement\PciSigningRequest $pciSigningRequest
    * @param array|null $requestOptions
    * @return \Adyen\Model\LegalEntityManagement\PciSigningResponse
    * @throws AdyenException
    */
    public function signPciQuestionnaire(string $id, \Adyen\Model\LegalEntityManagement\PciSigningRequest $pciSigningRequest, array $requestOptions = null): \Adyen\Model\LegalEntityManagement\PciSigningResponse
    {
        $endpoint = $this->baseURL . str_replace(['{id}'], [$id], "/legalEntities/{id}/pciQuestionnaires/signPciTemplates");
        $response = $this->requestHttp($endpoint, strtolower('POST'), (array) $pciSigningRequest->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\LegalEntityManagement\PciSigningResponse::class);
    }
}
