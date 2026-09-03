<?php

class BankAccount
{


    private $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        if ($amount <= 0) {
            throw new Exception("Deposit amount must be positive");
        }
        $this->balance += $amount;
    }
}

class SavingsAccount extends BankAccount
{
    private $interestRate;

    public function __construct($balance, $interestRate)
    {
        parent::__construct($balance);
        $this->interestRate = $interestRate;
    }

    public function setInterestRate($interestRate)
    {
        $this->interestRate = $interestRate;
    }

    public function addInterest()
    {
        $interest = $this->getBalance() * $this->interestRate;
        $this->deposit($interest);
    }
}


$account = new SavingsAccount(100, 0.05);
$account->addInterest();
echo "Balance after adding interest: " . $account->getBalance(); // Output: Balance