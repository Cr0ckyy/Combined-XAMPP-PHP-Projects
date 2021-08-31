<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include "dbFunctions.php";

        $theID = $_GET['id'];


        $query = "SELECT * FROM items WHERE id=$theID";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $row = mysqli_fetch_array($result);

        if (!empty($row)) {

            $itemname = $row['name'];
            $description = $row['description'];
            $datesold = $row['date_sold'];
            $quality = $row['quality'];

            $price = $row['price'];
            $image = $row['image'];
        }

        if (!empty($itemname)) {
            ?>

            <div style ="width:350px;">


                <b>Item Name: </b>  <?php echo $itemname ?><br/>
                <b>Description: </b>  <?php echo $description ?><br/>
                <b>Date Sold: </b>  <?php echo $datesold ?><br/>
                <b>Quality: </b>  <?php echo $quality ?><br/>
                <b>Price: </b>  <?php echo $price ?> <br/>
                <img src ="itemPics/<?php echo $image ?>" width="200"/>
            </div>
        <?php } ?>



    </body>
</html>
