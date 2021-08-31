<!DOCTYPE html>
<html>
    <head>
        <title>ABC Pet Shop</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>ABC Pet Shop!</h1>
        <br>
        <img src="images/Pets.jpg" alt="Petsco" height="150" width="400"/>
        <img src="images/Pets.jpg" alt="Petsco" height="150" width="400"/>
        <img src="images/Pets.jpg" alt="Petsco" height="150" width="400"/>
        <hr/>
        <h2>Sign up Now for FREE</h2>

                <fieldset>
                    <b>
                    <legend>Pet Information</legend>
                    <table>
                    <tr>
                        <td>Type of Pet:<span class="h6">*</span></td>
                        <td><select name="PetType" size="1" required="required" >
                            <option value="">Select an option </option>
                            <option value="Hamster"> Hamster </option>
                            <option value="Rabbit"> Rabbit </option>
                            <option value="Cat"> Cat </option>
                            <option value="Dog"> Dog </option>
                            <option value="Birds"> Birds </option>
                            <option value="Fish"> Fish </option>
                            <option value="Others"> Others </option>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td>Food Type:<span class="h6">*</span></td>
                        <td><input type="checkbox" name="foodtype[]" value="canned food" required="required"> Canned Food<br>
                            <input type="checkbox" name="foodtype[]" value="dry diet"> Dry Diet<br>
                            <input type="checkbox" name="foodtype[]" value="soft moist"> Soft Moist
                        </td>
                    </tr>
                    <tr>
                        <td>Feeding Frequency:<span class="h6">*</span></td>
                        <td><input type="radio" name="frequency" value="once" required="required"> Once a day
                            <input type="radio" name="frequency" value="twice" > Twice a day
                            <input type="radio" name="frequency" value="free feeding" > Free Feeding
                        </td>
                    </tr>
                    <tr>
                        <td>Remarks: </td>
                        <td>
                            <textarea name="remarks" rows="5" cols="30"></textarea>
                        </td>
                    </tr>
                    </table>
                </fieldset>
            
     <h3><b><font color = "red">Almost there!</font><b/></h3>
            
            <fieldset>
                    <legend>Owner Information</legend>
                    <table>
                    <tr>
                        <td>Full Name:<span class="h6">*</span></td>
                        <td><input type="text" name="personName" size="20" maxlength="100" placeholder="Enter your full name" required="required" autofocus="autofocus"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Residential Address: </td>
                        <td><textarea name="address" rows="5" cols="30" placeholder="Woodlands Road Avenue"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender<span class="h6">*</span>: </td>
                        <td><input type="radio" name="gender" value="male" required="required"> Male
                            <input type="radio" name="gender" value="female" > Female
                        </td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="email" name="email" size="20" maxlength="100" placeholder="name@example.com" required="required" >
                    </tr>
                    
                    <tr>
                        <td>Contact Number<span class="h6">*</span>:</td>
                        <td><input type="tel" name="contactnumber" placeholder="1234 5678" required="required" ></td>
                        </b>
                    </tr>
                    </table>
                </fieldset>
            <br><br>
            <input type="submit" value="Submit">
            <input type="reset">

        
        
    </body>
</html>
