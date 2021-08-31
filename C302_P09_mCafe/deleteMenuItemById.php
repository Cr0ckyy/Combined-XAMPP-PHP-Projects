<?php

include "dbFunctions.php";
include "checkAPIKey.php";

$id = $_POST["id"];

$query = "DELETE FROM menu_item WHERE menu_item_id='$id'";

$status = mysqli_query($link, $query) or die(mysqli_error($link));

$row["success"] = $status;

mysqli_close($link);

if($status)
{
    $row["status"] = $status;
    $row["message"] = "Menu item is deleted successfully";
    echo json_encode($row);
}else
{
    $row["status"] = $status;
    $row["message"] = "Delete menu item unsuccessful.";
    echo json_encode($row);
}

?>
