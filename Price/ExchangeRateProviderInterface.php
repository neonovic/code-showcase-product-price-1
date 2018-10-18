<?php

namespace Outdoorvisit\Price;

interface ExchangeRateProviderInterface
{
    public function getExchangeRate(string $from, string $to): float;
}