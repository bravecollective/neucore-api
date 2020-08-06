<?php
/**
 * ApplicationTrackingApi
 * PHP version 5
 *
 * @category Class
 * @package  Brave\NeucoreApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Neucore API
 *
 * Client library of Neucore API
 *
 * The version of the OpenAPI document: 1.14.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Brave\NeucoreApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Brave\NeucoreApi\ApiException;
use Brave\NeucoreApi\Configuration;
use Brave\NeucoreApi\HeaderSelector;
use Brave\NeucoreApi\ObjectSerializer;

/**
 * ApplicationTrackingApi Class Doc Comment
 *
 * @category Class
 * @package  Brave\NeucoreApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApplicationTrackingApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation memberTrackingV1
     *
     * Return corporation member tracking data.
     *
     * @param  int $id EVE corporation ID. (required)
     * @param  int $inactive Limit to members who have been inactive for x days or longer. (optional)
     * @param  int $active Limit to members who were active in the last x days. (optional)
     * @param  string $account Limit to members with (true) or without (false) an account. (optional)
     *
     * @throws \Brave\NeucoreApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Brave\NeucoreApi\Model\CorporationMember[]
     */
    public function memberTrackingV1($id, $inactive = null, $active = null, $account = null)
    {
        list($response) = $this->memberTrackingV1WithHttpInfo($id, $inactive, $active, $account);
        return $response;
    }

    /**
     * Operation memberTrackingV1WithHttpInfo
     *
     * Return corporation member tracking data.
     *
     * @param  int $id EVE corporation ID. (required)
     * @param  int $inactive Limit to members who have been inactive for x days or longer. (optional)
     * @param  int $active Limit to members who were active in the last x days. (optional)
     * @param  string $account Limit to members with (true) or without (false) an account. (optional)
     *
     * @throws \Brave\NeucoreApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Brave\NeucoreApi\Model\CorporationMember[], HTTP status code, HTTP response headers (array of strings)
     */
    public function memberTrackingV1WithHttpInfo($id, $inactive = null, $active = null, $account = null)
    {
        $request = $this->memberTrackingV1Request($id, $inactive, $active, $account);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Brave\NeucoreApi\Model\CorporationMember[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Brave\NeucoreApi\Model\CorporationMember[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Brave\NeucoreApi\Model\CorporationMember[]';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Brave\NeucoreApi\Model\CorporationMember[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation memberTrackingV1Async
     *
     * Return corporation member tracking data.
     *
     * @param  int $id EVE corporation ID. (required)
     * @param  int $inactive Limit to members who have been inactive for x days or longer. (optional)
     * @param  int $active Limit to members who were active in the last x days. (optional)
     * @param  string $account Limit to members with (true) or without (false) an account. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function memberTrackingV1Async($id, $inactive = null, $active = null, $account = null)
    {
        return $this->memberTrackingV1AsyncWithHttpInfo($id, $inactive, $active, $account)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation memberTrackingV1AsyncWithHttpInfo
     *
     * Return corporation member tracking data.
     *
     * @param  int $id EVE corporation ID. (required)
     * @param  int $inactive Limit to members who have been inactive for x days or longer. (optional)
     * @param  int $active Limit to members who were active in the last x days. (optional)
     * @param  string $account Limit to members with (true) or without (false) an account. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function memberTrackingV1AsyncWithHttpInfo($id, $inactive = null, $active = null, $account = null)
    {
        $returnType = '\Brave\NeucoreApi\Model\CorporationMember[]';
        $request = $this->memberTrackingV1Request($id, $inactive, $active, $account);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'memberTrackingV1'
     *
     * @param  int $id EVE corporation ID. (required)
     * @param  int $inactive Limit to members who have been inactive for x days or longer. (optional)
     * @param  int $active Limit to members who were active in the last x days. (optional)
     * @param  string $account Limit to members with (true) or without (false) an account. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function memberTrackingV1Request($id, $inactive = null, $active = null, $account = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling memberTrackingV1'
            );
        }

        $resourcePath = '/app/v1/corporation/{id}/member-tracking';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($inactive !== null) {
            if('form' === 'form' && is_array($inactive)) {
                foreach($inactive as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['inactive'] = $inactive;
            }
        }
        // query params
        if ($active !== null) {
            if('form' === 'form' && is_array($active)) {
                foreach($active as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['active'] = $active;
            }
        }
        // query params
        if ($account !== null) {
            if('form' === 'form' && is_array($account)) {
                foreach($account as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['account'] = $account;
            }
        }


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
