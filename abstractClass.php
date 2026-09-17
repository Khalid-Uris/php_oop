<?php

abstract class Dumper
{

    abstract public function dump($data);
}

class WebDumper extends Dumper
{

    public function dump($data)
    {
        echo '<pre>';
        var_dump($data . "web");
        echo '</pre>';
    }
}

class ConsoleDumper extends Dumper
{
    public function dump($data)
    {
        var_dump($data . "console");
    }
}

class DumperFactory
{
    public static function getDumper()
    {
        return PHP_SAPI === 'cli'
            ? new ConsoleDumper()
            : new WebDumper();
    }
}

// $webDumper = new WebDumper();
// $webDumper->dump('PHP abstract class is awesome!'); // Outputs: string(30) "PHP abstract class is awesome!"

// $consoleDumper = new ConsoleDumper();
// $consoleDumper->dump('Console class');

$dumper = DumperFactory::getDumper();
$dumper->dump('PHP abstract class is awesome!'); // Outputs: string(30) "PHP abstract class is awesome!"