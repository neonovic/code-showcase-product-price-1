<?php

namespace Outdoorvisit\Price\CurrencyData;

interface CurrencyDataInterface
{
    public function getCode(): string;
    public function getSign(): string;
}