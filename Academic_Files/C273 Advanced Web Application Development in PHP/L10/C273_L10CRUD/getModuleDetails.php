<?php

include "dbFunctions.php";

if (isset($_GET['modulecode'])) {
    $modulecode = $_GET['modulecode'];
    
     $module = array();
    $query = "SELECT * FROM modules where module_code = '$modulecode'";
    $result = mysqli_query($link, $query);

    $row = mysqli_fetch_assoc($result);
    if(!empty($row)) {
        $module = $row;
    }
    mysqli_close($link);

    echo json_encode($module);
}
?>
