<?php

require_once "data/Conflict.php";
require_once  "data/Hellper.php";

use Data\One\Conflict;
use function Hellper\helpMe;
use const Hellper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new \Data\Two\Conflict();
helpMe();
echo APPLICATION;