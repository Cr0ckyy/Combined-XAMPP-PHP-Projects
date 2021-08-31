<?php
$name = $_POST['memberName'];
$message = "";

$host = "localhost";
$user = "root";
$pass = "";
$db = "c203_p05";

// open connectin
$link = mysqli_connect($host, $user, $pass, $db);

//build sql query
$query = "SELECT * FROM members WHERE name = '$name'";

// execute sql query
$result = mysqli_query($link, $query) or die('Error querying database');

// close connection
mysqli_close($link);

$row = mysqli_fetch_array($result);

$message = "";
if (!empty($row)) {
    $name = $row['name'];
    $points = $row['points'];

    $message .= "Name: $name<br/>Points: $points";
} else {
    $message .= "no matching record found";
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo $message; ?>
    </body>
</html>
