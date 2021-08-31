<?php

include("dbFunctions.php");
if (isset($_POST)) {
    $studentId = $_POST['studentid'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];

        $query = "update student set first_name='$firstName', last_name='$lastName'"
            . " where student_id='$studentId'";
//echo $insertQuery;
    $status = mysqli_query($link, $query) or die(mysqli_error($link));

    if ($status) {
        $response["success"] = "1";
    } else {
        $response["success"] = "0";
    }
    echo json_encode($response);
}
