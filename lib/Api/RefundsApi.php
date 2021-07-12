<?php
/**
 * RefundsApi
 * PHP version 5
 *
 * @category Class
 * @package  Vismutx\KlarnaOrderManagementApiPhp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Klarna Order Managment API
 *
 * API to handle order lifecycle
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Vismutx\KlarnaOrderManagementApiPhp\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Vismutx\KlarnaOrderManagementApiPhp\ApiException;
use Vismutx\KlarnaOrderManagementApiPhp\Configuration;
use Vismutx\KlarnaOrderManagementApiPhp\HeaderSelector;
use Vismutx\KlarnaOrderManagementApiPhp\ObjectSerializer;

/**
 * RefundsApi Class Doc Comment
 *
 * @category Class
 * @package  Vismutx\KlarnaOrderManagementApiPhp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RefundsApi
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
     * Operation get
     *
     * Get refund
     *
     * @param  string $order_id Order id (required)
     * @param  string $refund_id Refund id (required)
     *
     * @throws \Vismutx\KlarnaOrderManagementApiPhp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Vismutx\KlarnaOrderManagementApiPhp\Model\Refund
     */
    public function get($order_id, $refund_id)
    {
        list($response) = $this->getWithHttpInfo($order_id, $refund_id);
        return $response;
    }

    /**
     * Operation getWithHttpInfo
     *
     * Get refund
     *
     * @param  string $order_id Order id (required)
     * @param  string $refund_id Refund id (required)
     *
     * @throws \Vismutx\KlarnaOrderManagementApiPhp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Vismutx\KlarnaOrderManagementApiPhp\Model\Refund, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo($order_id, $refund_id)
    {
        $returnType = '\Vismutx\KlarnaOrderManagementApiPhp\Model\Refund';
        $request = $this->getRequest($order_id, $refund_id);

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
                if ($returnType !== 'string') {
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
                        '\Vismutx\KlarnaOrderManagementApiPhp\Model\Refund',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Vismutx\KlarnaOrderManagementApiPhp\Model\NotFoundErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAsync
     *
     * Get refund
     *
     * @param  string $order_id Order id (required)
     * @param  string $refund_id Refund id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync($order_id, $refund_id)
    {
        return $this->getAsyncWithHttpInfo($order_id, $refund_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAsyncWithHttpInfo
     *
     * Get refund
     *
     * @param  string $order_id Order id (required)
     * @param  string $refund_id Refund id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsyncWithHttpInfo($order_id, $refund_id)
    {
        $returnType = '\Vismutx\KlarnaOrderManagementApiPhp\Model\Refund';
        $request = $this->getRequest($order_id, $refund_id);

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
     * Create request for operation 'get'
     *
     * @param  string $order_id Order id (required)
     * @param  string $refund_id Refund id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRequest($order_id, $refund_id)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_id when calling get'
            );
        }
        // verify the required parameter 'refund_id' is set
        if ($refund_id === null || (is_array($refund_id) && count($refund_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $refund_id when calling get'
            );
        }

        $resourcePath = '/ordermanagement/v1/orders/{order_id}/refunds/{refund_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'order_id' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }
        // path params
        if ($refund_id !== null) {
            $resourcePath = str_replace(
                '{' . 'refund_id' . '}',
                ObjectSerializer::toPathValue($refund_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * Operation refundOrder
     *
     * Create a refund
     *
     * @param  string $order_id Order id (required)
     * @param  \Vismutx\KlarnaOrderManagementApiPhp\Model\RefundObject $body body (optional)
     * @param  string $klarna_idempotency_key This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. (optional)
     *
     * @throws \Vismutx\KlarnaOrderManagementApiPhp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function refundOrder($order_id, $body = null, $klarna_idempotency_key = null)
    {
        $this->refundOrderWithHttpInfo($order_id, $body, $klarna_idempotency_key);
    }

    /**
     * Operation refundOrderWithHttpInfo
     *
     * Create a refund
     *
     * @param  string $order_id Order id (required)
     * @param  \Vismutx\KlarnaOrderManagementApiPhp\Model\RefundObject $body (optional)
     * @param  string $klarna_idempotency_key This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. (optional)
     *
     * @throws \Vismutx\KlarnaOrderManagementApiPhp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function refundOrderWithHttpInfo($order_id, $body = null, $klarna_idempotency_key = null)
    {
        $returnType = '';
        $request = $this->refundOrderRequest($order_id, $body, $klarna_idempotency_key);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Vismutx\KlarnaOrderManagementApiPhp\Model\RefundNotAllowedErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Vismutx\KlarnaOrderManagementApiPhp\Model\NotFoundErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation refundOrderAsync
     *
     * Create a refund
     *
     * @param  string $order_id Order id (required)
     * @param  \Vismutx\KlarnaOrderManagementApiPhp\Model\RefundObject $body (optional)
     * @param  string $klarna_idempotency_key This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function refundOrderAsync($order_id, $body = null, $klarna_idempotency_key = null)
    {
        return $this->refundOrderAsyncWithHttpInfo($order_id, $body, $klarna_idempotency_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation refundOrderAsyncWithHttpInfo
     *
     * Create a refund
     *
     * @param  string $order_id Order id (required)
     * @param  \Vismutx\KlarnaOrderManagementApiPhp\Model\RefundObject $body (optional)
     * @param  string $klarna_idempotency_key This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function refundOrderAsyncWithHttpInfo($order_id, $body = null, $klarna_idempotency_key = null)
    {
        $returnType = '';
        $request = $this->refundOrderRequest($order_id, $body, $klarna_idempotency_key);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'refundOrder'
     *
     * @param  string $order_id Order id (required)
     * @param  \Vismutx\KlarnaOrderManagementApiPhp\Model\RefundObject $body (optional)
     * @param  string $klarna_idempotency_key This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function refundOrderRequest($order_id, $body = null, $klarna_idempotency_key = null)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_id when calling refundOrder'
            );
        }

        $resourcePath = '/ordermanagement/v1/orders/{order_id}/refunds';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($klarna_idempotency_key !== null) {
            $headerParams['Klarna-Idempotency-Key'] = ObjectSerializer::toHeaderValue($klarna_idempotency_key);
        }

        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'order_id' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
            'POST',
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
