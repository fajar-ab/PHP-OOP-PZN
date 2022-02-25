<?php

class Programmer {

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer {

}

class FrontendProgrammer extends Programmer {

}

class Company {

    public Programmer $programmer;
}

function sayHelloProgramer(Programmer $programmer) 
{
    // type check and casts 
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello, Backend Programer {$programmer->name}" . PHP_EOL;
    } elseif ($programmer instanceof FrontendProgrammer){
        echo "Hello, Frontend Programer {$programmer->name}" . PHP_EOL;
    }elseif ($programmer instanceof Programmer){
        echo "Hello, Programer {$programmer->name}" . PHP_EOL;
    }
}