<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "You are not authorized to view this page";
    exit;
}
$userID = $_SESSION['user_id'];


// php file that contains the common database connection code
include "dbFunctions.php";

//TODO: add the code to print the content of $_FILES
echo "<pre>";
print_r($_FILES);
echo "</pre>";

//TODO: add the code to print the file name
echo "FILENAME: " . $_FILES['picture']['name'] . "   ";

//TODO: add the code to print the file temporary name
echo "FILE TEMPORARY NAME: " . $_FILES['picture']['tmp_name'] . "  ";
$targetPath = "profilePics/";

//TODO: modify the following code to store the name of the image file into variable $fileName
$fileName = basename($_FILES['picture']['name']);

//TODO: modify the following code to store the intended complete path to store the image file into variable $completePath
$completePath = $targetPath . $fileName;

$message = "";
if (move_uploaded_file($_FILES['picture']['tmp_name'], $completePath)) {
    $message .= "The file " . $fileName . " has been uploaded";
} else {
    $message .= "File upload failed";
}

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];

$sql = "update users
            set first_name='$firstName',
                last_name='$lastName',
                image='$fileName',
           where user_id='$userID'";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <title>We Are Connected - Edit Profile</title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>We Are Connected - Edit Profile</h3>
        <?php
        echo $message;
        ?>
    </body>
</html>