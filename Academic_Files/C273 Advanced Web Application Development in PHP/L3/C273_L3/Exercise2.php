<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap 4 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function () {
                var email = $("[name=email]").val();
                var qty = $("[name=qty]").val();
                var bookName = $("select").val();
                var payment = $(":radio:checked").val();
                var message = "";
                var message1 = "";

                //normal message
                message += $("[for=idEmail]").html() + " is " + email + " </br>";
                message += $("[for=idQty]").html() + " is " + qty + " </br>";
                message += $("[for=idBookName]").html() + " is " + bookName + " </br>";
                message += $("label:eq(3)").html() + " is " + payment + " </br>";
//                message += $("[for=idColor]").html() + " is" + colorid + " </br>";
                $("#result").html(message);


                //alert message
                message1 += $("[for=idEmail]").html() + " is " + email + " \n";
                message1 += $("[for=idQty]").html() + " is " + qty + " \n";
                message1 += $("[for=idBookName]").html() + " is " + bookName + " \n";
                message1 += $("label:eq(3)").html() + " is " + payment + " \n";
//                message += $("[for=idColor]").html() + " is" + colorid + " </br>";

                alert(message1);


            })


        </script>
    </head>
    <body>
        <label for="idEmail">Email</label>: 
        <input type="email" name="email" id="idEmail" value="123456@rp.edu.sg">
        <br/>    
        <label for="idQty">Quantity</label>: 
        <input type="number" name="qty" id="idQty" min="1" max="999" value="80">
        <br/>            
        <label for="idBookName">Books to purchase</label>:
        <select name="bookName" id="idBookName">
            <option value=""></option>
            <option value="linux" selected>Linux</option>
            <option value="java">Java</option>
        </select>
        <br/>
        <label for="idColor">Color to select</label>:
        <select name="colorid" id="idColor">
            <option value="red" id="red">Red</option>
            <option value="green" id="green">Green</option>
            <option value="blue" id="blue">Blue</option>
        </select>
        <br/>                           
        <label>Payment Method</label>:
        <input type="radio" name="payment" id="idVisa" value="visa" checked><label for="idVisa">Visa</label>
        <input type="radio" name="payment" id="idMaster" value="master"><label for="idMaster">MasterCard</label>
        <input type="radio" name="payment" id="idExpress" value="express"><label for="idExpress">American Express</label>
        <p id="result"></p>


    </body>
</html>