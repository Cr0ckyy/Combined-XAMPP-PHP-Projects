<!-- LI SHUFANG - 19039480 -->
<!DOCTYPE html>
<?php
// php file that contains the common database connection code
include("dbFunctions.php");

// Start new or resume existing session
session_start();
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- ADDED-->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <style>
            form .error {
                color: #ff0000;
            }

            body {
                font-family: "Lato", sans-serif;
            }

            .main-head{
                height: 150px;
                background: #FFF;

            }

            .sidenav {
                height: 100%;
                background-color: #3FBBC0;
                overflow-x: hidden;
                padding-top: 20px;
            }


            .main {
                padding: 0px 10px;
            }

            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
            }

            @media screen and (max-width: 450px) {

                .register-form{
                    margin-top: 10%;
                }
            }

            @media screen and (min-width: 768px){
                .main{
                    margin-left: 40%; 
                }

                .sidenav{
                    width: 40%;
                    position: fixed;
                    z-index: 1;
                    top: 0;
                    left: 0;
                }
                .register-form{
                    margin-top: 40%;
                }
            }

            .register-main-text{
                margin-top: 20%;
                padding: 60px;
                color: #fff;
            }

            .register-main-text h2{
                font-weight: 300;
            }



        </style>
        <title>Register page</title>
    </head>
    <body>
        <?php include 'navigation.php'; ?>

        <div class="sidenav">
            <div class="register-main-text">
                <h2>Yishun Community Hospital <br>Register Page</h2>
                <p>Register from here to log in and access our service.</p>
            </div>
        </div>

        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="register-form">

                    <!--Register Form-->
                    <form id="register-form" method="post" action="doRegister.php">

                        <!--name-->
                        <div class="form-group">
                            <label>Full Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Please enter Your full names.">
                        </div>


                        <!--address-->
                        <div class="form-group">
                            <label>Residential Address </label>  
                            <input name="address" type="text"class="form-control" placeholder="Please enter your residential address.">
                        </div>


                        <!--Contact-->
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input  name="contact" type="number"   class="form-control" placeholder="Please enter your phone number.">
                        </div>

                        <!--Username-->
                        <div class="form-group">
                            <label>Username (email)</label>
                            <input name="username" type="email" class="form-control" placeholder="Please enter your username here (email).">
                        </div>

                        <!--Password-->
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" id="password" type="password" class="form-control" placeholder="Please enter your password here.">
                            <input type="checkbox" onclick="showPassword()">Show Password
                        </div>

                        <!--Password Showing script -->
                        <script>
                            function showPassword() {
                                var ps = document.getElementById("password");
                                if (ps.type === "password") {
                                    ps.type = "text";
                                } else {
                                    ps.type = "password";
                                }
                            }
                        </script>



                        <!-- Register submit btn-->
                        <button type="submit" class="btn btn-primary" value="register" href="register.php">Register</button>

                        <!-- Reset btn-->
                        <button type="reset" class="btn btn-danger">Reset</button><br>
                        <br> <a href="login.php">Already have an account? Login</a>

                    </form>
                    <!--END Register Form-->

                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>

        <script>
            $(document).ready(function () {

//                alert("test");

                //The submit event occurs when
                //a form is submitted. This
                //event can only be used on
                //<form> elements
                // validation of form
                $("form").validate({

                    // Rules for entered data , and the Regular Expression IS NEEEDED
                    rules: {
                        username: {
                            required: true
                        },

                        password: {
                            required: true,
                            pattern: /^[0-9a-zA-Z]{5,8}$/
                        },

                        address: {
                            required: true,

                        },
                        contact: {
                            required: true,
                            pattern: /[6|8|9]\d{7}|\+65[6|8|9]\d{7}|\+65\s[6|8|9]\d{7}/
                        },
                        name: {
                            required: true
                        },

                    },
                    // Error messages - Not meeting the requirements , and failed to meet the pattern
                    messages: {
                        username: {
                            required: "A username (email) is required."
                        },

                        password: {
                            required: "Password is needed.",
                            pattern: "Password must be minimum 5 and maximum 8 letters or digits."
                        },

                        address: {
                            required: "Your address is needed.",
                        },

                        contact: {
                            required: "A phone number is required.",
                            range: "Singapore phone numbers should start with +65, then 6|8|9, for a total of 11 digits, such as +6598798765."

                        },
                        name: {
                            required: "Your name is needed.",
                        },

                    },
                    submitHandler: function () {
                        return true;
                    }
                });

            });
        </script>
        <script src="assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="assets/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </body>
</html>
<!-- LI SHUFANG - 19039480 -->