<?php

namespace Dwo\EcbExchangeRates\Tests;

use Dwo\EcbExchangeRates\EcbExchangeRates;

/**
 * @author David Wolter <davewwwo@gmail.com>
 */
class EcbExchangeRatesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var array
     */
    protected $rates;

    public function setup()
    {
        $this->rates = EcbExchangeRates::getAll();
    }

    public function testResult()
    {
        self::assertInternalType('array', $this->rates);
        self::assertNotEmpty($this->rates);
        self::assertGreaterThan(1, count($this->rates));

        self::assertArrayNotHasKey('EUR', $this->rates);
    }

    /**
     * @dataProvider providerSomeCurrencies()
     */
    public function testSomeCurrencies($currency)
    {
        self::assertArrayHasKey($currency, $this->rates);
        self::assertInternalType('float', $this->rates[$currency]);
        self::assertGreaterThan(0, $this->rates[$currency]);
    }

    public function providerSomeCurrencies()
    {
        return array(
            array('USD'),
            array('GBP'),
            array('CHF')
        );
    }
}
