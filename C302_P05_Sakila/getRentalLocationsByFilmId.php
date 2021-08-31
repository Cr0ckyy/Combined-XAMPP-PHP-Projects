<?php

include 'dbFunctions.php';

$query = "SELECT DISTINCT film.film_id, title, description, release_year, rating, address, postal_code, phone, city, country
FROM `film`
INNER JOIN `inventory`
ON inventory.film_id = film.film_id
INNER JOIN `store`
ON store.store_id = inventory.store_id
INNER JOIN `address`
ON address.address_id = store.address_id
INNER JOIN `city`
ON city.city_id = address.city_id
INNER JOIN `country`
ON country.country_id = city.country_id
WHERE film.film_id = 1";

$nameArr = array();
$addArr = array();
$response = array();
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {

    $response['film_id'] = $row['film_id'];
    $response['title'] = $row['title'];
    $response['description'] = $row['description'];
    $response['release_year'] = $row['release_year'];
    $response['rating'] = $row['rating'];

    $addArr['address'] = $row['address'];
    $addArr['postal_code'] = $row['postal_code'];
    $addArr['phone'] = $row['phone'];
    $addArr['country'] = $row['country'];
    $addArr['city'] = $row['city'];

    array_push($nameArr, $addArr);
    $response['stores'] = $nameArr;
}
mysqli_close($link);
echo json_encode($response);
