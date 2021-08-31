<?php

include("dbFunctions.php");

$visitor_name = $_POST['visitor_name'];
$area = $_POST['area'];
$last_visit = $_POST['last_visit'];
$comments = $_POST['visitor_comments'];
$rating = $_POST['rate_us'];
$email = $_POST['visitor_email'];



$query = "INSERT INTO feedbacks(name,area, last_visit, comments, rating, email) 
          VALUES 
          ('$visitor_name','$area',STR_TO_DATE('$last_visit', '%d/%m/%Y'),'$comments',$rating, '$email')";

echo $query;
$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    $msg = "Feedback successfully inserted.<br/>";
} else {
    $msg = "Failed to insert feedback.<br/>";
}
$msg .= "<a href='bookList.php'>Book List page</a>";
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php echo $msg; ?>
    </body>
</html>
