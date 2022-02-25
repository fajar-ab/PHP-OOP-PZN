<?php 

namespace Data\Traits;

trait SayHello {

    public function hello(?string $name = null): void 
    {
        if (is_null($name)) {
            echo "Hello...." . PHP_EOL;
        } else {
            echo "Hello, $name" . PHP_EOL;
        }
    }
}

trait SayGoodBye {

    public function goodBye(string $name = null): void 
    {
        if (is_null($name)) {
            echo "Good Bye...." . PHP_EOL;
        } else {
            echo "Good Bye, $name" . PHP_EOL;
        }
    }
}

trait HasName {

    public string $name;
}

trait CanRun {
    public abstract function run(): void;
}


// ini akan mengakses semua trait di dalam trait
trait All {

    use SayHello, SayGoodBye, HasName, CanRun;
}