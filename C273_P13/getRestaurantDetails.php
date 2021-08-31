<?php

include "dbFunctions.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $student = array();
    $query = "SELECT * FROM restaurants where rest_id = $id";
    $result = mysqli_query($link, $query);

    $row = mysqli_fetch_assoc($result);
    if (!empty($row)) {
        $restaurant = array();
        $restaurant['rest_id'] = $row['rest_id'];
        $restaurant['name'] = $row['name'];
        $restaurant['description'] = $row['description'];
        $restaurant['latitude'] = floatval($row['latitude']);
        $restaurant['longitude'] = floatval($row['longitude']);
    }
    mysqli_close($link);

    echo json_encode($restaurant);
}
?>
