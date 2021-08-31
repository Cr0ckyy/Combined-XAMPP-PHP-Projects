<?php #Ju Long 19013345 ?>

<?php
session_start();
if (isset($_SESSION['username'])) {
    session_destroy();
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <meta http-equiv='refresh' content='0; url=./index.php'/>;
    </body>
</html>

<?php #Ju Long 19013345 ?>
