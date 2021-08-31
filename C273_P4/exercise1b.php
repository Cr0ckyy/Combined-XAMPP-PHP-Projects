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

                // when mouse is moved over #btn1 element
                $("#btn1").hover(function () {
   
                     // Sets the value of #btn1 elements
                    $(this).val("Hello World");
                    
 
                    
                 
                    // Hides the #heading1 elements 
                    $("#heading1").hide();

                 
                    // Sets the content of #magic elements
                    $("#magic").html("<i class = 'fa fa-dove'></i>");                     
                });
                
                // when mouse is moved over #magic element
                $("#magic").hover(function () {
                    
                    
                    // Toggles between adding/removing 
                    // one/more classes from #magic element
                    $(this).toggleClass("required");

                })
            });
        </script>
        <style>
            .required   { color: #FF0000; }
        </style>
    </head>
    <body>

        <div class="container">
            <h1 id="heading1">Heading 1</h1>
            <p id="magic">Point your mouse pointer here!!!</p>
            <input type="button" id="btn1" value="Change Heading 1">
        </div>

    </body>
</html>