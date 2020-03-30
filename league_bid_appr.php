<?php
   include 'league_header.php';


   if(isset($_POST['player_id'])){
      $pid=$_POST['player_id'];
      $resp=mysql_query("select * from bidding");


      $res=mysql_query("select * from  player where player.sid = $pid") or die (mysql_error());
      $result=mysql_fetch_array($res); 
   }
   else{
    header("location:league_bidd_req.php");
   }
?>
      <div class="section-content">
         <div class="container">
            <h1 class="sec-main-title">Team List of bidding players</h>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="sec-des">            
                    <form action="">
                        <table class="res-table table-w-100" border=1 align=center>
                          <h5>Player Name : <?php echo $result['name']; ?></h5>
                          <tr>
                            <th>Team Name</th>
                            <th>Amount</th>
                            <th></th>
                          </tr>

                          <?php
           // $res=mysql_query("select * from bidding INNER JOIN player ON tbl_leag_bid_player.b_player_id=player.sid where b_status=0") or die (mysql_error());
                                $res=mysql_query("select bidding.* ,player.name,team.name as tnm from bidding JOIN player ON bidding.pid=player.sid join team ON bidding.teamid=team.sid where bidding.pid=$pid order by bidding.bamount DESC") or die (mysql_error());
                                $f=1;
                                while($row=mysql_fetch_array($res)){
                                  echo "<tr><td>".$row['tnm']."</td>";
                                  echo "<td>".$row['bamount']."</td>";
                                  echo "<td>";
                                  if($f==1){
                                    $f=0;
                                    if($row['bid_status'] == 0){
                                      $status = 'approve';
                                      echo "<a href=\"ajax.php?sid=".$row['sid']."&pid=".$row['pid']."\"><input type='button' value='".$status."' class='btn btn-info btn-app'></a>";
                                    }
                                    else{
                                      $status = 'approved';
                                       echo "<input type='button' value='".$status."' class='btn btn-success btn-app'>";
                                    }
                                  }
                                  echo "</td></tr>";
                                 }
                                  ?>
                          

                          <?php ?>



                        </table>
                    </form>                           
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