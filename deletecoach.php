<?php
include('connect.php');
$id=$_GET['id'];
$qr="delete from login where username='$id'";
mysql_query($qr,$con);
header("location:approvecoach.php");



?>