<?php
$name = $_POST['itemName'];
$price = $_POST['itemPrice'];
$message = "";

$host = "localhost";
$user = "root";
$pass = "";
$db = "c203_p05";

//open connection
$link = mysqli_connect($host, $user, $pass, $db);

//build sql query
$query = "INSERT INTO price_list(name, price) VALUES('$name','$price')";

//execute sql query
$result = mysqli_query($link, $query) or die('Error querying database');

//process the result
if ($result) {
    $message .= "Item Name: $name<br/>";
    $message .= "Item Price: $price<br/>";
    $message .= "Successfully inserted";
} else {
    $message = "Record Insertion Failed";
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
        <?php
        echo $message;
        ?>
    </body>
</html>
