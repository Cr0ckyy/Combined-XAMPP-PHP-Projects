<?php #Ju Long 19013345 ?>

<?php
session_start();
include './dbFunctions.php';

$username = $_SESSION['username'];
$food = $_POST['food'];
$calorie = $_POST['calorie'];
$fat = $_POST['fats'];

$query = "SELECT id FROM user WHERE username='$username'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

$row = mysqli_fetch_array($result);
$id = $row['id'];

$query = "INSERT INTO food_entry(food_id, user_id, calorie, fat_in_gram)
VALUES ($food, $id, $calorie, $fat)";
$result = mysqli_query($link, $query);

echo $result;
?>

<?php #Ju Long 19013345 ?>
