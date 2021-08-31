<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "You have not logged in.<br/>";
    echo "Please <a href='login.php'>login</a>.";
    exit;
}

include "dbFunctions.php";
$userID = $_SESSION['user_id'];

$query = "SELECT * FROM users
          WHERE user_id=$userID";

$result = mysqli_query($link, $query) or
        die(mysqli_error($link));

$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <title>We Are Connected - Edit Profile</title>
        <style>
            .col-right-align { text-align: right;}
        </style>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h2>We Are Connected - Edit Profile</h2>
        <form method="post" action="doEditProfile.php" enctype="multipart/form-data" >
            <label>First Name:</label>
            <input type="text" name="first_name" value="<?php echo $row['first_name'] ?>"/>
            <label>Last Name:</label>
            <input type="text" name="last_name" value="<?php echo $row['last_name'] ?>"/>
            <label>Avatar: </label>
            <input type="file" name="picture"/>
            <input type="submit" value="Update"/>
        </form> 
    </body>
</html>
