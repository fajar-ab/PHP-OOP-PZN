<?php

namespace Data;

require_once "Food.php";

abstract class Animal
{

  public string $name;

  function say()
  {
    echo "hai";
  }

  abstract public function run(): void;

  // * contravarian
  abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal
{

  public function run(): void
  {
    echo "Cat $this->name is runing.." . PHP_EOL;
  }

  public function eat(AnimalFood $animalFood): void
  {
    echo "Cat is eating ..." . PHP_EOL;
  }
}

class Dog extends Animal
{


  public function run(): void
  {
    echo "Dog $this->name is runing.." . PHP_EOL;
  }

  // contavarian
  public function eat(Food $animalFood): void
  {
    echo "Dog is eating ..." . PHP_EOL;
  }
}
