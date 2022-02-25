<?php 

require_once "Conflict.php";
require_once "Helper.php";

// import class dalam namespace
use Data\One\Conflict;
// import function dalam namespace
use function Helper\helpMe;
// import constant dalam namespace
use const Helper\APPLICTION;

$conflict1 = new Conflict();


helpMe();
echo APPLICTION . PHP_EOL;