<?php
include "dbFunctions.php"; 

// SQL query returns multiple database records.
$query = "SELECT * FROM addressbook ORDER by firstname, lastname"; 
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($result)) {
    $allUsers[] = $row;
}
mysqli_close($link);

echo json_encode($allUsers);
?>
