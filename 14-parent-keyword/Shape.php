<?php 

// untuk mengakses function milik class parent, kita bisa mengunakan katakunci parent

namespace Data;

class Shape {
    
    public function getCorner() : int
    {
        return 0;
    }
}

class Rectangle extends Shape {

    public function getCorner() : int
    {
        return 4;
    }

    // sederhananya parent digunakan untuk mengakses class parent
    public function gerParentCorner() : int
    {
        return parent::getCorner();
    }
}