<?php

include "dbFunctions.php";

if (isset($_GET['student_id'])) {
    $studentID = $_GET['student_id'];
    
     $student = array();
    $query = "SELECT * FROM student where student_id = $studentID";
    $result = mysqli_query($link, $query);

    $row = mysqli_fetch_assoc($result);
    if(!empty($row)) {
        $student = $row;
    }
    mysqli_close($link);

    echo json_encode($student);
}
?>
