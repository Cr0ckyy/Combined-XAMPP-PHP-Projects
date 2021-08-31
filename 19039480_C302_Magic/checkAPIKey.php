<?php

header('Content-Type: application/json');
if (isset($_POST["loginId"]) && isset($_POST["apikey"])) {
    $loginId = $_POST["loginId"];
    $apikey = $_POST["apikey"];
} else {
    $row["authorized"] = false;
    $row["reason"] = "No loginId or API key.";
    echo json_encode($row);
    exit();
}

$query = "SELECT * FROM user WHERE id = '$loginId' AND apikey='$apikey'";
$result = mysqli_query($link, $query) or die($link);

if (mysqli_num_rows($result) != 1) {
    $row["authorized"] = false;
    $row["reason"] = "Invalid Id or API Key.";
    $row["numrows"] = mysqli_num_rows($result);
    $row["query"] = $query;
    echo json_encode($row, JSON_PRETTY_PRINT);

    exit();
} else {
    $row["true"] = false;
}
?>
