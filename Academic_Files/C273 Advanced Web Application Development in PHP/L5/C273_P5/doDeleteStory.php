<?php
// include a php file that contains the common database connection codes
include ("dbFunctions.php");

//retrieve id from the hidden form field of the previous page (index.php)
$theID = $_GET['id'];

$msg = "";

//build a query to delete a specific record based on id
$queryDelete = "DELETE FROM stories
                WHERE id = $theID";
$status = mysqli_query($link, $queryDelete) or die(mysqli_error($link));

if ($status) {
    $message = "<p>Story has been deleted.<br/>";
    $message .= "<a href='index.php'>Back</a></p>";
} else {
    $message = "<p>Story delete failed.</p>";
}
mysqli_close($link);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Story Teller - Delete Story</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php         include("navbar.php"); ?>
        <h3>Story Teller - Delete Story</h3>
        <p>
            <?php echo $message; ?>
        </p>
    </body>
</html>