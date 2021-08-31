<?php

include("dbFunctions.php");
if (isset($_GET['modulecode']) && isset($_GET['studentid'])) {
    $code = $_GET['modulecode'];
    $id = $_GET['studentid'];

$query = "delete from allocation where module_code='$code' and student_id=$id";
//echo $insertQuery;
$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    $response["success"] = "1";
} else {
    $response["success"] = "0";
}
echo json_encode($response);
}
