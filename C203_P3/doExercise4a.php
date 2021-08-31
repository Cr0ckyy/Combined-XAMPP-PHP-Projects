<?php

$weight = $_POST['book_weight'];
$books = $_POST['book_amount'];
$time = $_POST['shipping_time'];
$method = $_POST['shipping_method'];

$cost = 0;

$totalW = $books * $weight;
$cost = $totalW * 0.5;

if($time == "1-2"){
    $cost += 40;
} else if ($time == "3-5"){
    $cost += 25;
} else {
    $cost += 10;
}

if($method == "air"){
    $cost += 30;
} else {
    $cost += 40;
}

echo "Total shipping cost: $". number_format($cost,2);

?>

