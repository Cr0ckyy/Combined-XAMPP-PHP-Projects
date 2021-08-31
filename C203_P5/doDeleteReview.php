<?php
$delete = $_POST['restName'];
$message = "";

$host = "localhost";
$user = "root";
$pass = "";
$db = "c203_p05";

//open connection
$link = mysqli_connect($host, $user, $pass, $db);

//build sql query
$query = "DELETE FROM reviews WHERE reviews.rest_id = '$delete' ";

//execute sql query
$result = mysqli_query($link, $query) or die('Error querying database');

//process the result
if ($result) {
    $message = "All Reviews for the Restaurant are deleted";
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
