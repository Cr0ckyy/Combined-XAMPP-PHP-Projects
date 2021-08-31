<?php
$upperLimit = 4;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table, th, td {
                border: 1px solid black;
            }

        </style>    
    </head>
    <body>
        <table>
            <tr>
                <th>Table header</th>
                <th>Table header</th>
            </tr>
            <?php
            for ($i = 0; $i < $upperLimit; $i++) {
                ?>
                <tr>
                    <td>Table column</td>
                    <td>Table column</td>
                </tr>
                <?php
            }
            ?>

        </table>
    </body>
</html>
