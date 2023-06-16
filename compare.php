<?php
$number = 10;
$string = "10";

if ($number == $string) {
    echo "Equal";
} else {
    echo "Not equal";
}

echo "<br>";

$float = 1;
$bool = true;

if ($float == $bool) {
    echo "Equal";
} else {
    echo "Not equal";
}

echo "<br>";

$int = 15;
$array = [15];

if ($int == $array) {
    echo "Equal";
} else {
    echo "Not equal";
}

$a = 10;
$b = 20;

if ($a < $b) {
    echo "$a is less than $b";
} elseif ($a > $b) {
    echo "$a is greater than $b";
} else {
    echo "$a is equal to $b";
}


echo "<br>";



$x = 15;
$y = 10;

$result = $x <=> $y;

if ($result === -1) {
    echo "$x is less than $y";
} elseif ($result === 1) {
    echo "$x is greater than $y";
} else {
    echo "$x is equal to $y";
}


echo "<br>";


$string1 = "apple";
$string2 = "banana";

$result = strcmp($string1, $string2);

if ($result < 0) {
    echo "$string1 comes before $string2";
} elseif ($result > 0) {
    echo "$string1 comes after $string2";
} else {
    echo "$string1 is equal to $string2";
}