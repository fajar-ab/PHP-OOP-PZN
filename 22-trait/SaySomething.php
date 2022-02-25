<?php 

namespace Data\Traits;

// trait class
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

    // trait function
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

    // trait properties
    public string $name;
}

trait CanRun {

    /** 
     * abstract function dalam trait class,
     * ketika sebuah class mengimport sebuah trait class yang memiliki absract function
     * maka class tersebut wajib mengoverride function tersebut
     */
    public abstract function run(): void;
}


// ketika kita mengoverrite trait function di class Person2 