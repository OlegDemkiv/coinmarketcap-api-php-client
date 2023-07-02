<?php

declare(strict_types=1);

namespace OlegDemkiv\CoinMarketCapClient\Tests;

use OlegDemkiv\CoinMarketCapClient\Api\Blockchain;
use OlegDemkiv\CoinMarketCapClient\Api\Community;
use OlegDemkiv\CoinMarketCapClient\Api\Content;
use OlegDemkiv\CoinMarketCapClient\Api\Cryptocurrency;
use OlegDemkiv\CoinMarketCapClient\Api\Exchange;
use OlegDemkiv\CoinMarketCapClient\Api\Fiat;
use OlegDemkiv\CoinMarketCapClient\Api\GlobalMetrics;
use OlegDemkiv\CoinMarketCapClient\Api\Key;
use OlegDemkiv\CoinMarketCapClient\Api\Tools;
use OlegDemkiv\CoinMarketCapClient\Client;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;

final class ClientTest extends TestCase
{
    protected const API_KEY = 'some api key';
    protected Client $apiClient;
    protected ClientInterface $httpClient;
    protected RequestFactoryInterface $requestFactory;

    protected function setUp(): void
    {
        $this->httpClient = $this->createMock(ClientInterface::class);
        $this->requestFactory = $this->createMock(RequestFactoryInterface::class);
        $this->apiClient = new Client(self::API_KEY, $this->httpClient, $this->requestFactory);
    }

    public function testConstructor(): void
    {
        $this->assertInstanceOf(Client::class, $this->apiClient);
    }

    public function testGetApiKey(): void
    {
        $this->assertEquals('some api key', $this->apiClient->getApiKey());
    }

    public function testGetHttpClient(): void
    {
        $this->assertSame($this->httpClient, $this->apiClient->getHttpClient());
    }

    public function testGetRequestFactory(): void
    {
        $this->assertSame($this->requestFactory, $this->apiClient->getRequestFactory());
    }

    public function testGetApiUrl(): void
    {
        $this->assertEquals('https://pro-api.coinmarketcap.com/', $this->apiClient->getApiUrl());
    }

    public function testGetFullApiUrl(): void
    {
        $this->assertEquals('https://pro-api.coinmarketcap.com/v1/', $this->apiClient->getFullApiUrl());
    }

    public function testBlockchain(): void
    {
        $this->assertInstanceOf(Blockchain::class, $this->apiClient->blockchain());
    }

    public function testCommunity(): void
    {
        $this->assertInstanceOf(Community::class, $this->apiClient->community());
    }

    public function testContent(): void
    {
        $this->assertInstanceOf(Content::class, $this->apiClient->content());
    }

    public function testCryptocurrency(): void
    {
        $this->assertInstanceOf(Cryptocurrency::class, $this->apiClient->cryptocurrency());
    }

    public function testExchange(): void
    {
        $this->assertInstanceOf(Exchange::class, $this->apiClient->exchange());
    }

    public function testFiat(): void
    {
        $this->assertInstanceOf(Fiat::class, $this->apiClient->fiat());
    }

    public function testGlobalMetrics(): void
    {
        $this->assertInstanceOf(GlobalMetrics::class, $this->apiClient->globalMetrics());
    }

    public function testKey(): void
    {
        $this->assertInstanceOf(Key::class, $this->apiClient->key());
    }

    public function testTools(): void
    {
        $this->assertInstanceOf(Tools::class, $this->apiClient->tools());
    }
}
