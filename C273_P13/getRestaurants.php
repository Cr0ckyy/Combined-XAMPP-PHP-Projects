<?php

include "dbFunctions.php";

// SQL query returns multiple database records.
$query = "SELECT * FROM restaurants order by name";
$result = mysqli_query($link, $query);

$restaurantList = array();
while ($row = mysqli_fetch_assoc($result)) {
    $restaurant = array();
    $restaurant['rest_id'] = $row['rest_id'];
    $restaurant['name'] = $row['name'];
    $restaurant['description'] = $row['description'];
    $restaurant['latitude'] = floatval($row['latitude']);
    $restaurant['longitude'] = floatval($row['longitude']);
    $restaurantList[] = $restaurant;
}
mysqli_close($link);

echo json_encode($restaurantList);
?>
