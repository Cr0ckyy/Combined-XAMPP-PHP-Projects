<?php
include "dbFunctions.php";
$itemID = $_POST['itemID'];
$itemName = $_POST['itemName'];
$itemDescription = $_POST['itemDescription'];
$itemQuality = $_POST['itemQuality'];
$itemPrice = $_POST['itemPrice'];

$msg = "";
$queryItem = "UPDATE items
              SET name='$itemName', description='$itemDescription', quality='$itemQuality', price=$itemPrice
              WHERE id=$itemID";
$result = mysqli_query($link, $queryItem);

if ($result) {
    $msg = "Record a successful update";
} else {
    $msg = "Failed to update the record";
}
?>
<html>
    <body>
        <?php echo $msg ?>
    </body>
</html>

