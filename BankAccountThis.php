<?php

class BankAccountThis
{
    public $accountNumber;
    public $balance;

    public function deposit($amount)
    {
        // return $amount > 0;
        if ($amount > 0) {
            $this->balance += $amount;
        }
        // return $this->balance;
    }

    public function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
    public function getBalance()
    {
        return $this->balance;
    }
}

$account = new BankAccountThis();

$account->accountNumber = 1;
$account->balance = 100;

echo $account->deposit(100);
echo "<pre>";
echo $account->deposit(200);
echo "<pre>";
echo $account->deposit(300);

echo $account->withdraw(50);

// $account->deposit(150)->withdraw(100);

echo "<pre>";
echo $account->getBalance();
