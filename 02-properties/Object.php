<?php 

require_once 'Person.php';

$person1 = new Person();

// memanipulasi data properties, 
// untuk mengakses field menggunakan kata kunci '->' setelah nama object kemudian nama field

$person1->name = "fajar fadilah";
$person1->address = "padangsidimpuan";
$person1->country = "indonesia";

// var_dump($person1);

echo "name : $person1->name" . PHP_EOL;
echo "address : $person1->address" . PHP_EOL;
echo "country : $person1->country" . PHP_EOL;

$person2 = new Person();

$person2->name = "aldina wati";
$person2->address = "padangsidimpuan";
$person2->country = "indonesia";

// var_dump($person2);

echo "name : $person2->name" . PHP_EOL;
echo "address : $person2->address" . PHP_EOL;
echo "country : $person2->country" . PHP_EOL;