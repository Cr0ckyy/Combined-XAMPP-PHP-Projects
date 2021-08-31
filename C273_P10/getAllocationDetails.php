<?php

include "dbFunctions.php";


$studentId = $_GET['student_id'];
$moduleCode = $_GET['module_code'];
// SQL query returns multiple database records.
$query = "Select * from allocation where student_id = $studentId and module_code = '$moduleCode'";
$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
if (!empty($row)) {
    $student = $row;
}
mysqli_close($link);

echo json_encode($student);
?>
