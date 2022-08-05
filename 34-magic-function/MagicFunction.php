<?php

require_once "Student.php";

$student1 = new Student("01", "fajar fadilah", 100);

// kompersi oject ke string
$toString = (string) $student1;
echo $toString . PHP_EOL . PHP_EOL;

// memanggil invoke
$student1(1, 'satu', true, 3.14);

// debug info
var_dump($student1);
