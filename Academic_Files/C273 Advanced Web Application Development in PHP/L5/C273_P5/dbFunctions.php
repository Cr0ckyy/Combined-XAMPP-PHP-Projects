<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "c203_p13";
$link = mysqli_connect($host, $username, $password, $db);

if (!$link) {
    die(mysqli_error($link));
}

?>
