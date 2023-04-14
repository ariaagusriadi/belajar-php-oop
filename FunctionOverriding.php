<?php

require_once "data/Manager.php";

$Manager = new Manager();
$Manager->name = 'aria';
$Manager->sayHello('Code Write');


$vp = new VicePresident();
$vp->name = 'HEHO';
$vp->sayHello('Code Write');