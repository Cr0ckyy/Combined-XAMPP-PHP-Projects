<?php
include "dbFunctions.php";

$query = "Select category_id, name from category order by category_id";
$result = mysqli_query($link, $query);

$response = array();
while ($row = mysqli_fetch_assoc($result)){     
    $response[] = $row;
}

mysqli_close($link);

echo json_encode($response);
?>
