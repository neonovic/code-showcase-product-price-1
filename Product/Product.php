<?php

namespace Outdoorvisit\Product;

use Outdoorvisit\Price\CurrencyData\CurrencyDataInterface;
use Outdoorvisit\Price\ExchangeRateProviderInterface;
use Outdoorvisit\Price\Formatter\PriceFormatterInterface;
use Outdoorvisit\Price\Price;

class Product
{
    /**
     * @param ExchangeRateProviderInterface $exchangeRateProvider
     * @param CurrencyDataInterface $fromCurrency
     * @param CurrencyDataInterface $toCurrency
     * @param PriceFormatterInterface $priceFormatter
     * @return Price
     */
    public function getPrice(
        ExchangeRateProviderInterface $exchangeRateProvider,
        CurrencyDataInterface $fromCurrency,
        CurrencyDataInterface $toCurrency,
        PriceFormatterInterface $priceFormatter
    ): Price
    {
        return new Price(
            $priceFormatter->getPrice(
                $exchangeRateProvider->getExchangeRate($fromCurrency->getCode(), $toCurrency->getCode()) * $this->getValue()
            ),
            $toCurrency->getSign(),
            $toCurrency->getCode()
        );
    }

    /**
     * @return float
     */
    private function getValue(): float
    {
        return 100;
    }
}