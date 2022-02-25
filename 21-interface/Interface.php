<?php 

require_once "Car.php";

use Data\{Car, Avanza};

$car = new Avanza();
$car->drive();
echo $car->getTire() . PHP_EOL;
echo $car->getBrance() . PHP_EOL;
echo $car->isMaintenance() . PHP_EOL;