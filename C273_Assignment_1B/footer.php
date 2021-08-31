
<style>
    html {
        position: relative;
        min-height: 100%;
    }
    .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        text-align: right; 
        height: 60px;
        background-color: #f5f5f5;
    } 

    .modal-dialog.large {
        width: 80% !important;
        max-width: unset;
    }
    .modal-dialog.mid-large {
        width: 50% !important;
        max-width: unset;
    }
</style>

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span><?php echo $_SESSION['setting_name'] ?></span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://lishufang1121.wixsite.com/blog">LI SHUFANG</a>
        </div>
    </div>
</footer>
<!-- End Footer -->


<script>
    $('.datepicker').datepicker({
        format: "yyyy-mm-dd"
    });
    window.start_load = function () {
        $('body').prepend('<di id="preloader2"></di>');
    };
    window.end_load = function () {
        $('#preloader2').fadeOut('fast', function () {
            $(this).remove();
        });
    };

    window.uni_modal = function ($title = '', $url = '', $size = '') {
        start_load();
        $.ajax({
            url: $url,
            error: err => {
                console.log();
                alert("An error occured");
            },
            success: function (resp) {
                if (resp) {
                    $('#uni_modal .modal-title').html($title);
                    $('#uni_modal .modal-body').html(resp);
                    if ($size !== '') {
                        $('#uni_modal .modal-dialog').addClass($size);
                    } else {
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md");
                    }
                    $('#uni_modal').modal('show');
                    end_load();
                }
            }
        });
    };
    window.uni_modal_right = function ($title = '', $url = '') {
        start_load();
        $.ajax({
            url: $url,
            error: err => {
                console.log();
                alert("An error occured");
            },
            success: function (resp) {
                if (resp) {
                    $('#uni_modal_right .modal-title').html($title);
                    $('#uni_modal_right .modal-body').html(resp);

                    $('#uni_modal_right').modal('show');
                    end_load();
                }
            }
        });
    };
    window.alert_toast = function ($msg = 'TEST', $bg = 'success') {
        $('#alert_toast').removeClass('bg-success');
        $('#alert_toast').removeClass('bg-danger');
        $('#alert_toast').removeClass('bg-info');
        $('#alert_toast').removeClass('bg-warning');

        if ($bg == 'success') {
            $('#alert_toast').addClass('bg-success');
        }

        if ($bg == 'danger') {
            $('#alert_toast').addClass('bg-danger');
        }

        if ($bg == 'info') {
            $('#alert_toast').addClass('bg-info');
        }

        if ($bg == 'warning') {
            $('#alert_toast').addClass('bg-warning');
        }




        $('#alert_toast .toast-body').html($msg)
        $('#alert_toast').toast({delay: 3000}).toast('show');
    };
    window.load_cart = function () {
        $.ajax({
            url: 'admin/ajax.php?action=get_cart_count',
            success: function (resp) {
                if (resp > -1) {
                    resp = resp > 0 ? resp : 0;
                    $('.item_count').html(resp);
                }
            }
        });
    };
    $('#login_now').click(function () {
        uni_modal("LOGIN", 'login.php');
    });
    $(document).ready(function () {
        load_cart();
    });
</script>


<!-- Template Main JS File -->
<script src="assets/js/scripts.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/additional-methods.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<!-- Vendor JS Files -->
<script src="admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>


<?php $conn->close() ?>
</html>