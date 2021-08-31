<?php

include("dbFunctions.php");
if (isset($_POST)) {
    $code = $_POST['modulecode'];
    $name = $_POST['modulename'];


    $query = "update modules set module_name='$name'"
            . " where module_code='$code'";
//echo $insertQuery;
    $status = mysqli_query($link, $query) or die(mysqli_error($link));

    if ($status) {
        $response["success"] = "1";
    } else {
        $response["success"] = "0";
    }
    echo json_encode($response);
}
