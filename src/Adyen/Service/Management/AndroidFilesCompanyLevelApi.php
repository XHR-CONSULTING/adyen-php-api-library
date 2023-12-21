<?php
/**
 * Management API
 *
 * The version of the OpenAPI document: 3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Adyen\Service\Management;

use Adyen\AdyenException;
use Adyen\Client;
use Adyen\Service;
use Adyen\Model\Management\ObjectSerializer;

class AndroidFilesCompanyLevelApi extends Service
{
    /**
     * @var array|string|string[]
     */
    private $baseURL;

    /**
     * AndroidFilesCompanyLevelApi constructor.
     *
     * @param \Adyen\Client $client
     * @throws AdyenException
     */
    public function __construct(Client $client)
    {
        parent::__construct($client);

        // Create the baseUrl based on live/test and optional live-url-prefix
        $this->baseURL = $this->createBaseUrl("https://management-test.adyen.com/v3");
    }

    /**
    * Get Android app
    *
    * @param string $companyId
    * @param string $id
    * @param array|null $requestOptions
    * @return \Adyen\Model\Management\AndroidApp
    * @throws AdyenException
    */
    public function getAndroidApp(string $companyId, string $id, array $requestOptions = null): \Adyen\Model\Management\AndroidApp
    {
        $endpoint = $this->baseURL . str_replace(['{companyId}', '{id}'], [$companyId, $id], "/companies/{companyId}/androidApps/{id}");
        $response = $this->requestHttp($endpoint, strtolower('GET'), null, $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Management\AndroidApp::class);
    }

    /**
    * Get a list of Android apps
    *
    * @param string $companyId
    * @param array|null $requestOptions ['queryParams' => ['pageNumber'=> int, 'pageSize'=> int, 'packageName'=> string, 'versionCode'=> int]]
    * @return \Adyen\Model\Management\AndroidAppsResponse
    * @throws AdyenException
    */
    public function listAndroidApps(string $companyId, array $requestOptions = null): \Adyen\Model\Management\AndroidAppsResponse
    {
        $endpoint = $this->baseURL . str_replace(['{companyId}'], [$companyId], "/companies/{companyId}/androidApps");
        $response = $this->requestHttp($endpoint, strtolower('GET'), null, $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Management\AndroidAppsResponse::class);
    }

    /**
    * Get a list of Android certificates
    *
    * @param string $companyId
    * @param array|null $requestOptions ['queryParams' => ['pageNumber'=> int, 'pageSize'=> int, 'certificateName'=> string]]
    * @return \Adyen\Model\Management\AndroidCertificatesResponse
    * @throws AdyenException
    */
    public function listAndroidCertificates(string $companyId, array $requestOptions = null): \Adyen\Model\Management\AndroidCertificatesResponse
    {
        $endpoint = $this->baseURL . str_replace(['{companyId}'], [$companyId], "/companies/{companyId}/androidCertificates");
        $response = $this->requestHttp($endpoint, strtolower('GET'), null, $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Management\AndroidCertificatesResponse::class);
    }

    /**
    * Upload Android App
    *
    * @param string $companyId
    * @param array|null $requestOptions

    * @throws AdyenException
    */
    public function uploadAndroidApp(string $companyId, array $requestOptions = null)
    {
        $endpoint = $this->baseURL . str_replace(['{companyId}'], [$companyId], "/companies/{companyId}/androidApps");
        $this->requestHttp($endpoint, strtolower('POST'), null, $requestOptions);
    }
}
