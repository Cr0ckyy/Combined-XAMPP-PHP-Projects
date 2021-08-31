<?php
$Title = $_POST['movieTitle'];
$message = "";

$host = "localhost";
$user = "root";
$pass = "";
$db = "c203_p05";

// open connectin
$link = mysqli_connect($host, $user, $pass, $db);

//build sql query
$query = "SELECT * FROM movies WHERE title = '$Title'";

// execute sql query
$result = mysqli_query($link, $query) or die('Error querying database');

// close connection
mysqli_close($link);

$row = mysqli_fetch_array($result);

$message = "";
if (!empty($row)) {
    $Title = $row['title'];
    $time = $row['duration_minutes'];

    $message .= "Movie Title: $Title<br/>Movie Duration: $time";
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
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo $message; ?>
    </body>
</html>
