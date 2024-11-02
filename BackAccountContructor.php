<?php

class BackAccountConstructor
{
    // Constructor with promoted properties
    public function __construct(private $accountNumber, private $balance) {}

    // Getter for accountNumber
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    // Getter for balance
    public function getBalance()
    {
        return $this->balance;
    }
}

// Instantiate the class with account number and balance
$account = new BackAccountConstructor("123456789", 1000.50);

// Access and print the values using getter methods
echo "Account Number: " . $account->getAccountNumber() . PHP_EOL;
echo "Balance: $" . $account->getBalance() . PHP_EOL;