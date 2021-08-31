<?php 
$host = "localhost";
$username = "root";
$password = "";
$db = "c203_p08";

$link = mysqli_connect($host, $username, $password, $db);

$queryDirectors = "SELECT * FROM example_directors";

$resultDirectors = mysqli_query($link, $queryDirectors);

while ($row = mysqli_fetch_array($resultDirectors)) {
    $arrDirectors[] = $row;
}

echo "<pre>";
print_r($arrDirectors);
echo "</pre>";

mysqli_close($link);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="doExampleInsertMovies.php">
            <table>
                <tr>
                    <td width="40"><label for="idTitle">Title:</label></td>
                    <td><input type="text" id="idTitle" name="title"/></td>
                </tr>
                <tr>
                    <td><label for="idDirector">Director:</label></td>
                    <td>
                        <select id="idDirector" name="director">
                            <?php
                            for ($i = 0; $i < count($arrDirectors); $i++) {
                                ?>
                            <option value="<?php echo $arrDirectors[$i]['d_id']; ?> ">
                            <?php echo $arrDirectors[$i]['name']; ?> </option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
