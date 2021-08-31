<?php

include "dbFunctions.php";
include "checkAPIKey.php";

$id = $_POST["id"];
$description = $_POST['description'];
$unitPrice = $_POST['unitPrice'];

$query = "UPDATE menu_item SET "
        . "menu_item_description='$description', menu_item_unit_price='$unitPrice' WHERE menu_item_id='$id' ";

$status = mysqli_query($link, $query) or die(mysqli_error($link));
if($status) {
    $row["status"] = $status;
    $row["message"] = "Menu item is updated successfully.";
    echo json_encode($row);
} else {
    $row["status"] = $status;
    $row["message"] = "Update unsuccessful.";
    echo json_encode($row);
}

?>