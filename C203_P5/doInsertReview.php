<?php
$theName = $_POST['restaurant'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];
$message = "";

$host = "localhost";
$user = "root";
$pass = "";
$db = "c203_p05";

//open connection
$link = mysqli_connect($host, $user, $pass, $db);

//build sql query
$query = "INSERT INTO reviews(rest_id, rating, comment) VALUES('$theName','$rating','$comment')";

//execute sql query
$result = mysqli_query($link, $query) or die('Error querying database');

//process the result
if ($result) {
    $message = "Rating: $rating";
    $message .= "<br>Comment: $comment";
    $message .= "<br><h3>Review Submitted Successfully</h3>";
} else {
    $message = "record insertion failed";
}
//close connection 
mysqli_close($link);
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
        <?php
        echo $message;
        ?>
    </body>
</html>
