<?php


require_once "data/Student.php";

$student1 = new Student();
$student1->id = '1';
$student1->name = 'aria';
$student1->value = 100;
$student1->setSample('xyz');
var_dump($student1);

$student2 = clone $student1;
var_dump($student2);

// cara manual clone
//$student2 = new Student();
//$student2->id = '1';
//$student2->name = 'aria';
//$student2->value = 100;

// s$student1 => clone $student2  => $student2->__clone()