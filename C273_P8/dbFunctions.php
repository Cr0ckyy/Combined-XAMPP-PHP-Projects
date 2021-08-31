<?php

$username = "root";
$password = "";         // No password for localhost
$db = "c273_p08";

$host = "localhost";
$link = mysqli_connect($host, $username, $password, $db) or
        die(mysqli_connect_error());
?>

