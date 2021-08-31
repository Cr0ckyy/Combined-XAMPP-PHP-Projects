<!-- LI SHUFANG - 19039480 -->
<!DOCTYPE html>
<?php
// php file that contains the common database connection code
include("dbFunctions.php");

// Start new or resume existing session
session_start();

// check whether the user is already logged in
$username = $_SESSION['username'];

// Create query to retrieve the relevant records
$querySummary = "SELECT exercise_type, exercise_duration FROM exercise_entry WHERE username = '$username'";

// Execute Query
$resultSummary = mysqli_query($link, $querySummary) or die('Error in the database query<br/>' . mysqli_error($link));
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <title>Exercise Summary Page</title>
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
                .exerciseSummary-form{
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

                .exerciseSummary-form{
                    margin-top: 40%;
                }

            }

            .exerciseSummary-main-text{
                margin-top: 20%;
                padding: 60px;
                color: #fff;

            }

            .exerciseSummary-main-text h2{
                font-weight: 300;
            }

            table{
                margin-top: 10px;
                border: 3px solid black;
                text-align: center;
                border-collapse: collapse;
            }
            .red {
                background: #FF011F;
            }

            .green {
                background: #08EE3C;
            }

            .right {
                float: right;
                width: 300px;
                padding: 10px;
            }
            .foo {
                float: left;
                width: 20px;
                height: 20px;
                margin-left: 15px; 
                border: 1px solid rgba(0, 0, 0, .2);
            }


        </style>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'navigation.php'; ?>
        <div class="sidenav">
            <div class="exerciseSummary-main-text">
                <h2>Yishun Community Hospital <br> Exercise Summary Page</h2><br>
                <p>This page shows a summary of the exercises that users have entered.</p>
            </div>
        </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="exerciseSummary-form">
                    <!--Exercise Summary illustration-->
                    <h3>Exercise Summary Display</h3><br>
                    <form>
                        <div class="form-group">
                            <h5>Show Exercise Type:</h5>
                            <select id="exercise_types" class="form-control">
                                <option value="0">
                                    Show All
                                </option>
                                <option value="Walk">
                                    Walk
                                </option>
                                <option value="Run">
                                    Run
                                </option>
                                <option value="Cycle">
                                    Cycle
                                </option>
                            </select>
                        </div>
                    </form><br>
                    <!-- Exercise Summary script-->
                    <script>
                        $(document).ready(function () {
                            $("#exercise_types").change(function () {

                                var exercise_types = $(this).val();
                                if (exercise_types == 0) {
                                    $('tr').show();

                                } else {
                                    $('tr').hide();
                                    $('.header').show();
                                    $('.' + exercise_types).show();
                                }
                            });

                        });
                    </script>
                    <!--END Exercise Summary illustration-->
                    <h5>Legend for the Exercise Table:</h5>
                    <ul>
                        <li> <div class="foo red"></div> &nbsp;Red box means inadequate amount of exercise</li> 
                        <li> <div class="foo green"> </div> &nbsp;Green box means for adequate amount of exercise</div></li> 
                    </ul> <br>
                    <table id="exercise_summary_table" class="table table-bordered">
                        <h5> Exercise Table</h5>
                        <thead class="thead-light ">
                            <tr class="header">
                                <th>Exercise Type</th>
                                <th>Duration</th>
                            </tr>
                            <?php
                            //fetches rows of data in a numerical array format from the result
                            while ($row = mysqli_fetch_assoc($resultSummary)) {
                                $exercise_type = $row['exercise_type'];
                                $exercise_duration = $row['exercise_duration'];
                                ?>
                                <tr class="<?php echo $exercise_type; ?>">
                                    <td>
                                        <?php echo $exercise_type; ?>
                                    </td>
                                    <?php
                                    // table colours
                                    $adequate_effort = "<td class='green'>$exercise_duration</td>";
                                    $inadequate_effort = "<td class='red'>$exercise_duration</td>";

                                    //  exercise durations
                                    if ($exercise_type == "Walk") {
                                        if ($exercise_duration < 30) {
                                            echo $inadequate_effort;
                                        } else {
                                            echo $adequate_effort;
                                        }
                                    } else if ($exercise_type == "Run") {
                                        if ($exercise_duration < 10) {
                                            echo $inadequate_effort;
                                        } else {
                                            echo $adequate_effort;
                                        }
                                    } else {
                                        if ($exercise_duration < 20) {
                                            echo $inadequate_effort;
                                        } else {
                                            echo $adequate_effort;
                                        }
                                    }
                                    ?>
                                </tr>
                                <?php
                            }
                            ?>    
                    </table>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
        <script src="assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="assets/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </body>
</html>
<!-- LI SHUFANG - 19039480 -->