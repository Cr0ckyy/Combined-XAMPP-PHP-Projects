<?php
$labels = "'Manufacturing', 'Retail', 'Light Industry', 'Commuting', 'Orientation'";
$colours = "'red','orange','yellow','green','blue'";
$data = "10,20,30,40,50";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pie and Donut Charts</title>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>

        <!-- ADDED FILES-->
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/Chart.bundle.min.js" type="text/javascript"></script>
        <script type="text/javascript">

            $(document).ready(function () {

                alert("test");
                
                // pieChart
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
                
                // doughnutChart
                var doughnutChart = new Chart($("#doughnutChart"), {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                                data: [<?php echo $data ?>],
                                backgroundColor: [<?php echo $colours ?>],
                                label: 'Feedback Summary'
                            }],
                        labels: [<?php echo $labels ?>]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Chart.js Doughnut Chart'
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        }
                    }
                });
                
                // barChart
                var barChart = new Chart($("#barChart"), {
                    type: 'bar',
                    data: {
                        datasets: [{
                                data: [<?php echo $data ?>],
                                backgroundColor: "lightblue",
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
    <body class="d-flex">
        <h2>Pie chart example 1</h2>
        <div id="canvas-holder" style="width:40%">
            <canvas id="pieChart" />
        </div></br>

        <h2>Doughnut chart example 2</h2>
        <div id="canvas-holder" style="width:40%">
            <canvas id="doughnutChart" />
        </div></br>

        <h2>Bar chart example 3</h2>
        <div id="canvas-holder" style="width:40%">
            <canvas id="barChart" />
        </div></br>
    </body>
</html>