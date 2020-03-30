<?php

   include 'reg_header.php';
?>
   <div class="section-content">
      <div class="container">
         <h1 class="sec-main-title">
         Coach Registration
         </h1>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="sec-des">
      <?php
include('connect.php');
 ?>

 <?php
if(isset($_POST['Register']))
{
   $id=$_POST['id1'];
   $name=$_POST['name'];
   $dob=$_POST['dob'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $team=$_POST['team'];
    $points=$_POST['points'];
   $won=$_POST['won'];
   $total=$_POST['total'];
   $password=$_POST['password'];
 
  $sql= mysql_query("insert into coach values('$id','$name','$dob','$email','$phone','$team','$points','$won','$total','$password')");


   echo $sql;
   $sql1="insert into login values('$_POST[id1]','$_POST[password]','coach','0')";
   mysql_query($sql,$con);
   mysql_query($sql1,$con);

   


}

?>
<?php

$id=0;
$sql="select max(sid) as id1 from coach";
$data=mysql_query($sql);
while ($row=mysql_fetch_array($data)) {
  $id=$row['id1'];

}
$id=$id+1;
?>


   <center>
               
      <form action="registercoach.php" class="sec-form" method="post" enctype="multipart/form-data">
<table width="500" border="0" align="center">

           <tr>
              <td>
                 <label><b>Coach ID<b></label></td>
                <td> <input type="text" name='id' value="<?php echo $id; ?>" disabled=true><input type="hidden" name='id1' value="<?php echo $id; ?>">
              </td>
               </tr>
               <tr>
                <td>
                 <label><b>Name</b></label></td>
                 <td>
                 <input type="text" name='name' required =required maxlength=18>
              </td>
           </tr>
           <tr>
                <td>
                 <label><b>Date of Birth</b></label></td>
                 <td>
                 <input type="date" name='dob' required="required">
              </td>
           </tr>
           <tr>
                <td>
                 <label><b>Email</b></label></td>
                 <td>
                 <input type="email" name='email' required="required">
              </td>
           </tr>

           <tr>
                <td>
                 <label><b>Contact no</b></label></td>
                 <td>
                 <input type="text" name='phone' pattern="[0-9]{10,12}">
              </td>
           </tr>
           <tr>
           <td>
                 <label><b>Team Name</b></label></td>
                 <td>
                 <input type="text" name='team' required="required">
              </td>
           </tr>

           <tr>
              <td>
                 <label><b>Points </b></label></td>
                <td> <input type="text" name='points' required="required" >
              </td>
           </tr>
           <br><br>
           <tr>
              <td>
                 <label><b>No: of games won</b></label></td>
                 <td>
                 <input type="text" name='won' required="required">
              </td>
           </tr><br><br>
           <tr>
              <td>
                 <label><b>Total Matches</b></label></td>
                 <td><input type="text" name='total' required="required">
              </td>
           </tr>

           
                         <td><b>Password</b></td>
                         <td><input type="password" name="password" required="required"></td>
              </tr>
           <tr>

              <td colspan="2" align="center">
                               <input type="submit" class="btn btn-info btn-no-float" name='Register' value="REGISTER">
              </td>

           </tr>
        </table>
</form>
</center>
      
  </div>
         </div>
         
         </div>

      <footer id="footer" class="footer">
         <div class="container">
            <div class="row">
               
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