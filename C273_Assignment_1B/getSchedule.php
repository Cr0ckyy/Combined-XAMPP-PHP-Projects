<?php

include "dbFunctions.php";

// SQL query returns multiple database records.
$query = "SELECT * FROM doctors_schedule ORDER BY doctor_id";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $schedule[] = $row;
}
mysqli_close($link);

echo json_encode($schedule);
?>
