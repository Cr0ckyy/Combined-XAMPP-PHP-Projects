<?php
session_start();
include("dbFunctions.php");

$searchContent = $_POST['content'];
$querySearch = "SELECT * FROM stories
                    WHERE content like '%$searchContent%'";

$resultSearch = mysqli_query($link, $querySearch);
$searchResult = mysqli_num_rows($resultSearch);

while ($rowSearch = mysqli_fetch_array($resultSearch)) {
    $arrSearch[] = $rowSearch;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Story Teller - Search for Stories</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <style>
            table, td, th {
                border-collapse:collapse;
                border: 1px solid black;
            }
            td {
                padding: 4px;
                text-align: left;
            }

            tr:nth-child(odd){ 
                background: lightyellow;
            }

            tr:nth-child(even){
                background: lightblue;
            }

            th {
                background: white;
            }
        </style>
    </head>
    <body>
        <?php include ("navbar.php"); ?>
        <h2>Story Teller - Search for Stories</h2>
        Content contains: <b><?php echo $searchContent; ?></b>

        <?php if ($searchResult > 0) { ?>
            <table border="1">
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                </tr>
                <?php
                for ($i = 0; $i < count($arrSearch); $i++) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $arrSearch[$i]['title']; ?>
                        </td>
                        <td><?php echo $arrSearch[$i]['content']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <h4>There are no matching record</h4>
        <?php } ?>
    </body>
</html>
