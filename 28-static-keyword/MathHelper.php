<?php

namespace Helper;

class MathHelper
{
  static public string $name = "MATHHELPER";

  static public function sum(int ...$num): int
  {
    $total = 0;
    foreach ($num as $n) {
      $total += $n;
    }

    return $total;
  }
}
