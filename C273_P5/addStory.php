<?php
session_start();
include("dbFunctions.php");
if (!isset($_SESSION['username'])) {
    echo "You have not logged in.<br/>";
    echo "Please <a href='login.php'>login</a>.";
    exit;
}

$queryCat = "SELECT * FROM story_categories";
$resultCat = mysqli_query($link, $queryCat) or
        die(mysqli_error($link));

while ($rowCat = mysqli_fetch_array($resultCat)) {
    $arrCat[] = $rowCat;
}
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Story Teller - Add New Story</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <h3>Story Teller - Add New Story</h3>
        <form method="post" action="doAddStory.php" enctype="multipart/form-data">
            <label for="idTitle">Title:</label>
            <input type="text" name="title" id="idTitle" maxlength="150" required/>					
            <label for="idCat">Category:</label>
            <select name="category_id" id="idCat" required>
                <?php
                for ($i = 0; $i < count($arrCat); $i++) {
                    $catTitle = $arrCat[$i]['name'];
                    $catID = $arrCat[$i]['id'];
                    echo "<option value='$catID'>$catTitle</option>";
                }
                ?>
            </select>
            <label for="idContent">Content:</label>
            <textarea name="content" id="idContent" rows="8" cols="70" required></textarea>	
            <label for="idImage">Picture</label>
            <input type="file" name="image" id="idImage" required/>
            <br/><input type="submit" value="Submit"/>

        </form>
    </body>
</html>