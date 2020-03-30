<?php
include('connect.php');
$id=$_GET['id'];
$qr="delete from schedule where sid='$id'";
mysql_query($qr,$con);
header("location:matchschedule.php");



?>