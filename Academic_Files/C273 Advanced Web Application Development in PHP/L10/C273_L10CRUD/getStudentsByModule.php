<?php

include "dbFunctions.php";

if (isset($_GET['module_code'])) {
    $moduleCode = $_GET['module_code'];
// SQL query returns multiple database records.
    $query = "Select s.student_id, s.first_name, s.last_name, a.class
From student s, allocation a
Where s.student_id = a.student_id
And a.module_code = '$moduleCode'
";
    $result = mysqli_query($link, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $student[] = $row;
    }
    mysqli_close($link);

    echo json_encode($student);
}
?>
