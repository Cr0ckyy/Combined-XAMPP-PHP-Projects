<?php
include "dbFunctions.php";

$theID = $_GET['id'];

$query = "SELECT * FROM restaurants WHERE rest_id=$theID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result);
if (!empty($row)) {
    $restaurantname = $row['name'];
}
?>

<html>
    <body>
        <?php if (!empty($theID)) { ?>
            <form action="doEditRestaurant.php" method="post">
                <input type="hidden" name="id" value="<?php echo $theID ?>"/>
                <div style="width: 350px;">
                    Restaurant Name: 
                    <input type="text" name="name" value="<?php echo $restaurantname ?>"/>
                    <br/><input type="submit"/>
                </div>
            </form>
        <?php } ?>
    </body>
</html>