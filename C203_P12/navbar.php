<div id="menu">
    <ul>
        <li> <a href="index.php">Home</a></li>
        <li><a href="changeColor.php">Change Background Color</a></li>
        <?php if (isset($_SESSION['user_id'])) { ?>
            <li> <a href="invite.php">Invite your friends</a></li>
            <li><a href="editProfile.php">Edit your profile</a></li>
            <li> <a href="logout.php">logout</a></li>
        <?php } ?>
    </ul>
</div>
<?php
if (isset($_SESSION['user_id'])) {
    echo "<i>Welcome " . $_SESSION['username'] . " (" . $_SESSION['role'] . ")</i>";
}
?>