<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function () {
                $("button").click(function () {

                    // get the NRIC from the textfield user enters and pass it as 'nric' to the URL via GET
                    var nric = $("[name=nric]").val();

                    $.ajax({
                        type: "GET",
                        
                        // Step 1: AJAX initiates Http GET request and retrieves response as JSON message
                        url: "getPerson.php",
                        cache: false,
                        dataType: "JSON",

                        success: function (response) {
                        // Step 2: Retrieve multiple records from object and  display using jQuery selector
                           $("#details").html(response.name + " is " + response.age + " years old.");

                        },
                        error: function (obj, textStatus, errorThrown) {
                            console.log("Error " + textStatus + ": " + errorThrown);
                        }
                    });

                });
            });
        </script>
    </head>
    <body>
        Find Person:<br/>
        <input type="text" name="nric"/><button>Find</button>
        <br/><br/>
        <div id="details"></div>
    </span>
</body>
</html>