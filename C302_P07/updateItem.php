<?php
header('Content-Type: application/json');

include "dbFunctions.php";
$id = $_POST["id"];
$itemName = $_POST["item_name"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];

$query = "UPDATE merchandise SET item_name='$itemName', quantity='$quantity', price='$price' WHERE id='$id' ";

$status = mysqli_query($link, $query) or die(mysqli_error($link));
if($status)
{
    $row["status"] = $status;
    $row["message"] = "Record is updated successfully.";
}else
{
    $row["status"] = $status;
    $row["message"] = "Update unsuccessful.";
}

mysqli_close($link);
echo json_encode($row , JSON_PRETTY_PRINT);

?>