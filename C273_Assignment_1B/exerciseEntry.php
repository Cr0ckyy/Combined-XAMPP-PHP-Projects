<!-- LI SHUFANG - 19039480 -->
<!DOCTYPE html>
<?php
// php file that contains the common database connection code
include("dbFunctions.php");

// Start new or resume existing session
session_start();
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Exercise Entry Page</title>
        <link href="assets/css/all.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/all.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <style>
            body {
                font-family: "Lato", sans-serif;
            }

            .main-head{
                height: 150px;
                background: #FFF;
            }

            .sidenav {
                height: 100%;
                background-color: #3FBBC0;
                overflow-x: hidden;
                padding-top: 20px;
            }

            .main {
                padding: 0px 10px;
            }

            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
            }

            @media screen and (max-width: 450px) {
                .exercise-entry-form{
                    margin-top: 10%;
                }
            }

            @media screen and (min-width: 768px){

                .main{
                    margin-left: 40%; 
                }

                .sidenav{
                    width: 40%;
                    position: fixed;
                    z-index: 1;
                    top: 0;
                    left: 0;
                }
                .exercise-entry-form{
                    margin-top: 40%;
                }

            }

            .exercise-entry-main-text{
                margin-top: 20%;
                padding: 60px;
                color: #fff;
            }

            .exercise-entry-main-text h2{
                font-weight: 300;
            }

            .slidecontainer {
                width: 100%;
            }

            .slider {
                -webkit-appearance: none;
                width: 100%;
                height: 25px;
                background: #d3d3d3;
                outline: none;
                opacity: 0.7;
                -webkit-transition: .2s;
                transition: opacity .2s;
            }

            .slider:hover {
                opacity: 1;
            }

            .slider::-webkit-slider-thumb {
                -webkit-appearance: none;
                appearance: none;
                width: 25px;
                height: 25px;
                background: #3FBBC0;
                cursor: pointer;
            }

            .slider::-moz-range-thumb {
                width: 25px;
                height: 25px;
                background: #4CAF50;
                cursor: pointer;
            }

        </style>
        <script src="assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="assets/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </head>
    <body>
        <?php include 'navigation.php'; ?>

        <div class="sidenav">
            <div class="exercise-entry-main-text">
                <h2>Yishun Community Hospital <br>Exercise Entry Page</h2><br>
                <p>After you have entered your exercise activity, a list of the history of the exercise will be displayed.</p>
            </div>
        </div>

        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="exercise-entry-form">

                    <!--Exercise Entry form-->
                    <form action="doExerciseEntry.php" method="POST">

                        <div class="container">

                            <!--Exercise Type -->
                            <div class="form-group">
                                <label for="exercise_type">Exercise Type (select one):</label>
                                <select  name="exercise_type" class="form-control" id="exercise_type">
                                    <!-- <option value="" disabled selected value> -- select an option -- </option>-->
                                    <option value="Walk">Walk</option>
                                    <option value="Run">Run</option>
                                    <option value="Cycle">Cycle</option>
                                </select>
                            </div>

                            <!--Exercise Duration -->
                            <div class="form-group">
                                <label for="exercise_duration_slider">Exercise Duration:</label>
                                <input name="exercise_duration" type="range" min="5" max="120" value="50" class="slider" id="exercise_duration_slider">
                                <p>Minutes: <span id="exercise_duration"  readonly style="border:0; color:#f6931f; font-weight:bold; text-align:right" size="1"></span></p>
                            </div>
                            
                             <!--Exercise Duration script -->
                            <script>
                                var slider = document.getElementById("exercise_duration_slider");
                                var output = document.getElementById("exercise_duration");
                                output.innerHTML = slider.value;

                                slider.oninput = function () {
                                    output.innerHTML = this.value;
                                }
                            </script>
                            
                            <button type="submit" class="btn btn-success">Submit</button>

                        </div>

                    </form>
                    <!--END Exercise Entry form-->

                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>
<!-- LI SHUFANG - 19039480 -->