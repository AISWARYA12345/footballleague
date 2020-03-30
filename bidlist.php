<?php
include('connect.php');
session_start();
echo "HELLO ".$_SESSION["username"];
?>
<?php
include('connect.php');
$query = 'select * from player';
$result = mysql_query($query);
if (!$result)
{
$message = 'ERROR:' . mysql_error();
return $message;
}
else
{
$i = 0;
echo '<html><body><table border=1 align=center><tr>';
  while ($i < mysql_num_fields($result))
  {
  $meta = mysql_fetch_field($result, $i);
  echo '<th>' . ucfirst($meta->name) . '</th>';
  $i = $i + 1;
  }
  echo '<th></th></tr>';
  $i = 0;
  while ($row = mysql_fetch_row($result))
  {
  echo '<tr>';
    $count = count($row);
    $y = 0;
    $idval='1';
    while ($y < $count)
    {
    $c_row = current($row);
    if($y==0)
    $idval=$c_row;
    echo '<td>' . $c_row . '</td>';
    next($row);
    $y = $y + 1;
    }
    echo '<td><input type=submit name=btsubmit value="SELECT"></td>';
  echo '</tr>';
  $i = $i + 1;
  }
echo '</table></body></html>';
mysql_free_result($result);
}
if(isset($_POST[btsubmit]))
{

//$_SESSION['sid'] = $regValue;
$id=$_GET['id'];
header("location:bidamount.php?");
}
mysql_close ($con);
?>