<?php

$model = $_GET['model'];
$size = $_GET['size'];

$result = 0;
if ($model == "6S") {
    if ($size == 16) {
        $result = 600;
    } else if ($size == 64) {
        $result = 700;
    } else {
        $result = 800;
    }
} else if ($model == "6SPlus") {
    if ($size == 16) {
        $result = 750;
    } else if ($size == 64) {
        $result = 850;
    } else {
        $result = 950;
    }
}

$response['result'] = $result;

echo json_encode($response);

