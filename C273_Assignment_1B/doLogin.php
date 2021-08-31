<!-- LI SHUFANG - 19039480 -->
<?php
// php file that contains the common database connection code
include("dbFunctions.php");

// Start new or resume existing session
session_start();

//check whether form input 'username' & "password" contain value
if (isset($_POST["username"], $_POST["password"])) {

    // Retrieve login form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Create query to retrieve the relevant records
    $query = "SELECT * FROM users WHERE username='$username' AND password=SHA1('$password')";

    // Execute Query
    $result = mysqli_query($link, $query) or die('Error in the database query<br/>' . mysqli_error($link));


    // fetches one row of data in a numerical array format from the result
    if (mysqli_num_rows($result) > 0) {

        // fetch the execution result to an array
        $row = mysqli_fetch_array($result);

        //retrieve form data
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];


        $message = "<b>You have successfully logged in.<b><br>";
        $message .= "<a href='index.php'>Return to homepage.</a>";


        // wrong username or password
    } else {
        $message = "You have either entered the wrong password, wrong username or both.<b><br>";
        $message .= "<a href='login.php'>Please login again.</a>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="assets/js/additional-methods.min.js" type="text/javascript"></script>
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
        <?php echo "<h1 id='message'>$message</h1>"; ?>
    </body>
</html>
<!-- LI SHUFANG - 19039480 -->