<?php 

class Manager 
{
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name) : void 
    {
        echo "Hi $name, my name is {$this->title} {$this->name}" . PHP_EOL;
    }
}


class VicePresiden extends Manager 
{
    // cunstructor overiding
    public function __construct(string $name = "") 
    {
        // tidak wajib, tapi direkomendasikan
        parent::__construct($name, "Vice Presiden");
    }

    function sayHello(string $name) : void 
    {
        echo "Hi $name, my name is {$this->title} {$this->name}" . PHP_EOL;
    }
}