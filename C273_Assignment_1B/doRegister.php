<!-- LI SHUFANG - 19039480 -->
<?php
// php file that contains the common database connection code
include("dbFunctions.php");

// Start new or resume existing session
session_start();

// Retrieve Register form data
$name = $_POST['name'];
$address = $_POST['address'];
$contact= $_POST['contact'];
$username = $_POST['username'];
$password = $_POST['password'];

// Create query to retrieve the relevant records
$query = "SELECT * FROM users WHERE username='$username'";
                   
// Execute Query
$result = mysqli_query($link, $query) or die('Error in the database query<br/>' . mysqli_error($link));

// fetches one row of data in a numerical array format from the result if the username exists
if (mysqli_num_rows($result) == 1) {

    $message = "This username (email) is already in use!";
    $message .= "<br/> Please try to <a href='register.php'>register</a> again.";


  // if the username does not  exists   
} else {
    
    // Create query to retrieve the relevant records 
    $queryInsert = "INSERT INTO users 
                        (name, address, contact, username ,password , type )
                        VALUES ('$name','$address','$contact','$username',SHA1('$password') , '3')";
                    
 
    // Execute Query
    $resultInsert = mysqli_query($link, $queryInsert) or die('Error in the database query<br/>' . mysqli_error($link));

    $message = "Congratulations " . $name . " , you have successfully registered an account with Singapore After-Care Association (SACA) !<br/>";
    $message .= "<br/> You can now <a href='login.php'>login.</a>";
}

// close connection
mysqli_close($link);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Register Page</title>
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