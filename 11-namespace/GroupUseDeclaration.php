<?php 

require_once "Conflict.php";
require_once "Helper.php";


// menggroup class namespace
use Data\One\{Conflict as Conflict1, Sample, Dummy};

use function Helper\{helpMe as help};
use const Helper\{APPLICTION as APP};


// untuk mengaksesnya dengan menggunakan nama aliasnya

$conflict1 = new Conflict1();
$sample = new Sample();
$dummy = new Dummy();

help();
echo APP . PHP_EOL;