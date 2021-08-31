<?php
include "dbFunctions.php";

$query = "SELECT * FROM travel_highlights ORDER BY id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_array($result)) {
    $arrContent[] = $row;
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>We Were There </title>
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
        <h1>We Were There</h1>
        <hr>
        <h2>All Travel Highlights</h2>
        <table border="1" cellpadding="0" cellspacing="0">
            <tr>
                <th>Title</th>
                <th>City</th>
                <th>Picture</th>
                <th>Length (days)</th>
                <th>Total Spent</th>
                <th>Edit</th>
            </tr>
            <?php
            for ($k = 0; $k < count($arrContent); $k++) {
                $id = $arrContent[$k]['id'];
                $title = $arrContent[$k]['title'];
                $city = $arrContent[$k]['city'];
                $length_days = $arrContent[$k]['length_days'];
                $total_spending = $arrContent[$k]['total_spending'];
                $picture = $arrContent[$k]['picture'];
                ?>
                <tr>
                    <td><a href="travelDetails.php?travelID=<?php echo $id; ?>"><?php echo $title; ?></a></td>
                    <td><?php echo $city; ?></td>
                    <td><img src="travelPics/<?php echo $picture; ?>" width="150" alt="<?php echo $title; ?>"></td>
                    <td><?php echo $length_days; ?></td>
                    <td><?php echo $total_spending; ?></td>
                    <td><a href="editTravel.php?travelID=<?php echo $id; ?>">edit</a></td>
                </tr>
                <?php
            }
            ?>		
        </table>