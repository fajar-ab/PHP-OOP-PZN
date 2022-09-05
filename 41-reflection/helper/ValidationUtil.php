<?php

class ValidationUtil
{
  public static function validate(LoginRequest $loginRequest)
  {
    if (!isset($loginRequest->username)) {
      throw new Exception("user name is null");
    } else if (!isset($loginRequest->password)) {
      throw new Exception("passord name is null");
    }
  }

  // reflaction
  public static function validateReflaction($request)
  {
    $reflaction = new ReflectionClass($request);
    $properties = $reflaction->getProperties(ReflectionProperty::IS_PUBLIC);


    foreach ($properties as $property) {
      if (!$property->isInitialized($request)) {
        throw new Exception("$property->name is not set");
      } else if (is_null($property->getValue())) {
        throw new Exception("$property->name is bull");
      }
    }
  }
}
