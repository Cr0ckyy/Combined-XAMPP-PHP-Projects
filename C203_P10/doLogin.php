<?php
session_start();


include "dbFunctions.php";

$enteredUsername = $_POST['username'];
$enteredPassword = $_POST['password'];

$msg = "";

$queryCheck = "SELECT * FROM users
               WHERE username='$enteredUsername'
               AND password=SHA1('$enteredPassword')";

$resultCheck = mysqli_query($link, $queryCheck) or
        die(mysqli_errno($link));

if (mysqli_num_rows($resultCheck) == 1) {
    $row = mysqli_fetch_array($resultCheck);
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $msg = "<h2>You are logged in as " . $_SESSION['username'] . "</h2>";
    $msg .= "<p><a href='index.php'>Home</a></p>";
} else {
    $msg = "<p>Sorry, you must enter a valid username and password to log in</p>";
    $msg .= "<p><a href='login.php'>Go back to login page</a></p>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Get Together - Where the neighborhood comes together!</title>
    </head>
    <body>
        <h3>Get Together - Login</h3>
        <?php
        echo $msg;
        ?>
    </body>
</html>