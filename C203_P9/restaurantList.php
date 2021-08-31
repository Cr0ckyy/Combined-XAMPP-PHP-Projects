<?php
include "dbFunctions.php";

$query = "SELECT * FROM restaurants";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_array($result)) {
    $arrContent[] = $row;
}
?>
<html>
    <body>
        <h1>List of restaurants</h1>
        <table border="1" cellpadding="0" cellspacing="0">
            <tr>
                <th>Restaurant Name</th>
                <th>Edit</th>
            </tr>
            <?php
            for ($i = 0; $i < count($arrContent); $i++) {
                $id = $arrContent[$i]['rest_id'];
                $name = $arrContent[$i]['name'];
                ?>
                <tr>
                    <td><a href="restaurantDetails.php?id=<?php echo $id; ?>"> <?php echo $name; ?></a></td>
                    <td><a href="editRestaurant.php?id=<?php echo $id; ?>">edit</a></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>