https://travis-ci.org/davewwww/EcbExchangeRates.svg?branch=v1.0.0

[![Coverage Status](https://coveralls.io/repos/davewwww/EcbExchangeRates/badge.svg)](https://coveralls.io/r/davewwww/EcbExchangeRates)

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

```

You will receive an array with the available currencies

```php
   array(31) {
     ["USD"]=>
     float(1.0711)
     ["JPY"]=>
     float(127.64)
     ...
   )
```