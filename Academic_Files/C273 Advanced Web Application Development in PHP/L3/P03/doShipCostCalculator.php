<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "c273_p03";
$link = mysqli_connect($db_host, $db_username, $db_password, $db_name) or
        die(mysqli_connect_error());

$bWeight = $_POST['books_weight'];
$bNum = $_POST['books_num'];
$ship_time = $_POST['shipping'];
$ship_method = $_POST['shipping_method'];

$extra_additions = $_POST['extra'];
$extra = "";

foreach ($extra_additions as $key => $e) {
    $extra .= $e . ' ';
}

$query = "INSERT INTO books
          (book_weight, num_books, ship_time, ship_method, extra_additions) 
          VALUES 
          ('$bWeight','$bNum','$ship_time','$ship_method','$extra')";

$status = mysqli_query($link, $query) or die('Error querying database');

if ($status) {
    $message = "record inserted successfully";
} else {
    $message = "record insertion failed";
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
    <body style="color: white; background-image: url('images/bg.png'); background-size: 100% 100%; ">

        <audio autoplay="autoplay" loop>
            <source src="audio/bgm_2.mp3" />     
        </audio>
        <audio autoplay="autoplay">
            <source src="audio/shionLaugh_trimmed_2.mp3" />     
        </audio>
        <?php
        echo $message;
        ?>
        <br>
        <img id="img" src='images/m_s_ion.gif' class="center"/><br>
        <img id="img" src='images/yes.jpg' class="center"/><br>

    </body>
</html>

