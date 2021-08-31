<?php
$bookName = $_POST['bookName'];

$host = "localhost";
$username = "root";
$password = "";
$db = "c203_p08";

$link = mysqli_connect($host, $username, $password, $db);

$searchBook = "Select title as title, c.name as category, pages, qty, rent_price "
        . "FROM books b, book_categories c "
        . "WHERE b.c_id = c.c_id and b.title LIKE '%$bookName%' "
        . "ORDER BY c.name ASC, title ASC";

$searchedResult = mysqli_query($link, $searchBook);

while ($result = mysqli_fetch_assoc($searchedResult)) {
    $arrResult[] = $result;
}

mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Searched Books</title>
        <style>
            table {
                border-collapse: collapse;
            }

            table th td{
                border: 1px solid black;
            }

            p{
                font-weight: bold;
            }
        </style>
    </head>
    <body>

        <p><a href="bookList.php">View Book List</a> | <a href="insertBook.php">Insert a New Book</a> | <a href="searchBooks.php">Search Books</a></p>
        <h1>Search Books - Titles containing '<?php echo $bookName; ?>':</h1>

<?php
if (empty($arrResult)) {
    echo "No records are found";
} else {
    ?>
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
            <?php } ?>

    </body>
</html>
