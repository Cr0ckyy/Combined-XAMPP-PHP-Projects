<div id="menu">
    <ul>
        <li> <a href="index.php">Home</a></li>
        <li> <a href="searchStory.php">Search Story</a></li>
        <?php if (isset($_SESSION['user_id'])) { ?>
        <?php if ($_SESSION['role']=="member") { ?>
        <li> <a href="addStory.php">Add New Story</a></li>
        <?php } else { ?>
        <li> <a href="storySummary.php">Story Summary</a></li>
        <?php } ?>
            <li> <a href="changePassword.php">Change Password</a></li>
            <li> <a href="logout.php">logout</a></li>
        <?php } else {?>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
        <?php } ?>
    </ul>
</div>
<?php if (isset($_SESSION['user_id'])) { 
    echo "<i>Welcome ".$_SESSION['full_name']." (".$_SESSION['role'].")</i><br/>";
}
?>