<!DOCTYPE html>
<html>
    <head>
        <title>Exercise 2</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function () {
                
                
               
             // All elements with a name equal to email/qty
                var email = $("[name=email]").val();  //  val() method is used to retrieve the  value of that form element
                var qty = $("[name=qty]").val();
                
                
                // obtain the values of selected dropdown list element
                var bookName = $("select").val();
                
                // Form Selectors , obtain the values of checked radio btns
                var payment = $(":radio:checked").val();
                
                var message = "";

                // returns the content of selected html elements 
                message += $("[for=idEmail]").html() + " is " + email + "\n";
                message += $("[for=idQty]").html() + " is " + qty + "\n";
                message += $("[for=idBookName]").html() + " is " + bookName + " \n";
                message += $("label:eq(3)").html() + " is " + payment + "\n";

                // Alert box
                alert(message);

                // Confirm box
//               confirm(message);

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
        
        <label>Payment Method</label>:
        <input type="radio" name="payment" id="idVisa" value="visa" checked><label for="idVisa">Visa</label>
        <input type="radio" name="payment" id="idMaster" value="master"><label for="idMaster">MasterCard</label>
        <input type="radio" name="payment" id="idExpress" value="express"><label for="idExpress">American Express</label>
        <p id="result"></p>
        
    </body>
</html>
