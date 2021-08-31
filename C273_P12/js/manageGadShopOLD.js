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

    paypal.Button.render({
        env: 'sandbox',
        client: {
            sandbox: 'ATcuv3et55TJ2qi-GkuuXjuscENgtOafprscTiKn2k-0gAAPbcAx7gTxpIcAOkO5x68b6Xt3_Jl0NLTY'
        },
        commit: true,
        payment: function (data, actions) {
            var payment = setupPayment();
            return actions.payment.create(payment);
        },
        onAuthorize: function (data, actions) {
            return actions.payment.execute().then(function (response) {
                var shipping = response.payer.payer_info.shipping_address;
                var item = response.transactions[0].item_list.items[0];

                var message = "Your item <b>" + item.name + "</b> will be shipped to:<br/>"
                        + shipping.recipient_name + "<br/>"
                        + shipping.line1 + "<br/>"
                        + shipping.postal_code + " "
                        + shipping.country_code + "<br/><br/>";


                $("#msg").html(message);
                $("#item_modal").modal("hide");
            });
        }
    }, '#paypal-button');

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

    var item = {name: itemName, description: '', quantity: itemQty,
        price: itemPrice, currency: currency};
    itemList[itemList.length] = item;
    total = parseFloat(itemPrice) * parseInt(itemQty);
    var payment = {
        payment: {
            transactions: [
                {
                    amount: {total: total, currency: currency},
                    item_list: {items: itemList}
                }
            ]
        }
    }
    return payment;
}//end setUpPayment


