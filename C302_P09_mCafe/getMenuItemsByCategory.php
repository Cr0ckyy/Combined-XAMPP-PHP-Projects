<?php
include "dbFunctions.php";
include "checkAPIKey.php";

$response = array();
$categoryId = $_GET["categoryId"];

// SQL query returns multiple database records.
$query = "SELECT * FROM menu_item WHERE menu_item_category_id = '$categoryId'"; 
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($result)) {
    $response[] = $row;
}
mysqli_close($link);

echo json_encode($response);
?>
