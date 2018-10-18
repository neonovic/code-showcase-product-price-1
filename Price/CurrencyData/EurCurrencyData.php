<?php

namespace Outdoorvisit\Price\CurrencyData;

class EurCurrencyData implements CurrencyDataInterface
{
    /**
     * @return string
     */
    public function getCode(): string
    {
        return 'EUR';
    }

    /**
     * @return string
     */
    public function getSign(): string
    {
        return '€';
    }
}