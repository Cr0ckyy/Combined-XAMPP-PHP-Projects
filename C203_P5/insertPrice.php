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
        <form name="frmSearch" method="post" action="doInsertPrice.php">
            <label for="idItem">Item Name: </label>
            <input id="idItem" type="text" name="itemName"/>
            <br/>
            <label for="idPrice">Price: </label>
            <input id="idPrice" type="text" name="itemPrice"/>
            <br/>
            <input type="submit" value="Insert Item"/><br/>
        </form>
    </body>
</html>
