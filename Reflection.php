<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "Helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = 'a';
$request->password = 'a';
//ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest{
    public ?string $name;
    public ?string $addres;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "aria";
$register->addres = "aria";
$register->email = "aria";

ValidationUtil::validateReflection($register);