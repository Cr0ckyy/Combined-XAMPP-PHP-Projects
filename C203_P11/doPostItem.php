<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("location: login.php");
    exit;
}

$userID = $_SESSION['user_id'];

// php file that contains the common database connection code
include "dbFunctions.php";

if (!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['price'])) 
{
    #TODO: Assign data retreived from form to the following variables $itemName, $itemDesc, $itemPrice  respectively
    $itemName = $_POST['name'];
    $itemDesc = $_POST['description'];
    $itemPrice = $_POST['price'];
    
    $sql = "INSERT INTO used_items (name,user_id,description, price) 
            VALUES ('$itemName',$userID,'$itemDesc',$itemPrice)";
    
    //TODO: Execute the SQL statement 
    $status = mysqli_query($link, $sql) or die(mysqli_error($link));
    
    if ($status) {
        $message = "Item posted successfully.";
    } else {
        $message = "Item post failed.";
    }
} else {
    $message = "All Item details have to be provided.";
    
    //TODO: Close the Database conection 
    mysqli_close($link);
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
        <title>Items for Sale</title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Items for Sale - Post Item</h3>
        <p>
            <?php echo $message; ?>
        </p>
    </body>
</html>