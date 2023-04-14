<?php
require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer('aria');
var_dump($company);

$company->programmer = new BackendProgrammer('aria');
var_dump($company);

$company->programmer = new FrontendProgrammer('aria');
var_dump($company);

sayHelloProgrammer(new Programmer('aria'));
sayHelloProgrammer(new BackendProgrammer('aria'));
sayHelloProgrammer(new FrontendProgrammer('aria'));

