
<?php
include('connect.php');
include'coach_header.php';
$query = 'select * from prediction';
$result = mysql_query($query);
if (!$result)
{
 $message = 'ERROR:' . mysql_error();
 return $message;
}
else
{
 $i = 0;
 
 echo '<html><body><table class="table-w-100 res-table" border=1 align=center><tr>';
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
  
  $i = $i + 1;
 }
 echo '</table></body></html>';
 mysql_free_result($result);
}
mysql_close ($con);

?>
  </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FOOTER -->
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
               
   