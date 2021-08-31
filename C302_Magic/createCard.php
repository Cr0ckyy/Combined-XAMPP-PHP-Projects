<?php

header('Content-Type: application/json');
include "dbFunctions.php";
include "checkAPIKey.php";

$cardName = $_POST['name'];
$colourId = $_POST['colourId'];
$typeId = $_POST["typeId"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];

$query = "INSERT INTO card (cardName, colourId, typeId, price, quantity) "
        . "VALUES ('$cardName', '$colourId', '$typeId', '$price', '$quantity')";

$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    
    $row["status"] = $status;
    $row["message"] = "Card created successfully";
    echo json_encode($row, JSON_PRETTY_PRINT);
    
} else {
    $row["status"] = $status;
    $row["message"] = "Card was not created successfully.";
    echo json_encode($row, JSON_PRETTY_PRINT);
}
?>