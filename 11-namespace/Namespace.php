<?php 

require_once "Conflict.php";
require_once "Helper.php";

// cara membuat object dari class yang berada didalam namespace
$conflict1 = new \Data\One\Conflict();
$conflict2 = new Data\Two\Conflict();

// cara mengakses function dan constant didalam namespace
echo Helper\APPLICTION . PHP_EOL;
Helper\helpMe();