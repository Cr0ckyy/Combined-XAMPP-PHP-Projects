$(document).ready(function () {


    $("#selModule").change(function () {
        reload_table();
    })

    $("#add_form").validate({
        rules: {
            studentid: {
                required: true
            },
            modulecode: {
                required: true
            },
            class: {
                required: true
            }
        },
        messages: {
            studentid: {
                required: "Please enter your student ID"
            },
            modulecode: {
                required: "Please enter your module code."
            },
            class: {
                required: "Please enter your class."
            }
        },
        submitHandler: function (form) {
            var studentid = $("#add_form [name=studentid]").val();
            var modulecode = $("#add_form [name=modulecode]").val();
            var myclass = $("#add_form [name=class]").val();

            $.ajax({
                url: "addAllocation.php",
                type: "POST",
                data: "studentid=" + studentid + "&modulecode=" + modulecode + "&class=" + myclass,
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


    $("#edit_form").validate({
        rules: {
            class: {
                required: true
            }
        },
        messages: {
            class: {
                required: "Please enter your class."
            }
        },
        submitHandler: function () {
            var studentid = $("#edit_form [name=studentid]").val();
            var modulecode = $("#edit_form [name=modulecode]").val();
            var myclass = $("#edit_form [name=class]").val();

            $.ajax({
                url: "editAllocation.php",
                type: "POST",
                data: "studentid=" + studentid + "&modulecode=" + modulecode + "&class=" + myclass,
                dataType: "JSON",

                success: function (data) {
                    $('#edit_modal').modal('hide');
                    reload_table();
                },
                error: function (obj, textStatus, errorThrown) {
                    $("#editErrorMsg").html("Unable to edit record");
                    console.log("Error " + textStatus + ": " + errorThrown);
                    return false;
                }
            });

        }
    });


    $('#add_modal').on('hidden.bs.modal', function () {
        $('#add_form')[0].reset();
    });

    $('#edit_modal').on('hidden.bs.modal', function () {
        $('#edit_form')[0].reset();
    });


    $("#btnAdd").click(function () {
        $.ajax({
            type: "GET",
            url: "getStudents.php",
            cache: false,
            dataType: "JSON",
            success: function (response) {
                var message = "<option value=''>Select Student</option>";
                for (i = 0; i < response.length; i++) {
                    var display = response[i].student_id + " " + response[i].first_name + " " + response[i].last_name;
                    message += "<option value='" + response[i].student_id + "'>" + display + "</option>";
                }
                $("#add_form [name=studentid]").html(message);
            },
            error: function (obj, textStatus, errorThrown) {
                console.log("Error " + textStatus + ": " + errorThrown);
            }
        });

        $.ajax({
            type: "GET",
            url: "getModules.php",
            cache: false,
            dataType: "JSON",
            success: function (response) {
                var message = "<option value=''>Select Module</option>";
                for (i = 0; i < response.length; i++) {
                    var display = response[i].module_code + " " + response[i].module_name;
                    message += "<option value='" + response[i].module_code + "'>" + display + "</option>";
                }
                $("#add_form [name=modulecode]").html(message);
            },
            error: function (obj, textStatus, errorThrown) {
                console.log("Error " + textStatus + ": " + errorThrown);
            }
        });

        $('#add_modal').modal('show'); // show bootstrap modal
    });

    $("#defaultTable").on("click", ".btnEdit", function () {
        var id = $(this).val();
        var code = $("#selModule").val();
        $.ajax({
            url: "getAllocationDetails.php",
            data: "student_id=" + id + "&module_code=" + code,
            type: "GET",
            cache: false,
            dataType: "JSON",
            success: function (data) {
                $('#edit_form [name=studentid]').val(data.student_id);
                $('#edit_form [name=modulecode]').val(data.module_code);
                $('#edit_form [name=class]').val(data.class);

                $('#edit_modal').modal('show'); // show bootstrap modal when complete loaded

            },
            error: function (obj, textStatus, errorThrown) {
                console.log("Error " + textStatus + ": " + errorThrown);
            }
        });
    });


    $("#defaultTable").on("click", ".btnDelete", function () {
        var id = $(this).val();
        var code = $("#selModule").val();
        if (confirm('Are you sure you want to delete this student?')) {
            // ajax delete data to database
            $.ajax({
                url: "deleteAllocation.php",
                data: "studentid=" + id + "&modulecode=" + code,
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
    }
    );
});

function reload_table() {
    $("#defaultTable tbody").html("");
    var modulecode = $("#selModule").val();
    $.ajax({
        type: "GET",
        url: "getStudentsByModule.php",
        data: "module_code=" + modulecode,
        cache: false,
        dataType: "JSON",
        success: function (response) {
            var message = "";
            for (i = 0; i < response.length; i++) {
                message += "<tr>"
                
                message += "<td>" + response[i].student_id + "</td>"
                message += "<td>" + response[i].first_name + "</td>"
                message += "<td>" + response[i].last_name + "</td>"
                message += "<td>" + response[i].class + "</td>"
                message += "<td><button class='btnEdit btn btn-primary' value='" + response[i].student_id + "'><i class='fa fa-edit'></i> Edit</button>&nbsp;&nbsp;"
                message += "<button class='btnDelete btn btn-danger' value='" + response[i].student_id + "'><i class='fa fa-trash'></i> Delete</button></td>"

                message += "</tr>";
            }
            $("#defaultTable tbody").html(message);
        },
        error: function (obj, textStatus, errorThrown) {
            console.log("Error " + textStatus + ": " + errorThrown);
        }
    });
}


