<?php

include ('dbFunctions.php');

$response['status'] = 0;
if (isset($_GET["rating"], $_GET["module_code"], $_GET["student_id"])) {

    $studentId = $_GET["student_id"];
    $moduleCode = $_GET["module_code"];
    $rating = $_GET["rating"];

    $checkIfExistQuery = "select * from ratings where student_id = $studentId and module_code = '$moduleCode'";
    if ($result = mysqli_query($link, $checkIfExistQuery)) {
        $rowcount = mysqli_num_rows($result);
    }

    $query = "UPDATE ratings set rating=$rating where student_id=$studentId and module_code='$moduleCode'";
    if ($rowcount == 0) {
        $query = "INSERT INTO ratings(student_id,module_code, rating) VALUES ('$studentId','$moduleCode','$rating') ";
    }
    
    $result = mysqli_query($link, $query);
    $response['status'] = 1;
} else {
    $response['error'] = "Missing parameters";
}

echo json_encode($response);
