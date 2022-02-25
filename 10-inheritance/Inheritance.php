<?php 

require_once "Manager.php";

$manager = new Manager();
$manager->name = "fajar";
$manager->sayHello("fadilah");

$vp = new VicePresiden();
$vp->name = "lisaman";
$vp->sayHello("fauzi");