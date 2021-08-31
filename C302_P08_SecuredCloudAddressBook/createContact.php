<?php
include "dbFunctions.php";

$firstName = $_POST['FirstName'];
$lastName = $_POST['LastName'];
$mobile = $_POST["Mobile"];

$query = "INSERT INTO addressbook (firstname, lastname, mobile) VALUES ('$firstName', '$lastName', '$mobile')";

$status = mysqli_query($link, $query) or die(mysqli_error($link));
if($status) {
    $row["status"] = $status;
    $row["message"] = "Contact record is inserted successfully";
    echo json_encode($row);
} else {
    $row["status"] = $status;
    $row["message"] = "Create new contact unsuccessful.";
    echo json_encode($row);
}
?>