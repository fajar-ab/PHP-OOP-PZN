<?php

class Data implements IteratorAggregate
{
  var string $first = "first";
  public string $second = "second";
  private string $third  = "third";
  protected string $forth = "forth";

  public function getIterator(): Traversable
  {
    $arr = [
      // "first" => $this->first,
      "second" => $this->second,
      "third" => $this->third,
      "forth" => $this->forth
    ];

    return new ArrayIterator($arr);
  }
}


$data = new Data();
foreach ($data as $property => $value) {
  echo "{$property}\t: {$value}" . PHP_EOL;
}
