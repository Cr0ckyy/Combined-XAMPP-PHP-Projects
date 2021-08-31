<?php
$weight = $_POST['weight'];
$number = $_POST['number'];
$time = $_POST['time'];
$method = $_POST['method'];

if (empty($_POST['addition'])) {
    $additionString = "";
} else {
    $addition = $_POST['addition'];
    $additionString = implode(", ", $addition);
}
$message = "";

$host = "localhost";
$user = "root";
$pass = "";
$db = "c273_p03";

$link = mysqli_connect($host, $user, $pass, $db);

$query = "INSERT INTO books(book_weight, num_books, ship_time, ship_method, extra_additions)";
$query .= "VALUES ('$weight', $number, '$time', '$method', '$additionString')";

$result = mysqli_query($link, $query) or die($link);

if ($result) {
    $message = "Record inserted successfully";
} else {
    $message = "Record insertion failed";
}

mysqli_close($link);
?>
<html>
    <body>
        <?php echo $message ?>
    </body>
</html>