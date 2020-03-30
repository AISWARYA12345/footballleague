

<?php
   include 'player_header.php';
?>
<h1 class="sec-main-title">POINT TABLE</h1>
     
<?php
include('connect.php');

$query = 'select * from pointtable';
$result = mysql_query($query);
if (!$result)
{
 $message = 'ERROR:' . mysql_error();
 return $message;
}

else
{
 $i = 0;
 echo '<table class="table-w-100 res-table" border=1 align=center><tr>';
 while ($i < mysql_num_fields($result))
 {
  $meta = mysql_fetch_field($result, $i);
  echo '<th>' . ucfirst($meta->name) . '</th>';
  $i = $i + 1;
 }

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
  
  echo '</tr>';
  $i = $i + 1;
 }
 echo '</table>';
 mysql_free_result($result);
}
mysql_close ($con);

?>


 <footer id="footer" class="footer">
      <div class="footer-bottom">
         <div class="container">
         </div>
      </div>
   </footer>
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="js/all.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/custom.js"></script>
   </body>
</html>