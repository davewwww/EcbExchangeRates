EcbExchangeRates
=================

Grep the Euro foreign exchange reference rates from the ECB.

https://www.ecb.europa.eu/stats/exchange/eurofxref/html/index.en.html

### Installation

Installation with Composer

```yml

composer.phar require dwo/ecb_exchange_rates

```

### Usage 

```php

$exchangeRates = EcbExchangeRates::getAll();

var_dump($exchangeRates);
array(31) {
  ["USD"]=>
  float(1.0711)
  ["JPY"]=>
  float(127.64)
  ...
)
```