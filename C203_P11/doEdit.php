<?php
session_start();
// include a php file that contains the common database connection codes
include("dbFunctions.php");

//retrieve computer details from the textarea on the previous page
$description = $_POST['description'];

//retrieve id from the hidden form field of the previous page
$itemID = $_POST['itemID'];

$msg = "";

//build a query to update the table
//update the record with the details from the form
$updateQuery = "UPDATE used_items SET description='$description' WHERE id=$itemID";

//execute the query
$status = mysqli_query($link, $updateQuery) or die(mysqli_error($link));

//if statement to check whether the update is successful
//store the success or error message into variable $msg
if($status){
    $msg = "Successfully Updated";
}else{
    $msg = "Error updating";
}
mysqli_close($link);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo $msg;
        echo "<br/><br/>";
        echo "<a href='index.php'>Go back to Home Page</a>";
        ?>
    </body>
</html>
