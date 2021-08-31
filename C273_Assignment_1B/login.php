<!-- LI SHUFANG - 19039480 -->
<!-- 
Login information:
    Username: Messi
    Password: Messi10
-->
<!DOCTYPE html>
<?php
session_start();
include("dbFunctions.php");
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <title>Login page</title>
        <style>
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
                .login-form{
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

                .login-form{
                    margin-top: 50%;
                }

            }

            .login-main-text{
                margin-top: 20%;
                padding: 60px;
                color: #fff;
            }

            .login-main-text h2{
                font-weight: 300;
            }
            form .error {
                color: #ff0000;
            }

        </style>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'navigation.php'; ?>

        <div class="sidenav">
            <div class="login-main-text">
                <h2>Yishun Community Hospital <br> Login Page</h2><br>
                <p>Login from here to access our service.</p>
            </div>
        </div>

        <div class="main">
            <div class="col-md-6 col-sm-12">

                <div class="login-form">

                    <!--Login form-->
                    <form action="doLogin.php" method="POST">

                        <!--Username-->
                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" type="email" class="form-control" placeholder="Username">
                        </div>

                        <!--Password-->
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" id="password" type="password" class="form-control" placeholder="Password">
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


                        <!-- submit btn-->
                        <button type="submit" name="submit" class="btn btn-success">Login</button><br>


                        <br><a href="register.php">Don't have an account?</a>
                    </form>
                    <!--END Login form-->

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
                    
                        }
                    },
                    // Error messages - Not meeting the requirements , and failed to meet the pattern
                    messages: {
                        username: {
                            required: "Username is needed."
                        },

                        password: {
                            required: "Password is needed.",
                         
                        }
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
