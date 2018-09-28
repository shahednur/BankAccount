<?php 
require_once('../classes/BankAccount.php');
require_once('Money.php');

class BankAccountTest extends PHPUnit_Framework_TestCase
{
       public function testBalance()
       {
           $bank = new BankAccount(new Money(1200));
           $bank->balance();

           var_dump($bank);
       }

       public function testDeposit()
       {
           $bank1  = new BankAccount(new Money(500));
           $bank1->deposit(new Money(100));

           var_dump($bank1);
       }
}

?>