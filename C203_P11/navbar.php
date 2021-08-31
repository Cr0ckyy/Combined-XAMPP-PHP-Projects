<div id="menu">
    <ul>
        <li> <a href="index.php">Home</a></li>
        <?php if (isset($_SESSION['user_id'])) { ?>
            <?php if ($_SESSION['role'] == "member") { ?>
                <li> <a href="postItem.php">post used items</a></li>
            <?php } ?>
            <li> <a href="logout.php">logout</a></li>
        <?php } else { ?>
            <li> <a href="login.php">login</a></li>
        <?php } ?>
    </ul>
</div>
<?php
if (isset($_SESSION['user_id'])) {
    echo "<i>Welcome " . $_SESSION['username'] . " (" . $_SESSION['role'] . ")</i>";
}?>