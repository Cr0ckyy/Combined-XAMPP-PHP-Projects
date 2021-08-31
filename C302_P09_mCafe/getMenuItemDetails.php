<?php
include "dbFunctions.php";
include "checkAPIKey.php";

    $id=$_GET["id"];
    $query = "SELECT * FROM menu_item WHERE menu_item_id = '$id'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    }else {
        $row = null;
        echo json_encode($row);
    }
    mysqli_close($link);
?>