<!DOCTYPE html>
<html>
    <head>
        <title>Exercise 2</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function () {

                var num = 0;

                // Mouse clicks an object
                $("#down").click(function () {

                    // Everytime when it clicks , the number decreases by 1
                    num--;

                    // Sets the content of selected  (html) elements for id numClicks
                    // Everything when it clicks , the number decreases by 1
                    $("#qty").val(num);
                });


                // Mouse clicks an object
                $("#up").click(function () {

                    // Everytime when it clicks , the number increases by 1
                    num++;

                    // Sets the content of selected  (html) elements for id numClicks
                    // Everything when it clicks , the number increases by 1
                    $("#qty").val(num);
                });
            });
        </script>

        <style>
            input {
                font-size: 2.4em;
                background-color: transparent;
                text-align: center;
                border-width: 0;
                width: 100%;
                margin: 0 0 .1em 0;
                color: #FF6347 ;
            }
            label {
                display: block;
                font-size: .8em;
            }
            button {
                color: #444;
                background-color: #B5B198;
                border-radius: 6px; 
                font-weight: bold;

            }
            .box {
                background-color: #444;
                color: #C4BE92;
                text-align: center;               
                border-radius: 12px; 
                padding: .8em .8em 1em;
                width: 8em;
                margin: 0 auto;	
                box-shadow: 0px 0px 12px 0px #000;

            }
        </style>

    </head>
    <body>
        <div class="box">    
            <label for="qty"><abbr title="Quantity">Qty</abbr></label>
            <input id="qty" value="0" />
            <button id="down" >-1</button>
            <button id="up" >+1</button>
        </div>

    </body>
</html>
