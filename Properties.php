<?php
require_once "data/Person.php";

$person = new Person();
$person->name = 'Aria Agus Riadi';
$person->address = 'Ketapang';
$person->country = 'indonesia';

var_dump($person);

echo "Nama : $person->name". PHP_EOL;
echo "Addres : $person->address". PHP_EOL;
echo "Country : $person->country". PHP_EOL;


$person2 = new Person();
$person->name = 'Anjoyy';
$person->address = 'siduk';
$person->country = 'indonesia';

var_dump($person2);

// error
//$person2->name = [];