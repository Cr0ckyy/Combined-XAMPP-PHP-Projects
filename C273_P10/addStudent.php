<?php

include("dbFunctions.php");

if (isset($_POST)) {

    $studentId = $_POST['studentid'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];

    $insertQuery = "INSERT INTO student(student_id,first_name, last_name) 
                VALUES  
                ('$studentId', '$firstName','$lastName')";

    $status = mysqli_query($link, $insertQuery) or die(mysqli_error($link));

    if ($status) {
        $response["success"] = "1";
    } else {
        $response["success"] = "0";
    }
    echo json_encode($response);
}
