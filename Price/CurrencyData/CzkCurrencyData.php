<?php

namespace Outdoorvisit\Price\CurrencyData;

class CzkCurrencyData implements CurrencyDataInterface
{
    /**
     * @return string
     */
    public function getCode(): string
    {
        return 'CZK';
    }

    /**
     * @return string
     */
    public function getSign(): string
    {
        return 'Kč';
    }
}