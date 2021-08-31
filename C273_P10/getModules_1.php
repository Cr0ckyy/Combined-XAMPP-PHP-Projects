<?php
include "dbFunctions.php"; 

// SQL query returns multiple database records.
$query = "SELECT module_code, module_name FROM modules order by module_code"; 
$result = mysqli_query($link, $query);

$modules = array();
while ($row = mysqli_fetch_assoc($result)) {
    $modules[] = $row;
}
mysqli_close($link);

echo json_encode($modules);
?>
