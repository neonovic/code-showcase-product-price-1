<?php

namespace Outdoorvisit\Price\Formatter;

class DoubleDecimalPriceFormatter implements PriceFormatterInterface
{
    /**
     * @param float $price
     * @return float
     */
    public function getPrice(float $price): float
    {
        return number_format($price, 2, '.', '');
    }
}