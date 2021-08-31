<?php #Ju Long 19013345 ?>

<?php
include './dbFunctions.php';
$query = "INSERT INTO C273_Assignment_A1.user (username, password, height, weight, dateOfBirth)
VALUES ('BenDover', sha1('BenDover'), 164, 56, '1998-02-01')";
$result = mysqli_query($link, $query);

echo $result;
?>

<?php #Ju Long 19013345 ?>
