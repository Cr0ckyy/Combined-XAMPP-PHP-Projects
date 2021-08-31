<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aftercare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
if (isset($_GET['visitor_id'])) {
    $id = $_GET['visitor_id'];

    $query = "DELETE FROM messages WHERE visitor_id = '$id' ";
//echo $insertQuery;
    $status = mysqli_query($link, $query) or die(mysqli_error($link));

    if ($status) {
        $response["success"] = "1";
    } else {
        $response["success"] = "0";
    }
    echo json_encode($response);
}


$conn->close();
