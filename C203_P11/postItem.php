<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <title>Items for Sale</title>    
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Items for Sale - Post</h3>

        <form id="postForm" method="post" action="doPostItem.php">
            <label for="idName">Item Name:</label>
            <input type="text" id="idName" name="name" required/>				
            <label for="idDesc">Description:</label>
            <textarea id="idDesc" name="description" rows="5" cols="30" required></textarea>	
            <label for="idPrice">Price:</label>
            <input type="text" id="idPrice" name="price" required/>	
            <input type="submit" value="Post Item" />	
        </form>
    </body>
</html>