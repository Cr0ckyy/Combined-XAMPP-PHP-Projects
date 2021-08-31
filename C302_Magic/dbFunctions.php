<?php 
$database_ip = "localhost";
$database = "c302_magic";
$username = "root";
$password = "";

$link= mysqli_connect($database_ip, $username, $password, $database);
session_start();
if (!$link) {
    die("connection failed: " . mysqli_connect_error());
}