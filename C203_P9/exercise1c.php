<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $len = $_GET['length'];
        $br = $_GET['breath'];
        $area = $len * $br;
        echo "The area of the rectangle is $area";
        ?>
    </body>
</html>
