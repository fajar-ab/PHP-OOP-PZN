<?php 


require_once "Manager.php";

$manager = new Manager();
$manager->name = "fajar";
$manager->sayHello("fadiah");

$vp = new VicePresiden();
$vp->name = "lisman";
$vp->sayHello("fauzi");