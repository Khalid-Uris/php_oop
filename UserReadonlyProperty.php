<?php

class UserReadonlyProperty
{

    public readonly string $username;
    public string $password;

    // public function __construct(string $username)
    // {
    //     $this->username = $username;
    // }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }
}

$user = new UserReadonlyProperty();
// $user->username = 'john';
var_dump($user->username);
// echo $user->username;