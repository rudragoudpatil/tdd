<?php

namespace AppBundle\MultiCurrencyMoney;


class ConvertCurrency
{
    private $convertArray = [
        ["AUD","USD","2"],
        ["USD","AUD","0.2"]
    ];

    public function multiplyRates(Money $money){
        if($this->convertArray[0][0] == $money->getCurrencyString()){
            return ($money->getTotalMoney() * $this->convertArray[0][2]);
        }else{
            return ($money->getTotalMoney() * $this->convertArray[1][2]);
        }
    }
}