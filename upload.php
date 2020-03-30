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


