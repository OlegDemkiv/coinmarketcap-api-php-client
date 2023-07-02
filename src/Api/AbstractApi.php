<?php

declare(strict_types=1);

namespace OlegDemkiv\CoinMarketCapClient\Api;

use OlegDemkiv\CoinMarketCapClient\Client;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractApi
{
    private const HTTP_GET = 'GET';

    private Client $client;

    /**
     * Constructor for AbstractApi class.
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Makes HTTP GET request.
     *
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    protected function get(string $endpoint, array $params = []): array
    {
        $request = $this->client->getRequestFactory()->createRequest(self::HTTP_GET, $this->prepareUri($endpoint, $params));
        $response = $this->client->getHttpClient()->sendRequest($this->prepareRequest($request));

        return $this->getValidatedResponseData($response);
    }

    /**
     * Prepares HTTP request.
     */
    protected function prepareRequest(RequestInterface $request): RequestInterface
    {
        return $request
            ->withHeader('Accepts', 'application/json')
            ->withHeader('X-CMC_PRO_API_KEY', $this->client->getApiKey());
    }

    /**
     * Prepares URI.
     *
     * @param array<string, mixed> $params
     */
    protected function prepareUri(string $endpoint, array $params = []): string
    {
        return sprintf('%s%s', $this->buildEndpoint($endpoint), $this->buildQueryString($params));
    }

    /**
     * Builds API endpoint.
     */
    protected function buildEndpoint(string $endpoint): string
    {
        return sprintf('%s%s', $this->client->getApiUrl(), $endpoint);
    }

    /**
     * Builds query string.
     *
     * @param array<string, mixed> $params
     */
    protected function buildQueryString(array $params): string
    {
        if (0 === count($params)) {
            return '';
        }

        return sprintf('?%s', http_build_query($params, '', '&', PHP_QUERY_RFC3986));
    }

    /**
     * Returns response data.
     *
     * @return array<string, mixed>
     *
     * @throws \JsonException
     * @throws \Exception
     */
    protected function getValidatedResponseData(ResponseInterface $response): array
    {
        /** @var array<string, mixed> $result */
        $result = json_decode($response->getBody()->getContents(), true, flags: JSON_THROW_ON_ERROR);
        if (200 !== $response->getStatusCode()) {
            $errorMessage = isset($result['status']) && is_array($result['status']) && isset($result['status']['error_message'])
                ? $result['status']['error_message'] : '';
            throw new \Exception("The server has responded with code: {$response->getStatusCode()} {$response->getReasonPhrase()}. $errorMessage");
        }

        return $result;
    }
}
