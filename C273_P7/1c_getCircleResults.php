<?php

$type = $_GET['type'];
$radius = $_GET['radius'];

$result = 0;
if($type=="area") {
    $result = 3.142 * $radius * $radius;
}
else {
    $result = 3.142 * 2 * $radius;
}

$response['result'] = number_format($result,3);

echo json_encode($response);

