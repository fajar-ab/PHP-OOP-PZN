<?php

// $dateTime = new DateTime();
// $dateTime->setDate(2001, 6, 1);
// $dateTime->setTime(10, 10, 10, 0);

// var_dump($dateTime);

$dateTime = new DateTime();

// date interval bertambah 1 hari
$dateTime->add(new DateInterval("P1D"));
var_dump($dateTime);

// date interval berkurang 1 hari
$dateInterval = new DateInterval("P2D");
$dateInterval->invert = true;

$dateTime->add($dateInterval);
var_dump($dateTime);
