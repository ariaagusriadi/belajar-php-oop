<?php
require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "Helper/Validation.php";

$login = new LoginRequest();
$login->username = "  ";
$login->password = "  ";

try {
    validateLoginRequest($login);
    echo "Valid" . PHP_EOL;
}catch (ValidationException | Exception $exception){
    echo "Error : {$exception->getMessage()}". PHP_EOL;

    var_dump($exception->getTrace());

    echo $exception->getTraceAsString();
} finally {
    echo "ERROR ATAU ENGAK, AKAN DIEKSEKUSI". PHP_EOL;
}
