<?php
header('Content-Type: application/json');
include "dbFunctions.php";

$userID = $_GET['id'];
$query = "SELECT * FROM merchandise WHERE id = '".$userID."' ";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

if(mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $row["id"] = intval($row["id"]);
    $row["quantity"] = intval($row["quantity"]);
    $row["price"] = floatval($row["price"]);
}else {
    $row["success"] = false;
}
mysqli_close($link);

echo json_encode($row , JSON_PRETTY_PRINT);
?>