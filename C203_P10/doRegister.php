<?php
// php file that contains the common database connection code
include "dbFunctions.php";

$name = $_POST['name'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$username = $_POST['username'];
$password = $_POST['password'];
$colorPref = $_POST['color'];

$repeat = false;
$queryUsername = "SELECT username FROM users";
$resultUsername = mysqli_query($link, $queryUsername) or die(mysqli_error($link));
while ($row = mysqli_fetch_array($resultUsername)) {
    $array[] = $row;
}
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i]['username'] === $username) {
        $repeat = true;
    }
}

if ($repeat == false) {
    $query = "INSERT INTO users
          (name,gender,birthdate,username,password, color_pref) 
          VALUES 
          ('$name','$gender','$birthdate','$username',SHA1('$password'),'$colorPref')";

    $status = mysqli_query($link, $query);

    if ($status) {
        $message = "<p>Your new account has been successfully created. 
                    You are now ready to <a href='login.php'>login</a>.</p>";
    } else {
        $message = "account creation failed";
    }
} else {
    $message = "Username is being repeated, Please enter a new Username.
                <a href='register.php'> Go back to register page</a>";
}

mysqli_close($link);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <title>Get Together - Where the neighborhood comes together!</title>
    </head>
    <body>
        <h3>Get Together - Register</h3>
        <?php
        echo $message;
        ?>
    </body>
</html>