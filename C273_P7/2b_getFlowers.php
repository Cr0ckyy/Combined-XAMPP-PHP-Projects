<?php
include ('dbFunctions.php');

$cat_id = $_GET['cat_id'];
$flowers = Array();

// SQL query returns multiple database records.
$query = "SELECT id, name FROM flowers 
          WHERE cat_id = $cat_id
          ORDER BY name"; 
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $flowers[] = $row;
}

echo json_encode($flowers);
?>
