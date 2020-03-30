<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("snitdb",$con);

if(isset($_POST['chkid'])){
  $res=mysql_query('select * from tbl_leag_bid_player where b_player_id='.$_POST['val'].'') or die (mysql_error());
  if(mysql_num_rows($res)>0){
    echo 1; 
  }
}

// CHECk BIDD or NOT
if(isset($_POST['chkbid'])){
  $res=mysql_query('select * from bidding where pid='.$_POST['val'].' and teamid='.$_SESSION['username'].'') or die (mysql_error());
  if(mysql_num_rows($res)>0){
    echo 1; 
  }
}


//tbl_leag_bid_player
////////////////////////

//approve bid
if(isset($_GET['sid']) && isset($_GET['pid'])){
	
  $res=mysql_query('update bidding set bid_status = 1 where sid='.$_GET["sid"].'') or die (mysql_error());
  $res=mysql_query('update tbl_leag_bid_player set b_status = 1 where b_player_id='.$_GET["pid"].'') or die (mysql_error());
  
  header("location:league_bidd_req.php");
 
}



?>
