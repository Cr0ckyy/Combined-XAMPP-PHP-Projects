<!DOCTYPE html>
<html>
    <head>
        <title>Exercise 1</title>
                <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>This is Exercise 1</h2>
        <form name="frmRegister" method="post" action="doRegister.php">
            <fieldset>
                
                <b>
                <legend> Personal Information </legend>
                Full name: <input type="text" name="personName" size="20" maxlength="100" placeholder="Enter your full name" required="required" autofocus="autofocus"/>
                <br><br>
                Email: <input type="email" name="email" size="20" maxlength="100" placeholder="name@example.com" required="required" >
                <br><br>
                Quantity: <input type="number" name="quantity" min="1" max="999" placeholder="999" required="required" >
                <br><br>
                Books to Purchase: <select name="books" size="1" required="required" >
                                        <option value="red hat linux"> Red Hat Linux </option>
                                        <option value="blue hat linux"> Blue Hat Linux </option>
                                        <option value="green hat linux"> Green Hat Linux </option>
                                   </select>
                <br><br>
                Extra Additions:    
                                    <input type="checkbox" name="addition"  value="gift wrap">
                                    <label for="add1">Gift Wrap</label>
                                    <input type="checkbox" name="addition"  value="book carrier">
                                    <label for="add2">Book Carrier</label>
                                    <input type="checkbox" name="addition"  value="book cover">
                                    <label for="add3">Book Cover</label>
                <br><br>
                Special Instructions: </br>
                
                
                <textarea name="feedback" rows="3" cols="30"></textarea>
                <br><br>
                Payment Method: <input type="radio" name="payment" value="Visa" required="required"> Visa 
                                <input type="radio" name="payment" value="MasterCard" > MasterCard
                                <input type="radio" name="payment" value="American Express" > American Express
                <br><br>
                
                <input type="submit" value="Order">
                <input type="reset">
                </b>
            </fieldset>
        </form>
    </body>
</html>
