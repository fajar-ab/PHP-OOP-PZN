<?php 

namespace Data;

abstract class Animal {

    public string $name;

    function say() {
        echo "hai";
    }

    // abstract function tidak memiliki block code dan tidak boleh private
    abstract public function run() : void;
}

class Cat extends Animal {

    // dan setiap turunannya wajib mengoverride abstrack functionnya
    public function run(): void
    {
        echo "Cat $this->name is runing.." . PHP_EOL;
    }
}

class Dog extends Animal {

    // dan setiap turunannya wajib mengoverride abstrack functionnya
    public function run(): void
    {
        echo "Dog $this->name is runing.." . PHP_EOL;
    }
}