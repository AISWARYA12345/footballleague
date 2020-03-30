<?php
   include 'reg_header.php';
?>
   <div class="section-content">
      <div class="container">
         <h1 class="sec-main-title">
         Player Registration
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
   $address=$_POST['address'];
   $dob=$_POST['dob'];
   $phone=$_POST['phone'];
   $email=$_POST['email'];
   $height=$_POST['height'];
   $weight=$_POST['weight'];
   $type=$_POST['type'];
   $totalmatches=$_POST['totalmatches'];
   $password=$_POST['password'];
   

  $sql= "insert into player values('$id','$name','$address','$dob','$phone','$email','$height','$weight','$type','$totalmatches')";


   
   
   $sql1="insert into login values('$_POST[id1]','$_POST[password]','player','0')";
   mysql_query($sql,$con);
    mysql_query($sql1,$con);
   $target_dir = "uploads/";
   $target_file=$target_dir .$_POST['id1'].'.jpg';
   move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],

   $target_file) or die('Error'.mysql_error());


}

?>
<?php

$id=0;
$sql="select max(sid) as id1 from player";
$data=mysql_query($sql);
while ($row=mysql_fetch_array($data)) {
  $id=$row['id1'];

}
$id=$id+1;
?>


   <center>
      <form action="#" class="sec-form" method="post" enctype="multipart/form-data">
      <table width="500" border="0" align="center">
           <tr><td>
                 <label><b>Player ID<b></label></td>
                <td> <input type="text" name='id' value="<?php echo $id; ?>" disabled=true><input type="hidden" name='id1' value="<?php echo $id; ?>">
              </td>
               </tr>
               <tr>
                <td>
                 <label><b>Name</b></label></td>
                 <td>
                 <input type="text" name='name' required ="required" maxlength=18>
              </td>
           </tr>
           <tr>
                <td>
                 <label><b>Address</b></label></td>
                 <td>
                 <input type="text" name='address' required="required">
              </td>
           </tr>
           <tr>
                <td>
                 <label><b>Date of birth</b></label></td>
                 <td>
                 <input type="date" name='dob' required="required">
              </td>
           </tr>

           <tr>
              <td>
                 <label><b>Phone NO</b></label></td>
                <td> <input type="text" name='phone' required="required" pattern="[0-9]{10,12}" >
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
                 <label><b>Height</b></label></td>
                 <td><input type="text" name='height' required="required">
              </td>
           </tr>

           <tr>
              <td>
                 <label><b>Weight</b></label></td>
               <td>  <input type="text" name='weight' required="required">
              </td>
           </tr>
           <tr>
              <td>
                 <label><b>Type of player</b></label></td>
                <td> <input type="text" name='type' required="required">
              </td>
           </tr>
           <tr>
              <td>
                 <label><b>No of matches played</b></label></td>
                <td> <input type="text" name='totalmatches' required="required">
              </td>
           </tr>
              <tr>
                 <td><b>Photo</b></td>
                 <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
              </tr>
         <tr>
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
   </body>
</html>




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