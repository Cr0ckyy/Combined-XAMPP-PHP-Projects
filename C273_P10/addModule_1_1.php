<?php

include("dbFunctions.php");

if (isset($_POST)) {

    $code = $_POST['modulecode'];
    $name = $_POST['modulename'];

    $insertQuery = "INSERT INTO modules(module_code, module_name) 
                VALUES  
                ('$code','$name')";
//echo $insertQuery;
    $status = mysqli_query($link, $insertQuery) or die(mysqli_error($link));

    if ($status) {
        $response["success"] = "1";
    } else {
        $response["success"] = "0";
    }
    echo json_encode($response);
}
