<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = 'Aria';
$manager->sayhello('aria');

$vp = new VicePresident();
$vp->name = 'Aria';
$vp->sayhello('aria');
