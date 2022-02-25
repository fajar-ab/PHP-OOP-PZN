<?php 

namespace Data;

interface HasBrand {

    function getBrance(): string;
}

interface IsMaintenance {

    function isMaintenance(): bool;
}

interface Car extends HasBrand {

    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car, IsMaintenance {

    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;   
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrance(): string
    {
        return "Toyota";
    }
    
    public function isMaintenance(): bool
    {
        return false;
    }
}