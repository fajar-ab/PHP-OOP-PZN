<?php
require_once "data/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "data/Validation.php";

$loginRequest = new LoginRequest;
$loginRequest->username = "o";
$loginRequest->password = "o";

validateLoginRequest($loginRequest);
echo "VALID" . PHP_EOL;
