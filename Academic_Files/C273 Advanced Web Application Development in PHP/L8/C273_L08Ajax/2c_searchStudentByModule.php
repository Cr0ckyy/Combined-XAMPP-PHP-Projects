<?php
include("dbFunctions.php");

$modules = array();

//write the php code to retrieve the data from the modules table
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

                //Attach a change listener to "Select Student" dropdown list
                //make ajax call to getStudentDetails.php passing in the selected student id
                //display the student details onto the grid below

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