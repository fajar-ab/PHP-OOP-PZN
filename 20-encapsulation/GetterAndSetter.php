<?php 

require_once "Category.php";

$category = new Category();

$category->setName("            ");
$category->setExpensive(true);

echo "Name {$category->getName()}" . PHP_EOL;
echo "Expensive {$category->isExpensive()}" . PHP_EOL;