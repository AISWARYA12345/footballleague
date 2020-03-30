<?php
   include 'league_header.php';

   if(isset($_POST['create'])){
      $sql=mysql_query("select max(tid) as maxid from tbl_leag_bid_player");
      $id=$sql['maxid'];
      if($id==""){
         $id=1;
      }
      else{
         $id++;
      }
      mysql_query("insert into tbl_leag_bid_player(bid_id,b_player_id,b_status)values(".$id.",".$_POST["player_id"].",0)") or die (mysql_error());
   }
?>
<script type="text/javascript">
   $(function(){
      $('#selplay').on('change',function(){
         var v=$(this).val();
         $.ajax({
            method: 'post',
            url: 'ajax.php',
            data:'chkid='+1+'&val='+v,
            success: function(r){
               if(r==1){
                  $('form')[0].reset();
                  alert('Player Already Added');
               }
            }
         })
      });
   })
</script>
<style type="text/css">
   .sec-form th{
      color: #333;
   }
</style>
   <div class="section-content">
      <div class="container">
         <h1 class="sec-main-title">
         Auction 
         </h1>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="sec-des">
                  <form action="" class="sec-form" method="post">
                     <table align="center" border="0" width="500">
                        <!-- <tr>
                           <td colspan="2" align="center"><b>Bidding</b></td>
                        </tr> -->
                        <tr>
                           <td>
                              <label><b>Select Player<b></label>
                           </td>
                           <td>
                              <select id="selplay" name="player_id">
                                 <option value="">Select Player</option>
                                 <?php
                                    $sql2="select * from player  ";
                                    $data=mysql_query($sql2);
                                    while($row=mysql_fetch_array($data))
                                    {
                                     echo "<option value='".$row['sid']."'>".$row['name']."</option>";
                                    }
                                 ?>
                              </select>
                        </td>
                     </tr>
                     <tr>
                           <td colspan="2" align="center">
                              <input type="submit" class="btn btn-info btn1-no-float" name='create' value="Add to Bidding List">
                           </td>
                        </tr>
                     </table>
                  </form>

<!--  -->
<hr>
<table class="res-table" border="1" width="500">
   <h1>Bidding List</h1>
   <tr>
      <th>Name</th>
      <th>Total Matches</th>
   </tr>
   <?php
      $res=mysql_query("select * from tbl_leag_bid_player INNER JOIN player ON tbl_leag_bid_player.b_player_id=player.sid") or die (mysql_error());
      while($row=mysql_fetch_array($res))
      {
         echo "<tr><td>".$row['name']."</td>";
         echo "<td>".$row['totalmatches']."</td></tr>";
      
      }
   ?>
</table>






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