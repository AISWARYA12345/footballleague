
<?php
   include 'adminheader.php';
?>
<?php
include('connect.php');

$query = "select * from login where type='player' and

status='0'";
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
 echo '<th>Approve</th><th>Delete</th></tr>';
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
if($y==1)
    $c_row="****";
   echo '<td>' . $c_row . '</td>';
   next($row);
   $y = $y + 1;
  }
  echo '<td><a href=approveplayer1.php?id='.

$idval.'>Approve</a></td><td><a href=deleteplayer.php?id='.

$idval.'>Delete</a></td>';
  echo '</tr>';
  $i = $i + 1;
 }
 echo '</table></body></html>';
 mysql_free_result($result);
}
mysql_close ($con);

?>
 <footer id="footer" class="footer">
         <div class="container">
            <div class="row">
               
               </div>
               
               
               </div>
             
            </div>
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
