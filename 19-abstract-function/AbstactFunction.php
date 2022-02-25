
<?php

require_once "Animal.php";

use Data\{Cat, Dog};

$cat = new Cat();
$cat->name = "city";
$cat->run();

$dog = new Dog();
$dog->name = "dogy";
$dog->run();