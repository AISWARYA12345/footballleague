



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
 $target_dir = "uploads/";
$target_file=$target_dir .$_POST['id1'].'.jpg';
$photo=move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) or die('Error'.mysql_error());

  $sql= mysql_query("insert into team values('$id','$name','$license','$nation','$coachname','$email','$address','$manager',$photo','$password')");

    echo $sql;
   

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
<body>

<form action=registerteam.php method=post enctype="multipart/form-data">
 <table align="center" border="0" width="300" cellspacing="4">
           <tr>
              <td colspan="2" align="center"><b>Team Registration</b></td>
           </tr><br><br>
           <tr>
              <td>
                 <label>Team ID</label></td>
                <td> <input type="text" name='id' value="<?php echo $id; ?>" disabled=true><input type="hidden" name='id1' value="<?php echo $id; ?>">
              </td>
               </tr><br><br>
               <tr>
                <td>
                 <label>Team Name</label></td>
                 <td>
                 <input type="text" name='name'>
              </td>
           </tr><br><br>
               <tr>
              <td>
                 <label>License No</label></td>
                 <td>
                 <input type="text" name='license'>
              </td>
           </tr><br><br>
           <tr>
              <td>
                 <label>Nation</label></td>
                <td> <input type="text" name='nation'>
              </td>
           </tr>
           <br><br>

           <tr>
              <td>
                 <label>Email</label></td>
                 <td><input type="text" name='email'>
              </td>
           </tr><br><br>

           <tr>
              <td>
                 <label>Address</label></td>
               <td>  <input type="text" name='address'>
              </td>
           </tr><br><br>
           <tr>
              <td>
                 <label>Coachname</label></td>
                <td> <input type="text" name='coachname'>
              </td>
           </tr><br><br><tr>
            <td>
                 <label>Manager</label></td>
                 <td>
                 <input type="text" name='manager'>
              </td></tr>
             
      <tr>
                       <td>Logo</td>
                       <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
              </tr>
               <tr>
            <td>
                 <label>Password</label></td>
                 <td>
                 <input type="password" name='password'>
              </td></tr>

           <tr>

              <td colspan="2" align="center">
                               <input type="submit" name='Register' value="REGISTER">
              </td>

           </tr>
        </table>
</form>
</body>
</html>