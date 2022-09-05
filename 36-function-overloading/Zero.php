<?php

class Zero
{
  public array $properties = [];

  public function __get($name)
  {
    return $this->properties[$name];
  }

  public function __set($name, $value)
  {
    $this->properties[$name] = $value;
  }

  public function __isset($name): bool
  {
    return isset($this->properties[$name]);
  }

  public function __unset($name)
  {
    unset($this->properties[$name]);
  }

  // function overloading
  public function __call($name, $arguments)
  {
    $join = join(",", $arguments);
    echo "call fuction $name with argument $join" . PHP_EOL;
  }

  public static function __callStatic($name, $arguments)
  {
    $join = join(",", $arguments);
    echo "call fuction $name with argument $join" . PHP_EOL;
  }
}
