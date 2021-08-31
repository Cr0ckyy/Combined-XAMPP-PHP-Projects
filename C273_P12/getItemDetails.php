<?php

include "dbFunctions.php";

if (isset($_GET['id'])) {
    $code = $_GET['id'];
    
     $module = array();
    $query = "SELECT * FROM items where item_id = '$code'";
    $result = mysqli_query($link, $query);

    $row = mysqli_fetch_assoc($result);
    if(!empty($row)) {
        $module = $row;
    }
    mysqli_close($link);

    echo json_encode($module);
}
?>
