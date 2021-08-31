<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "aftercare";


$conn = new mysqli($host, $username, $password, $db)
        or die("Mysql could not be connected to." . mysqli_error($con));


$link = mysqli_connect($host, $username, $password, $db);

if (!$link) {
    die(mysqli_error($link));
}