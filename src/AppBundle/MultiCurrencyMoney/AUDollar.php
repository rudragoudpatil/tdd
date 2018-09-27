<?php

namespace AppBundle\MultiCurrencyMoney;


class AUDollar extends Money
{
    private $currencyString = "AUD";

    public function getCurrencyString()
    {
        return $this->currencyString;
    }

}