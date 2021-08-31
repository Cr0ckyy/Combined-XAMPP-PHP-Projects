<?php #Ju Long 19013345 ?>
<?php
include './dbFunctions.php';

$query = "SELECT * FROM tasks";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$output = array();

while ($row = mysqli_fetch_assoc($result)) {
    $output[] = $row;
}

echo json_encode($output);
?>