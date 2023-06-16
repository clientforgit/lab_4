<?php

$number = 5;
$string = "5";
$boolean = true;

$result = $number + $string;
echo "Addition result: " . $result . "<br>";
echo "Type: " . gettype($result) . "<br>";

$result = $number - $string;
echo "Subtraction result: " . $result . "<br>";
echo "Type: " . gettype($result) . "<br>";

$result = $number * $boolean;
echo "Multiplication result: " . $result . "<br>";
echo "Type: " . gettype($result) . "<br>";

$result = $number / $boolean;
echo "Division result: " . $result . "<br>";
echo "Type: " . gettype($result) . "<br>";

$result = $number % $string;
echo "Modulus result: " . $result . "<br>";
echo "Type: " . gettype($result) . "<br>";

$result = $string . $number;
echo "Concatenation result: " . $result . "<br>";
echo "Type: " . gettype($result) . "<br>";

if ($number == $string) {
    echo "Variables are equal.<br>";
} else {
    echo "Variables are not equal.<br>";
}

if ($number === $string) {
    echo "Variables are identical.<br>";
} else {
    echo "Variables are not identical.<br>";
}
