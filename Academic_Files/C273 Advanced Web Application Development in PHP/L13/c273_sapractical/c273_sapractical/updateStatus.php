<?php #Ju Long 19013345?>
<?php
include './dbFunctions.php';
$taskid = $_POST['taskid'];
$status = $_POST['status'];

$query = "UPDATE tasks SET status='$status' WHERE task_id=$taskid";
$result = mysqli_query($link, $query);

return $result;
?>