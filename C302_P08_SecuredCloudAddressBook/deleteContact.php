<?php

include "dbFunctions.php";
$id = $_POST["id"];

$query = "DELETE FROM addressbook WHERE id='$id'";

$status = mysqli_query($link, $query) or die(mysqli_error($link));

$row["success"] = $status;

mysqli_close($link);

if($status)
{
    $row["status"] = $status;
    $row["message"] = "Contact record is deleted successfully";
    echo json_encode($row);
}else
{
    $row["status"] = $status;
    $row["message"] = "Delete new contact unsuccessful.";
    echo json_encode($row);
}

?>
