<?php

class Money
{
    private $amount = 0;

    public function __construct($amount)
    {
        $this->amount = (float) $amount;
    }

    public function value()
    {
        return $this->amount;
    }
    public function increaseBalance($amount)
    {
        return $this->amount += $amount; // This helper function will increase the value of  balance.
    }
   public function decreaseBalance($amount)
   {
       return $this->amount -= $amount; // This helper function will decrease the value of balance.
   }
    public function __toString()
    {
        return (string) $this->value();
    }
}