<!-- LI SHUFANG - 19039480 -->
<?php
// php file that contains the common database connection code
include("dbFunctions.php");

// Start new or resume existing session
session_start();

// Retrieve Register form data
$name = $_POST['visitor_name'];
$email = $_POST['visitor_email'];
$subject = $_POST['visitor_subject'];
$message = $_POST['visitor_message'];


// Create query to retrieve the relevant records
$query = "SELECT * FROM messages WHERE visitor_name='$name'";

// Execute Query
$result = mysqli_query($link, $query) or die('Error in the database query<br/>' . mysqli_error($link));

// fetches one row of data in a numerical array format from the result if the name  exists
if (mysqli_num_rows($result) == 1) {

    $message = "You have already contacted us.";
    $message .= "<br/> Please <a href='index.php'>refresh</a> again to the homepage.";


    // if the username does not  exists   
} else {

    // Create query to retrieve the relevant records 
    $queryInsert = "INSERT INTO messages 
                        (visitor_name, visitor_email, visitor_subject, visitor_message)
                        VALUES ('$name','$email','$subject','$message')";


    // Execute Query
    $resultInsert = mysqli_query($link, $queryInsert) or die('Error in the database query<br/>' . mysqli_error($link));

    $message = "Congratulations " . $name . " , you have successfully sent a message to Singapore After-Care Association(SACA)!<br/>";
    $message .= "<br/> Please <a href='index.php'>refresh</a> again to the homepage.";
}

// close connection
mysqli_close($link);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Message Page</title>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/registerstyle.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
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
    <body>
        <?php echo "<h1 id='message'>$message</h1>"; ?>
    </body>
</body>
</html>

<!-- LI SHUFANG - 19039480 -->