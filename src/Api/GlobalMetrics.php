<?php

declare(strict_types=1);

namespace OlegDemkiv\CoinMarketCapClient\Api;

class GlobalMetrics extends AbstractApi
{
    /**
     * All `global-metrics` endpoints.
     */
    private const GLOBAL_METRICS_QUOTES_LATEST = 'v1/global-metrics/quotes/latest';
    private const GLOBAL_METRICS_QUOTES_HISTORICAL = 'v1/global-metrics/quotes/historical';

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function quotesLatest(array $params = []): array
    {
        return $this->get(self::GLOBAL_METRICS_QUOTES_LATEST, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function quotesHistorical(array $params = []): array
    {
        return $this->get(self::GLOBAL_METRICS_QUOTES_HISTORICAL, $params);
    }
}
