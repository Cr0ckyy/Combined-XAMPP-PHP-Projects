<!-- LI SHUFANG - 19039480 -->
<?php
$conn= new mysqli('localhost','root','','aftercare')
        or die("Mysql could not be connected to.".mysqli_error($con));


$host = "localhost";
$username = "root";
$password = "";
$db = "aftercare";
$link = mysqli_connect($host, $username, $password, $db);

if (!$link) {
    die(mysqli_error($link));
}
?>
<!-- LI SHUFANG - 19039480 -->