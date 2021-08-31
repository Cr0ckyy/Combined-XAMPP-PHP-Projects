<?php

include "dbFunctions.php";

// SQL query returns multiple database records.
$query = "SELECT * FROM nutrition order by id";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $nutrition[] = $row;
}

mysqli_close($link);

echo json_encode($nutrition);
?>