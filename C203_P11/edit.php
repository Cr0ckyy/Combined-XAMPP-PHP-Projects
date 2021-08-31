<?php
session_start();
// include a php file that contains the common database connection codes
include("dbFunctions.php");

$itemID = $_POST['itemID'];
//echo $itemID;
echo $itemID;

// create query to retrieve a single record based on the value of $compID 
$query = "SELECT * FROM used_items WHERE id = $itemID";

// execute the query
$status = mysqli_query($link, $query) or die(mysqli_error($link));

// fetch the execution result to an array
$row = mysqli_fetch_array($status);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <title></title>
                <style>
            .submit {
                background: blue;
                border: 1px black;
                color: white;
                padding: 15px 50px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Items For Sale - Edit</h3>
        <?php
        $itemID = $row['id'];
        $name = $row['name'];
        $price = $row['price'];
        $desc = $row['description'];
        ?>

        <form method="post" action="doEdit.php">
            <input type="hidden" name="itemID" value="<?php echo $itemID ?>"/>
            <b>Name: </b><br><?php echo $name ?>
            <br/><br/>
            <b>Price: </b><br>$<?php echo $price ?>
            <br/><br/>
            <b>Editable Description: </b>
            <textarea name="description" rows="4"><?php echo $desc ?></textarea>
            <br/><br/>
            <input type="submit" value="Update Item"/>
        </form>
    </body>
</html>
