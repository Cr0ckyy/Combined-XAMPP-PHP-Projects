<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manage Visitor Messages</title>
        <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="admin/assets/css/fontawesome-all.min.css" rel="stylesheet" type="text/css"/>
        <script src="admin/assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="admin/assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="admin/assets/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="admin/assets/js/additional-methods.min.js" type="text/javascript"></script>

        <script>

            $(document).ready(function () {

                reload_table();

                $("#btnAdd").click(function () {
                    $('#add_modal').modal('show'); // show bootstrap modal
                });

                var add_validator = $("#add_form").validate({
                    rules: {
                        studentid: {
                            required: true,
                            pattern: /^[0-9]+$/
                        },
                        firstname: {
                            required: true
                        },
                        lastname: {
                            required: true
                        }
                    },
                    messages: {
                        studentid: {
                            required: "Please enter your student ID",
                            pattern: "Please enter only numbers"
                        },
                        firstname: {
                            required: "Please enter your first name."
                        },
                        lastname: {
                            required: "Please enter your last name."
                        }
                    },

                    submitHandler: function (form) {

                        var studentid = $("#add_form [name=studentid]").val();
                        var firstname = $("#add_form [name=firstname]").val();
                        var lastname = $("#add_form [name=lastname]").val();

                        $.ajax({
                            url: "addStudent.php",
                            type: "POST",
                            data: "studentid=" + studentid + "&firstname=" + firstname + "&lastname=" + lastname,
                            dataType: "JSON",
                            success: function (data) {
                                $('#add_modal').modal('hide');
                                reload_table();
                            },
                            error: function (obj, textStatus, errorThrown) {
                                $("#addErrorMsg").html("Unable to add record");
                                console.log("Error " + textStatus + ": " + errorThrown);
                                return false;
                            }
                        });

                    }



                });


                var edit_validator = $("#edit_form").validate({
                    rules: {
                        firstname: {
                            required: true
                        },
                        lastname: {
                            required: true
                        }
                    },
                    messages: {
                        firstname: {
                            required: "Please enter your first name."
                        },
                        lastname: {
                            required: "Please enter your last name."
                        }
                    },

                    submitHandler: function (form) {
                        var studentid = $("#edit_form [name=studentid]").val();
                        var firstname = $("#edit_form [name=firstname]").val();
                        var lastname = $("#edit_form [name=lastname]").val();

                        $.ajax({
                            url: "editStudent.php",
                            type: "POST",
                            data: "studentid=" + studentid + "&firstname=" + firstname + "&lastname=" + lastname,
                            dataType: "JSON",

                            success: function (data) {
                                $('#edit_modal').modal('hide');
                                reload_table();
                            },

                            error: function (obj, textStatus, errorThrown) {
                                $("#editErrorMsg").html("Unable to add record");
                                console.log("Error " + textStatus + ": " + errorThrown);
                                return false;
                            }
                        });

                    }

                });


                $('#add_modal').on('hidden.bs.modal', function () {
                    $('#add_form')[0].reset();
                    add_validator.destroy();
                });

                $('#edit_modal').on('hidden.bs.modal', function () {
                    $('#edit_form')[0].reset();
                    edit_validator.destroy();
                });





                $("#defaultTable").on("click", ".btnDelete", function () {
                    var id = $(this).val();
                    if (confirm('Are you sure you want to delete this student?')) {
                        // ajax delete data to database
                        $.ajax({
                            url: "deleteStudent.php",
                            data: "studentid=" + id,
                            type: "GET",
                            dataType: "JSON",
                            success: function (data) {
                                reload_table();
                            },
                            error: function (obj, textStatus, errorThrown) {
                                console.log("Error " + textStatus + ": " + errorThrown);
                            }
                        });
                    }
                });
            });

            function reload_table() {

                $.ajax({
                    type: "GET",
                    url: "getMessages.php",
                    cache: false,
                    dataType: "JSON",
                    success: function (response) {
                        var message = "";
                        for (i = 0; i < response.length; i++) {
                            
                            message += "<tr>"

                                    + "<td>" + response[i].visitor_id + "</td>"
                                    + "<td>" + response[i].visitor_name + "</td>"
                                    + "<td>" + response[i].visitor_email + "</td>"
                                    + "<td>" + response[i].visitor_subject + "</td>"
                                    + "<td>" + response[i].visitor_message + "</td>"
                                    + "<td>" + response[i].date_created + "</td>"
                                    + "<button class='btnDelete btn btn-danger' value='" + response[i].vistor_id + "'><i class='fa fa-trash'></i> Delete</button></td>"

                                    + "</tr>";
                        }
                        $("#defaultTable tbody").html(message);
                    },
                    error: function (obj, textStatus, errorThrown) {
                        Alert("Error " + textStatus + ": " + errorThrown);
                    }
                });
            }



        </script>
        <style>
            form .error {
                color: #ff0000;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h3>Manage visitor Messages</h3>
            <br/>
            <button class="btn btn-success" id="btnAdd"><i class="fa fa-plus"></i> Add</button>
            <br/>
            <br/>
            <table id="defaultTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr><th>visitor ID</th>
                        <th>visitor Name</th>
                        <th>visitor Email</th>
                        <th>visitor Subject</th>
                        <th>visitor Message</th>
                        <th>Time Sent</th>
                        <th>visitor Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table> 
        </div>

        <!-- Bootstrap modal -->
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
                                    <label>visitor ID</label>
                                    <input name="visitorid" class="form-control" type="text" required>
                                </div>

                                <div class="form-group">
                                    <label>visitor Name</label>
                                    <input name="visitorname" class="form-control" type="text" required>
                                </div>

                                <div class="form-group">
                                    <label>visitor Email</label>
                                    <input name="visitoremail" class="form-control" type="text" required>                                       
                                </div>


                                <div class="form-group">
                                    <label>visitor Subject</label>
                                    <input name="visitorsubject" class="form-control" type="text" required>                                       
                                </div>

                                <div class="form-group">
                                    <label>visitor Message</label>
                                    <input name="visitorsubject" class="form-control" type="text" required>                                       
                                </div>

                                <div class="form-group">
                                    <label>Time sent</label>
                                    <input name="timesent" class="form-control" type="text" required>                                       
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



        <!-- Bootstrap modal -->
        <div class="modal fade" id="edit_modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Edit Student Details</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div id="editErrorMsg"></div>
                        <form action="#" id="edit_form" method="post">
                            <div class="form-body">
                                <div class="form-group">
                                    <label>Student ID</label>
                                    <input name="studentid" class="form-control" type="text" readonly>                                   
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

    </body>
</html>
