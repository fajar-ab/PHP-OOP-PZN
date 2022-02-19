<?php 

class Person {

	var string $name; 
	var ?string $address = null; // type nullable
	var string $country = "indonesia";


	// function di dalam class
	function sayHello(string $name) {
		echo "Hello, $name" . PHP_EOL;
	} 
}