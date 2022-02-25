<?php 

class Product {

    private string $name;
    protected int $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}

class BuahBuahan extends Product {

    public function ambilDiskon(int $n) {
        $totalHarga = $this->price * $n;
        return ($n >= 10) ? $totalHarga - ($totalHarga * (10 / 100)) : $totalHarga;
    }
}