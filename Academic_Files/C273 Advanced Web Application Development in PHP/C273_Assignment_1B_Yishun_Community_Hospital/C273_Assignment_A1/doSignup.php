<?php #Ju Long 19013345 ?>

<?php
include './dbFunctions.php';
session_start();

if(isset($_GET['username'])) {
  $username = $_GET['username'];
  $query = "SELECT * FROM user WHERE username='$username'";
  $result = mysqli_query($link, $query) or die(mysqli_error($link));

  if (mysqli_num_rows($result) == 0) {
    echo "true";
  } else {
    echo "false";
  }
} else {
  $username = $_POST['signupUsername'];
  $password = $_POST['signupPassword'];
  $height = $_POST['signupHeight'];
  $weight = $_POST['signupWeight'];
  $dob = $_POST['year']. "-" . $_POST['month'] . "-" .  $_POST['date'];

  echo $dob;

  $query = "INSERT INTO C273_Assignment_A1.user (username, password, height, weight, dateOfBirth)
  VALUES ('$username', sha1('$password'), $height, $weight, '$dob')";
  $result = mysqli_query($link, $query) or die(mysqli_error($link));

  if ($result == 1) {
    $_SESSION['username'] = $username;
    echo "<meta http-equiv='refresh' content='2; url=./index.php'/>";
  }
}
 ?>

<?php #Ju Long 19013345 ?>
