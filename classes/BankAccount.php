<?php

class BankAccount implements IfaceBankAccount
{

    private $balance = null;

    public function __construct(Money $openingBalance)
    {
        $this->balance = $openingBalance;
    }

    public function balance()
    {
        return $this->balance;
    }

    public function deposit(Money $amount)
    {
       return $this->balance->increaseBalance($money->value()); // This function will add balance to the Bank Account
    }

    public function transfer(Money $amount, BankAccount $account)
    {
        //implement this method
    }
}