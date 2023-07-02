<?php

declare(strict_types=1);

namespace OlegDemkiv\CoinMarketCapClient;

use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use OlegDemkiv\CoinMarketCapClient\Api\Blockchain;
use OlegDemkiv\CoinMarketCapClient\Api\Community;
use OlegDemkiv\CoinMarketCapClient\Api\Content;
use OlegDemkiv\CoinMarketCapClient\Api\Cryptocurrency;
use OlegDemkiv\CoinMarketCapClient\Api\Exchange;
use OlegDemkiv\CoinMarketCapClient\Api\Fiat;
use OlegDemkiv\CoinMarketCapClient\Api\GlobalMetrics;
use OlegDemkiv\CoinMarketCapClient\Api\Key;
use OlegDemkiv\CoinMarketCapClient\Api\Tools;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;

class Client
{
    private ClientInterface $httpClient;
    private RequestFactoryInterface $requestFactory;
    private string $key;
    private string $apiUrl = 'https://pro-api.coinmarketcap.com/';
    private string $apiVersion = 'v1';

    /**
     * Client constructor.
     */
    public function __construct(
        string $key,
        ClientInterface $httpClient = null,
        RequestFactoryInterface $requestFactory = null
    ) {
        $this->key = $key;
        $this->httpClient = $httpClient ?? Psr18ClientDiscovery::find();
        $this->requestFactory = $requestFactory ?? Psr17FactoryDiscovery::findRequestFactory();
    }

    /**
     * Returns API key.
     */
    public function getApiKey(): string
    {
        return $this->key;
    }

    /**
     * Returns HTTP client.
     */
    public function getHttpClient(): ClientInterface
    {
        return $this->httpClient;
    }

    /**
     * Returns request factory.
     */
    public function getRequestFactory(): RequestFactoryInterface
    {
        return $this->requestFactory;
    }

    /**
     * Returns API url.
     */
    public function getApiUrl(): string
    {
        return $this->apiUrl;
    }

    /**
     * Returns full API url.
     */
    public function getFullApiUrl(): string
    {
        return sprintf('%s%s/', $this->apiUrl, $this->apiVersion);
    }

    /**
     * Returns instance of Blockchain API.
     */
    public function blockchain(): Blockchain
    {
        return new Blockchain($this);
    }

    /**
     * Returns instance of Community API.
     */
    public function community(): Community
    {
        return new Community($this);
    }

    /**
     * Returns instance of Community API.
     */
    public function content(): Content
    {
        return new Content($this);
    }

    /**
     * Returns instance of Cryptocurrency API.
     */
    public function cryptocurrency(): Cryptocurrency
    {
        return new Cryptocurrency($this);
    }

    /**
     * Returns instance of Exchange API.
     */
    public function exchange(): Exchange
    {
        return new Exchange($this);
    }

    /**
     * Returns instance of Fiat API.
     */
    public function fiat(): Fiat
    {
        return new Fiat($this);
    }

    /**
     * Returns instance of GlobalMetrics API.
     */
    public function globalMetrics(): GlobalMetrics
    {
        return new GlobalMetrics($this);
    }

    /**
     * Returns instance of Key API.
     */
    public function key(): Key
    {
        return new Key($this);
    }

    /**
     * Returns instance of Tools API.
     */
    public function tools(): Tools
    {
        return new Tools($this);
    }
}
