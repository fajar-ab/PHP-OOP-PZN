<?php

require_once "MathHelper.php";

use Helper\MathHelper;

$mathHelper = new MathHelper();

// mengambil static field
echo MathHelper::$name . PHP_EOL;

// mengubah static field
MathHelper::$name = "fajar fadilah";
echo MathHelper::$name . PHP_EOL;

$num = MathHelper::sum(1, 2, 3, 4, 5);

echo "result: $num" . PHP_EOL;
