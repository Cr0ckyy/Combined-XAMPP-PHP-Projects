<?php
session_start();
include "dbFunctions.php";

$status = "";
if (isset($_POST)) {
    $email[1] = $_POST['email1'];
    $email[2] = $_POST['email2'];
    $email[3] = $_POST['email3'];

    $message = $_POST['message'];
    $username = $_SESSION['username'];

    $subject = "Invitation to join We are Connected";
    for ($i = 1; $i <= 3; $i++) {
        $recipient = $email[$i];
        $headers = "From: $username";
        $emailSent = mail($recipient, $subject, $message, $headers);
        if ($emailSent) {
            $status .= "The email to $email[$i] has been sent.<br/>";
        } else {
            $status .= "Process failed for $email[$i] . Please try again";
        }
    }
} else {
    $status = "Please fill up Invite Friends form
            <a href='invite.php'>here</a>";
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <p>
            <?php
            echo $status;
            ?>
        </p>
    </body>
</html>
