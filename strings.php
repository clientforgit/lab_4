<?php
$name = "John";
$age = 25;

$string = "My name is " . $name . " and I am " . $age . " years old.";
echo $string;

$string = "My name is {$name} and I am {$age} years old.";
echo $string;

$string = sprintf("My name is %s and I am %d years old.", $name, $age);
echo $string;
