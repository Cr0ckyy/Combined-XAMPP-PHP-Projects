<?php
include("dbFunctions.php");
$studentId = 111111; //for a particular student, you can read this from $_SESSION as well
$query = "select * from modules";
$result = mysqli_query($link, $query);

$modules = array();
while ($row = mysqli_fetch_assoc($result)) {

    //retrieves total ratings for each module
    $query1 = "SELECT * FROM ratings WHERE module_code = '" . $row["module_code"] . "'";
    $result1 = mysqli_query($link, $query1);
    $row['totalRating'] = mysqli_num_rows($result1);

    //retrieves user's ratings of modules
    $query2 = "SELECT rating FROM ratings WHERE module_code = '" . $row["module_code"] . "' and student_id=$studentId";
    $result2 = mysqli_query($link, $query2);
    if (mysqli_num_rows($result2) > 0) {
        $row2 = mysqli_fetch_assoc($result2);
        $row['rating'] = $row2['rating'];
    } else {
        $row['rating'] = 0;
    }
    $modules [] = $row;
}
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rate your modules</title>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.raty.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $.fn.raty.defaults.path = 'js/img';

                    <?php
                    for ($i = 0; $i < count($modules); $i++) {
                    ?>
                    $('#ratings<?php echo $modules[$i]['module_code'] ?>').raty({
                        cancel: false,
                        number: 5,
                        score: <?php echo $modules[$i]['rating'] ?>,

                        click: function (data) {
                            $.ajax({
                                type: "GET",
                                url: "insertRating.php",
                                data: "rating=" + data + "&student_id=<?php echo $studentId ?>&module_code=<?php echo $modules[$i]['module_code'] ?>",
                                cache: false,
                                dataType: "JSON",

                                success: function (response) {
                                },

                                error: function (obj, textStatus, errorThrown) {
                                    console.log("Error " + textStatus + ": " + errorThrown);
                                }
                            });
                        }
                    });
<?php }
?>
            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="text-center mb-5">
                <h2>Rate your modules</h2>
            </div>
            <?php
            for ($i = 0; $i < count($modules); $i++) {
                ?>
                <div class="card block-style-03 mb-5">
                    <div class="card-body">
                        <h4 class="text-info"><?php echo $modules[$i]['module_name'] ?></h4>
                        <div id="ratings<?php echo $modules[$i]['module_code'] ?>"></div>
                        <p class="text-muted mt-3"><em>Total Reviews: <?php echo $modules[$i]['totalRating'] ?></em></p>
                        <p><?php echo $modules[$i]['description'] ?></p>
                    </div>                           
                </div>
            <?php } ?>
        </div>
    </body>
</html>