<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap 4 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function () {
                var favText = $(".smallText").html();
                var fruit = $(":text").val();
                var age = $("#age").val();
                var message = favText + " " + fruit + " and my age is " + age;
                $("#result").html(message);
            })

        </script>
    </head>
    <body>
        <p class="smallText">My favourite fruit is</p>
        <input id ="" type="text" name="fruit" value="apple"/>


        
        
         <input id = "age" type="text" name="age" value="69"/>
        <p id="result"></p>


    </body>
</html>
