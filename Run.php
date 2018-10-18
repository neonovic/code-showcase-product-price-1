<?php

use Outdoorvisit\Price\BasicExchangeRateProvider;
use Outdoorvisit\Price\CurrencyData\CzkCurrencyData;
use Outdoorvisit\Price\CurrencyData\EurCurrencyData;
use Outdoorvisit\Price\Formatter\DoubleDecimalPriceFormatter;
use Outdoorvisit\Product\Product;

spl_autoload_register(function($className) {
    include_once '../' . $className . '.php';
});

$product = new Product();

print_r($product->getPrice(new BasicExchangeRateProvider(), new EurCurrencyData, new CzkCurrencyData, new DoubleDecimalPriceFormatter));
echo '<br>';
print_r($product->getPrice(new BasicExchangeRateProvider(), new CzkCurrencyData, new EurCurrencyData, new DoubleDecimalPriceFormatter));