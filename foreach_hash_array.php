<?php
$user = [
    "name" => "John Doe",
    1 => 30,
    "" => "johndoe@example.com",
    "city" => "New York"
];

foreach ($user as $key => $value) {
    echo "$key: $value <br>";
}