<?php
session_start();

$selectedBGColor = "white";
if (isset($_COOKIE['bgcolor'])) {
    $selectedBGColor = $_COOKIE['bgcolor'];
}

$rememberUsername = "";


if (isset($_COOKIE['username'])) {
    $rememberUsername = $_COOKIE['username'];
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <title>We Are Connected - Home</title>
    </head>
    <!-- change the bgcolor attribute to the one that user has selected.  -->
    <body bgcolor="<?php echo $selectedBGColor; ?>"> 
        <?php include "navbar.php" ?>
        <?php
        if (isset($_SESSION['user_id'])) {
            $userID = $_SESSION['user_id'];

            include "dbFunctions.php";
            $query = "SELECT * FROM users WHERE user_id=$userID";

            $result = mysqli_query($link, $query) or
                    die(mysqli_error($link));

            $row = mysqli_fetch_array($result);
            $fileName = "anonymous.jpg";
            if (!empty($row['image'])) {
                $fileName = $row['image'];
            }
            ?>
            <p><b>First Name:</b> <?php echo $row['first_name']; ?></p>
            <p><b>Last Name:</b> <?php echo $row['last_name']; ?></p>
            <p><img src="profilePics/<?php echo $fileName; ?>" width="100" /></p>
            <?php
        } else {
            ?>
            <form name="frmLogin" method="post" action="doLogin.php">
                <table>
                    <tr>
                        <td align="center"><label for="username">Username</label></td>
                        <td><input type="text" id="username" name="username" 
                                   value="<?php echo $rememberUsername; ?>" /></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="password">Password</label></td>
                        <td><input type="password" id="password" name="password" /></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left"><input type="checkbox" name="remember">Remember Me</td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="Login" value="Login"/></td>
                    </tr>
                </table>
            </form>
            <br/>
            <a href="resetPassword.php">Reset Password</a>

            <?php
        }
        ?>
    </body>
</html>