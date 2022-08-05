<?php

class Student
{
  public string $id;
  public string $name;
  public int $value;

  public function __construct(string $id, string $name, int $value)
  {
    $this->id = $id;
    $this->name = $name;
    $this->value = $value;
  }

  // * magic function repesentasi string dari sebuah object
  public function __toString(): string
  {
    return "Student { id: $this->id, name: $this->name, value: $this->value }";
  }

  // * merupakan function yang dieksekusi ketika object yang dibuat dianggap sebagai function
  public function __invoke(...$arguments): void
  {
    $join = join(',', $arguments);
    echo "Invoke student with arguments $join" . PHP_EOL . PHP_EOL;
  }

  // * merupakan function yang digunakan jika ingin mengubah dari debug info
  public function __debugInfo()
  {
    return [
      "id" => $this->id,
      "name" => $this->name,
      "value" => $this->value,
      "autor" => "@fajar",
      "version" => "1.0.0",
    ];
  }
}
