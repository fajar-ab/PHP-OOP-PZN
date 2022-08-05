<?php


// * Operator == (equals) membandingkan semua properties yang terdapat pada object tersebut, dan tiap properties juga akan dibandingkan menggunakan operator == (equals)

// * Sedangkan, operator === (identity) maka akan membandingkan apakah oject tersebut identik, artinya mengacu ke object yang sama

require_once "Student.php";

use Data\Student;

$student1 = new Student;
$student1->id = "1";
$student1->name = "fajar";
$student1->value = 100;

$student2 = new Student;
$student2->id = "1";
$student2->name = "fajar";
$student2->value = 100;

// equals
var_dump($student1 == $student2); // true
// identity
var_dump($student1 === $student2); // false
var_dump($student1 === $student1); // true
