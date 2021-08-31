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
        // put your code here
        ?>
        <form method="post" action="doExercise2a.php">
            <label for="idTitle">Movie title: </label>
            <input type="text" id="idTitle" name="movieTitle"/>
            <br/><br/>
            <label for="idDuration">Movie duration (minutes): </label>
            <input type="number" id="idDuration"name="movieDuration"/>
            <br/><br/>
            <input type="submit" value="Insert Movie"/>
        </form>
    </body>
</html>
