<!DOCTYPE html>
<html>
    <head>
        <title>C203 Mini Project</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <style>
            form {
                width: 100px;
            }
        </style>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <h3>Story Teller - Login</h3>
        <form method="post" action="doLogin.php">
            <fieldset style="width: 300px;">
                <table>
                    <tr>
                        <td><label for="idUsername">Username:</label></td>
                        <td><input type="text" name="username"
                                   id="idUsername" required/></td>
                    </tr>
                    <tr>
                        <td><label for="idPassword">Password:</label></td>
                        <td><input type="password" name="password"
                                   id="idPassword" required/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Login"/></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>
