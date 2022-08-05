<?php

$arr = [
  "firstName" => "fajar",
  "lastName" => "fadilah"
];

// komversi array ke stdClass
$object = (object) $arr;

// cara akses stdClass
echo "stdClass: " . PHP_EOL;
echo $object->firstName . PHP_EOL;
echo $object->lastName . PHP_EOL . PHP_EOL;

// kompersi dari object ke array

$arrayLagi = (array) $object;

echo "array: " . PHP_EOL;
echo $arrayLagi['firstName'] . PHP_EOL;
echo $arrayLagi['lastName'] . PHP_EOL;
