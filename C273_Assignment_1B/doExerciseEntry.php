<!-- LI SHUFANG - 19039480 -->
<?php
// php file that contains the common database connection code
include("dbFunctions.php");

// Start new or resume existing session
session_start();

//check whether form input 'username' contains value
if (isset($_SESSION['username'])) {
    //$message = "test";
    // Retrieve Exercise Entry form data
    $username = $_SESSION['username'];
    $exercise_type = $_POST['exercise_type'];
    $exercise_duration = $_POST['exercise_duration'];


    // Create query to retrieve the relevant records
    $query = "SELECT * FROM user WHERE username = '$username'";

    // Execute Query
    $result = mysqli_query($link, $query) or die('Error in the database query<br/>' . mysqli_error($link));

    // fetches one row of data in a numerical array format from the result
    if (mysqli_num_rows($result) > 0) {

        // Create query to add the relevant records
        $queryInsert = "INSERT INTO exercise_entry (username, exercise_type, exercise_duration) VALUES ('$username','$exercise_type' ,$exercise_duration)";

        // Execute Query
        $resultInsert = mysqli_query($link, $queryInsert) or die('Error in the database query<br/>' . mysqli_error($link));

        $message = "<a>You've successfully added an exercise entry.</a>";
        $message .= "<br/> You may now <a href='exerciseEntry.php'>return</a> or <a href='exerciseSummary.php'>View your summary of exercise.</a>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
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
        <?php echo "<h1 id='message'>$message</h1>"; ?>
    </body>
</html>
<!-- LI SHUFANG - 19039480 -->