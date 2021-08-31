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
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <script src="assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="assets/js/additional-methods.min.js" type="text/javascript"></script>

        <script>

            $(document).ready(function () {
                alert("test");

                reload_table();







                $("#defaultTable").on("click", ".btnDelete", function () {

                    var id = $(this).val();

                    if (confirm('Are you sure you want to delete this student?')) {
                        // ajax delete data to database
                        $.ajax({
                            url: "deleteMessage.php",
                            data: "visitor_id=" + id,
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
                                    + "<td>" + "<button class='btnDelete btn btn-danger' value='" + response[i].vistor_id + "'><i class='fa fa-trash'></i> Delete</button></td>"

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
            <h3>Manage visitor Messages</h3><br>
            <table id="defaultTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr><th>visitor ID</th>
                        <th>visitor Name</th>
                        <th>visitor Email</th>
                        <th>visitor Subject</th>
                        <th>visitor Message</th>
                        <th>Time Sent</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table> 
        </div>






    </body>
</html>
