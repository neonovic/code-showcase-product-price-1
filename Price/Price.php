<?php

namespace Outdoorvisit\Price;

class Price
{
    /**
     * @var float
     */
    private $value;

    /**
     * @var string
     */
    private $sign;

    /**
     * @var string
     */
    private $code;

    /**
     * @param float $value
     * @param string $sign
     * @param string $code
     */
    public function __construct(float $value, string $sign, string $code)
    {
        $this->value = $value;
        $this->sign = $sign;
        $this->code = $code;
    }


    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getSign(): string
    {
        return $this->sign;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
}