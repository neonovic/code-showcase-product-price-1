<?php

namespace Outdoorvisit\Price\Formatter;

interface PriceFormatterInterface
{
    public function getPrice(float $price);
}