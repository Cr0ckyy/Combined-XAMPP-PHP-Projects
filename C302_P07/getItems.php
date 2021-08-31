<?php
header('Content-Type: application/json');
include "dbFunctions.php";

// SQL query returns multiple database records.
$query = "SELECT * FROM merchandise ORDER by id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($result)) {
    $row["id"] = intval($row["id"]);
    $row["quantity"] = intval($row["quantity"]);
    $row["price"] = floatval($row["price"]);
    $allUsers[] = $row;
}
mysqli_close($link);

echo json_encode($allUsers , JSON_PRETTY_PRINT);
?>
