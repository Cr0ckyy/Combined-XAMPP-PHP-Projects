<?php
$theTitle = $_POST['title'];
$theCategory = $_POST['category'];
$thePages = $_POST['pages'];
$theQuantity = $_POST['quantity'];
$theRent = $_POST['rent'];

$host = "localhost";
$username = "root";
$password = "";
$db = "c203_p08";

$link = mysqli_connect($host, $username, $password, $db);

$queryInsert = "INSERT INTO books(c_id, title, pages, qty, rent_price) VALUES ($theCategory, '$theTitle', '$thePages', '$theQuantity', '$theRent')";

$resultInsert = mysqli_query($link, $queryInsert) or die('Error querying database');

if ($resultInsert) {
    $message = "Book Information Submitted Susuccessfully!";
    $success = "yes";
} else {
    $message = "Book Record Insertion Failed!";
    $success = "no";
}

mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if ($success == "yes") {


            printf("Title: %s <br>", $theTitle);
            printf("Number of Pages: %d <br>", $thePages);
            printf("Quantity: %d <br>", $theQuantity);
            printf("Rent price: $%.2f <br>", $theRent);
            echo "<br>";
            printf("<b>%s", $message);
            
            
            
            
        } else if ($success == "no") {
            echo $message;
        }
        ?>
    </body>
</html>
