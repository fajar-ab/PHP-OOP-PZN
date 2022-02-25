<?php 

require_once "Programer.php";

$company = new Company();

$company->programmer = new Programmer("Fajar");
var_dump($company);

$company->programmer = new BackendProgrammer("Fajar");
var_dump($company);

$company->programmer = new FrontendProgrammer("Fajar");
var_dump($company);

sayHelloProgramer(new Programmer("Fajar"));
sayHelloProgramer(new BackendProgrammer("Fajar"));
sayHelloProgramer(new FrontendProgrammer("Fajar"));