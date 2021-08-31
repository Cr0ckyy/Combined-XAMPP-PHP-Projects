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

        <fieldset>
            <legend>Ticketing App</legend>
            Name
            <input name ="purchsaser" type="text" required="required"
                   placeholder="Purchaser name">
            Adult($16)

            <select name="adult">
                <option value ="1" >1</option>
                <option value ="2" >2</option>
                <option value ="3" >3</option>
            </select>

            Child($8)

            <select name="Child">
                <option value ="1" >1</option>
                <option value ="2" >2</option>
                <option value ="3" >3</option>
            </select>

        </fieldset>

        <br>
        <input type="submit" value="Calculate">
        <input type ="reset" value="Clear">

    </form>


</body>
</html>
