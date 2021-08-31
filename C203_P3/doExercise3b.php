<?php

$color = $_POST['selColor'];
$cost = 0;
        
if($color == "red"){
    $cost += 5;
} else if($color == "green"){
    $cost += 10;
} else{
    $cost += 15;
}

echo "The cost is $cost";

?>