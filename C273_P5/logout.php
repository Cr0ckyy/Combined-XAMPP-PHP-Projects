<?php
session_start();
if (isset($_SESSION['username'])) {
    $message = "<p>Bye Bye " . $_SESSION['full_name'] . ". You have logged out.<br /><a href='index.php'>Back</a></p>";
    $_SESSION = array();
    session_destroy();
    
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <title>Assignment 2</title>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <h3>Logout</h3>

        <?php
        echo $message;
        ?>
    </body>
</html>