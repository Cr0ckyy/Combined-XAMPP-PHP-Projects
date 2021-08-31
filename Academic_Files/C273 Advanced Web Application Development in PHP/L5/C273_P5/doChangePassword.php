<?php
session_start();
include("dbFunctions.php");

$query = "SELECT * FROM users WHERE username='" . $_SESSION['username'] . "'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result);

$oldPassword = $_POST['oldPassword'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if (SHA1($oldPassword) == $row['password'] && $password == $password2) {
    $queryUpdate = "UPDATE users
                    SET password = SHA1('$password') 
                    WHERE username = '" . $_SESSION['username'] . "'";
    $resultUpdate = mysqli_query($link, $queryUpdate) or 
            die("The password changed unsuccesful");
    $message = "your password has been changed";
} else {
    $message = "Old password does not match the one in the database
                and/or new password entries do not match. No change is made";
}
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Story Teller - Change Password</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>    
          <?php         include("navbar.php"); ?>
        <?php echo $message ?>
    </body>
</html>