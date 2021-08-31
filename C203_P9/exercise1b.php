<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $rad = $_GET['radius'];
        $area = 3.142 * $rad * $rad;
        echo "The area of the circle is $area";
        ?>
    </body>
</html>
