<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'dbFunctions.php';
        $theID = $_GET['id'];

        $query = "SELECT * FROM restaurants WHERE rest_id = $theID";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $row = mysqli_fetch_array($result);

        if (!empty($row)) {

            $restaurantname = $row['name'];
        }
        ?>
    </body>
</html>
