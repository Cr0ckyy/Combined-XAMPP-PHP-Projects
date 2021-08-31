<?php

include "dbFunctions.php";
$travelID = $_POST['id'];
$newStory = $_POST['story'];

$msg = "";
$query = "UPDATE travel_highlights
          SET story='$newStory'
          WHERE id = $travelID";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

if ($result) {
    $msg = "Record updated successfully";
} else {
    $msg = "Not updated record";
}

echo $msg;
?>

