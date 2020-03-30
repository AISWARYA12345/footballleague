<?php
   include 'league_header.php';
?>
      <div class="section-content">
         <div class="container">
            <h1 class="sec-main-title">
            Match Schedule</h>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="sec-des">
                     <?php
                        include('connect.php');
                         ?>
                     <?php
                        if(isset($_POST['Create']))
                        {
                           $id=$_POST['id1'];
                           $date=$_POST['date'];
                           $team1=$_POST['team1'];
                           $team2=$_POST['team2'];
                           $country=$_POST['country'];
                           $stadium=$_POST['stadium'];
                           $longitude=$_POST['longitude'];
                            $lattitude=$_POST['lattitude'];
                           $time=$_POST['time'];
                           $status=$_POST['status'];
                          $sql= mysql_query("insert into schedule values('$id','$date','$team1','$team2','$country','$stadium','$longitude','$lattitude','$time','$status')");
                            echo $sql;
                           mysql_query($sql,$con);
                        }
                        
                        
                        ?>
                     <?php
                        $id=0;
                        $sql="select max(sid) as id1 from schedule";
                        $data=mysql_query($sql);
                        while ($row=mysql_fetch_array($data)) {
                          $id=$row['id1'];
                          # code...
                        }
                        $id=$id+1;
                        ?>
                        <center>
                           <form action="#" class="sec-form" method="post" enctype="multipart/form-data">
                              <table align="center" border="0" width="300" cellspacing="4">
                                 <tr>
                                    <td colspan="2" align="center"><b>Match Schedule</b></td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Schedule ID</label>
                                    </td>
                                    <td> <input type="text" name='id' value="<?php echo $id; ?>" disabled="true"><input type="hidden" name="id1" value="<?php echo $id; ?>"> </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Date</label>
                                    </td>
                                    <td>
                                       <input type="date" name='date'>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Team1</label>
                                    </td>
                                    <td>
                                       <input type="text" name='team1'>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Team2</label>
                                    </td>
                                    <td> <input type="text" name='team2'>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Country</label>
                                    </td>
                                    <td>  <input type="text" name='country'>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Stadium</label>
                                    </td>
                                    <td> <input type="text" name='stadium'>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Longitude</label>
                                    </td>
                                    <td>
                                       <input type="text" name='longitude'>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Lattitude</label>
                                    </td>
                                    <td> <input type="text" name='lattitude'>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Time</label>
                                    </td>
                                    <td>
                                       <input type="text" name='time'>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Status</label>
                                    </td>
                                    <td>
                                       <input type="text" name='status'>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td colspan="2" align="center">
                                       <input class="btn btn-info" type="submit" name='Create' value="CREATE">
                                    </td>
                                 </tr>
                                 </tr>
                              </table>
                           </form>
                         </center>
                           <hr>
                     <h3>
                        <center>MATCH SCHEDULE</center>
                     </h3>
                     <?php
                        include('connect.php');
                        
                        $query = 'select * from schedule';
                        $result = mysql_query($query);
                        if (!$result)
                        {
                         $message = 'ERROR:' . mysql_error();
                         return $message;
                        }
                        else
                        {
                         $i = 0;
                         echo '<table class="res-table table-w-100" border=1 align=center><tr>';
                         while ($i < mysql_num_fields($result))
                         {
                          $meta = mysql_fetch_field($result, $i);
                          echo '<th>' . ucfirst($meta->name) . '</th>';
                          $i = $i + 1;
                         }
                         echo '<th>Delete</th></tr>';
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
                          echo '<td><a href=deleteschedule.php?id='.$idval.'>Delete</a></td>';
                          echo '</tr>';
                          $i = $i + 1;
                         }
                         echo '</table>';
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