<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "c203_p08";

// open connection
$link = mysqli_connect($host, $username, $password, $db);

if (!$link) {
    die("Could not connect: " . mysqli_connect_error($link));
}
echo "Connected Successfully";

// create sql query
$queryMovies = "SELECT m.id as movie_id, title, d.name as d_name "
        . "FROM example_movies m, example_directors d "
        . "WHERE m.d_id = d.d_id";

// execute sql query
$resultMovies = mysqli_query($link, $queryMovies);

// close connection
mysqli_close($link);

while ($row = mysqli_fetch_assoc($resultMovies)) {
    $arrResult[] = $row;
}

echo "<pre>";
print_r($arrResult);
echo "</pre>";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>ID</th> <th>Title</th> <th>Director</th>
            </tr>
            <?php
            for ($i = 0; $i < count($arrResult); $i++) {
                ?>
                <tr>
                    <td><?php echo $arrResult[$i]['movie_id']; ?></td>
                    <td><?php echo $arrResult[$i]['title']; ?></td>
                    <td><?php echo $arrResult[$i]['d_name']; ?></td>
                </tr>
            <?php } ?>

        </table>
    </body>
</html>
