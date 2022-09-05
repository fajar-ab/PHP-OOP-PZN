<?php

function validateLoginRequest(LoginRequest $loginRequest)
{
  if (!isset($loginRequest->username)) {
    throw new ValidationException("username is null");
  } else if (!isset($loginRequest->password)) {
    throw new ValidationException("password is null");
  } else if (trim($loginRequest->username) === "") {
    throw new Exception("username is empty");
  } else if (trim($loginRequest->password)  === "") {
    throw new Exception("password is empty");
  }
}
