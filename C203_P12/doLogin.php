<?php
session_start();
include 'dbFunctions.php';

$msg = "";

if (!isset($_SESSION['user_id'])) {
    if (isset($_POST['username'])) {
        //retrieve form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        //match the username and password entered with database record
        $query = "SELECT user_id,username,role FROM users 
            WHERE username='" . $username . "' AND password = SHA1('" . $password . "')";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));

        //if record is found, store id and username into session
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['username'] = $row['username'];

            //save username if user choose to be remembered
            if (isset($_POST['remember'])) {
                setcookie("username", $row['username'], time() + 7200);
            }

            //save last IP address
            $ipaddress = $_SERVER['REMOTE_ADDR'];
            setcookie("lastLogin", $ipaddress, time() + 60 * 60 * 24 * 50);

            header("location: index.php");
        } else {
            $msg = "Sorry, you must enter a valid username 
                    and password to log in.<a href='index.php'>Back</a>";
        }
    }
} else {
    $msg = "You are are already logged in.";
}
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>We Are Connected - Login</title>
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>We Are Connected - Login</h3>
        <?php
        echo $msg;
        ?>
    </body>
</html>