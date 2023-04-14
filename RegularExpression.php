<?php

$matches = [];
$result = preg_match_all("/eko|awan|edy/i", "eko kurniawan khannedy", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing dan bangsat!");
var_dump($result);

$result = preg_split("/[\s,-]/", "Eko Kurniawan Khanedy,programmer,zaman-now");
var_dump($result);