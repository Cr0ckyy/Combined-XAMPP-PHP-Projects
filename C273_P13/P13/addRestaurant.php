<?php

include("dbFunctions.php");

if (isset($_POST)) {

$rest_name = $_POST['name'];
$rest_desc = $_POST['description'];
$rest_lat = $_POST['lat'];
$rest_lng = $_POST['lng'];
$queryInsert = "INSERT INTO restaurants
                (name, description, latitude,longitude) 
                VALUES 
                ('$rest_name', '$rest_desc', $rest_lat, $rest_lng)";
//echo $insertQuery;
    $status = mysqli_query($link, $queryInsert) or die(mysqli_error($link));

    if ($status) {
        $response["success"] = "1";
    } else {
        $response["success"] = "0";
    }
    echo json_encode($response);
}
