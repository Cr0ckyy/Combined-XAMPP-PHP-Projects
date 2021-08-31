<!-- LI SHUFANG - 19039480 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
        <title>Navigation Bar</title>

        <style>
            #username{
                font-weight: bold;
                color:red;
            }
        </style>
    </head>

    <body>

        <!-- ======= Top Bar ======= -->
        <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <i class="icofont-clock-time"></i> We provide 24/7 service
                </div>
                <div class="d-flex align-items-center">
                    <i class="icofont-phone"></i> Call us now +65 6294 2350
                </div>
            </div>
        </div>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

                <!--Home -->
                <a href="index.php" class="logo mr-auto"><img src="assets/img/saca.png" alt="YCH_LOGO"></a>

                <nav class="nav-menu d-none d-lg-block"  id="navigation_contents">
                    <ul>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=doctors"></span>Doctors</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=about">About</a></li>
                        <?php if (isset($_SESSION['login_id'])): ?>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="admin/ajax.php?action=logout2"><?php echo "Welcome " . $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a></li>
                        <?php else: ?>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="javascript:void(0)" id="login_now">Login</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <!-- .nav-menu -->
            </div>
        </header>
        <!-- End Header -->



        <!-- pre-loader -->
        <div id="preloader"></div>
        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/vendor/counterup/counterup.min.js"></script>
        <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/vendor/venobox/venobox.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

    </body>

</html>
<!-- LI SHUFANG - 19039480 -->