<?php

namespace AppBundle\MultiCurrencyMoney;

class Bank
{
    private $convertCurrency;

    public function __construct()
    {
        $this->convertCurrency = new ConvertCurrency();
    }

    public function getReportTotal(Money $moneyFirst, Money $moneySecond)
    {
        return $this->sumMoney($moneyFirst, $moneySecond);
    }

    private function sumMoney(Money $moneyFirst, Money $moneySecond)
    {
        $firstTotalAmount = $this->identifyTypeOfMoneyAndReturnSum($moneyFirst);
        $secondTotalAmount = $this->identifyTypeOfMoneyAndReturnSum($moneySecond);
        return ($firstTotalAmount + $secondTotalAmount);
    }

    private function identifyTypeOfMoneyAndReturnSum(Money $moneySecond)
    {
        if ($moneySecond instanceof USDollar) {
            $secondTotalAmount = $moneySecond->getTotalMoney();
        } else {
            $secondTotalAmount = $this->convertCurrency->multiplyRates($moneySecond);
        }
        return $secondTotalAmount;
    }
}
