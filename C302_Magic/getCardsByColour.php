<?php
header('Content-Type: application/json');
include "dbFunctions.php";
include "checkAPIKey.php";

$id = $_GET["id"];
$query = "SELECT * FROM card WHERE colourId = '$id' ";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($result)) {
    $allUsers[] = $row;
}

mysqli_close($link);
echo json_encode($allUsers , JSON_PRETTY_PRINT);
?>