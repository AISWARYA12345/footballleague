<?php
include('connect.php');

	$id=$_GET['id'];
	$sql="delete from player where sid='$id'";
	mysql_query($sql);
	header('location:aproveplayer.php');



?>