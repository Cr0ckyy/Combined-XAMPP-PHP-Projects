<!DOCTYPE html>
<html>
    <head>
        <title>Great HomeSearch</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Welcome to Great HomeSearch!</h1>
        <br>
        <img src="Images/home.png" alt="home" height="150" width="400"/>
        <hr/>
        <h2>Sign up Now for FREE</h2>
        <form name="ABCPSRegister" method="post" action="doRegister.php">
            <!-- TODO: fieldset -->
            <fieldset>
                <legend><b>House Type</b></legend>
                <!-- TODO: table -->
                <table>
                    <tr>
                        <td><b>Type of House<span class="h6"><font color = "red">*</font></b></span></td>


                        <!-- TODO: Dropdown List -->
                        <td><select name="PetType" size="1" required="required" >
                                <option value="">Select an option </option>
                                <option value="Bungalow"> Bungalow </option>
                                <option value="Duplex House "> Duplex House </option>
                                <option value="Condo "> Condo </option>
                                <option value="Mansion"> Mansion </option>
                                <option value="Cottage"> Cottage </option>
                            </select> 
                        </td>
                    </tr>
                    <tr>

                        <td><b>Payment type:<span class="h6"><font color = "red">*</font></b></td>                   
                        <!-- TODO: Radio buttons  -->
                        <td><input type="radio" name="frequency" value="once" required="required"> Installment
                            <input type="radio" name="frequency" value="twice" > Full
                        </td>
                    </tr>
                    <tr>

                        <td><b>Available houses notification: </b></td>

                        <!-- TODO: Checkboxes   -->
                        <td><input type="checkbox" name="notificationtype:[]" value="canned food" required="required"> Physical letter<br>
                            <input type="checkbox" name="notificationtype:[]" value="dry diet"> Email alerts<br>
                            <input type="checkbox" name="notificationtype:[]" value="soft moist"> Phone call
                        </td>
                    </tr>
                </table>
            </fieldset>

            <h3><b><font color = "red">Almost there!</font><b/></h3>

            <fieldset>
                <legend>Owner Information</legend>
                <table>
                    <tr>
                        <td>Full Name:<span class="h6"><font color = "red">*</font></td>
                        <!-- TODO: Text fields    -->
                        <td><input type="text" name="personName" size="20" maxlength="100" placeholder="Enter your full name" required="required" autofocus="autofocus"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Residential Address: </td>
                        <!-- TODO: Text area     -->
                        <td><textarea name="address" rows="5" cols="30" placeholder="Woodlands Road Avenue"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender<span class="h6"><font color = "red">*</font>: </td>
                        <td><input type="radio" name="gender" value="male" required="required"> Male
                            <input type="radio" name="gender" value="female" > Female
                        </td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="email" name="email" size="20" maxlength="100" placeholder="name@example.com" required="required" >




                    </tr>
                    <tr>      
                        <td>Date-of-birth : </td>   
                        <!-- TODO: Calendar     -->
                        <td><input type="date" name="Date-of-birth " placeholder="mm/dd/yyyy" required="required" ></td>
                    </tr>




                    <tr>
                        <td>Contact Number<span class="h6"><font color = "red">*</font>:</td>
                        <td><input type="tel" name="contactnumber" placeholder="1234 5678" required="required" ></td>
                    </tr>


                    <tr>
                        <td>Other skills: </td>

                        <td><textarea name="feedback" rows="3" cols="30"></textarea></td>  
                    </tr>

                    <tr>
                        <td>Marital status:<span class="h6"><font color = "red">*</font></td>
                        <td><input type="radio" name="frequency" value="once" required="required"> Married
                            <input type="radio" name="frequency" value="twice" > Divorced
                            <input type="radio" name="frequency" value="once" required="required"> Single

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
            <br><br>
            <input type="submit" value="Submit">
            <input type="reset">



            </body>
            </html>
