<?php 

require_once 'Person.php';

$person1 = new Person();

$person1->name = "fajar fadilah"; 
$person1->address = "padangsidimpuan"; 
// $person1->country = "indonesia";

echo "name : $person1->name" . PHP_EOL;
echo "address : $person1->address" . PHP_EOL;
echo "country : $person1->country" . PHP_EOL; // value akan sesuai dengan default value 