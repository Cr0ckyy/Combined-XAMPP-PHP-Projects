<!-- LI SHUFANG - 19039480 -->
<!DOCTYPE html>
<?php
// php file that contains the common database connection code
include("dbFunctions.php");

// Start new or resume existing session
session_start();

include 'navigation.php';

$special = $conn->query("SELECT * FROM medical_specialty");
$ms_arr = array();
while ($row = $special->fetch_assoc()) {
    $ms_arr[$row['id']] = $row['name'];
}


$query = "SELECT * FROM doctors_schedule";
$schedules = array();
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $schedules[] = $row;
}

$qry = $conn->query("SELECT * FROM doctors_schedule where doctor_id=" . $_GET['id']);


mysqli_close($link);
?>
<html lang="en">

    <?php include 'head.php'; ?><br><br><br><br><br>

    <br> <!-- ======= main Section ======= -->
    <br><main id="main">
        <section class="page-section" id="doctors" >
            <div class="section-title">
                <h2>Doctor Appointment</h2>
            </div>

            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <?php if (isset($_GET['sid']) && $_GET['sid'] > 0): ?>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <?php
                                        $s = $conn->query("SELECT * FROM medical_specialty WHERE id = " . $_GET['sid'])->fetch_array()['name'];
                                        ?>

                                    </div>
                                </div>
                                <hr class="divider">
                            <?php endif; ?>
                            <?php
                            $where = "";
                            if (isset($_GET['sid']) && $_GET['sid'] > 0) {
                                $where = " WHERE  (REPLACE(REPLACE(REPLACE(specialty_ids,',','\",\"'),'[','[\"'),']','\"]')) LIKE '%\"" . $_GET['sid'] . "\"%' ";
                            }
                            $category = $conn->query("SELECT * FROM doctors_list " . $where . " ORDER BY id ASC");
                            while ($row = $category->fetch_assoc()):
                                ?>
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <img src="assets/img/<?php echo $row['img_path'] ?>" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <p>Name: <b><?php echo "Dr. " . $row['name'] . ', ' . $row['name_pref'] ?></b></p>
                                        <p><small>Email: <b><?php echo $row['email'] ?></b></small></p>
                                        <p><small>Clinic Address: <b><?php echo $row['clinic_address'] ?></b></small></p>
                                        <p><small>Contact Numbers: <b><?php echo $row['contact'] ?></b></small></p>
                                        <p id="schedule"><small><a data-id="<?php echo $row['id'] ?>" data-name="<?php echo "Dr. " . $row['name'] . ', ' . $row['name_pref'] ?>"><i class='fa fa-calendar'></i> Schedule</a></b></small></p>
                                        <p><b>Specialties:</b></p>

                                        <div>
                                            <?php if (!empty($row['specialty_ids'])): ?>
                                                <?php
                                                foreach (explode(",", str_replace(array("[", "]"), "", $row['specialty_ids'])) as $k => $val):
                                                    ?>
                                                    <span class="badge badge-light" style="padding: 10px"><large><b><?php echo $ms_arr[$val] ?></b></large></span>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-center align-self-end-sm">
                                        <button class="btn-outline-primary btn mb-4 set_appointment" type="button"  id="btnAdd" >Set Appointment</button>
                                    </div>
                                </div>
                                <hr class="divider" style="max-width: 60vw">
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SHOW - Bootstrap modal -->
        <div class="modal fade" id="show_modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <?php
                        $category = $conn->query("SELECT * FROM doctors_list " . $where . " ORDER BY id ASC");
                        while ($row = $category->fetch_assoc()):
                            ?>
                            <h3 class="modal-title"><?php echo "Dr. " . $row['name'] . ', ' . $row['name_pref'] . '- Schedule' ?></h3>
                        <?php endwhile; ?>



                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                
                    <div class="modal-body">
                        <div id="addErrorMsg"></div>
                        <form action="#" id="add_form" method="post">
                            <div class="form-body">
                                <div class="form-group">
                                    <label>Student ID</label>
                                    <input name="studentid" class="form-control" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input name="firstname" class="form-control" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input name="lastname" class="form-control" type="text" required>                                       
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="btnSave" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div><!-- /.modal-body -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- ADD - Bootstrap modal -->
        <div class="modal fade" id="add_modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Add Student Details</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div id="addErrorMsg"></div>
                        <form action="#" id="add_form" method="post">
                            <div class="form-body">
                                <div class="form-group">
                                    <label>Student ID</label>
                                    <input name="studentid" class="form-control" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input name="firstname" class="form-control" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input name="lastname" class="form-control" type="text" required>                                       
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="btnSave" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div><!-- /.modal-body -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- End Bootstrap modal -->



        <style>
            #doctors img{
                max-height: 300px;
                max-width: 200px; 
            }
        </style>
        <script>

            $(document).ready(function () {

                reload_table();

                $("#btnAdd").click(function () {
                    $('#show_modal').modal('show'); // show bootstrap modal
                });



                $('#show_modal').on('hidden.bs.modal', function () {
                    $('#add_form')[0].reset();
                    add_validator.destroy();
                });


                function reload_table() {

                    $.ajax({
                        type: "GET",
                        url: "getStudents.php",
                        cache: false,
                        dataType: "JSON",
                        success: function (response) {
                            var message = "";
                            for (i = 0; i < response.length; i++) {
                                message += "<tr>"

                                        + "<td>" + response[i].student_id + "</td>"
                                        + "<td>" + response[i].first_name + "</td>"
                                        + "<td>" + response[i].last_name + "</td>"
                                        + "<td><button class='btnEdit btn btn-primary' value='" + response[i].student_id + "'><i class='fa fa-edit'></i> Edit</button>&nbsp;&nbsp;"
                                        + "<button class='btnDelete btn btn-danger' value='" + response[i].student_id + "'><i class='fa fa-trash'></i> Delete</button></td>"

                                        + "</tr>";
                            }
                            $("#defaultTable tbody").html(message);
                        },
                        error: function (obj, textStatus, errorThrown) {
                            console.log("Error " + textStatus + ": " + errorThrown);
                        }
                    });
                }

            }

        </script>

    </main>
    <!-- End main -->

    <!-- ======= Contact ======= -->
    <?php include 'contact.php'; ?>
    <!-- End Contact -->

    <!-- ======= Footer ======= -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->

