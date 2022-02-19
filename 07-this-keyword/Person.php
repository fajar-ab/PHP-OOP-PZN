<?php 

class Person {

	var string $name; 
	var ?string $address = null;
	var string $country = "indonesia";

	function sayHello(?string $name) {
		if (is_null($name)) {
			echo "Hello, my name is {$this->name}" . PHP_EOL;
		} else {
			echo "Hello $name, my name is {$this->name}" . PHP_EOL;
		}
	}
}