<?php
//load all interfaces in interfaces folder
foreach (glob('interfaces/*.php') as $filename)
{
    require_once $filename;
}
//load all classes in classes folder
foreach (glob('classes/*.php') as $filename)
{
    require_once $filename;
}

class BankAccount implements IfaceBankAccount
{

    private $balance = null;

    public function __construct(Money $openingBalance)
    {
        $this->balance =$openingBalance;
    }

    public function balance()
    {
        return $this->balance;
    }

    public function deposit(Money $amount)
    {
       return $this->balance->increaseBalance($amount->value()); // This function will add balance to the Bank Account
    }
   public function withdraw(Money $amount)
   {
       return $this->balance->decreaseBalance($amount->value());
   }
    public function transfer(Money $amount, BankAccount $account)
    {   
        //  $this->balance = $this->balance -$amount->value(); // This code will decrease balance from the targeted account
        return $this->balance->decreaseBalance($amount->value()); //This code is being used for a type casting bug of previous code block
        $account->balance = $account->balance + $amount->value();  // This code will  increase balance to the targeted account
    }
} 