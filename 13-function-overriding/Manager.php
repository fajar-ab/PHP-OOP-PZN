<?php 

class Manager 
{
    var string $name;

    function sayHello(string $name) : void 
    {
        echo "Hi $name, my name is Manager {$this->name}" . PHP_EOL;
    }
}

class VicePresiden extends Manager 
{
    // function overriding mendeklarasikan ulang sebuah function di class child
    function sayHello(string $name) : void 
    {
        echo "Hi $name, my name is VP {$this->name}" . PHP_EOL;
    }
}