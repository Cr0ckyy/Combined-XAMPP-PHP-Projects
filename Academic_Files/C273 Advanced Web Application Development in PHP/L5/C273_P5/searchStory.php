<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Story Teller - Search for Stories</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include ("navbar.php"); ?>
        <h2>Story Teller - Search for Stories</h2>
        <form action="doSearchStory.php" method="post">
            <label>&nbsp;Story content contains:</label>
            <input type="text" name="content" style="width:250px" required/>
            <br/>
            <input type="submit" value="Search for Stories"/>
        </form>
    </body>
</html>
