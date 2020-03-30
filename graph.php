                                               
<!DOCTYPE html>
<html lang="en-US">
<body>

<h1>Placement graph</h1>


      <form action=graph.php method=post>
 <table align="center" border="0" width="300" cellspacing="4">
           <tr>
              <td colspan="2" align="center"><b></b></td>
           </tr><br><br>
           <tr>
              <td>
                 <label>TCS</label></td>
                <td> 
              </td>
               <br><br>



              <td>
                 <label></label></td>
                <td> <input type="text" name='pt' value="50">
              </td>
               </tr>
               <br><br>
               <tr>
              <td>
                 <label>wipro</label></td>
                <td> 
              </td>
               <br><br>



              <td>
                 <label></label></td>
                <td> <input type="text" name='pt' value="25">
              </td>
               </tr>
               <br><br>
               <tr>
              <td>
                 <label>info</label></td>
                <td> 
              </td>
               <br><br>



              <td>
                 <label></label></td>
                <td> <input type="text" name='pt' value="25">
              </td>
               </tr>
               <br><br>
 
  <tr>
              <td>
                 <label>technopark</label></td>
                <td> 
              </td>
               <br><br>



              <td>
                 <label></label></td>
                <td> <input type="text" name='pt' value="2">
              </td>
               </tr>
              
               
 <tr>
              <td>
                 <label>infinite</label></td>
                <td> 
              </td>
               <br><br>



              <td>
                 <label></label></td>
                <td> <input type="text" name='pt' value="15">
              </td>
               </tr>
              
</table>


<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {




  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day']
<?php
include('connect.php');
$query="select * from graph";
$data=mysql_query($query);
$k=0;
while($row=mysql_fetch_array($data))
{
   if ($k==0)
   echo ",['$row[companyname]',$row[count]]";
else
    echo ",['$row[companyname]',$row[count]]";
 $k=1;
}
?>

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Placement percentage of each company', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>

      