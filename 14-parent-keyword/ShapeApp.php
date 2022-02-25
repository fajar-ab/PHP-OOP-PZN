<?php 

require_once "Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$retangle = new Rectangle();
echo $retangle->getCorner() . PHP_EOL;
echo $retangle->gerParentCorner() . PHP_EOL;
