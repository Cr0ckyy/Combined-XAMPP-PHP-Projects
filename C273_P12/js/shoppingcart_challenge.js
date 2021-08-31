$(document).ready(function () {
    reload_table();
    paypal.Buttons({
        createOrder: function (data, actions) {
            var payment = setupPayment();
            return actions.order.create(payment);
        },
        onApprove: function (data, actions) {
            return actions.order.capture().then(function (details) {

                // This function is called when the transaction 
                //  is successful. We get the payer name and number of 
                //  purchase_unit and display in <div>

                var msg = 'Transaction completed by ' +
                        details.payer.name.given_name + '<br />';
                msg += 'Total: ' + details.purchase_units[0].amount.value;
                $('#msg').html(msg);
                reload_table();
                localStorage.removeItem("itemList");

            });
        }
    }).render('#paypal-button');
})

function setupPayment() {
    var total = 0;
    var itemList = [];
    var itemListjson = localStorage.getItem("itemList");
    if (itemListjson != null) {
        itemList = JSON.parse(itemListjson);
    }

    for (var i = 0; i < itemList.length; i++) {
        total += parseFloat(itemList[i].price) * parseInt(itemList[i].quantity);
    }
    var payment = {
        purchase_units: [
            {
                amount: {value: total},
                item_list: {items: itemList}
            }
        ]
    }
    return payment;
}//end setUpPayment

function reload_table() {
    var itemList = [];
    var itemListjson = localStorage.getItem("itemList");
    if (itemListjson != null) {
        itemList = JSON.parse(itemListjson);
    }

    var message = "";
    for (var i = 0; i < itemList.length; i++) {
        message += "<tr><td>" + itemList[i].name + "</td><td>" + itemList[i].price + "</td><td>" + itemList[i].quantity + "</td></tr>";
    }
    $("#defaultTable tbody").html(message);
}