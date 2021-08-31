<?php 

$colours[0]="Orange";
$colours[1]="Green";
$colours[2]="Blue";
$colours[3]="Yellow"; 

$randomNo = mt_rand(0,3);

$response['colour'] = $colours[$randomNo];
$response['date'] = date("d-m-Y");
echo json_encode($response); 
?>
