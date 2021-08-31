<?php
session_start();
include("dbFunctions.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Change Password</title>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <h3>Story Teller - Change Password</h3>    
        <form name="frmPass" method="post" action="doChangePassword.php">
            <label for="idOldPassword">Old Password: </label>
            <input name="oldPassword" type="password" id="idOldPassword" required/>
            <label for="idPassword">New Password: </label>
            <input name="password" type="password" id="idPassword" required/>
            <label for="idPassword2">Confirm New Password: </label>
            <input name="password2" type="password" id="idPassword2" required/>

            <input value="Change" type="submit">
        </form>
    </body>
</html>