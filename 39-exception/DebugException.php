<?php
require_once "data/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "data/Validation.php";

$loginRequest = new LoginRequest;
$loginRequest->username = "   ";
$loginRequest->password = "   ";

try {
  validateLoginRequest($loginRequest);
  echo "VALID" . PHP_EOL;
} catch (ValidationException | Exception $e) {
  // echo "error: {$e->getMessage()}" . PHP_EOL;

  // * sebagai string
  // echo $e->getTraceAsString() . PHP_EOL;

  // * sebagai array
  print_r($e->getTrace());
} finally {
  echo "\n";
  echo "ERROR ATAUPUN TIDAK ERROR AKAN DIEKSEKUSI" . PHP_EOL;
}
