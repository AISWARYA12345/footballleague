<?php
include 'league_header.php';
?>
<div class="section-content">
  <div class="container"><!--
    <h1 class="sec-main-title">
    Match Schedule</h1> -->
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sec-des">
          <form action="league_bid_appr.php" method="post">
          <table class="res-table sec-form" border=1 align=center>
            <h1>Bidding List</h1>
            <tr>
              <th>SELECT PLAYER</th>
            </tr>
            <tr>
              <td>
                <select  required="" id="selplay" name="player_id">
                  <?php
                  $res=mysql_query("select * from tbl_leag_bid_player INNER JOIN player ON tbl_leag_bid_player.b_player_id=player.sid where b_status=0") or die (mysql_error());
                  //$data=mysql_query($res);
                  while($row=mysql_fetch_array($res))
                  {
                  echo "<option value='".$row['sid']."'>".$row['name']."</option>";
                  }
                  /* $res=mysql_query("select * from bidding RIGHT JOIN player ON bidding.pid=player.sid") or die (mysql_error());
                  while($row=mysql_fetch_array($res))
                  {
                  echo "<tr><td>".$row['name']."</td>";
                  // echo "<td>".$row['totalmatches']."</td>";
                  echo "<td>".$row['bamount']."</td></tr>";
                  }*/
                  ?>
                  
                </select></td>
              </tr>
              <tr>
              <th><input type="submit" class="btn" value="View Biddings"></th>
            </tr>
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