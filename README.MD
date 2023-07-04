# CoinMarketCap API PHP Client

[![Build](https://img.shields.io/github/actions/workflow/status/OlegDemkiv/coinmarketcap-api-php-client/ci.yml)](https://github.com/OlegDemkiv/coinmarketcap-api-php-client/actions)
[![Latest Stable Version](https://img.shields.io/packagist/v/olegdemkiv/coinmarketcap-api-php-client)](https://packagist.org/packages/olegdemkiv/coinmarketcap-api-php-client)
[![License](https://img.shields.io/packagist/l/olegdemkiv/coinmarketcap-api-php-client)](https://packagist.org/packages/olegdemkiv/coinmarketcap-api-php-client)

This client library is built for interacting with the [CoinMarketCap](https://coinmarketcap.com/) API.
It is based on the PSR-17 and PSR-18 standards and supports HTTP client autodiscovery.

## Requirements
* [PHP 8.0 or higher](https://www.php.net/)
* HTTP Client (should be PSR-18 compatible)

## Installation
```
composer require olegdemkiv/coinmarketcap-api-php-client
```

## Example
```php
$key = 'xxxxx-xxxxx-xxxxx-xxxxx-xxxxx';
$client = new OlegDemkiv\CoinMarketCapClient\Client($key);
$result = $client->cryptocurrency()->quotesLatest(['id' => '1,2,1027']); // BTC, LTC, ETH
var_dump($result);
```

## Endpoints
| Support            | Endpoint Category   | Description                                                                                                       |
|--------------------|---------------------|-------------------------------------------------------------------------------------------------------------------|
| :white_check_mark: | `/blockchain/* `    | Endpoints that return block explorer related data for blockchains.                                                |
| :white_check_mark: | `/community/*`      | Endpoints that return community data.                                                                             |
| :white_check_mark: | `/content/*`        | Endpoints that return cryptocurrency-related news, headlines, articles, posts, and comments.                      |
| :white_check_mark: | `/cryptocurrency/*` | Endpoints that return data around cryptocurrencies such as ordered cryptocurrency lists or price and volume data. |
| :white_check_mark: | `/exchange/*`       | Endpoints that return data around cryptocurrency exchanges such as ordered exchange lists and market pair data.   |
| :white_check_mark: | `/fiat/*`           | Endpoints that return data around fiats currencies including mapping to CMC IDs.                                  |
| :white_check_mark: | `/global-metrics/*` | Endpoints that return aggregate market data such as global market cap and BTC dominance.                          |
| :white_check_mark: | `/key/*`            | API key administration endpoints to review and manage your usage.                                                 |
| :white_check_mark: | `/tools/*`          | Useful utilities such as cryptocurrency and fiat price conversions.                                               |
