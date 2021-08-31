$(document).ready(function () {

    reload_table();

    $("#btnAdd").click(function () {
        $('#add_modal').modal('show'); // show bootstrap modal
    });

    var add_validator = $("#add_form").validate({
        rules: {
            modulecode: {
                required: true,
                pattern: /^\w+$/
            },
            modulename: {
                required: true,
                pattern: /^\w+$/
            }
        },
        messages: {
            modulecode: {
                required: "This field is required",
                pattern: "Only letters, numbers or underscores are allowed"
            },
            modulename: {
                required: "This field is required",
                pattern: "Only letters, numbers or underscores are allowed"
            }
        },
        submitHandler: function (form) {
            var modulecode = $("#add_form [name=modulecode]").val();
            var modulename = $("#add_form [name=modulename]").val();

            $.ajax({
                url: "addModule.php",
                type: "POST",
                data: "modulecode=" + modulecode + "&modulename=" + modulename,
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
            modulename: {
                required: true,
                pattern: /^\w+$/
            }
        },
        messages: {
            modulename: {
                required: "This field is required",
                pattern: "Only letters, numbers or underscores are allowed"
            }
        },
        submitHandler: function (form) {
            var modulecode = $("#edit_form [name=modulecode]").val();
            var modulename = $("#edit_form [name=modulename]").val();

            $.ajax({
                url: "editModule.php",
                type: "POST",
                data: "modulecode=" + modulecode + "&modulename=" + modulename,
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
        var code = $(this).val();
        $.ajax({
            url: "getModuleDetails.php",
            data: "modulecode=" + code,
            type: "GET",
            cache: false,
            dataType: "JSON",
            success: function (data) {
                $('#edit_form [name=modulecode]').val(data.module_code);
                $('#edit_form [name=modulename]').val(data.module_name);

                $('#edit_modal').modal('show'); // show bootstrap modal when complete loaded

            },
            error: function (obj, textStatus, errorThrown) {
                console.log("Error " + textStatus + ": " + errorThrown);
            }
        });
    });


    $("#defaultTable").on("click", ".btnDelete", function () {
        var id = $(this).val();
        if (confirm('Are you sure you want to delete this module?')) {
            // ajax delete data to database
            $.ajax({
                url: "deleteModule.php",
                data: "modulecode=" + id,
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
        url: "getModules.php",
        cache: false,
        dataType: "JSON",
        success: function (response) {
            var message = "";
            for (i = 0; i < response.length; i++) {
                message += "<tr>"

                message += "<td>" + response[i].module_code + "</td>"
                message += "<td>" + response[i].module_name + "</td>"
                message += "<td><button class='btnEdit btn btn-primary' value='" + response[i].module_code + "'><i class='fa fa-edit'></i> Edit</button>&nbsp;&nbsp;"
                message += "<button class='btnDelete btn btn-danger' value='" + response[i].module_code + "'><i class='fa fa-trash'></i> Delete</button></td>"

                message += "</tr>";
            }
            $("#defaultTable tbody").html(message);
        },
        error: function (obj, textStatus, errorThrown) {
            console.log("Error " + textStatus + ": " + errorThrown);
        }
    });
}


