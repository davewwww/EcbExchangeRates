<?php

namespace Dwo\EcbExchangeRates;

/**
 * EcbExchangeRates
 *
 * @author David Wolter <david@lovoo.com>
 */
class EcbExchangeRates
{
    const URL = 'http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml';

    /**
     * @return array
     */
    public static function getAll()
    {
        $currencies = array();

        $xml = simplexml_load_file(self::URL);
        foreach ($xml->Cube->Cube->Cube as $rate) {
            $currencies[(string) $rate['currency']] = (float) $rate['rate'];
        }

        return $currencies;
    }
}