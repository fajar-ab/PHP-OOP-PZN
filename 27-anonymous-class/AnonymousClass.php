<?php

interface HelloWord
{
    function sayHello(): void;
}

// class SampleHelloWorld implements HelloWord
// {
//     function sayHello(): void
//     {
//         echo "Hello World" . PHP_EOL;
//     }
// }

$helloWorld = new class implements HelloWord
{
    function sayHello(): void
    {
        echo "Hello, World" . PHP_EOL;
    }
};

$helloWorld->sayHello();


// constructor dalam anonymous class
$helloWorld2 = new class("fajar fadilah") implements HelloWord
{

    public string $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(): void
    {
        echo "Hello, $this->name" . PHP_EOL;
    }
};

$helloWorld2->sayHello();
