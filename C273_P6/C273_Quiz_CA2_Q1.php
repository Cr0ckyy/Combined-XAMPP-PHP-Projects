<!DOCTYPE html>
<html>
    <head>
        <title>C273_Quiz_CA2_Q1</title>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>

        <!-- ADDED-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>


        <style>
            form .error {
                color: #ff0000;
            }
        </style>
        <script>
            $(document).ready(function () {
                alert("test");



                //The submit event occurs when
                //a form is submitted. This
                //event can only be used on
                //<form> elements
                // validation of form
                $("form").validate({

                    // Rules for entered data , and the Regular Expression IS NEEEDED
                    rules: {

                        budget: {
                            required: true,
                            pattern: /^[0-9]+[\+\-]?$/ // /^[0-9]+[\+\-]?$/ - answer dk , must search online

                        },
                        username: {
                            required: true,
                            pattern: /^[0-9a-zA-Z]{5,8}$/
                        }
                    },

                    // Error messages - Not meeting the requirements , and failed to meet the pattern
                    messages: {
                        budget: {
                            required: "Budget is needed",
                            pattern: "Example 100, 300+, 500-"
                        },
                        username: {
                            required: "Username is needed",
                            pattern: "Username must be minimum 5 and maximum 8 letters or digits"
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
        <div class="container">

            <h2>C273_Quiz_CA2_Q1</h2>

            <form id="defaultForm" method="post" action="target.php">
                <div class="form-group">
                    <label >Username</label>
                    <input type="text" class="form-control" name="username" placeholder="User name" required />
                </div>
                <div class="form-group">
                    <label >Budget</label>
                    <input type="text" class="form-control" name="budget" placeholder="Budget" required/>
                </div>
                <input type="submit" class="btn btn-primary" value="Sign up"/>
            </form>
        </div>
    </body>
</html>