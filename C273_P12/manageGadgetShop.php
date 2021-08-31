<?php
include("dbFunctions.php");

$items = array();
$query = "SELECT * FROM items order by item_id";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $items[] = $row;
}
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>C273_P12 Gadget Shop</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script
            src="https://www.paypal.com/sdk/js?client-id=AaBDSAOnBi3ecMdCibn35DS41HpjBhjmCu2Gxpuue4gHkAWc0t-qT8qoDoQIDSUJ8WfnhY3nvu258WZ8"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
        </script>
        <script src="js/manageGadgetShop.js"></script>

        <style>
            form .error {
                color: #ff0000;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h3>Gadget Shop</h3>

            <div id="msg"></div>
            <div id="products" class="row">
                <?php
                for ($i = 0; $i < count($items); $i++) {
                    ?>
                    <div class="col-3 mb-5">
                        <div class="card"><div class="card-body">
                                <div class="text-center">
                                    <img src="images/<?php echo $items[$i]["image"] ?>"/>
                                    <h4><?php echo $items[$i]["name"] ?></h4>
                                    <p class="text-primary">$<?php echo $items[$i]["price"] ?></p>
                                    <button class="btn btn-success" value="<?php echo $items[$i]["item_id"] ?>">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?> 
            </div> 
        </div>

        <!-- Bootstrap modal -->
        <div class="modal fade" id="item_modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Item Details</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="form-group">
                                <label>Item Name</label>
                                <input name="itemname" class="form-control" type="text" readonly>                                   
                            </div>
                            <div class="form-group">
                                <label>Item Price</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">SGD</span>
                                    </div>
                                    <input name="itemprice" class="form-control" type="text" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Item Quantity</label>
                                <input name="itemqty" class="form-control" type="number" value="1" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div id="paypal-button"></div>
                        </div>
                    </div><!-- /.modal-body -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- End Bootstrap modal -->

    </body>
</html>
