<?php

include "dbFunctions.php";
$id = $_GET['id'];
$query = "SELECT film.film_id,"
        . " title,"
        . " description,"
        . " release_year, "
        . "rental_duration, "
        . "rental_rate, "
        . "length, "
        . "replacement_cost,"
        . " rating "
        . "FROM film "
        . "INNER JOIN "
        . "film_category ON "
        . "film_category.film_id = film.film_id "
        . "WHERE film_category.category_id = " . $id;

$result = mysqli_query($link, $query);

$response = array();
while ($row = mysqli_fetch_assoc($result)) {
    $response[] = $row;
}

mysqli_close($link);

echo json_encode($response);
?>