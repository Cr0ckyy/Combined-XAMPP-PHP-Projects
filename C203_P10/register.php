<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Get Together - Where the neighborhood comes together!</title>
        <style>
            .col-right-align { text-align: right;}
        </style>
    </head>
    <body>
        <h3>Get Together - Register</h3>
        <h4>Please fill the following to sign up for "Get Together".</h4>
        <form method="post" action="doRegister.php">
            <fieldset style="width:500px;">
                <table>
                    <tr>
                        <td class="col-right-align"><label>Name:</label></td>
                        <td><input type="text" name="name" /></td>
                    </tr>
                    <tr>
                        <td class="col-right-align"><label>Gender:</label></td>
                        <td>
                            <input type="radio" name="gender" value="male"/>male
                            <input type="radio" name="gender" value="female"/>female
                        </td>
                    </tr>
                    <tr>
                        <td class="col-right-align"><label>Birthdate:</label></td>
                        <td><input type="text" name="birthdate"/> (format: YYYY-MM-DD)</td>
                    </tr>
                    <tr>
                        <td><label>Color Preference:</label></td>
                        <td>
                            <select name="color">
                                <option value="yellow">yellow</option>
                                <option value="pink">pink</option>
                                <option value="cyan">cyan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr /></td>
                    </tr>
                    <tr>
                        <td class="col-right-align"><label>Username:</label></td>
                        <td><input type="text" name="username"/></td>
                    </tr>
                    <tr>
                        <td class="col-right-align"><label>Password:</label></td>
                        <td><input type="password" name="password"/></td>
                    </tr>
                </table>	
            </fieldset>
            <input type="submit" value="Sign Up" name="submit"/>
        </form> 
    </body>
</html>
