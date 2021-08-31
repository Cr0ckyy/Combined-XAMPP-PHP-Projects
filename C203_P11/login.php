<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <title>Items for Sale</title>
        
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Items for Sale - Login</h3>
        <!-- Username and Password will be posted to doLogin.php -->
        <form method="post" action="doLogin.php">
            <fieldset>
                <legend>Login</legend>
                <table>
                    <tr>
                        <td><label for="id_username">Username:</label></td>
                        <td><input id="id_username" type="text" name="username"/></td>
                    </tr>
                    <tr>
                        <td><label for="id_password">Password:</label></td>
                        <td><input id="id_password" type="password" name="password"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" Value="Login"/></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>
