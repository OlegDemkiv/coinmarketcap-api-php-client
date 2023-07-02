<?php

declare(strict_types=1);

namespace OlegDemkiv\CoinMarketCapClient\Api;

class Key extends AbstractApi
{
    /**
     * All `key` endpoints.
     */
    private const KEY_INFO = 'v1/key/info';

    /**
     * @return array<string, mixed>
     */
    public function info(): array
    {
        return $this->get(self::KEY_INFO);
    }
}
