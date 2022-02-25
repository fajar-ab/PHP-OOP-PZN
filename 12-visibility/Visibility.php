<?php 

/** 
 * visibility / access modifier adalah kemampuan properties, function, dan constant
 * agar dapat di akses dari mana saja
 * 
 * secara default kata kunci var untuk properties adalah sipatnya public
 * 
 *  ACCESS LEVEL
 * 
 *    Modifier        Class        Subclass        World
 *  -------------------------------------------------------
 *    public            Y              Y             Y
 *    protected         Y              Y             N
 *    private           Y              N             N
 * 
 */

require_once "Product.php";

$product = new Product("Coklat", 6000);
echo "product name  : {$product->getName()}" . PHP_EOL;
echo "product price : {$product->getPrice()}" . PHP_EOL;

echo "\n";

$apel = new BuahBuahan("Apel", 10000);
echo "product name  : {$apel->getName()}" . PHP_EOL;
echo "product price : {$apel->getPrice()}" . PHP_EOL;

$jumlah = 20;
echo "jumlah        : " . $jumlah . PHP_EOL;
echo "total harga   : " . ($jumlah * $apel->getPrice()) . PHP_EOL;
echo "total bayar   : " . $apel->ambilDiskon(20) . PHP_EOL;