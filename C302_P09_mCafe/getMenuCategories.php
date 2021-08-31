<?php
include "dbFunctions.php";
include "checkAPIKey.php";

$response = array();
// SQL query returns multiple database records.
$query = "SELECT * FROM menu_item_category ORDER by menu_item_category_id"; 
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($result)) {
    $response[] = $row;
}
mysqli_close($link);

echo json_encode($response);
?>
