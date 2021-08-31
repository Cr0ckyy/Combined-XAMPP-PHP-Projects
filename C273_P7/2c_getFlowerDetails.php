<?php
include ("dbFunctions.php");

$f_id = $_GET['f_id'];

// SQL query returns 1 database record.
$query = "SELECT description, picture
          FROM flowers WHERE id = $f_id"; 
$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

$details['description'] = $row['description'];
$details['picture'] = $row['picture'];

echo json_encode($details);
?>
