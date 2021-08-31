<?php
include("dbFunctions.php");

$modules = array();
$query = "SELECT * FROM modules order by module_name";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $modules[] = $row;
}
mysqli_close($link);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manage Category</title>
                <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/manageAllocation.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>

        <style>
            form .error {
                color: #ff0000;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h3>Manage Allocation</h3>
            <br/>
            <button class="btn btn-success" id="btnAdd"><i class="fa fa-plus"></i> Allocate Class</button>
            <br/>
            <br/>
            <div class="float-right">
                <select id="selModule" class="form-control-sm">
                        <option value="">Please select</option>
                        <?php
                        for ($i = 0; $i < count($modules); $i++) {
                            ?>
                            <option value="<?php echo $modules[$i]['module_code']; ?>"><?php echo $modules[$i]['module_name']; ?></option>                 
                        <?php } ?>        
                    </select>
            </div>
            <br/>
            <br/>
            <table id="defaultTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr><th>Student ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Class</th>
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
                        <h3 class="modal-title">Add Allocation</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div id="addErrorMsg"></div>
                        <form action="#" id="add_form" method="post">
                            <div class="form-body">
                                <div class="form-group">
                                    <label>Student ID</label>
                                    <select name="studentid" class="form-control" required></select>
                                </div>
                                <div class="form-group">
                                    <label>Module Name</label>
                                    <select name="modulecode" class="form-control" required></select>
                                </div>
                                <div class="form-group">
                                    <label>Class</label>
                                    <input name="class" class="form-control" type="text" required>
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
                        <h3 class="modal-title">Edit Allocation</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div id="editErrorMsg"></div>
                        <form action="#" id="edit_form" method="post">
                            <div class="form-body">
                                <div class="form-group">
                                    <label>Student ID</label>
                                    <input name="studentid" value="" class="form-control" type="text" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Module Code</label>
                                    <input name="modulecode" value="" class="form-control" type="text" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Class</label>
                                    <input name="class" class="form-control" type="text" required>
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
