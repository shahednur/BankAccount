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
}

?>