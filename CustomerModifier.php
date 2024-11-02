<?php

class CustomerModifier
{

    //public $name;
    private $name;

    public function setName($name)
    {
        $name = trim($name);
        // return !empty($name);

        if ($name == '') {
            return false;
        }


        $this->name = $name;
        return true;
    }

    public function getName()
    {
        return ucfirst($this->name);
    }
}

$customer = new CustomerModifier();
// $customer->name = 'bob';

// echo $customer->getName();

$customer->setName('bob');
echo $customer->getName();
