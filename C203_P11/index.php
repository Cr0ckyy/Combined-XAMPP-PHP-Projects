<?php
session_start();
// php file that contains the common database connection code
include "dbFunctions.php";

$queryItems = "SELECT i.name,i.description,i.price,u.username,
            i.user_id,i.id
            FROM used_items i, users u
            WHERE i.user_id=u.id";

$resultItems = mysqli_query($link, $queryItems) or
        die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($resultItems)) {
    $arrItems[] = $row;
}
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <title>Items for Sale</title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Items for Sale - Sell your used items here!</h3>
        <table class="box-table">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Owner</th>
                <?php
                if (isset($_SESSION['user_id'])) {
                    if ($_SESSION['role'] == "admin") {
                        ?>
                        <th>Delete</th>
                    <?php } else if ($_SESSION['role'] == "member") {
                        ?>
                        <th>Edit</th>
                        <?php
                    }
                }
                ?>
            </tr>
            <?php
            for ($i = 0; $i < count($arrItems); $i++) {
                $name = $arrItems[$i]['name'];
                $description = $arrItems[$i]['description'];
                $price = $arrItems[$i]['price'];
                $userID = $arrItems[$i]['user_id'];
                $itemID = $arrItems[$i]['id'];
                $username = $arrItems[$i]['username'];
                ?>
                <tr>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $description; ?></td>
                    <td><?php echo $price; ?></td>
                    <td><?php echo $username; ?></td>
                    <?php
                    if (isset($_SESSION['user_id'])) {
                        if ($_SESSION['role'] == "admin") {
                            ?>
                            <td>
                                <form action="doDelete.php" method="post">
                                    <input type="hidden" name="itemID" value="<?php echo $itemID; ?>"/>
                                    <input type="submit" value="Delete"/>
                                </form>
                            </td>
                        <?php } else if ($_SESSION['role'] == "member") { ?>
                            <td>
                                <form action="edit.php" method="post">
                                    <input type="hidden" name="itemID" value="<?php echo $itemID; ?>"/>
                                    <?php
                                    if ($_SESSION['username'] == $username) {
                                        ?>
                                        <input type="submit" value="Edit"/>
                                    <?php }
                                    ?>

                                </form>
                            </td>
                            <?php
                        }
                    }
                    ?>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>