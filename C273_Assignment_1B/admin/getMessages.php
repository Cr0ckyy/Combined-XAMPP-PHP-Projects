<?php

include "db_connect.php";

// SQL query returns multiple database records.
$query = "SELECT * FROM messages ORDER BY visitor_id";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $student[] = $row;
}
mysqli_close($conn);

echo json_encode($student);

