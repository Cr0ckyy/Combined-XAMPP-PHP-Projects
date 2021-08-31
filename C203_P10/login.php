<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Get Together - Where the neighborhood comes together!</title>
    </head>
    <body>
        <h3>Get Together - Login</h3>
        <form method="post" action="doLogin.php">
            <fieldset style="width:300px;">
                <table>
                    <tr>
                        <td><label for="idUsername">Username:</label></td>
                        <td><input type="text" id="idUsername" name="username"/></td>
                    </tr>
                    <tr>
                        <td><label for="idPassword">Password:</label></td>
                        <td><input type="password" id="idPassword" name="password"/></td>
                    </tr>
                </table>
            </fieldset>
            <input type="submit" value="Login" name="submit"/>
        </form>
        <br/><br/>
        <a href="register.php">Register</a>
    </body>
</html>
