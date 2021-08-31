<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Buying the Books</h1>
        <hr />
        <form method="post" action="doExercise4a.php">
            <label for="id_book_weight">Book weight (in kg):</label>
            <input type="text" id="id_book_weight" name="book_weight" autofocus /><br/>
            <label for="id_book_amount">Number of books to buy:</label>
            <input type="number" id="id_book_amount" size="10" name="book_amount" /><br/>
            Shipping time:
            <input type="radio" id="id_shipping_time_12" name="shipping_time" value="1-2"/><label for="id_shipping_time_12">1 - 2 days</label>
            <input type="radio" id="id_shipping_time_35" name="shipping_time" value="3-5"/><label for="id_shipping_time_35">3 - 5 days</label>
            <input type="radio" id="id_shipping_time_69" name="shipping_time" value="6-9"/><label for="id_shipping_time_69">6 - 9 days</label><br/>
            <label for="id_shipping_method">Shipping method:</label> 
            <select id="id_shipping_method" name="shipping_method">
                <option value="air">air</option>
                <option value="sea">sea</option>
            </select><br/>
            Extra additions:
            <input type="checkbox" id="id_extra_box" name="extra[]" value="better box"/><label for="id_extra_box">better box</label>
            <input type="checkbox" id="id_extra_weekend" name="extra[]" value="weekend delivery"/><label for="id_extra_weekend">weekend delivery</label>
            <input type="checkbox" id="id_extra_gift" name="extra[]" value="gift wrap"/><label for="id_extra_gift">gift wrap</label><br/>
            <input name="btnsubmit" value="Submit" type="submit">
        </form>

    </body>
</html>
