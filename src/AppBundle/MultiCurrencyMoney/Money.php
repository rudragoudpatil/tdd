<?php

namespace AppBundle\MultiCurrencyMoney;


class Money
{
    protected $amount;
    protected $shares;

    public function getAmount()
    {
        return $this->amount;
    }


    public function setAmount($amount)
    {
        $this->amount = $amount;
    }


    public function getShares()
    {
        return $this->shares;
    }


    public function setShares($shares)
    {
        $this->shares = $shares;
    }

    public function getTotalMoney(){
        return $this->getAmount() * $this->getShares();
    }
}