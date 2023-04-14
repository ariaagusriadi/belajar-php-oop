<?php

require_once "data/Conflict.php";
require_once  "data/Hellper.php";


use Data\One\{Conflict as Conflict1, Dummy as dump , Sample};
use function Hellper\{helpMe};

$con = new Conflict1();
$dum = new dump();
$samp = new Sample();