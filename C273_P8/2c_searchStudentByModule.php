<?php
include("dbFunctions.php");

$modules = array();

//write the php code to retrieve the data from the modules table
$query = "SELECT * FROM modules order by module_code";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $modules[] = $row;
}

$student = array();
$query2 = "SELECT * FROM student order by student_id";
$result2 = mysqli_query($link, $query2);

while ($row2 = mysqli_fetch_assoc($result2)) {
    $student[] = $row2;
}
mysqli_close($link);
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript">

            $(document).ready(function () {
                //Attach a change listener to "Select Module" dropdown list
                //make ajax call to getStudentsByModule.php passing in the selected module code
                //load the student ids onto the "Select Student" dropdown list

                $("#idModule").change(function () {

                    // Get the values from the user in the HTML and create JavaScript variables to store them
                    var modulecode = $(this).val();

                    // Step 1: AJAX initiates Http GET request and retrieves  response as JSON message
                    $.ajax({
                        type: "GET", // type: GET/POST
                        url: "getStudentsByModule.php", // url: The request URL

                        data: "module_code=" + modulecode, // Request parameters (name=value pairs). 
                        // Can be  expressed as an object (e.g., {name:"peter", msg:"hello"}), 
                        //  or query string (e.g., "name=peter&msg=hello").

                        cache: false, // If set to false , it will force requested pages not to be cached by the browser. 
                        dataType: "JSON", // dataType: Expected response data type


                        // Step 2: Retrieve data from object and display using jQuery selector
                        success: function (response) {
                            var message = "";
                            message += "<option value=\"\">Please select</option>"
                            for (i = 0; i < response.length; i++) {
                                message += "<option value=" + response[i].student_id + ">"
                                message += response[i].student_id + "</option>";
                            }
                            $("#idStudent").html(message);

                        },

                        error: function (obj, textStatus, errorThrown) {
                            console.log("Error " + textStatus + ": " + errorThrown);
                        }
                    });
                })

                //Attach a change listener to "Select Student" dropdown list
                //make ajax call to getStudentDetails.php passing in the selected student id
                //display the student details onto the grid below
                $("#idStudent").change(function () {
                    // Get the values from the user in the HTML and create JavaScript variables to store them
                    var studentID = $(this).val();
                    $.ajax({
                        type: "GET",
                        url: "getStudentDetails.php",
                        data: "student_id=" + studentID,
                        cache: false, // If set to false , it will force requested pages not to be cached by the browser. 
                        dataType: "JSON", // dataType: Expected response data type

                        // Step 2: Retrieve data from object and display using jQuery selector
                        success: function (response) {
                            // Returns the content of the selected elements to the webpage in HTML format.
                            $(".studentid").html(response.student_id);
                            $(".firstname").html(response.first_name);
                            $(".lastname").html(response.last_name);
                        },

                        error: function (obj, textStatus, errorThrown) {
                            console.log("Error " + textStatus + ": " + errorThrown);
                        }

                    });
                })
            });
        </script>
    </head>

    <body>
        <div class="container">
            <form>
                <div class="form-group">
                    <label for="idModule">Select Module:</label>
                    <select id="idModule" class="form-control-sm">
                        <option value="">Please select</option>
                        <?php
                        for ($i = 0; $i < count($modules); $i++) {
                            ?>
                            <option value="<?php echo $modules[$i]['module_code']; ?>"><?php echo $modules[$i]['module_name']; ?></option>                 
                        <?php } ?>        
                    </select>
                </div>
                <div class="form-group">
                    <label for="idStudent">Select Student ID:</label>
                    <select id="idStudent" class="form-control-sm">
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">Student ID:</div>
                    <div class="col-md-9 studentid"></div>
                    <div class="col-md-3">First Name:</div>
                    <div class="col-md-9 firstname"></div>
                    <div class="col-md-3">Last Name:</div>
                    <div class="col-md-9 lastname"></div>
                </div>
            </form>
        </div>
    </body>
</html>