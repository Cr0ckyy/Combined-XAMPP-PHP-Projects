<?php
session_start();
if (isset($_SESSION['user_id'])) {
    session_destroy();
    $message = '<p>You have logged out.<br /><a href="index.php">Back</a></p>';
}
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>We Are Connected - Logout</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>We Are Connected - Logout</h3>
        <hr />
        <?php
        echo $message;
        ?>
    </body>
</html>