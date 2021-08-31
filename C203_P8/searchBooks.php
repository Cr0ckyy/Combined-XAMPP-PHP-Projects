<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Search Books</title>
        <style>
            p{
                font-weight: bold;
            }

        </style>
    </head>
    <body>

        <p><a href="bookList.php">View Book List</a> | <a href="insertBook.php">Insert a New Book</a> | <a href="searchBooks.php">Search Books</a></p>

        <h1>Search Books</h1>

        <form method="post" action="doSearchBooks.php">

            Book Name contains:
            <input type="text" name="bookName" size="40">
            <br/>
            <input type="submit" value="Search">

        </form>

        <?php
        // put your code here
        ?>

    </body>
</html>
