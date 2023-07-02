<?php

declare(strict_types=1);

namespace OlegDemkiv\CoinMarketCapClient\Api;

class Exchange extends AbstractApi
{
    /**
     * All `exchange` endpoints.
     */
    private const EXCHANGE_MAP = 'v1/exchange/map';
    private const EXCHANGE_INFO = 'v1/exchange/info';
    private const EXCHANGE_LISTINGS_LATEST = 'v1/exchange/listings/latest';
    private const EXCHANGE_QUOTES_LATEST = 'v1/exchange/quotes/latest';
    private const EXCHANGE_QUOTES_HISTORICAL = 'v1/exchange/quotes/historical';
    private const EXCHANGE_MARKET_PAIRS_LATEST = 'v1/exchange/market-pairs/latest';
    private const EXCHANGE_ASSETS = 'v1/exchange/assets';

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function map(array $params = []): array
    {
        return $this->get(self::EXCHANGE_MAP, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function info(array $params = []): array
    {
        return $this->get(self::EXCHANGE_INFO, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function listingsLatest(array $params = []): array
    {
        return $this->get(self::EXCHANGE_LISTINGS_LATEST, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function quotesLatest(array $params = []): array
    {
        return $this->get(self::EXCHANGE_QUOTES_LATEST, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function quotesHistorical(array $params = []): array
    {
        return $this->get(self::EXCHANGE_QUOTES_HISTORICAL, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function marketPairsLatest(array $params = []): array
    {
        return $this->get(self::EXCHANGE_MARKET_PAIRS_LATEST, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function assets(array $params = []): array
    {
        return $this->get(self::EXCHANGE_ASSETS, $params);
    }
}
