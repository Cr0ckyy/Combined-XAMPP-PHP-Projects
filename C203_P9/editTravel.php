<?php
include "dbFunctions.php";

$theID = $_GET['travelID'];

$query = "SELECT * FROM travel_highlights WHERE id=$theID";

$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <img width="300" src="travelPics/<?php echo $row['picture'] ?>"/><br/>
        Title: <?php echo $row['title'] ?>
        <br/>
        City: <?php echo $row['city'] ?>
        <br/>
        Length (in days): <?php echo $row['length_days'] ?>
        <br/>
        Total cost: <?php echo $row['total_spending'] ?>
        <br/><br/>
        <form method="post" action="doEditTravel.php">
            Editable story:
            <br/>
            <textarea name="story" rows="11" cols="36"><?php echo $row['story'] ?>
            </textarea>
            <br/><br/>
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>"/>
            <input type="submit" value="Update"/>
        </form>
    </body>
</html>
