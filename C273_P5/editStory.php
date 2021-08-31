<?php
session_start();
include("dbFunctions.php");
$id = $_GET['id'];
$query = "SELECT * FROM stories WHERE id=" . $id;
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result);

$storyCatID = $row['category_id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Story Teller - Edit Story</title>
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <h3>Story Teller - Edit Story</h3>
        <form method="post" action="doEditStory.php">

            <label>Title:</label>
            <input type="text" name="title" maxlength="100" value="<?php echo $row['title']; ?>" required autofocus/>					
            <label>Category:</label>
            <select name="category_id" required>
                <?php
                $queryCat = "SELECT * FROM story_categories";
                $resultCat = mysqli_query($link, $queryCat) or die(mysqli_error($link));

                while ($rowCat = mysqli_fetch_array($resultCat)) {
                    $catTitle = $rowCat['name'];
                    $catID = $rowCat['id'];
                    if ($catID == $storyCatID) {
                        echo "<option value='$catID' selected='selected'>$catTitle</option>";
                    } else {
                        echo "<option value='$catID'>$catTitle</option>";
                    }
                }
                ?>
            </select>
            <label for="content">Content:</label>
            <textarea name="content" rows="8" cols="70" required><?php echo $row['content']; ?></textarea>		
            <br/>
            <input type="submit" name="Update" value="Update Story"/>
            <input type='hidden' name='id' value="<?php echo $row['id']; ?>"  />

        </form>

    </body>
</html>
