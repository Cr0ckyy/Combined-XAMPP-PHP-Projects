<?php

include "dbFunctions.php"; 

// SQL query returns multiple database records.
$query = "SELECT * FROM student order by student_id"; 
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $student[] = $row;
}
mysqli_close($link);

echo json_encode($student);
?>
