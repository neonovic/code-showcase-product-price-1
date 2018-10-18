<?php

namespace Outdoorvisit\Price;

class BasicExchangeRateProvider implements ExchangeRateProviderInterface
{
    /**
     * @param string $from
     * @param string $to
     * @return float
     */
    public function getExchangeRate(string $from, string $to): float
    {
        return $this->fetchExchangeRates()[$from][$to];
    }

    /**
     * @return array
     */
    private function fetchExchangeRates(): array
    {
        return [
            'CZK' => [
                'EUR' => 0.03869,
                ],
            'EUR' => [
                'CZK' => 25.82,
            ]
        ];
    }
}