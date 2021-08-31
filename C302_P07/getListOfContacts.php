<?php

include "dbFunctions.php";

// SQL query returns multiple database records.
$query = "SELECT * FROM addressbook";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($result)) {
    $row["firstname"] = strval($row["firstname"]);
    $row["lastname"] = strval($row["lastname"]);
    $row["mobile"] = strval($row["mobile"]);
    $allUsers[] = $row;
}

mysqli_close($link);
header('Content-Type: application/json');
echo json_encode($allUsers , JSON_PRETTY_PRINT);
?>
