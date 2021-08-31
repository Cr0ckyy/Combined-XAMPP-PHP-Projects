<?php
session_start();
include("dbFunctions.php");

$id = $_GET['storyID'];
$query = "SELECT stories.id, stories.title, stories.author_id, 
            stories.content, stories.category_id, picture, 
            story_categories.name as catName,
            users.first_name, users.last_name
            FROM stories, story_categories, users
            WHERE stories.category_id = story_categories.id 
            AND stories.author_id = users.id            
            AND stories.id=" . $id;

$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result); //there is only one record for the story

mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Story Teller - Story Details</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <style>
            img {
                border: 2px black solid;
            }
        </style>    
    </head>
    <?php
    include("navbar.php");
    ?>
    <body>
        <h3><b><?php echo $row['title']; ?></b></h3>
        Category: <b><?php echo $row['catName']; ?></b>
        &nbsp;&nbsp;&nbsp;
        Author: <b><?php echo $row['first_name'] . " " . $row['last_name']; ?></b>
        <br/><br/>

        <img height="100" src="images/<?php echo $row['picture']; ?>"/>
        &nbsp;
        
        <div style="width:700px;"><?php echo $row['content']; ?></div>
     </body>
</html>
