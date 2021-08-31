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
        $theTitle = $_POST['movieTitle'];
        $theDuration = $_POST['movieDuration'];
        $message = "";

        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "c203_p05";

        // open connectin
        $link = mysqli_connect($host, $user, $pass, $db);

        //build sql query
        $query = "INSERT INTO movies(title,duration_minutes) VALUES('$theTitle','$theDuration')";

        // execute sql query
        $result = mysqli_query($link, $query) or die('Error querying database');

        // process the result
        if ($result) {
            $message = "record inserted successfully";
        } else {
            $message = "record insertion failed";
        }

        // close connection
        mysqli_close($link);
        echo $message;
        ?>
    </body>
</html>
