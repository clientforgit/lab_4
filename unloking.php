<?php
function getArray() {
    return [1, 2, 3];
}

function multiplyArray($array, $multiplier) {
    return array_map(function($value) use ($multiplier) {
        return $value * $multiplier;
    }, $array);
}

$multipliedArray = multiplyArray(getArray(), 2)[1];
echo $multipliedArray;