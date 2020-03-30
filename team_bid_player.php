<?php include 'team_header.php'; 


if(isset($_POST['btnsub'])){
      $id=0;
      $sql="select max(sid) as id1 from bidding";
      $data=mysql_query($sql);
      while ($row=mysql_fetch_array($data)) {
      $id=$row['id1'];
      }
      $id=$id+1;
  mysql_query("insert into bidding(sid,pid,teamid,bamount)values(".$id.",".$_POST["player_id"].",".$_SESSION['username'].",'".$_POST['amount']."')") or die (mysql_error());
header("location:team_bid_player.php");
}


?>
<style>
  table tr,table th{
    color: #333;
  }
</style>
<script type="text/javascript">
   $(function(){
      $('#selplay').on('change',function(){
         var v=$(this).val();
         $.ajax({
            method: 'post',
            url: 'ajax.php',
            data:'chkbid='+1+'&val='+v,
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
   <div class="clearfix"></div>
   <div class="section-content">
      <div class="container">
         <h1 class="sec-main-title">Player Bidding Form</h1>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="sec-des">

                <form action="" class="sec-form" method="post">
                  <table class="table-w-100 res-table" border=1 align=center>
                    <tr>
                      <th colspan="2">Bidding</th>
                    </tr>
                    <tr>
                      <td>Select Player</td>
                      <td>
                        <select id="selplay" name="player_id">
                                 <option value="">Select Player</option>
                                 <?php
                                 $res=mysql_query("select * from tbl_leag_bid_player INNER JOIN player ON tbl_leag_bid_player.b_player_id=player.sid") or die (mysql_error());
                                    //$data=mysql_query($res);
                                    while($row=mysql_fetch_array($res))
                                    {
                                     echo "<option value='".$row['sid']."'>".$row['name']."</option>";
                                    }
                                 ?>
                              </select>

                      </td>
                    </tr>

                    <tr>
                      <td>Amount</td>
                      <td><input type="text" required="" maxlength="9" name='amount'></td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <input type="submit" name="btnsub" value="Bidd Player" class="btn">
                      </td>
                    </tr>
                  </table>
                </form>


<hr>

<table class="res-table" border="1" width="500">
   <h1>Bidding List</h1>
   <tr>
      <th>Name</th>
      <th>Amount</th>

   </tr>
   <?php
      $res=mysql_query("select * from bidding RIGHT JOIN player ON bidding.pid=player.sid where teamid=".$_SESSION['username']." ") or die (mysql_error());

      while($row=mysql_fetch_array($res))
      {
         echo "<tr><td>".$row['name']."</td>";
        // echo "<td>".$row['totalmatches']."</td>";
         echo "<td>".$row['bamount']."</td></tr>";
      
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