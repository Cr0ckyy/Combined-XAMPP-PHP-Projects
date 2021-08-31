<?php
session_start();
include("dbFunctions.php");
if (!isset($_SESSION['username'])) {
    echo "You have not logged in.<br/>";
    echo "Please <a href='login.php'>login</a>.";
    exit;
}

$title = $_POST['title'];
$id = $_POST['id']; //from the hidden form field 'id'
$category_id = $_POST['category_id'];

//prevents sql injection and filter special character such as single quote
$content = mysqli_real_escape_string($link, $_POST['content']);

$numWords = str_word_count($content);

$updateQuery = "UPDATE stories SET
		title='$title',
		category_id=$category_id,
		content='$content'  
                WHERE id=$id";

$status = mysqli_query($link, $updateQuery) or die(mysqli_error($link));

mysqli_close($link);

if ($status) {
    $message = "The story has been edited successfully!";
} else {
    $message = "Error occurs in editing story record. <a href='editStory.php?id=$id'>Try Again</a>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Story Teller - Edit Story</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php 
                include("navbar.php");
        echo $message; ?> 
    </body>
</html>