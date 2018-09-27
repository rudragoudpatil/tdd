<?php

namespace AppBundle\MultiCurrencyMoney;


class USDollar extends Money
{
    private $currencyString = "USD";

    public function getCurrencyString()
    {
        return $this->currencyString;
    }
}