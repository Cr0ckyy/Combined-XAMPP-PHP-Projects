<?php
include("dbFunctions.php");

// create query
$queryList = "SELECT * FROM feedbacks ORDER BY last_visit desc";

// execute query
$resultList = mysqli_query($link, $queryList) or
        die("Error in query: $query. " . mysqli_error($link));

$query = "SELECT rating, COUNT(rating) FROM feedbacks GROUP BY rating";

// execute query
$result = mysqli_query($link, $query) or die("Error in query: $query. " . mysqli_error($link));

//create an array
$total_ratings = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0);

while ($row = mysqli_fetch_array($result)) {
    $total_ratings[$row['rating']] = $row['COUNT(rating)'];
}

//populate the variables below
$labels = "'Need Improvement', 'Okay','Good', 'Very Good', 'Excellent'";
$colours = "'red','orange','yellow','green','blue'";
$data = $total_ratings[1] . ", " .  $total_ratings[2] . ", " . $total_ratings[3] . ", " . $total_ratings[4] . ", " . $total_ratings[5];
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Pie and Donut Charts</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.rating.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/additional-methods.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="js/Chart.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/moment.min.js" type="text/javascript"></script>

        <script src="js/jquery.raty.min.js" type="text/javascript"></script>
        
        <script type="text/javascript">
            $(document).ready(function () {
                var pieChart = new Chart($("#pieChart"), {
                    type: 'pie',
                    data: {
                        datasets: [{
                                data: [<?php echo $data ?>],
                                backgroundColor: [<?php echo $colours ?>],
                                label: 'Feedback Summary'
                            }],
                        labels: [<?php echo $labels ?>]
                    },
                    options: {
                        responsive: true
                    }
                });

                

            });
        </script>
    </head>

    <body>
        <?php
        include("PS_navbar.php");
        ?>
        <div class="container">
            <h3>Rating Distribution</h3>

            <div id="canvas-holder" style="width:40%">
                <canvas id="pieChart" />
            </div>


        </div>
    </body>
</html>
