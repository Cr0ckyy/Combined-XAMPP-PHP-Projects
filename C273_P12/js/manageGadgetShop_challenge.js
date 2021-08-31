var currency = 'USD';

$(document).ready(function () {

    reload_badge();

//challenge: add item to shopping cart
    $("#btnAdd").click(function () {
        var itemList = [];
        var itemListjson = localStorage.getItem("itemList");
        if (itemListjson != null) {
            itemList = JSON.parse(itemListjson);
        }

        var itemName = $("[name=itemname]").val();
        var itemPrice = $("[name=itemprice]").val();
        var itemQty = $("[name=itemqty]").val();

        var item = {name: itemName, quantity: itemQty, price: itemPrice};
        itemList[itemList.length] = item;
        localStorage.setItem("itemList", JSON.stringify(itemList));
        $("#item_modal").modal("hide");
        reload_badge();
    })

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
            var payment = setupPayment();
            alert(JSON.stringify(payment));
            return actions.order.create(payment);
        },
        onApprove: function (data, actions) {
            return actions.order.capture().then(function (details) {
                // This function is called when the transaction 
                //  is successful. We get the payer name and   
                //  total and display in <div>

                var msg = 'Transaction completed by ' +
                        details.payer.name.given_name + '<br />';
                msg += 'Total: ' + details.purchase_units[0].amount.value;
                //msg += JSON.stringify(details);
                $('#msg').html(msg);
                $("#item_modal").modal("hide");
            });
        }

    }).render('#paypal-button');

});

/*
 * This function is to process the form inputs 
 * and return the payment object required by PayPal
 */
function setupPayment() {
    var total = 0;
    var itemList = [];

    var itemName = $("[name=itemname]").val();
    var itemPrice = $("[name=itemprice]").val();
    var itemQty = $("[name=itemqty]").val();

    var item = {name: itemName, quantity: itemQty,
        price: itemPrice};
    itemList[itemList.length] = item;
    total = parseFloat(itemPrice) * parseInt(itemQty);
    var payment = {
        //payment: {
            //description: itemName,
            purchase_units: [
                {
                    amount: {value: total},
                    item_list: {items: itemList}
                }
            ]
        //}
    }
    return payment;
}//end setUpPayment

//challenge: display number of items in badge
function reload_badge() {
    var itemList = [];
    var itemListjson = localStorage.getItem("itemList");
    if (itemListjson != null) {
        itemList = JSON.parse(itemListjson);
    }
    $(".badge").html(itemList.length);
}
