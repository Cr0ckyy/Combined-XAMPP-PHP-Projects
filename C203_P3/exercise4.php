<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="doExercise4.php">
            <label for="idName">Name<font color="red">*</font></label>
            <input type="text" id="idName" name="name" autofocus placeholder="enter your name" required><br/>

            <label for="idEmail">Email<font color="red">*</font></label>
            <input type="email" id="idEmail" name="email" placeholder="enter your email" required><br/>

            <label for="idAddress">Address</label>
            <input type="text" id="idAddress" name="address"><br/>

            <label for="idZipcode">Postal Code</label>
            <input type="number" id="idZipcode" name="zipcode"
                   placeholder="enter a 6-digit code"><br/>

            <label for="idCountry">Country</label>
            <select id="idCountry" name="country">
                <option value="" selected>Please select...</option>
                <option value="Singapore">Singapore</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Thailand">Thailand</option>
            </select><br/>

            Food Preference<font color="red">*</font>
            <input type="radio" id="idV" name="food" value="Vegetarian"><label for="idV">Vegetarian</label>
            <input type="radio" id="idNV" name="food" value="Non-Vegetarian"><label for="idNV">Non-Vegetarian</label><br/>

            <input type="submit" value="SEND" id="btnSubmit">&nbsp;
            <input type="reset" value="CLEAR" id="btnReset">

        </form>
    </body>
</html>
