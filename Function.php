<?php

require_once "data/Person.php";

$aria = new Person();
$aria->name = "Aria";
$aria->sayHello("Aria Agus Riadi");


$a = new Person();
$a->name = "Anjoy";
$a->sayHello("hehe");

$aria->info();