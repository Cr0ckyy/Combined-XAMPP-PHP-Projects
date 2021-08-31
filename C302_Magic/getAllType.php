<?php
header('Content-Type: application/json');
include "dbFunctions.php";
include "checkAPIKey.php";

$return_array = array();
$query = "SELECT * FROM type";
$result_type = mysqli_query($link, $query) or die(mysqli_error($connection));

foreach ($result_type as $i) {
    $return_array[] = $i;
}

if (empty($return_array)) {
    $return = ['output' => 'No data found in type'];
    echo json_encode($return, JSON_PRETTY_PRINT);
    exit();
}

$return = ['output' => 'success', 'result' => $return_array];
echo json_encode($return , JSON_PRETTY_PRINT);
exit();
