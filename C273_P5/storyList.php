<?php
session_start();
include("dbFunctions.php");

$queryStories = "select * from stories";
$resultStories = mysqli_query($link, $queryStories);
$numStories = mysqli_num_rows($resultStories);

while ($rowS = mysqli_fetch_array($resultStories)) {
    $arr[] = $rowS;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Story Teller: Our Stories</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <h3>Story Teller: Our Stories</h3>
        There are <?php echo $numStories; ?> stories in total


        <table class="box-table">
            <tr>
                <th>Image</th>               
                <th>Title</th>
                <th>Created On</th>
                <?php
                if (isset($_SESSION['username'])) {
                    ?>
                    <th>Edit</th>
                    <?php
                }
                ?>
            </tr>
            <?php
            for ($i = 0; $i < count($arr); $i++) {
                ?>
                <tr>
                    <td><img src="images/<?php echo $arr[$i]['picture']; ?>" width="70"/></td>
                    <td>
                        <a href="storyDetails.php?storyID=<?php echo $arr[$i]['id']; ?>">
                            <?php echo $arr[$i]['title']; ?>
                        </a>
                    </td>
                    <td><?php echo $arr[$i]['created_on']; ?></td>
                    <?php
                    if (isset($_SESSION['user_id'])) {
                        if ($_SESSION['user_id'] == $arr[$i]['author_id'] || $_SESSION['role'] == "admin") {
                            ?>
                            <td><a href="editStory.php?id=<?php echo $arr[$i]['id']; ?>">edit story</a></td>                          

                            <?php
                        } else {
                            ?>
                            <td></td>
                            <?php
                        }
                    }
                    ?>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>