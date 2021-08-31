<?php
session_start();
include 'dbFunctions.php';

$color = "white";
$msg = "";

if (!isset($_SESSION['username'])) {
    $msg = "<h3>Get Together</h3>";
    $msg .= "<h4>Please <a href='login.php'>log in</a> .</h4>";
} else {
    $username = $_SESSION['username'];
    $msg = "<h4> Hi " . $username . "!</h4>";

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $row = mysqli_fetch_array($result);

    $fullname = $row['name'];
    $birthdate = $row['birthdate'];
    $color = $row['color_pref'];

    $msg .= "<p>Full Name: $fullname</p>";
    $msg .= "<p>Birthdate: $birthdate</p>";

    $msg .= "<a href='logout.php'>Logout</a>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Get Together - Where the neighborhood comes together!</title>
        <style>
            body {
                background-color: <?php echo $color ?>;
            }
        </style>
    </head>
    <body>
        <?php echo $msg; ?>
    </body>
</html>