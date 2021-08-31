<?php

include("dbFunctions.php");
if (isset($_GET['modulecode'])) {
    $code = $_GET['modulecode'];

$query = "delete from modules where module_code='$code'";
//echo $insertQuery;
$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    $response["success"] = "1";
} else {
    $response["success"] = "0";
}
echo json_encode($response);
}
