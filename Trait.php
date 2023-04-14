<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person};

$person = new Person();
$person->goodBye('eko');
$person->hello('joko');

$person->name = "eko";
var_dump($person);

$person->run();
