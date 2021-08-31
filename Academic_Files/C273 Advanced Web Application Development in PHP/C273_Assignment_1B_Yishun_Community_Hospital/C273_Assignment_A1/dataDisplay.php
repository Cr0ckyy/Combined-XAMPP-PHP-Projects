<?php #Ju Long 19013345 ?>

<?php
session_start();
include './dbFunctions.php';

$username = $_SESSION['username'];
$query = "SELECT id FROM user WHERE username='$username'";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_array($result)) {
  $id = $row['id'];
}

$queryList = "SELECT f.food_name, COUNT(f.food_name) FROM food_entry fe INNER JOIN food f on fe.food_id = f.id WHERE user_id = $id GROUP BY f.food_name";
$resultList = mysqli_query($link, $queryList) or die(mysqli_error($link));
$output = Array();

while($row = mysqli_fetch_array($resultList)) {
  $output[] = $row;
}

echo json_encode($output);
?>

<?php #Ju Long 19013345 ?>
