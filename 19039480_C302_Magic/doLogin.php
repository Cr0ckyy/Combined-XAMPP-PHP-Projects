<?php
header('Content-Type: application/json');
include "dbFunctions.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT id, apikey, role FROM user WHERE username = '$username' AND password = sha1('$password')";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

if(mysqli_num_rows($result) == 1){
    // $row contains "id" and "apikey"
    $row = mysqli_fetch_assoc($result);
    $row["authenticated"] = true;
}else{
    $row["authenticated"] = false;
}

echo json_encode($row  , JSON_PRETTY_PRINT);

?>

