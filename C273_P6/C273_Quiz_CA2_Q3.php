<!DOCTYPE html>
<html>
    <head>
        <title>C273_Quiz_CA2_Q3</title>
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
                var pieChart = new Chart($("#fruit"), {
                    type: 'pie',
                    data: {
                        datasets: [{
                                data: [30,20,50],
                                backgroundColor: ['red','green','blue'],
                                label: 'Feedback Summary'
                            }],
                        labels: ['Apple', 'Mango', 'Blueberry']
                    },
                    options: {
                        responsive: true
                    }
                });

                
            });
        </script>
    </head>
    <body class="d-flex">
        <h2>Fruits Pie chart</h2>
        <div id="canvas-holder" style="width:40%">
            <canvas id="fruit" />
        </div></br>

    </body>
</html>