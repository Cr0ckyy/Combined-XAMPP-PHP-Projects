<?php

include "dbFunctions.php"; 

// SQL query returns multiple database records.
$query = "SELECT * FROM messages order by vistor_id"; 
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $message[] = $row;
}
mysqli_close($link);

echo json_encode($message);
?>
