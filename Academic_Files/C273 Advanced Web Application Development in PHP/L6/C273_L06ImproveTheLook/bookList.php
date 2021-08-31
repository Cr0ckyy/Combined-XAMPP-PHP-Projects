<?php
include("dbFunctions.php");
// create query
$query = "SELECT * FROM books, book_categories 
          WHERE books.cat_id = book_categories.id
          ORDER BY books.id";

$query2 = "SELECT * FROM book_categories";

// execute query
$result = mysqli_query($link, $query) or
        die("Error in query: $query. " . mysqli_error($link));

$result2 = mysqli_query($link, $query2) or
        die("Error in query: $query. " . mysqli_error($link));

while ($row = mysqli_fetch_array($result2)) {
    $arrCat[] = $row;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.rating.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/additional-methods.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="js/Chart.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.raty.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/moment.min.js" type="text/javascript"></script>

        <script>
            $(document).ready(function () {
                $("#itemTypes").change(function () {
                    if ($("#itemTypes").val() == 0) {
                        $(".food").show();
                        $(".self-development").show();
                        $(".children").show();
                        $(".adventure").show();
                    } else if ($("#itemTypes").val() == "adventure") {
                        $(".food").hide();
                        $(".self-development").hide();
                        $(".children").hide();
                        $(".adventure").show();
                    } else if ($("#itemTypes").val() == "children") {
                        $(".food").hide();
                        $(".self-development").hide();
                        $(".children").show();
                        $(".adventure").hide();
                    } else if ($("#itemTypes").val() == "food") {
                        $(".food").show();
                        $(".self-development").hide();
                        $(".children").hide();
                        $(".adventure").hide();
                    } else if ($("#itemTypes").val() == "self-development") {
                        $(".food").hide();
                        $(".self-development").show();
                        $(".children").hide();
                        $(".adventure").hide();
                    } else {
                        $(".food").hide();
                        $(".self-development").hide();
                        $(".children").hide();
                        $(".adventure").hide();
                    }

                });
            });
        </script>

    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <div class="container">
            <h3>Light Central Library: List of books</h3>
            <form>
                <div class="form-group">
                    <label for="itemTypes">Show:</label>
                    <select id="itemTypes" class="form-control">
                        <option value="0">
                            all categories
                        </option>
                        <?php
                        for ($i = 0; $i < count($arrCat); $i++) {
                            ?>
                        <option value="<?php echo $arrCat[$i]['cat_name']; ?>"><?php echo $arrCat[$i]['cat_name']; ?></option>
                        <?php } ?>
                        <!--
                        <option value="adventure">
                            adventure
                        </option>
                        <option value="children">
                            children
                        </option>
                        <option value="food">
                            food
                        </option>
                        <option value="self-development">
                            self-development
                        </option>-->
                    </select>
                </div>
            </form>
            <table id="bookTable" class="table table-hover table-bordered">
                <tr class="header">
                    <th>Book Title</th>
                    <th>Pages</th>
                    <th>Category</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $num_pages = $row['pages'];
                    $category = $row['cat_name'];
                    ?>
                    <tr class="<?php echo $category; ?>">
                        <td>
                            <?php echo $title; ?>
                        </td>
                        <td>
                            <?php echo $num_pages; ?>
                        </td>
                        <td>
                            <?php echo $category; ?>
                        </td>
                    </tr>
                    <?php
                } // end while loop
                ?>    
            </table>
        </div>
    </body>
</html>
