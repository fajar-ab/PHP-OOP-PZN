<?php

namespace Data;

require_once "Animal.php";

interface AnimalShelter
{
  public function adopt(string $name): Animal;
}


class CatShalter implements AnimalShelter
{
  public function adopt(string $name): Cat // * covarian
  {
    $cat = new Cat();
    $cat->name = $name;
    return $cat;
  }
}

class DogShalter implements AnimalShelter
{
  public function adopt(string $name): Dog // * covarian
  {
    $dog = new Dog();
    $dog->name = $name;
    return $dog;
  }
}
