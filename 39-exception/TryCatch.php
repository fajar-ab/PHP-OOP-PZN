<?php
require_once "data/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "data/Validation.php";

$loginRequest = new LoginRequest;
$loginRequest->username = "";
$loginRequest->password = "";

// try {
//   validateLoginRequest($loginRequest);
// } catch (ValidationException $e) {
//   echo "validation error: {$e->getMessage()}" . PHP_EOL;
// } catch (Exception $e) {
//   echo "exception error: {$e->getMessage()}" . PHP_EOL;
// }

try {
  validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $e) {
  echo "error: {$e->getMessage()}" . PHP_EOL;
}

echo "VALID" . PHP_EOL;
