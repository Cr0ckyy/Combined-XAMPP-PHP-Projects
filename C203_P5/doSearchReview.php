<?php
$name = $_POST['restaurantName'];
$message = "";

$host = "localhost";
$user = "root";
$pass = "";
$db = "c203_p05";

// open connectin
$link = mysqli_connect($host, $user, $pass, $db);

//build sql query
if (!empty($name)) {
    $query = "SELECT * FROM restaurants, reviews WHERE restaurants.rest_id = reviews.rest_id AND restaurants.name = '$name";
} else {
    $query = "SELECT * FROM restaurants, reviews WHERE restaurants.rest_id = reviews.rest_id";
}

// execute sql query
$result = mysqli_query($link, $query) or die('Error querying database');

// close connection
mysqli_close($link);

$row = mysqli_fetch_array($result);

$message = "";
if (!empty($row)) {
    $name = $row['name'];
    $rating = $row['rating'];
    $comments = $row['comment'];

    $message .= "Name: $name<br/><br/>Points: $rating <br/><br/> Comment: $comments";
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
