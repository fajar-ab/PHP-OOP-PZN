<?php 

trait A {

    function doA() {
        echo "A" . PHP_EOL;
    }

    function doB() {
        echo "B" . PHP_EOL;
    }
}

trait B {

    function doA() {
        echo "A" . PHP_EOL;
    }

    function doB() {
        echo "B" . PHP_EOL;
    }
}

class Sample {

    // use A, B; // Conflict 

    // mengatasi trait conflict
    use A, B {
        A::doA insteadof B;
        B::doB insteadof A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();