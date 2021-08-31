<?php
session_start();

$color = $_POST['bgcolor'];
setcookie("bgcolor", $color, time() + 60 * 60 * 24 * 365 * 10);

$statusMessage = "Your background color is changed.<br />";
$statusMessage .= "<a href='index.php'>Home</a>";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <?php
        echo $statusMessage;
        ?>
    </body>
</html>
