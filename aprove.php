<?php
include('connect.php');

	$id=$_GET['id'];
	$sql="update login set status='1' where username='$id'";
	//update login set status='1' where username='$id'
	mysql_query($sql);
	header('location:aprovestudent.php');



?>