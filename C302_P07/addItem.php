<?php
include "dbFunctions.php";

$itemName = $_POST["item_name"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];

$query = "INSERT INTO merchandise (item_name, quantity, price) VALUES ('$itemName','$quantity','$price')";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

$row["success"]=$result;
mysqli_close($link);

echo json_encode($row);
?>
