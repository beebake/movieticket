<?php

$bid=$_GET["bid"];
include_once 'dbfun.php';
$link= connect();
$booking = single("booking","bid = $bid");
$bdate = strtotime($booking['bdate']);
$current = date('Y-m-d H:i:s');
$currentT = strtotime($current);
$diffHours = round(($bdate - $currentT) / 3600);
if ($diffHours < 24 ) {
    $_SESSION["error"]="Sorry,Booking can only be cancelled before 24 hours to movie time.";
    header("location: bhistory.php");
} else {
    $query="delete from booking where bid=$bid";
    mysqli_query($link, $query);
    $_SESSION["msg"]="Booking cancelled successfully. We will refund 50% amount within 7 days";
    header("location: bhistory.php");
}


