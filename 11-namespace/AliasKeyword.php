<?php 

require_once "Conflict.php";
require_once "Helper.php";

// Alias adalah kemampuan membuat nama lain dari class, function dan sonstant
// kita dapat menggunaka kata kuncinya as setelah melakukan use

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;

use function Helper\helpMe as help;
use const Helper\APPLICTION as APP;


// untuk mengaksesnya dengan menggunakan nama aliasnya

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

help();
echo APP . PHP_EOL;