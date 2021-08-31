<?php

include("dbFunctions.php");
if (isset($_POST)) {
    $id = $_POST['studentid'];
    $code = $_POST['modulecode'];
    $class = $_POST['class'];


    $query = "update allocation set class='$class'"
            . " where module_code='$code' and student_id='$id'";
//echo $insertQuery;
    $status = mysqli_query($link, $query) or die(mysqli_error($link));

    if ($status) {
        $response["success"] = "1";
    } else {
        $response["success"] = "0";
    }
    echo json_encode($response);
}
