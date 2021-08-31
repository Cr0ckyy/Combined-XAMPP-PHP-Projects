var currency = 'USD';
$(document).ready(function () {

    $("#products").on("click", ".btn", function () {
        var id = $(this).val();
        $.ajax({
            url: "getItemDetails.php",
            data: "id=" + id,
            type: "GET",
            cache: false,
            dataType: "JSON",
            success: function (data) {
                $('[name=itemname]').val(data.name);
                $('[name=itemprice]').val(data.price);
                $('#item_modal').modal('show');
            },
            error: function (obj, textStatus, errorThrown) {
                console.log("Error " + textStatus + ": " + errorThrown);
            }
        });
    });
    paypal.Buttons({
        createOrder: function (data, actions) {
            var itemName = $("[name=itemname]").val();
            var itemPrice = $("[name=itemprice]").val();
            var itemQty = $("[name=itemqty]").val();
            alert(itemName + ":" + itemPrice + ":" + itemQty)
            return actions.order.create({
                purchase_units: [{
                        description: itemName,
                        amount: {
                            value: itemPrice * itemQty
                        },
                        item_list: {
                            items: [{
                                    name: itemName, price: itemPrice, quantity: itemQty}]
                        }
                    }]
            });
        },
        onApprove: function (data, actions) {
            return actions.order.capture().then(function (details) {
                // This function is called when the transaction 
                //  is successful. We get the payer name and  
                //  total and display in <div>
                var msg = 'Transaction completed by ' +
                        details.payer.name.given_name + '<br />';
                msg += 'Total: ' + details.purchase_units[0].amount.value;

                $('#msg').html(msg);
                $("#item_modal").modal("hide");
            });
        }
    }).render('#paypal-button');
});