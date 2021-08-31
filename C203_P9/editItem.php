<?php
include "dbFunctions.php";

$theID = $_GET['id'];

$queryItem = "SELECT * FROM items WHERE id=$theID";
$resultItem = mysqli_query($link, $queryItem) or die(mysqli_error($link));
$rowItem = mysqli_fetch_array($resultItem);
if (!empty($rowItem)) {
    $itemName = $rowItem['name'];
    $itemDescription = $rowItem['description'];
    $itemDateSold = $rowItem['date_sold'];
    $itemQuality = $rowItem['quality'];
    $itemPrice = $rowItem['price'];
    $itemImageName = $rowItem['image'];
}

$queryItems = "SELECT DISTINCT quality FROM items";
$resultItems = mysqli_query($link, $queryItems) or die(mysqli_error($link));
while ($row = mysqli_fetch_array($resultItems)) {
    $arrResult[] = $row;
}
mysqli_close($link);
?>
<html>
    <body>
        <?php if (!empty($itemName)) { ?>
            <form action="doEditItem.php" method="post">
                <input type="hidden" name="itemID" value="<?php echo $theID ?>">
                <label><b>Item Name: </b></label>
                <input type="text" name="itemName" value="<?php echo $itemName ?>"/>
                <br>
                <label><b>Description: </b></label>
                <textarea name="itemDescription"><?php echo $itemDescription ?></textarea>
                <br>
                <label><b>Date Sold: </b> <?php echo $itemDateSold ?></label>
                <br>
                <label><b>Quality: </b></label>
                <select name="itemQuality">
                    <?php
                    for ($i = 0; $i < count($arrResult); $i++) {
                        if ($arrResult[$i] == $itemQuality) {
                            ?>
                            <option selected="selected"> <?php echo $itemQuality ?> </option>
                        <?php } else { ?>
                            <option> <?php echo $arrResult[$i]['quality'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
                <br>
                <label><b>Price: </b></label>
                <input type="text" name="itemPrice" value="<?php echo $itemPrice ?>" />
                <br>
                <img src="itemPics/<?php echo $itemImageName ?>"/>
                <br>
                <input type="submit" value="submit" />
            </form>
        <?php } ?>
    </body>
</html>