<!-- LI SHUFANG - 19039480 -->

<!DOCTYPE html>
<?php
// php file that contains the common database connection code
include("dbFunctions.php");

// Start new or resume existing session
session_start();

// Turn on output buffering
ob_start();

include 'navigation.php';
?>
<html lang="en">

    <?php include 'head.php'; ?>

    <body>

        <!-- ======= Hero Section ======= -->
        <?php include 'hero.php'; ?>
        <!-- End Hero -->


        <main id="main">

            <!-- uni_modal -->
            <div class="modal fade" id="uni_modal" role='dialog'>
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"></h5>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id='submit' onclick="$('#myModal form').submit()">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div><!-- /.modal-body -->
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- End Bootstrap modal -->


            <!-- uni_modal_right -->
            <div class="modal fade" id="uni_modal_right" role='dialog'>
                <div class="modal-dialog modal-full-height  modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="fa fa-arrow-right"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                        </div><!-- /.modal-body -->
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- End Bootstrap modal -->




            <?php include 'contact.php'; ?>
        </main>
        <!-- End #main -->




        <!-- ======= Footer ======= -->
            <?php include 'footer.php'; ?>
        <!-- End Footer -->
