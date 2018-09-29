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

       public function testWithdraw()
       {
           $bank2 = new BankAccount(new Money(600));
           $bank2->withdraw(new Money(300));

           var_dump($bank2);
       }

       public function testTransfer()
       { 
           $bank3 =new BankAccount(new Money(1000));
           $bank4 =new BankAccount( new Money(1200));
           $bank3->transfer(new Money(500),$bank4);

           var_dump($bank3);
       }
}

?>