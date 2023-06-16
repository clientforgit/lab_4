<?php
$userInput = "John, Sara, Bob, Carl";

$nameArray = explode(",", $userInput);

$nameArray = array_map('trim', $nameArray);

sort($nameArray);

$sortedNames = implode(", ", $nameArray);

echo "Sorted names: " . $sortedNames;