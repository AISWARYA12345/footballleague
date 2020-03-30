<?php
include('connect.php');
header('Content-Type: text/csv; charset=utf-8');
      header('Content-Disposition: attachment; filename=da.csv');
       $output = fopen("php://output", "w");
     fputcsv($output, array('sid','str'));
         $query = "select *  from prediction";
         $result = mysql_query($query, $con);
         while($row = mysql_fetch_array($result))
         {
              fputcsv($output,array($row['sid'],$row['str']));

         }
      fclose($output);

?>

