<?php

namespace Data;

class Student
{
  public string $id;
  public string $name;
  public int $value;
  private string $sample;

  public function setSample(string $sample)
  {
    $this->sample = $sample;
  }

  public function __clone()
  {
    // jangan clone data hapus
    unset($this->sample);
  }
}
