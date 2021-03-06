<?php
/**
 * AtomicSwapApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * HTTP API
 *
 * The Binance Chain HTTP API provides access to a Binance Chain node deployment and market data services.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * AtomicSwapApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AtomicSwapApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getAtomicSwapUsingGET
     *
     * AtomicSwap
     *
     * @param  string $id swap id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\AtomicSwap
     */
    public function getAtomicSwapUsingGET($id)
    {
        list($response) = $this->getAtomicSwapUsingGETWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getAtomicSwapUsingGETWithHttpInfo
     *
     * AtomicSwap
     *
     * @param  string $id swap id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\AtomicSwap, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAtomicSwapUsingGETWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\AtomicSwap';
        $request = $this->getAtomicSwapUsingGETRequest($id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
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
                        '\Swagger\Client\Model\AtomicSwap',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAtomicSwapUsingGETAsync
     *
     * AtomicSwap
     *
     * @param  string $id swap id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAtomicSwapUsingGETAsync($id)
    {
        return $this->getAtomicSwapUsingGETAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAtomicSwapUsingGETAsyncWithHttpInfo
     *
     * AtomicSwap
     *
     * @param  string $id swap id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAtomicSwapUsingGETAsyncWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\AtomicSwap';
        $request = $this->getAtomicSwapUsingGETRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
     * Create request for operation 'getAtomicSwapUsingGET'
     *
     * @param  string $id swap id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAtomicSwapUsingGETRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getAtomicSwapUsingGET'
            );
        }

        $resourcePath = '/api/v1/atomic-swaps/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


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
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
     * Operation getAtomicSwapsByAddrUsingGET
     *
     * AtomicSwap
     *
     * @param  int $end_time end time of blockTimestamp (optional)
     * @param  string $from_address At least one of toAddress and fromAddress should be provided as parameter (optional)
     * @param  int $limit default 25; max 1000. (optional, default to 25)
     * @param  int $offset start with 0; default 0. (optional, default to 0)
     * @param  int $start_time start time of blockTimestamp; The maximum start - end query window is 3 months; Default query window is the latest 30 days. (optional)
     * @param  string $to_address At least one of toAddress and fromAddress should be provided as parameter (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\AtomicSwapPage
     */
    public function getAtomicSwapsByAddrUsingGET($end_time = null, $from_address = null, $limit = '25', $offset = '0', $start_time = null, $to_address = null)
    {
        list($response) = $this->getAtomicSwapsByAddrUsingGETWithHttpInfo($end_time, $from_address, $limit, $offset, $start_time, $to_address);
        return $response;
    }

    /**
     * Operation getAtomicSwapsByAddrUsingGETWithHttpInfo
     *
     * AtomicSwap
     *
     * @param  int $end_time end time of blockTimestamp (optional)
     * @param  string $from_address At least one of toAddress and fromAddress should be provided as parameter (optional)
     * @param  int $limit default 25; max 1000. (optional, default to 25)
     * @param  int $offset start with 0; default 0. (optional, default to 0)
     * @param  int $start_time start time of blockTimestamp; The maximum start - end query window is 3 months; Default query window is the latest 30 days. (optional)
     * @param  string $to_address At least one of toAddress and fromAddress should be provided as parameter (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\AtomicSwapPage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAtomicSwapsByAddrUsingGETWithHttpInfo($end_time = null, $from_address = null, $limit = '25', $offset = '0', $start_time = null, $to_address = null)
    {
        $returnType = '\Swagger\Client\Model\AtomicSwapPage';
        $request = $this->getAtomicSwapsByAddrUsingGETRequest($end_time, $from_address, $limit, $offset, $start_time, $to_address);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
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
                        '\Swagger\Client\Model\AtomicSwapPage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAtomicSwapsByAddrUsingGETAsync
     *
     * AtomicSwap
     *
     * @param  int $end_time end time of blockTimestamp (optional)
     * @param  string $from_address At least one of toAddress and fromAddress should be provided as parameter (optional)
     * @param  int $limit default 25; max 1000. (optional, default to 25)
     * @param  int $offset start with 0; default 0. (optional, default to 0)
     * @param  int $start_time start time of blockTimestamp; The maximum start - end query window is 3 months; Default query window is the latest 30 days. (optional)
     * @param  string $to_address At least one of toAddress and fromAddress should be provided as parameter (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAtomicSwapsByAddrUsingGETAsync($end_time = null, $from_address = null, $limit = '25', $offset = '0', $start_time = null, $to_address = null)
    {
        return $this->getAtomicSwapsByAddrUsingGETAsyncWithHttpInfo($end_time, $from_address, $limit, $offset, $start_time, $to_address)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAtomicSwapsByAddrUsingGETAsyncWithHttpInfo
     *
     * AtomicSwap
     *
     * @param  int $end_time end time of blockTimestamp (optional)
     * @param  string $from_address At least one of toAddress and fromAddress should be provided as parameter (optional)
     * @param  int $limit default 25; max 1000. (optional, default to 25)
     * @param  int $offset start with 0; default 0. (optional, default to 0)
     * @param  int $start_time start time of blockTimestamp; The maximum start - end query window is 3 months; Default query window is the latest 30 days. (optional)
     * @param  string $to_address At least one of toAddress and fromAddress should be provided as parameter (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAtomicSwapsByAddrUsingGETAsyncWithHttpInfo($end_time = null, $from_address = null, $limit = '25', $offset = '0', $start_time = null, $to_address = null)
    {
        $returnType = '\Swagger\Client\Model\AtomicSwapPage';
        $request = $this->getAtomicSwapsByAddrUsingGETRequest($end_time, $from_address, $limit, $offset, $start_time, $to_address);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
     * Create request for operation 'getAtomicSwapsByAddrUsingGET'
     *
     * @param  int $end_time end time of blockTimestamp (optional)
     * @param  string $from_address At least one of toAddress and fromAddress should be provided as parameter (optional)
     * @param  int $limit default 25; max 1000. (optional, default to 25)
     * @param  int $offset start with 0; default 0. (optional, default to 0)
     * @param  int $start_time start time of blockTimestamp; The maximum start - end query window is 3 months; Default query window is the latest 30 days. (optional)
     * @param  string $to_address At least one of toAddress and fromAddress should be provided as parameter (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAtomicSwapsByAddrUsingGETRequest($end_time = null, $from_address = null, $limit = '25', $offset = '0', $start_time = null, $to_address = null)
    {

        $resourcePath = '/api/v1/atomic-swaps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($end_time !== null) {
            $queryParams['endTime'] = ObjectSerializer::toQueryValue($end_time, 'int64');
        }
        // query params
        if ($from_address !== null) {
            $queryParams['fromAddress'] = ObjectSerializer::toQueryValue($from_address, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, 'int32');
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset, 'int32');
        }
        // query params
        if ($start_time !== null) {
            $queryParams['startTime'] = ObjectSerializer::toQueryValue($start_time, 'int64');
        }
        // query params
        if ($to_address !== null) {
            $queryParams['toAddress'] = ObjectSerializer::toQueryValue($to_address, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
