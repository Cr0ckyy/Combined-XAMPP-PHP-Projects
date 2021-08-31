<?php

include("db_connect.php");

if (isset($_POST)) {


    $name = $_POST['visitor_name'];
    $email = $_POST['visitor_email'];
    $subject = $_POST['visitor_subject'];
    $message = $_POST['visitorr_message'];

    $insertQuery = "INSERT INTO student(visitor_name , visitor_email, visitor_subject , visitor_message) 
                VALUES  
                ('$name', '$email','$subject' ,'$message')";

    $status = mysqli_query($link, $insertQuery) or die(mysqli_error($link));

    if ($status) {
        $response["success"] = "1";
    } else {
        $response["success"] = "0";
    }
    echo json_encode($response);
}
