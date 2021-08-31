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
        <h2>Insert Restaurant Review</h2>
        <form method="post" action="doInsertReview.php">
            <label for="idRest">Name:</label>
            <select id="idRest" name='restaurant' />
            <option value="1">Our Place At Three-West</option>
            <option value="2">Great Mouse Cook</option>
            <option value="3">Fine Chicken Corner</option>
        </select>
        <br/><br/>
        <label for="idRating">Your Rating:</label>
        <input type="radio" id="idRating" name="rating" value="1"> 1 
        <input type="radio" name="rating" value="2"> 2
        <input type="radio" name="rating" value="3"> 3  
        <input type="radio" name="rating" value="4"> 4 
        <input type="radio" name="rating" value="5"> 5                
        <br/><br/>
        Comment:
        <textarea name="comment" rows="6" cols="25"/></textarea>
    <br/><br/>
    <input type="submit" value="Add Review"/><br/>
</form>
</body>
</html>
