<?php 

require_once "Person.php";

use Data\Person\{Person, Person2, Person3, Person4};

$person = new Person();
$person->hello("fajar");
$person->goodBye("fajar");

$person->name = "fajar";
echo $person->run();


echo PHP_EOL;
$person2 = new Person2();
$person2->hello("fajar");
$person2->goodBye("fajar");

echo PHP_EOL;
$person3 = new Person3();
$person3->hello("fajar");
$person3->goodBye("fajar");


echo PHP_EOL;
$person4 = new Person4();
// $person4->hello("fajar"); // ERROR karna access visibility nya telah di override menjadi private
// $person4->goodBye("fajar"); // ERROR