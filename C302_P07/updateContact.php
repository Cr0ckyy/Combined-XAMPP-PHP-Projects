<?php

include "dbFunctions.php";
$id = $_POST["Id"];
$firstName = $_POST["FirstName"];
$lastName = $_POST["LastName"];
$home = $_POST["Home"];
$mobile = $_POST["Mobile"];
$address = $_POST["Address"];
$country = $_POST["Country"];
$postalCode = $_POST["PostalCode"];
$email = $_POST["Email"];

$query = "UPDATE addressbook SET firstname='$firstName', lastname='$lastName', home='$home',"
        . "mobile='$mobile', address='$address', country='$postalCode', email='$email' WHERE id='$id' ";

$status = mysqli_query($link, $query) or die(mysqli_error($link));
if($status && mysqli_affected_rows($link)>0)
{
    $row["status"] = $status;
    $row["message"] = "Record is updated successfully.";
}else
{
    $row["status"] = $status;
    $row["message"] = "Update unsuccessful.";
}

mysqli_close($link);
echo json_encode($row);
?>