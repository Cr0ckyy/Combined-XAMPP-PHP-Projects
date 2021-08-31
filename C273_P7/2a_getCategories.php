<?php
// This page passes multiple database records in the form of an array to the caller page.
include ('dbFunctions.php');

$categories = Array();

// SQL query returns multiple database records.
$query = "SELECT id, name FROM flower_categories ORDER BY name"; 
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $categories[] = $row;
}

echo json_encode($categories);
?>
