<?php

declare(strict_types=1);

namespace OlegDemkiv\CoinMarketCapClient\Api;

class Cryptocurrency extends AbstractApi
{
    /**
     * All `cryptocurrency` endpoints.
     */
    private const CRYPTOCURRENCY_MAP = 'v1/cryptocurrency/map';
    private const CRYPTOCURRENCY_INFO = 'v2/cryptocurrency/info';
    private const CRYPTOCURRENCY_LISTINGS_LATEST = 'v1/cryptocurrency/listings/latest';
    private const CRYPTOCURRENCY_LISTINGS_HISTORICAL = '/v1/cryptocurrency/listings/historical';
    private const CRYPTOCURRENCY_QUOTES_LATEST = 'v2/cryptocurrency/quotes/latest';
    private const CRYPTOCURRENCY_QUOTES_HISTORICAL = 'v2/cryptocurrency/quotes/historical';
    private const CRYPTOCURRENCY_MARKET_PAIRS_LATEST = 'v2/cryptocurrency/market-pairs/latest';
    private const CRYPTOCURRENCY_OHLCV_LATEST = 'v2/cryptocurrency/ohlcv/latest';
    private const CRYPTOCURRENCY_OHLCV_HISTORICAL = 'v2/cryptocurrency/ohlcv/historical';
    private const CRYPTOCURRENCY_PRICE_PERFORMANCE_STATS_LATEST = 'v2/cryptocurrency/price-performance-stats/latest';
    private const CRYPTOCURRENCY_CATEGORIES = 'v1/cryptocurrency/categories';
    private const CRYPTOCURRENCY_CATEGORY = 'v1/cryptocurrency/category';
    private const CRYPTOCURRENCY_AIRDROPS = 'v1/cryptocurrency/airdrops';
    private const CRYPTOCURRENCY_AIRDROP = 'v1/cryptocurrency/airdrop';
    private const CRYPTOCURRENCY_TRENDING_LATEST = 'v1/cryptocurrency/trending/latest';
    private const CRYPTOCURRENCY_TRENDING_MOST_VISITED = 'v1/cryptocurrency/trending/most-visited';
    private const CRYPTOCURRENCY_TRENDING_GAINERS_LOSERS = 'v1/cryptocurrency/trending/gainers-losers';

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function map(array $params = []): array
    {
        return $this->get(self::CRYPTOCURRENCY_MAP, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function info(array $params = []): array
    {
        return $this->get(self::CRYPTOCURRENCY_INFO, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function listingsLatest(array $params = []): array
    {
        return $this->get(self::CRYPTOCURRENCY_LISTINGS_LATEST, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function listingsHistorical(array $params = []): array
    {
        return $this->get(self::CRYPTOCURRENCY_LISTINGS_HISTORICAL, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function quotesLatest(array $params = []): array
    {
        return $this->get(self::CRYPTOCURRENCY_QUOTES_LATEST, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function quotesHistorical(array $params = []): array
    {
        return $this->get(self::CRYPTOCURRENCY_QUOTES_HISTORICAL, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function marketPairsLatest(array $params = []): array
    {
        return $this->get(self::CRYPTOCURRENCY_MARKET_PAIRS_LATEST, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function ohlcvLatest(array $params = []): array
    {
        return $this->get(self::CRYPTOCURRENCY_OHLCV_LATEST, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function ohlcvHistorical(array $params = []): array
    {
        return $this->get(self::CRYPTOCURRENCY_OHLCV_HISTORICAL, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function pricePerformanceStatsLatest(array $params = []): array
    {
        return $this->get(self::CRYPTOCURRENCY_PRICE_PERFORMANCE_STATS_LATEST, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function categories(array $params = []): array
    {
        return $this->get(self::CRYPTOCURRENCY_CATEGORIES, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function category(string $categoryId, array $params = []): array
    {
        $params['id'] = $categoryId;

        return $this->get(self::CRYPTOCURRENCY_CATEGORY, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function airdrops(array $params = []): array
    {
        return $this->get(self::CRYPTOCURRENCY_AIRDROPS, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function airdrop(string $airdropId, array $params = []): array
    {
        $params['id'] = $airdropId;

        return $this->get(self::CRYPTOCURRENCY_AIRDROP, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function trendingLatest(array $params = []): array
    {
        return $this->get(self::CRYPTOCURRENCY_TRENDING_LATEST, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function trendingMostVisited(array $params = []): array
    {
        return $this->get(self::CRYPTOCURRENCY_TRENDING_MOST_VISITED, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function trendingGainersLosers(array $params = []): array
    {
        return $this->get(self::CRYPTOCURRENCY_TRENDING_GAINERS_LOSERS, $params);
    }
}
