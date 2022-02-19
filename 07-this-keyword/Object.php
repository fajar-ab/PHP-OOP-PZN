<?php 

require_once 'Person.php';

$person1 = new Person();
$person1->name = "fajar fadilah";

// $person1->sayHello();
$person1->sayHello(null);
$person1->sayHello("harun arrasyid");