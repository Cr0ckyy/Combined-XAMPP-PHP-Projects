<?php
session_start();
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
        <h2>Invite your friends to We Are Connected!</h2>
        <form action="doInvite.php" method="post">
            <label>Email Address 1:</label>
            <input type="text" name="email1" size="40"/>
            <label>Email Address 2:</label>
            <input type="text" name="email2" size="40"/>
            <label>Email Address 3:</label>
            <input type="text" name="email3" size="40"/>
            <label>Message</label>
            <textarea name="message" rows="10" cols="40" /></textarea>
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>
