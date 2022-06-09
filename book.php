<?php

include_once 'dbfun.php';

extract($_POST);

$link= connect();
$userid=$_SESSION["userid"];

$amount=$seats*100;
$query="insert into booking(cid,mid,tid,sid,bdate,seat,seatnums,amount) "
        . "values('$userid','$mid','$tid','$sid','$bdate','$seats','$seatnums','$amount')";

mysqli_query($link, $query) or die("Error ".mysqli_error($link));

$_SESSION["msg"]="Booking successfully..";
$bid= mysqli_insert_id($link);

header("location: payment.php?id=$bid");


