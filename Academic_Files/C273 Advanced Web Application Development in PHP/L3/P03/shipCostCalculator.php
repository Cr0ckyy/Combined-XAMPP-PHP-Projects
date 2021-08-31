<!DOCTYPE html>
<html>
    <head>
        <title>Shipping Cost Calculator</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function () {
                
                $("#bg").attr("src", "images/nice_boat.png");
                $("#bg").css({"object-fit": "scale-down", "width": "50%", "height": "50%"});

                $("img").css('display', 'inline-block');
                var chika = new Image();var chika1 = new Image();var chika2 = new Image();
                chika.src = 'images/chika.gif';chika1.src = 'images/chika.gif';chika2.src = 'images/chika.gif';
                document.body.appendChild(chika);document.body.appendChild(chika1);document.body.appendChild(chika2);

                $("form").submit(function () {

                    var bWeight = $("[id=id_bWeight").val();
                    var bNum = $("[id=id_bNum]").val();
                    var shippingTime = $(":radio:checked").val();
                    var shippingMethod = $("select").val();

                    var extra = [];
                    $("[type=checkbox]:checked").each(function () {
                        extra.push($(this).val());
                    })

                    var message = "";

                    message += "Book Weight (kg): " + bWeight + "\n";
                    message += "Number of books: " + bNum + "\n";
                    message += "Method: " + shippingMethod + "\n\n";

                    message += "Shopping options (days): " + shippingTime + "\n";

                    if (extra.length === 3) {
                        message += "Extra additions: " + extra.join(" ") + "\n(You have selected all extra services)" + "\n\n";

                    } else {
                        message += "Extra additions: " + extra.join(" ") + "\n\n";

                    }

                    var total = (bWeight * bNum) * 0.5;
                    for (i = 0; i < extra.length; i++) {
                        if (extra[i] === "better box") {
                            total += 10;
                        } else if (extra[i] === "weekend delivery") {
                            total += 15;
                        } else if (extra[i] === "gift wrap") {
                            total += 15;
                        }
                    }

                    if (shippingMethod === "sea") {
                        total += 40;
                    } else if (shippingMethod === "air") {
                        total += 30;
                    }

                    if (shippingTime === "1-2") {
                        total += 40;
                    } else if (shippingTime === "3-5") {
                        total += 25;
                    } else if (shippingTime === "6-9") {
                        total += 10;
                    }

                    if (bNum > 3 && extra.length >= 1) {
                        total *= 0.85;
                    } else if (bNum > 3) {
                        total *= 0.9;
                    }

                    message += " The shipping total cost is $" + total;
                    


                    if (!confirm(message)) {
                       
                        return false;
                    }


                    //return false;
                })

            })
            
        </script>


    </head>
    <body>
        <div class="container">
            <h1>Shipping Cost Calculator</h1>
            <img id="bg"/><br>
            
            <!-- Audio not working on chrome. Please use a browser such as IE for optimal experience -->
            <audio autoplay="autoplay" loop>
                <source src="audio/cir.mp3" />     
            </audio>

            <hr>

            <form method="post" action="doShipCostCalculator.php">
                <div class="form-group">
                    <label for="id_bWeight">Books weight (in kg): </label>
                    <input type="text" name="books_weight" id="id_bWeight" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="id_bNum">Number of books to buy: </label>
                    <input type="text" name="books_num" id="id_bNum" class="form-control"/>
                </div>

                <div class="form-group">
                    <label>Shipping time: </label>
                    <input class="form-check-inline" type="radio" name="shipping" id="idOneToTwo" value="1-2" checked><label for="idVisa">1 - 2 days</label>
                    <input class="form-check-inline" type="radio" name="shipping" id="idThreeToFive" value="3-5"><label for="idMaster">3 - 5 days</label>
                    <input class="form-check-inline" type="radio" name="shipping" id="idSixToNine" value="6-9"><label for="idExpress">6 - 9 days</label>
                </div>

                <div class="form-group">
                    <label for="idShipping_method">Shipping method: </label>
                    <select class="form-control" name="shipping_method" id="idShipping_method">
                        <option value="air" selected>air</option>
                        <option value="sea">sea</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="id_coke">Extra additions:</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" id="id_coke" name="extra[]" value="better box" class="form-check-input"/>better box
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" id="id_sprite" name="extra[]" value="weekend delivery" class="form-check-input"/>weekend delivery
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" id="id_fanta" name="extra[]" value="gift wrap" class="form-check-input"/>gift wrap
                        </label>
                    </div>

                </div>

                <input class="btn btn-primary" type="submit" value="Calculate" />
            </form>
        </div>
    </body>
</html>
