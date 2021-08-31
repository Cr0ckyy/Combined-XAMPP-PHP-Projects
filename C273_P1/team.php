<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <style type="text/css">

            .box-circle-solid{
                background-color:#35CBDF;
                border-radius: 50%;
                color: #fff;
                font-size: 22px;
                height: 55px;
                line-height: 55px;
                text-align: center;
                width: 55px;
            }

            .black {
                border: 1px solid black;
            }

        </style>
    </head>
    <body>
        <div  class="text-center">
            <div class="row">
                <!--Grid System - column size-->
                <div class = "col-3"></div>
                <div class = "col-6"><h2>Meet Our Team</h2></div>
                <div class = "col-3"></div>
            </div>
            <div class="row">
                <!--Grid System - column size-->
                <div class = "col-3"></div>
                <div class = "col-6"><h6>This is information panel</h6></div>
                <div class = "col-3"></div>
            </div>
        </div>
        <!--Spacing Utilities - margin-top @ 5px--> 
        <div class="text-center mt-5">

            <!--Spacing Utilities - Padding @ 5px--> 
            <div class="row p-5">

                <!-- PERSON 1 -->
                <div class="card col-sm-6 col-lg-4 p-3">
                    <img class="card-img-top rounded-circle img-thumbnail" src="images/hanyuu.jpg" width="50" height="130" alt="Hanyuu">
                    <div class="card-body">
                        <h5 class="card-title">Hanyuu</h5>
                        <p class="card-text">Literal God</p>
                    </div>

                    <div class="row">

                        <!--Grid System - column size-->
                        <div class = "col-4"><i class="fa fa-phone box-circle-solid mt-3 mb-3"></i></div>
                        <div class = "col-4"><i class="fa fa-envelope box-circle-solid mt-3 mb-3"></i></div>
                        <div class = "col-4"><i class="fa fa-address-book box-circle-solid mt-3 mb-3"></i></div>

                    </div>
                </div>

                <!-- PERSON 2 -->
                <div class="card col-sm-6 col-lg-4 p-3">
                    <img class="card-img-top rounded-circle img-thumbnail img-fluid" src="images/ooishi.png" alt="Ooishi">
                    <div class="card-body">
                        <h5 class="card-title">"Daddy" Ooishi</h5>
                        <p class="card-text">The One True Daddy</p>
                    </div>

                    <div class="row">
                        <!--Grid System - column size-->
                        <div class = "col-4"><i class="fa fa-phone box-circle-solid mt-3 mb-3"></i></div>
                        <div class = "col-4"><i class="fa fa-envelope box-circle-solid mt-3 mb-3"></i></div>
                        <div class = "col-4"><i class="fa fa-address-book box-circle-solid mt-3 mb-3"></i></div>

                    </div>
                </div>

                <!-- PERSON 3 -->
                <!--Grid System - targeted gadgets column size-->
                <div class="card col-sm-6 col-lg-4 p-3">



                    <!-- Images Style - rounded-circle-->
                    <img class="card-img-top rounded-circle img-thumbnail" src="images/Rika.png" width="50" height="130" alt="Fish">


                    <div class="card-body">
                        <h5 class="card-title">Rika</h5>
                        <p class="card-text">Legal </p>
                    </div>

                    <div class="row">

                        <!--
                        Grid System - normal column size 
                        pacing Utilities - margin-top @ 3px & margin-bottom @ 3px
                        Images Style - box-circle-solid
                        -->

                        <div class = "col-4"><i class="fa fa-phone box-circle-solid mt-3 mb-3"></i></div>
                        <div class = "col-4"><i class="fa fa-envelope box-circle-solid mt-3 mb-3"></i></div>
                        <div class = "col-4"><i class="fa fa-address-book box-circle-solid mt-3 mb-3"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
