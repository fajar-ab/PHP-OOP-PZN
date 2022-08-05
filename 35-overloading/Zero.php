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
}
