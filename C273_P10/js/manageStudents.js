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



    $("#defaultTable").on("click", ".btnEdit", function () {
        var id = $(this).val();
        $.ajax({
            url: "getStudentDetails.php",
            data: "student_id=" + id,
            type: "GET",
            cache: false,
            dataType: "JSON",

            success: function (data) {
                $('#edit_form [name=studentid]').val(data.student_id);
                $('#edit_form [name=firstname]').val(data.first_name);
                $('#edit_form [name=lastname]').val(data.last_name);

                $('#edit_modal').modal('show'); // show bootstrap modal when complete loaded

            },
            error: function (obj, textStatus, errorThrown) {
                console.log("Error " + textStatus + ": " + errorThrown);
            }
        });
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


