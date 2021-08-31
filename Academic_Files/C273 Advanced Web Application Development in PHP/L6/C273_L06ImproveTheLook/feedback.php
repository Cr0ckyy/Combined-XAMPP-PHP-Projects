<!DOCTYPE html>
<html>
    <head>
        <title>Give Feedback</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <style>
            form .error {
                color: #ff0000;
            }
        </style>
        <script>
            $(document).ready(function () {
                // AUTOCOMPLETE
                var areas = [
                    "Singapore",
                    "Malaysia",
                    "China",
                    "Taiwan",
                    "That place"
                ];
                $("#id_area").autocomplete({
                    source: areas
                });

                // DATEPICKER
                $("#id_last_visit").datepicker({minDate: new Date('2-4-2013')});

                // SLIDER
                $("#slider").slider({
                    value: 0,
                    min: 0,
                    max: 20,
                    step: 1,
                    slide: function (event, ui) {
                        $("#id_num").val(ui.value);
                    }
                });
                $("#id_num").val($("#slider").slider("value"));


                // RATING
                $.fn.raty.defaults.path = 'js/img';

                $('[name=rate_us]').raty({
                    cancel: false,
                    scoreName: 'rate_us',
                    number: 5, //change to 5
                    score: 3
                });


                $("#defaultForm").validate({
                    rules: {
                        visitor_name: {
                            required: true,
                            pattern: /^[a-zA-Z0-9._]{2,}$/
                        },
                        area: {
                            required: true,
                        },
                        last_visit: {
                            required: true,
                            pattern: /^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/
                        },
                        visitor_comments: {
                            required: true,
                            maxlength: 200
                        }, visitor_email: {
                            required: true,
                            pattern: /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/
                        }
                    },
                    messages: {
                        visitor_name: {
                            required: "Please enter your name",
                            pattern: "Your name must be at least 2 characters long"
                        },
                        area: {
                            required: "Please enter which area you entered",
                        },
                        last_visit: {
                            required: "Please enter the last time you've visited",
                            pattern: "Please follow the DD/MM/YY format"
                        }, visitor_comments: {
                            required: "Please enter a comment",
                            maxlength: "Your comment must be within 200 characters"
                        }, visitor_email: {
                            required: "Please enter an email",
                            maxlength: "Invalid email"
                        }
                    },
                    submitHandler: function () {
                        return true;
                    }
                });
            });


        </script>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <div class="container">
            <h3>Light Central Library was opened on 4 February 2013<br/>
                Please help us improve by sharing your feedback!<br/>
            </h3>
            <form id="defaultForm" action="doFeedback.php" method="post">
                <div class="form-group">
                    <label for="id_name">Name:</label>
                    <input type="text" class="form-control" id="id_name" name="visitor_name" required>
                </div>
                <div class="form-group">
                    <label for="id_area">Area:</label>
                    <input type="text" class="form-control" id="id_area" name="area">
                </div>
                <div class="form-group">
                    <label for="id_last_visit">Last Visit:</label>                      
                    <input id="id_last_visit" type="text" class="form-control" name="last_visit">                           
                </div>
                <div class="form-group">
                    <label for="id_num">Average books borrowed per visit</label>
                    <input id="id_num" type="text" class="form-control" name="num_books" readonly>
                    <div id="slider"></div>
                </div>
                <div class="form-group">
                    <label for="id_rating">Rate Us:</label>
                    <div name="rate_us"></div>
                    <!--<input type="radio" name="rate_us"/>1
                    <input type="radio" name="rate_us"/>2
                    <input type="radio" name="rate_us"/>3
                    <input type="radio" name="rate_us"/>4
                    <input type="radio" name="rate_us"/>5-->
                </div>
                <div class="form-group">
                    <label for="id_comments">Comments:</label>
                    <textarea id="id_comments" class="form-control" name="visitor_comments" rows="5" cols="20"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="id_email">Email:</label>
                    <input type="text" class="form-control" id="email" name="visitor_email">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </body>
</html>