<?php
include "dbFunctions.php";
include "checkAPIKey.php";

$categoryId = $_POST["categoryId"];
$description = $_POST['description'];
$unitPrice = $_POST['unitPrice'];

$query = "INSERT INTO menu_item (menu_item_category_id, menu_item_description, menu_item_unit_price) VALUES ('$categoryId', '$description', '$unitPrice')";

$status = mysqli_query($link, $query) or die(mysqli_error($link));
if($status) {
    $row["status"] = $status;
    $row["message"] = "Menu item is inserted successfully";
    echo json_encode($row);
} else {
    $row["status"] = $status;
    $row["message"] = "Menu item was not inserted.";
    echo json_encode($row);
}
?>