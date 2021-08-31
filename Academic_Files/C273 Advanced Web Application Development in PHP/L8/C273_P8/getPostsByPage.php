<?php

include('dbFunctions.php');

$page = $_GET['page'];
$limit = $_GET['limit'];

$startId = ($page - 1) * $limit;

$sqlQuery = "SELECT id,title,substr(content,1,300) content FROM posts WHERE id > '" . $startId . "' ORDER BY id LIMIT $limit";

$result = mysqli_query($link, $sqlQuery);

$response = array();
while ($row = mysqli_fetch_assoc($result)) {
    $response [] = $row;
}
echo json_encode($response);
?>