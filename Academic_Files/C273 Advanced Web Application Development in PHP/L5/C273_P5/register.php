<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Story Teller - Register</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <h3>Story Teller - Register</h3>
        <form name="myForm" method="post" action="doRegister.php" 
              enctype="multipart/form-data" >
            <label for="idFirstname">First Name: </label>
            <input name="firstname" type="text" id="idFirstname" required/>
            <label for="idLastname">Last Name: </label>
            <input name="lastname" type="text" id="idLastname" required/>
            <label for="idEmail">Email: </label>
            <input name="email" type="text" id="idEmail" required/>
            <hr />
            <label for="idUsername">Username: </label>
            <input name="username" type="text" id="idUsername" required/>
            <label for="idPassword">Password: </label>
            <input name="password" type="password" id="idPassword" required/>
            <input value="Register" type="submit">
        </form>
    </body>
</html>
