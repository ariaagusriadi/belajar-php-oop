<?php

$array = [
    'fristname' => 'aria',
    'middlename' => 'agus',
    'lastname' => 'riadi',
];

$object = (object) $array;
var_dump($object);

echo "fristname : $object->fristname" . PHP_EOL;
echo "middlename : $object->middlename" . PHP_EOL;
echo "lastname : $object->lastname" . PHP_EOL;

$aarraylagi = (array) $object;
var_dump($aarraylagi);

require_once "data/Person.php";

$person = new Person('aria', 'agus');
var_dump($person);

$arryperson = (array) $person;
var_dump($arryperson);