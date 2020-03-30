<html>
<head>
<title>
Registered Candidates
</title>
<body >
<!--
Coded by Prof. Sajeev Jaladharan
Date : 27.11.2015
email: sajeevjal@gmail.com
-->
<?php



$con = mysql_connect("localhost","root","");
if (!$con)
  {
      die('Could not connect: ' . mysql_error());
  }

mysql_select_db("snitdb",$con);
$result = mysql_query("SELECT sid,name,address, dob FROM player order by sid");

?>
 <table width="81%" border="0"  align="center">
<tr>
      <td colspan="12" align="center" width='300'><img id=bg src=""  /> </td>
     
     
    </tr>
<tr>
      <th>Id</th>
      <th>Name</th>
      <th>Address</th>
      <th>Dob</th>     
     
     
    </tr>

<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

<?php
$i=-1;
while($row = mysql_fetch_array($result))
  {
    if($i==1)
    {
        $clr="#FFFFFF";       
        $tclr="#000000";
    }
    else
    {
        $clr="#666666";
        $tclr="#FFFFFF";
    }
    $i=$i * -1;

    echo "<tr>";
      echo "<td  bgcolor='$clr'><font color='$tclr'>".$row['sid'] . "</font></td> ";
    echo "<td  bgcolor='$clr'><font color='$tclr'>".$row['name'] . "</font></td> ";
    echo "<td  bgcolor='$clr'><font color='$tclr'>".$row['address'] . "</font></td> ";
      echo "<td bgcolor='$clr'><font color='$tclr'>".$row['dob'] . "</font></td> ";
    
   
    echo "</tr>";
  }

mysql_close($con);
?>


   
  
  </table>
  <div class="info" align="center">
    <h2>&nbsp;</h2>
</div>

<ul><p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
