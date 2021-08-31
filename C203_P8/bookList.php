<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "c203_p08";

$link = mysqli_connect($host, $username, $password, $db);

$queryBook = "SELECT title, c.name as category, pages, qty, rent_price "
        . "FROM books b, book_categories c "
        . "WHERE b.c_id = c.c_id "
        . "ORDER BY c.name ASC, title ASC";

$resultBook = mysqli_query($link, $queryBook);

while ($result = mysqli_fetch_assoc($resultBook)) {
    $arrResult[] = $result;
}

mysqli_close($link);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Books to Rent</title>
        <style>
            tr:nth-child(even) {background: lightgreen}
            tr:nth-child(odd) {background: lightyellow}

            table {
                border-collapse: collapse;
            }

            table th td{
                border: 1px solid black;
            }

            p{
                font-weight: bold;
                font-color: blue;
            }




        </style>
    </head>
    <body>

        <p><a id = "bookList"   href="bookList.php">View Book List</a> | <a id = "insertBook" href="insertBook.php">Insert a New Book</a> | <a id = "searchBooks" href="searchBooks.php">Search Books</a></p>

        <h1>Books to Rent</h1>

        <table border="1">
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Pages</th>
                <th>Quantity</th>
                <th>Rent Price</th>
            </tr>
            <?php
            for ($i = 0; $i < count($arrResult); $i++) {
                ?>
                <tr>
                    <td><?php echo $arrResult[$i]['title']; ?></td>
                    <td><?php echo $arrResult[$i]['category']; ?></td>
                    <td><?php echo $arrResult[$i]['pages']; ?></td>
                    <td><?php echo $arrResult[$i]['qty']; ?></td>
                    <td><?php echo $arrResult[$i]['rent_price']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
