<?php 

namespace Data\Person;

require_once "SaySomething.php";

use Data\Traits\{SayGoodBye, SayHello, HasName, CanRun};

class Person {

    // mengimport trait class
    use SayHello, SayGoodBye, HasName, CanRun;

    // override abstract function
    public function run(): void
    {
        echo "Person $this->name is run" . PHP_EOL;
    }
}


// ketika kita mengoverrite trait function di dalam class Person2 
class Person2 {

    use SayHello, SayGoodBye, HasName;

    public function hello(?string $name = null): void
    {
        if (is_null($name)) {
            echo "Hello.... person 2" . PHP_EOL;
        } else {
            echo "Hello, $name person 2" . PHP_EOL;
        }
    }

    public function goodBye(string $name = null): void
    {
        if (is_null($name)) {
            echo "Good Bye.... person 2" . PHP_EOL;
        } else {
            echo "Good Bye, $name person 2" . PHP_EOL;
        }
    }
}


// ketika kita memiliki function yang sama di dalam class parent
class ParentPerson {

    public function hello(?string $name = null): void
    {
        if (is_null($name)) {
            echo "Hello.... parent person" . PHP_EOL;
        } else {
            echo "Hello, $name parent person" . PHP_EOL;
        }
    }

    public function goodBye(string $name = null): void
    {
        if (is_null($name)) {
            echo "Good Bye.... parent person" . PHP_EOL;
        } else {
            echo "Good Bye, $name parent person" . PHP_EOL;
        }
    }
}

class Person3 extends ParentPerson {

    // maka otomatis function dari parent class akan di override oleh trait fungtion 
    use SayHello, SayGoodBye;
}


// trait visibility overide
class Person4 {

    // mengubah visibility
    use SayHello, SayGoodBye, HasName {
        hello as private;
        goodBye as private;
    }
}