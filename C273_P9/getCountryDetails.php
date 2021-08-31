<?php

include "dbFunctions.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $response = array();
    $query = "SELECT * FROM statistics where id=$id";
    $result = mysqli_query($link, $query);

    $response = mysqli_fetch_assoc($result);


    mysqli_close($link);

    echo json_encode($response);
}
?>