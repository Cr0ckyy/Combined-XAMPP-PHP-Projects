<?php
session_start();
include("dbFunctions.php");

$queryCat = "select distinct category_id as catID, story_categories.name as catName
    from stories, story_categories
    where stories.category_id = story_categories.id";

$resultCat = mysqli_query($link, $queryCat);
$numCat = mysqli_num_rows($resultCat);

while ($rowCat = mysqli_fetch_array($resultCat)) {
    $arrCat[] = $rowCat;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Story Teller: Story Summary</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <h3>Story Teller: Story Summary</h3>
        There are <?php echo $numCat; ?> categories in total
        <br/><br/>

        <?php
        for ($j = 0; $j < count($arrCat); $j++) {
            $catID = $arrCat[$j]['catID'];

            $queryStory = "select * from stories 
                where category_id = $catID";

            $queryStory .= " order by created_on desc";

            $resultStory = mysqli_query($link, $queryStory);
            $numStory = mysqli_num_rows($resultStory);

            echo "<b>";
            echo $arrCat[$j]['catName'] . ":";
            echo "</b>";

            echo " " . $numStory . " stories";
            echo "<br/>";
            echo "<br/>";
        }
        ?>
    </body>
</html>