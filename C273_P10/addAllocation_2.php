<?php

include("dbFunctions.php");

if (isset($_POST)) {

    $id = $_POST['studentid'];
    $code = $_POST['modulecode'];
    $class = $_POST['class'];

    $insertQuery = "INSERT INTO allocation(student_id, module_code, class) 
                VALUES  
                ($id,'$code','$class')";
//echo $insertQuery;
    $status = mysqli_query($link, $insertQuery) or die(mysqli_error($link));

    if ($status) {
        $response["success"] = "1";
    } else {
        $response["success"] = "0";
    }
    echo json_encode($response);
}
