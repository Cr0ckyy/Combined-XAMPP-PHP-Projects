<?php

include "dbFunctions.php";

$query = "SELECT F.film_id, F.title, F.description, F.release_year, F.rating, 
    CONCAT(A.first_name,' ',A.last_name) AS 'actors' 
    FROM film F INNER JOIN film_actor FA ON F.film_id = FA.film_id 
    INNER JOIN actor A ON FA.actor_id = A.actor_id WHERE F.film_id = 1";

$result = mysqli_query($link, $query);
$response = array();
$actorsArr = array();

while ($row = mysqli_fetch_assoc($result)) {
	
    if (empty($response)) {
        $response = $row;
        unset($response['actors']);
    }
    $actorsArr[] = $row['actors'];
}

$response['names'] = $actorsArr;
mysqli_close($link);

echo json_encode($response);


