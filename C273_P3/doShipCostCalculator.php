<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "c273_p03";
$link = mysqli_connect($db_host, $db_username, $db_password, $db_name) or
        die(mysqli_connect_error());

$bookWeight = $_POST['books_weight'];
$bookNum = $_POST['books_num'];
$shipingTime = $_POST['shipping'];
$shipingmethod = $_POST['shipping_method'];

$additions = $_POST['extra'];
$extra = "";

foreach ($additions as $key => $e) {
    $extra .= $e . ' ';
}

$query = "INSERT INTO books
          (book_weight, num_books, ship_time, ship_method, extra_additions) 
          VALUES 
          ('$bookWeight','$bookNum','$shipingTime','$shipingmethod','$extra')";

$status = mysqli_query($link, $query) or die('Error in the database query');

if ($status) {
    $message = "Record successfully inserted.";
} else {
    $message = "Failed to insert the record.";
}



mysqli_close($link);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>doShipCostCalculator.php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>
    <style>

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
    <body style="color: white; background-image: url('images/wave.ngsversion.1500050062134.adapt.710.1.jpg'); background-size: 100% 100%; ">

        <?php
        echo $message;
        ?>
        <br>
        <img id="img" src='images/maxresdefault.jpg' class="center"/><br>
        <img id="img" src='images/SSBulker-GTAV-Fore.png' class="center"/><br>

    </body>
</html>

