<?php #Ju Long 19013345 ?>

<?php
include './dbFunctions.php';
session_start();

if(isset($_GET['username'])) {
  $username = $_GET['username'];
  $password = $_GET['password'];

  $query = "SELECT * FROM user WHERE username='$username' AND password=sha1('$password')";
  $result = mysqli_query($link, $query) or die(mysqli_error($link));
  if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $_SESSION['username'] = $row['username'];
      echo "true";
  } else {
      echo "false";
  }
}
?>

<?php #Ju Long 19013345 ?>
