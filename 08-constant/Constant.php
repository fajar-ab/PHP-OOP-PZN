<?php 

require_once "Person.php";

define('APPLICATION', 'Belajar PHP OOP');
const APP_VERSON = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSON . PHP_EOL;

// mengakses constant dari field class
echo Person::AUTHOR . PHP_EOL;


echo "Object Person" . PHP_EOL;
$person = new Person();
$person->name = "fajar fadilah";
$person->address = "padangsidimpuan";

echo "name   : $person->name" . PHP_EOL;
echo "alamat : $person->address" . PHP_EOL;
$person->info();
