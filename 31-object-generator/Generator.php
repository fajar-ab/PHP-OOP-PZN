<?php

// tanpa generator
function getGenap(int $max): Iterator
{
  $arr = [];

  for ($i = 1; $i <= $max; $i++) {
    if ($i % 2 === 0) {
      $arr[] = $i;
    }
  }

  return new ArrayIterator($arr);
}

foreach (getGenap(10) as $value) {
  echo "genap {$value}" . PHP_EOL;
}

echo PHP_EOL;

// mengunakan generator
function getGajil(int $max): Iterator
{

  for ($i = 1; $i <= $max; $i++) {
    if ($i % 2 === 1) {
      // kata kunci yield
      yield $i;
    }
  }
}

foreach (getGajil(10) as $value) {
  echo "ganjil {$value}" . PHP_EOL;
}
