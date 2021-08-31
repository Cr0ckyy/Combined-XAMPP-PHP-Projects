<!--PHP(Hypertext Preprocessor) Codes-->
<!--The following codes are used to create Static websites or Dynamic websites and can interact with databases.-->

<?php
//Set DB connection parameters
//$host = "localhost": MySQL server and Web server reside in the same computer
$host = "localhost";
$username = "root";
$password = "";
$db = "AndyCarServiceDB";

// Retrieve form data
//  $_POST is a super global variable which is used to collect form data after submitting an HTML form with method="post"
$name = $_POST['user'];
$centre = $_POST['centre'];
$date = $_POST['service_date'];
$request = $_POST['service_request'];


// STEP 1: Open DB
//Connection on $link
// The connect() / mysqli_connect() function opens a new connection to the MySQL server.
$link = mysqli_connect($host, $username, $password, $db)
        or die(mysqli_connect_error()); // Use die() and mysqli_connect_error() functions for error handling
//        The die() function prints a message and exits the current script
//        Opens a connection to MySQL server
//        If it fails or return FALSE, message “Could not connect:...” is displayed
    
//STEP 2: 
//// Create sql query on $queryInsert
//The INSERT statement in $queryInsert will 
//insert the user entered infromation into the database
$queryInsert = "INSERT INTO service
          (user,centre,service_date,service_request) 
          VALUES 
          ('$name','$centre','$date','$request')";

// edited
// STEP 3: 
// Execute sql query
// mysqli_query() function requires a DB connection - $link and a query string - $query
$status = mysqli_query($link, $queryInsert) or die(mysqli_error($link));


//STEP 4: 
//Process the result
//Check whether the INSERT sql statement execution is successful
//Set the string $message to store the success or error message
if ($status) {
    $msg = "Your booking is successful. See you soon.";
} else {
    $msg = "Your booking has failed. Please try again.";
}


// added
// STEP 5: 
// Close DB Connection
// $link holds reference to the database connection 
// which was created using mysqli_connect() earlier
mysqli_close($link);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
echo $msg;
?>
        <br><br/>
        <a href=bookService.php>Return to your home page.</a> 
    </body>
</html>
