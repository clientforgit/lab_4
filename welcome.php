<?php
session_start();

if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    if (isset($_COOKIE['name'])) {
        $name = $_COOKIE['name'];
    } else {
        header('Location: form.php');
        exit();
    }
}

echo "Welcome, $name!";