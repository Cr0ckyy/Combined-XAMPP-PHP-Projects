<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $wt = $_GET['weight'];
        $ht = $_GET['height'];
        $age = $_GET['age'];
        $gender = $_GET['gender'];

        $bmr = 0;


        if ($gender == "M") {
            $bmr = 66 + (1.37 * $wt) + (5 * $ht) - (6.8 * $age);
        } else {
            $bmr = 655 + (9.6 * $wt) + (1.8 * $ht) - (4.7 * $age);
        }

        echo "Your BMR is $bmr";
        ?>
    </body>
</html>
