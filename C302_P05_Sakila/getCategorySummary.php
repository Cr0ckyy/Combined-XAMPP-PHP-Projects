<?php
include "dbFunctions.php";

$query = "SELECT category.name AS 'category', 
COUNT( 'name') AS 'number_films' FROM film_category  
INNER JOIN category ON film_category.category_id = category.category_id GROUP BY category.name";

$result = mysqli_query($link, $query);

$response = array();
while ($row = mysqli_fetch_assoc($result)){     
    $response[] = $row;
}

mysqli_close($link);

echo json_encode($response);
?>