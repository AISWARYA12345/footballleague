
<?php
include('connect.php');
 include 'coach_header.php'; 

	if(isset($_POST['esubmit']))
	{

	   $id=$_POST['id1'];
	   $teamid=$_POST['teamid'];
	   $teamshots=$_POST['teamshots'];
	   $teamshotsontarget=$_POST['teamshotsontarget'];
	   $teamcorners=$_POST['teamcorners'];
	   $teamfouls=$_POST['teamfouls'];
	   $yellowcards=$_POST['yellowcards'];
	   $redcards=$_POST['redcards'];
	   $halftimegoals=$_POST['halftimegoals'];
	   $fulltimegoals=$_POST['fulltimegoals'];

	 	$str="";


	  if($teamshots>=15 and $teamshots<=20)
	  {
	  	$str=$str."teamshot_veryhigh ";
	  }
	  else
	  {
	  	$str=$str."teamshot_verylow ";
	  }


	  if($teamshotsontarget>=10 and $teamshotsontarget<=30)
	  {
	  	$str=$str."teamshotontarget_veryhigh ";
	  }
	  else
	  {
	  	$str=$str."teamshotontarget_verylow ";
	  }
	  if($teamcorners>=5 and $teamcorners<=10)
	   {
	   	$str=$str."teamcorner_veryhigh ";
	   }
	   else
	   {
	   	$str=$str."teamcorner_verylow ";
	  }

	  if($teamfouls>=0 and $teamfouls<=4)
	   {
	   	$str=$str."teamfouls_verylow ";
	   }
	   else
	   {
	   	$str=$str."teamfouls_veryhigh ";
	  }


	if($yellowcards<=10)
	  {
	  	$str=$str."teamyellowcards_verylow ";
	  }
	  else
	  {
	  	$str=$str."teamyellowcards_veryhigh ";
	  }
	  if($redcards<=2)
	  {
	  	$str=$str."teamredcards_verylow ";
	  }
	  else
	  {
	  	$str=$str."teamredcards_veryhigh ";
	  }
	  if($halftimegoals>=3 )
	  {
	  	$str=$str."halftimegoals_veryhigh ";
	  }
	  else
	  {
	  	$str=$str."halftimegoals_verylow ";
	  }
	  if($fulltimegoals>=3 )
	  {
	  	$str=$str."fulltimegoals_veryhigh ";
	  }
	  else
	  {
	  	$str=$str."fulltimegoals_verylow ";
	  }

echo $str;
	    $sql= "insert into prediction values('$id','$teamid','$teamshots','$teamshotsontarget','$teamcorners','$teamfouls', '$yellowcards','$redcards','$halftimegoals','$fulltimegoals','$str','')";
	    echo $sql;
	    mysql_query($sql,$con);

	}


$id=0;
$sql="select max(sid) as id1 from prediction";
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

<form action="" method=post enctype="multipart/form-data">
 <table align="center" border="0" width="300" cellspacing="4">
           <tr>
              <td colspan="2" align="center"><b>PREDICTION</b></td>
           </tr><br><br>
           <tr>
              <td>
                 <label>ID</label></td>
                <td> <input type="text" name='id' value="<?php echo $id; ?>" disabled=true><input type="hidden" name='id1' value="<?php echo $id; ?>"
              </td>
               </tr>
               <tr>
                <td>
                 <label>Team id</label></td>
                 <td>
                 <input type="text" name='teamid'>
              </td>
           </tr>

           <tr>
              <td>
                 <label>Team shots</label></td>
                <td> <input type="text" name='teamshots' required="required">
              </td>
           </tr>

           <tr>
              <td>
                 <label>Team shots on target</label></td>
                <td> <input type="text" name='teamshotsontarget' required="required">
              </td>
           </tr>


              <td>
                 <label>Team corners</label></td>
               <td>  <input type="text" name='teamcorners' required="required">
              </td>
           </tr>
           <tr>
            <td>
                 <label>Team Fouls</label></td>
                 <td>
                 <input type="text" name='teamfouls' required="required">
              </td></tr>

              <tr>
              <td>
                 <label>No: of yellow cards</label></td>
                <td> <input type="text" name='yellowcards' required="required">
              </td>
           </tr>

           <tr>
              <td>
                 <label>No: of red cards</label></td>
                <td> <input type="text" name='redcards' required="required">
              </td>
           </tr>

			<tr>
              <td>
                 <label>Half time goals</label></td>
                <td> <input type="text" name='halftimegoals' required="required">
              </td>
           </tr>

           <tr>
              <td>
                 <label>Full time goals</label></td>
                <td> <input type="text" name='fulltimegoals' required="required">
              </td>
           </tr>


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


           <tr>

              <td colspan="2" align="center">
                               <input type="submit" name='esubmit' value="SUBMIT">
              </td>

           </tr>

        </table>
        <a href="downlaod.php">download csv</a>
</form>


<form method='POST' enctype='multipart/form-data'>
<center>
Upload CSV FILE: <input type='file' name='csv_info' />
<input type='submit' name='submit' value='Upload' style="height: 50px; width: 150px; left: 250; top: 250;"/>
</center>
</form>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("snitdb",$con);
if(isset($_POST['submit'])){
	
if($_FILES['csv_info']['name']){
  $arrFileName = explode('.',$_FILES['csv_info']['name']);
   if($arrFileName[1] == 'csv'){
     $handle = fopen($_FILES['csv_info']['tmp_name'], "r");
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
         $id=$data[0];
         $result = $data[2];

         $sql="update prediction set predictresult='$result' where sid='$id'";
 mysql_query($sql);
                                   }
                        fclose($handle);
}
}
}





?>
</center>
</form>
</body>
</html>

