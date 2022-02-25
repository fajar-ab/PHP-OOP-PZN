<?php 


// ini merupakan paret class
class Manager 
{

    var string $name;

    function sayHello(string $name) : void 
    {
        echo "Hi $name, my name is {$this->name}" . PHP_EOL;
    }
}


// ini merupakan child class dari class Manager
class VicePresiden extends Manager 
{
    
}