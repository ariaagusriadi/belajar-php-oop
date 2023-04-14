<?php
class ValidationUtil{
    static function validate(LoginRequest $request){
        if(!isset($request->username)){
            throw new ValidationException("Username not set");
        }elseif (!isset($request->password)){
            throw new ValidationException("Password not set");
        }else if(is_null($request->username)){
            throw new ValidationException("Username is Null");
        }elseif (is_null($request->password)){
            throw new ValidationException("Password is null");
        }
    }

    static  function validateReflection($request){
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property){
            if(!$property->isInitialized($request)){
                throw new ValidationException("$property->name is not set");
            }elseif (is_null($property->getValue($request))){
                throw new ValidationException("$property->name is null");
            }
        }
    }
}