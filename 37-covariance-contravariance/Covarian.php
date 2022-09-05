<?php
require_once "Data/AnimalShelter.php";
require_once "Data/Animal.php";

use Data\{AnimalFood, CatShalter, DogShalter, Food};

$catShaler = new CatShalter;
$cat = $catShaler->adopt("catty");
$cat->run();

$cat->eat(new AnimalFood);


$dogShaler = new DogShalter;
$dog = $dogShaler->adopt("doggie");
$dog->run();

$dog->eat(new Food);
