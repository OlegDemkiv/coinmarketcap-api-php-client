<?php

declare(strict_types=1);

namespace OlegDemkiv\CoinMarketCapClient\Api;

class Tools extends AbstractApi
{
    /**
     * All `tools` endpoints.
     */
    private const TOOLS_POSTMAN = 'v1/tools/postman';
    private const TOOLS_PRICE_CONVERSION = 'v2/tools/price-conversion';

    /**
     * @return array<string, mixed>
     */
    public function postman(): array
    {
        return $this->get(self::TOOLS_POSTMAN);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function priceConversion(float $amount, int $id = null, string $symbol = null, array $params = []): array
    {
        if (is_null($id) && is_null($symbol)) {
            throw new \Exception('At least "id" or "symbol" is required.');
        }
        if (!is_null($id)) {
            $params['id'] = $id;
        }
        if (!is_null($symbol)) {
            $params['symbol'] = $symbol;
        }
        $params['amount'] = $amount;

        return $this->get(self::TOOLS_PRICE_CONVERSION, $params);
    }
}
