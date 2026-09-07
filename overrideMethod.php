<?php

class Robot
{
    public function greet()
    {
        return 'Hello';
    }
}

class Android extends Robot
{
    public function greet()
    {
        $greeting = parent::greet(); // Call the parent method
        return $greeting . ' from Android.'; // Modify the greeting
    }
}

$robot = new Robot();

// echo $robot->greet(); // Hello
echo "<br>";
$android = new Android();
echo $android->greet(); // Hi