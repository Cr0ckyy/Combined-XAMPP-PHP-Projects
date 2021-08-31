<?php

if(isset($_POST["loginId"]) && isset($_POST["apikey"])){
    $loginId = $_POST["loginId"];
    $apikey = $_POST["apikey"];
} else {
    $row["authorized"] = false;
    $row["reason"] = "No loginId or API Key.";
    echo json_encode($row);
    exit();
}

$query = "SELECT * FROM credentials WHERE id = '$loginId' AND apikey = '$apikey'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

if (mysqli_num_rows($result)!= 1) {
    $row["authorized"] = false;
    $row["reason"] = "Invalid Id or API Key.";
    $row["numrows"] = mysqli_num_rows($result);
    $row["query"] = $query;
    echo json_encode($row);
    exit();
} else {
    $row["authorized"] = true;
}

?>

