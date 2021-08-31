<?php
session_start();
include("dbFunctions.php");
$error_msg = "";


if (isset($_POST['username'])) {
    //retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    //match the username and password entered with database record
    $query = "SELECT * FROM users WHERE username='" . $username . "' AND password = sha1('" . $password . "')";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    //if record is found, store id and username into session
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['full_name'] = $row['first_name'] . " " .
                $row['last_name'];
        header("location:index.php");
    } else {
        $msg = "<p>Sorry, you must enter a valid username 
                and password to log in. <a href='login.php'>Back to Login Page</a></p>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Story Teller - Login</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include("navbar.php");

        echo $msg;
        ?>
    </body>
</html>