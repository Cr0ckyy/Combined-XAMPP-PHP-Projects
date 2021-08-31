<?php

include "dbFunctions.php";
$id = $_POST["id"];
$firstName = $_POST['FirstName'];
$lastName = $_POST['LastName'];
$mobile = $_POST["Mobile"];

$query = "UPDATE addressbook SET firstname='$firstName', "
        . "lastname='$lastName', mobile='$mobile' WHERE id='$id' ";

$status = mysqli_query($link, $query) or die(mysqli_error($link));
if($status) {
    $row["status"] = $status;
    $row["message"] = "Contact record is updated successfully.";
    echo json_encode($row);
} else {
    $row["status"] = $status;
    $row["message"] = "Update unsuccessful.";
    echo json_encode($row);
}

?>