<?php
include "dbFunctions.php";
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

if ($firstName == "" or $lastName == "" or $email == ""
        or $username == "" or $password == "") {
    //this is not part of the requirement
    //a server side check to make sure there is no empty form field
    //since client side check can be bypassed
    $message = "There was an empty field, please refill the form";
} else {
    $queryCheck = "SELECT * FROM users 
                    WHERE username='$username'";
    $resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));

    if (mysqli_num_rows($resultCheck) == 1) {
        $message = "Username already exists";
        $message .= "<br/> Please try to <a href='register.php'>register</a> again";
    } else {
        $queryInsert = "INSERT INTO users 
                        (username, password, role, first_name,last_name,email)
                        VALUES ('$username',SHA1('$password'),'member','$firstName',
                        '$lastName','$email')";
        $resultInsert = mysqli_query($link, $queryInsert) or die;
        $message = "Hi " . strtolower($firstName) . strtolower($lastName) . 
                    " , you has been registered as member";
        $message .= "<br/> You can now <a href='login.php'>login</a>";
    }
}
mysqli_close($link);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Story Teller - Register</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <h3>Story Teller - Register</h3>

        <?php
        echo $message;
        ?>

    </body>
</html>

