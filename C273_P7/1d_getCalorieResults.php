<?php

if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['height']) && isset($_GET['weight'])) {

    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $height = $_GET['height'];
    $weight = $_GET['weight'];

    $bmr = (10 * $weight) + (6.25 * $height) - (5 * $age);

    if ($gender == "M") {
        $bmr += 5;
    } else {
        $bmr -= 161;
    }

    $response["result"] = number_format($bmr, 2);
    echo json_encode($response);
}