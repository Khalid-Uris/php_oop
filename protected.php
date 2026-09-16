<?php

// PHP protected property example
// class Customer
// {

//     protected $name;

//     public function __construct($name)
//     {
//         $this->name = $name;
//     }
// }

// class VIP extends Customer
// {

//     public function getFormattedName()
//     {
//         return ucwords($this->name);
//     }
// }

// $alex = new VIP('alex ferguson');
// echo $alex->getFormattedName(); // Outputs: Alex Ferguson


// PHP protected method example

class Customer
{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    protected function format()
    {
        return ucwords($this->name);
    }
    public function getName()
    {
        return $this->format($this->name);
    }
}

class VIP extends Customer
{

    protected function format()
    {
        return strtoupper($this->name);
    }
}

$bob = new Customer('bob allen');
echo $bob->getName();
echo "<br>";

$alex = new VIP('alex ferguson');
echo $alex->getName();
