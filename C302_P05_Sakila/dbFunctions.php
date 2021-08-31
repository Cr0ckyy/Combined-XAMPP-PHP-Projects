<?php

$database_ip = "localhost";
$database = "sakila";
$username = "root";
$password = "";

$link = mysqli_connect($database_ip, $username, $password, $database);

if (!$link) {
    die("MYSQL connection failed: " . mysqli_connect_error());
} else {
    echo 'Connected MYSQL successfully';
}