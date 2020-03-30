<?php
include('connect.php');
$id=$_GET['id'];
$qr="update login set status='1' where username='$id'";
mysql_query($qr,$con);
header("location:approveplayer.php");



?>