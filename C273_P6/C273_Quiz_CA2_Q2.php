<!DOCTYPE HTML>
<html>
    <head>
        <title>C273_Quiz_CA2_Q2</title>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>

        <!-- ADDED FILES-->
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        
        <script>
            $(document).ready(function () {
                alert("test");
                // datepicker for #id_consoles element 
                $("#visit_date").datepicker({minDate: -7, maxDate: "+14D"});
            });
        </script>
    </head>
    <body>
        <form method="post" action="doProcess.php">
            <div class="ui-widget">
                <label for="visit_date">Visit date: </label>
                <input id="visit_date" type="text" name="Visit Day"/>
            </div>
        </form>
    </body>
</html>
