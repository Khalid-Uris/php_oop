<?php
class BankAccount
{
    public $accountNumber;
    public $balance;

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
        return $this->balance;
    }

    public function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
}

$account = new BankAccount();

$account->accountNumber = 1;
$account->balance = 100;

// $amountDeposit=$account->deposit(100);
// echo $amountDeposit;

$deducted = $account->withdraw(50);
echo $deducted;
