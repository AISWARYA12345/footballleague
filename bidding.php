<html>
	<body>
		<?php
			session_start();
			echo "HELLO ".$_SESSION["username"];
		?>
		<?php
		include('connect.php');
		?>
		<form  action=bidamount.php method=post>
			<pre>
			Players list <select name="list"> <?php showoptions("player","sid","name"); ?></select>
			<input type=submit value=apply name=btsubmit>
			<?php
			if(isset($_POST['btsubmit']))
			{
			  header("location:bidamount.php?");
			}
			?>
		</pre>
	</form>
</body>
</html>
<?php
include('connect.php');
function showoptions($player,$sid,$name)
{
	$sql2="select * from player  ";
	echo $sql2;
	$data=mysql_query($sql2);
	while($row=mysql_fetch_array($data))
	{
		echo "<option value='".$row[$sid]."'>".$row[$name]."</option>";
	}
}
?>