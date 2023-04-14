<?php

require_once "data/Conflict.php";
require_once  "data/Hellper.php";

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;

use function Hellper\helpMe as Help;
use const Hellper\APPLICATION as APP;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();
Help();
echo APP;