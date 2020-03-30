<?php
   include 'reg_header.php';
?>
   <div class="section-content">
      <div class="container">
         <h1 class="sec-main-title">
         Team Registration
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
   $license=$_POST['license'];
   $nation=$_POST['nation'];
   $coachname=$_POST['coachname'];
   $email=$_POST['email'];
   $address=$_POST['address'];
   $manager=$_POST['manager'];
   $password=$_POST['password'];


  $sql= mysql_query("insert into team values('$id','$name','$license','$nation','$coachname','$email','$address','$manager')");

    
   

   $sql1="insert into login values('$_POST[id1]','$_POST[password]','team','0')";
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
$sql="select max(sid) as id1 from team";
$data=mysql_query($sql);
while ($row=mysql_fetch_array($data)) {
  $id=$row['id1'];
  # code...
}
$id=$id+1;
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body >
   <center>

<form action=# class="sec-form" method=post enctype="multipart/form-data">
 <table width="500" border="0" align="center">         
           <tr>
              <td>
                 <label>Team ID</label></td>
                <td> <input type="text" name='id' value="<?php echo $id; ?>" disabled=true><input type="hidden" name='id1' value="<?php echo $id; ?>"
              </td>
               </tr>
               <tr>
                <td>
                 <label>Team Name</label></td>
                 <td>
                 <input type="text" name='name' required=required maxlength='18'>
              </td>
           </tr>
               <tr>
              <td>
                 <label>License No</label></td>
                 <td>
                 <input type="text" name='license' required="required">
              </td>
           </tr>
           <tr>
              <td>
                 <label>Nation</label></td>
                <td> <input type="text" name='nation' required="required">
              </td>
           </tr>

           <tr>
              <td>
                 <label>Email</label></td>
                 <td><input type="email" name='email' required="required">
              </td>
           </tr>

           <tr>
              <td>
                 <label>Address</label></td>
               <td>  <input type="text" name='address' required="required">
              </td>
           </tr>
           <tr>
              <td>
                 <label>Coachname</label></td>
                <td> <input type="text" name='coachname' required="required">
              </td>
           </tr><br>
            <td>
                 <label>Manager</label></td>
                 <td>
                 <input type="text" name='manager' required="required">
              </td></tr>
             
      <tr>
                       <td>Logo</td>
                       <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
              </tr>
               <tr>
            <td>
                 <label>Password</label></td>
                 <td>
                 <input type="password" name='password' required="required">
              </td></tr>

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