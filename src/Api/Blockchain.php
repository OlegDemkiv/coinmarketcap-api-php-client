<?php

declare(strict_types=1);

namespace OlegDemkiv\CoinMarketCapClient\Api;

class Blockchain extends AbstractApi
{
    /**
     * All `blockchain` endpoints.
     */
    private const BLOCKCHAIN_STATISTICS_LATEST = 'v1/blockchain/statistics/latest';

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function statisticsLatest(array $params = []): array
    {
        return $this->get(self::BLOCKCHAIN_STATISTICS_LATEST, $params);
    }
}
