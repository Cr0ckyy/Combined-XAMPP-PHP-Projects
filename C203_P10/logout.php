<?php
session_start();
if (isset($_SESSION['username'])) {
    session_destroy();
}
$message = "<p>You have logged out.<br><br>
            <a href='login.php'>Go back to login page</a></p>";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Get Together - Where the neighborhood comes together!</title>
    </head>
    <body>
        <h3>Get Together - Logout</h3>
        <?php echo $message ?>
    </body>
</html>