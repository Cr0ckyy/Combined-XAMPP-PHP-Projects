<?php

$title = $_POST['event_title'];
$type = $_POST['event_type'];
$days = $_POST['days'];

$total = 0.0;

if($type == "Corporate Meetings"){
    $total += 70.0;
} else if ($type == "Conferences"){
    $total += 80.0;
} else {
    $total += 120.0;
}

$total += 500.0 * $days;

if ($days > 3){
    $total = $total - ($total * 0.1);
} 

echo "<span style='font-weight:bold; font-size:35;'>Event Organizer</span>";
echo"<hr/>";
echo"Event title: $title <br/>
     Event type: $type <br/>
     No of days: $days <br/>
     <br/>
     Total cost: $". number_format($total,2). '<br/><br/><a href="homework.php">Go back to the form page</a>';





