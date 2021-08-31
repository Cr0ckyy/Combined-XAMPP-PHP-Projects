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

                //  html() method is used to retrieve the  HTML contents of that selector
                var favText = $(".smallText").html();

                //  val() method is used to retrieve the  value of that form element
                var fruit = $(":text").val();

                const message = `${favText}, ${fruit}!`;

        

                //  html() method is used to set the content of that  element with the value in variable “message”
                $("#result").html(message);

            })
        </script>
    </head>
    <body>
        <p class="smallText">My favourite fruit is</p>
        <input type="text" name="fruit" value="apple"/>
        <p id="result"></p>
    </body>
</html>
