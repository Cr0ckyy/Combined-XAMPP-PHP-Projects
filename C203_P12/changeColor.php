<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <form name="frmColor" action="doChangeColor.php" method="post">
            Change the homepage background color<br/><br/>
            Choose Color: <select name="bgcolor">
                <option value="lightblue">Light Blue</option>
                <option value="lightpink">Light Pink</option>
                <option value="lightyellow">Light Yellow</option>
            </select><br/><br/>
            <input type="submit" value="Confirm"/>
        </form>
    </body>
</html>
