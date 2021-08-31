<?php
include("dbFunctions.php");

$student = array();
$query = "SELECT * FROM student order by student_id";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $student[] = $row;
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
        <script>
            $(document).ready(function () {
                $("#idStudent").change(function () {

                    // Get the values from the user in the HTML and create JavaScript variables to store them
                    var studentID = $(this).val()

                    // Step 1: AJAX initiates Http GET request and retrieves  response as JSON message
                    $.ajax({
                        type: "GET", // type: GET/POST
                        url: "getStudentDetails.php", // url: The request URL

                        data: "student_id=" + studentID, // Request parameters (name=value pairs). 
                        // Can be  expressed as an object (e.g., {name:"peter", msg:"hello"}), 
                        //  or query string (e.g., "name=peter&msg=hello").

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
                });
            });
        </script>      

    </head>

    <body>
        <div class="container">
            <label for="idStudent">Select Student ID:</label>
            <select id="idStudent" class="form-control-sm">
                <option value="">Please select</option>
                <?php
                for ($i = 0; $i < count($student); $i++) {
                    ?>
                    <option value="<?php echo $student[$i]['student_id']; ?>"><?php echo $student[$i]['student_id']; ?></option>                 
                <?php } ?>        
            </select>
            <br/><br/>
            <div class="row">
                
                <div class="col-md-3">Student ID:</div>
               
                <!-- .studentid -->
                <div class="col-md-9 studentid"></div>
                
                <div class="col-md-3">First Name:</div>
           
                <!-- .firstname -->
                <div class="col-md-9 firstname"></div>
                
                <div class="col-md-3">Last Name:</div>
                
                <!-- .lastname -->
                <div class="col-md-9 lastname"></div>
            </div>
        </div>
    </body>
</html>
