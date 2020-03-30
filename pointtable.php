<?php
   include 'league_header.php';
?>
   <div class="section-content">
      <div class="container">
         <h1 class="sec-main-title">
         Point Table
         </h1>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="sec-des">
                  <?php
                  include('connect.php');
                  if(isset($_POST['create']))
                  {
                  $id=$_POST['id1'];
                  $teamname=$_POST['teamname'];
                  $position=$_POST['position'];
                  $gameplayed=$_POST['gameplayed'];
                  $gamewon=$_POST['gamewon'];
                  $gamelost=$_POST['gamelost'];
                  $goalfor=$_POST['goalfor'];
                  $goalagainst=$_POST['goalagainst'];
                  $goaldiff=$_POST['goalfor']-$_POST['goalagainst'];
                  $sql= mysql_query("insert into pointtable values('$id','$teamname','$position','$gameplayed','$gamewon','gamelost','$goalfor','$goalagainst','goaldiff')");
                  //echo $sql;
                  mysql_query($sql,$con);
                  }
                  ?>
                  <?php
                  $id=0;
                  $sql="select max(sid) as id1 from pointtable";
                  $data=mysql_query($sql);
                  while ($row=mysql_fetch_array($data))
                  {
                  $id=$row['id1'];
                  }
                  $id=$id+1;
                  ?>
                  <form action="#" class="sec-form" method="post" enctype="multipart/form-data">
                     <table align="center" border="0" width="500">
                        <tr>
                           <td colspan="2" align="center"><b>POINTS TABLE</b></td>
                        </tr>
                        <tr>
                           <td>
                              <label><b>Point Id<b></label>
                           </td>
                           <td> <input type="text" name='id' value="<?php echo $id; ?>" disabled=true><input type="hidden" name='id1' value="<?php echo $id; ?>">
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label><b>Team Name</b></label>
                        </td>
                        <td>
                           <input type="text" name='teamname' >
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label><b>Position</b></label>
                        </td>
                        <td>
                           <input type="text" name='position'>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label><b>Game Played</b></label>
                        </td>
                        <td>
                           <input type="text" name='gameplayed'>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label><b>Game Won</b></label>
                        </td>
                        <td>
                           <input type="text" name='gamewon'>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label><b>Game Lost</b></label>
                        </td>
                        <td>
                           <input type="text" name='gamelost'>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label><b>Goal For </b></label>
                        </td>
                        <td> <input type="text" name='goalfor' >
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label><b>Goal Against</b></label>
                        </td>
                        <td>
                           <input type="text" name='goalagainst'>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label><b>Goal Diff</b></label>
                        </td>
                        <td><input type="text" name='goaldiff' value="<?php //echo $goaldiff; ?>" >
                        </td>
                        <tr>
                           <td colspan="2" align="center">
                              <input type="submit" class="btn btn-info btn-no-float" name='create' value="CREATE">
                           </td>
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