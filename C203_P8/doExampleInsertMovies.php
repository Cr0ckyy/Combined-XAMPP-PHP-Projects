<?php
$theTitle = $_POST['title'];
$directorID = $_POST['director'];

// assign values for database connection
$host = "localhost";
$username = "root";
$password = "";
$db = "c203_p08";

// open database connection on $link using mysqli_connect() function 
$link = mysqli_connect($host, $username, $password, $db);

// build  an sql query using the INSERT keyword
$queryInsert = "INSERT INTO example_movies(d_id, title) VALUES ($directorID, '$theTitle')";

// execute the sql query $queryInsert on the database connection $link, by using the mysqli_query() function.
$resultInsert = mysqli_query($link, $queryInsert) or die('Error querying database');

// process the result
if ($resultInsert) {
    $message = "record inserted successfully";
} else {
    $message = "record insertion failed";
}

// close database connection using mysqli_close() function
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
        echo $message;
        ?>
    </body>
</html>
