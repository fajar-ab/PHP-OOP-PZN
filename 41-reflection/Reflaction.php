<?php
require_once "data/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest;
$request->username = "fajar";
$request->username = "rahasia";

ValidationUtil::validateReflaction($request);
