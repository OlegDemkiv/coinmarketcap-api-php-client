<?php

declare(strict_types=1);

namespace OlegDemkiv\CoinMarketCapClient\Api;

class Fiat extends AbstractApi
{
    /**
     * All `fiat` endpoints.
     */
    private const FIAT_MAP = 'v1/fiat/map';

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function map(array $params = []): array
    {
        return $this->get(self::FIAT_MAP, $params);
    }
}
