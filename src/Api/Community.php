<?php

declare(strict_types=1);

namespace OlegDemkiv\CoinMarketCapClient\Api;

class Community extends AbstractApi
{
    /**
     * All `community` endpoints.
     */
    private const COMMUNITY_TRENDING_TOKEN = 'v1/community/trending/token';
    private const COMMUNITY_TRENDING_TOPIC = 'v1/community/trending/topic';

    /**
     * @return array<string, mixed>
     */
    public function trendingToken(int $limit = null): array
    {
        $params = is_null($limit) ? [] : ['limit' => $limit];

        return $this->get(self::COMMUNITY_TRENDING_TOKEN, $params);
    }

    /**
     * @return array<string, mixed>
     */
    public function trendingTopic(): array
    {
        return $this->get(self::COMMUNITY_TRENDING_TOPIC);
    }
}
