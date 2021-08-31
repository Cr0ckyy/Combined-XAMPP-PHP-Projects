<?php
include "dbFunctions.php";

$queryItem = "SELECT * FROM items";
$resultItem = mysqli_query($link, $queryItem);

while ($row = mysqli_fetch_array($resultItem)) {
    $arrItems[] = $row;
}
mysqli_close($link);
?>
<html>
    <head>
        <style>
            table {
                border: 1px solid black;
            }
            th {
                font: bold;
                text-align: center;
            }
            td {
                text-align: left;
            }
        </style>
    </head>
    <body>
        <h1>List of items</h1>
        <table border="1" cellpadding="0" cellspacing="0">
            <tr>
                <th>Item Name</th>
                <th>Date Sold</th>
                <th>Quality</th>
                <th>Price</th>
                <th>Image</th>
                <th>Edit</th>
            </tr>
            <?php
            for ($i = 0; $i < count($arrItems); $i++) {
                $itemID = $arrItems[$i]['id'];
                $itemName = $arrItems[$i]['name'];
                $itemDateSold = $arrItems[$i]['date_sold'];
                $itemQuality = $arrItems[$i]['quality'];
                $itemPrice = $arrItems[$i]['price'];
                $itemImageName = $arrItems[$i]['image'];
                ?>
                <tr>
                    <td><a href="itemDetails.php?id=<?php echo $itemID ?>"><?php echo $itemName ?></a></td>
                    <td><?php echo $itemDateSold ?></td>
                    <td><?php echo $itemQuality ?></td>
                    <td><?php echo $itemPrice ?></td>
                    <?php if ($itemImageName == 'none') { ?>
                        <td><img src="itemPics/none.jpg"></td>
                    <?php } else { ?>
                        <td><img src="itemPics/<?php echo $itemImageName ?>"</td>
                    <?php } ?>
                    <td><a href="editItem.php?id=<?php echo $itemID ?>">Edit</a></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
