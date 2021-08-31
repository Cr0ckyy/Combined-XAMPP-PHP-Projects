<!-- LI SHUFANG - 19039480 -->
<?php
// php file that contains the common database connection code
include("dbFunctions.php");

// Start new or resume existing session
session_start();

// Destroy existing session
session_destroy();

$message = "You have been logged out. You will now be redirected back to the main page.";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="assets/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            #message{
                font-weight: bold;
                margin-top: 200px;
                text-align: center;
                color:red;
            }
        </style>
    </head>
    <body>
        <?php
        header('Refresh: 1; url=index.php');
        echo "<h1 id='message'>$message</h1>";
        ?>
    </body>
</html>
<!-- LI SHUFANG - 19039480 -->