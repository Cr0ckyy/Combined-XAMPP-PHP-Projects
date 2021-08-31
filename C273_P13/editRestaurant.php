<?php

include("dbFunctions.php");
if (isset($_POST)) {
    $rest_name = $_POST['name'];
    $rest_desc = $_POST['description'];
    $rest_lat = $_POST['lat'];
    $rest_lng = $_POST['lng'];
    $id = $_POST['id'];

    $query = "update restaurants set name='$rest_name', description='$rest_desc', latitude=$rest_lat, longitude=$rest_lng"
            . " where rest_id=$id";
//echo $insertQuery;
    $status = mysqli_query($link, $query) or die(mysqli_error($link));

    if ($status) {
        $response["success"] = "1";
    } else {
        $response["success"] = "0";
    }
    echo json_encode($response);
}
