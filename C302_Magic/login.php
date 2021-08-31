<?php
include "dbFunctions.php";
header('Content-Type: application/json');

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (!($username && $password)) {
    echo json_encode(['output' => 'Invalid Input'], JSON_PRETTY_PRINT);
    exit();
}

$return = array();
$return_array = array();
$password = sha1($password);
$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

foreach ($result as $i) {
    $return_array = $i;
}

if (empty($return_array)) {
    $return = ['output' => 'username or password wrong'];
} else {
    $return = ['output' => 'success', 'result' => $return_array];
}

echo json_encode($return, JSON_PRETTY_PRINT);
exit();
