<?php

declare(strict_types=1);

class BankAccountTypeProperty
{

    public float $balance = 0;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}

$account = new BankAccountTypeProperty(0);
//$account->balance = 0;
var_dump($account->balance);
// echo $account->balance;

// unset($account->balance);
// var_dump($account->balance);