<?php
include('connect.php');
  session_start();  echo "HELLO ".$_SESSION["username"];
?>
<?php
      $id=0;
      $sql="select max(sid) as id1 from bidding";
      $data=mysql_query($sql);
      while ($row=mysql_fetch_array($data)) {
      $id=$row['id1'];
      }
      $id=$id+1;
?>
<html>
  <head>
  </head>
  <body>
    <center>
    <form action=# method=post enctype="multipart/form-data">
      <table align="center" border="0" width="300" cellspacing="4">
        <tr>
          <td>
            <label><b>Bid ID<b></label></td>
            <td> <input type="text" name='id' value="<?php echo $id; ?>" disabled=true><input type="hidden" name='id1' value="<?php echo $id; ?>">
          </td>
        </tr>
        <tr>
          <td>
            <label><b>player ID</b></label></td>
            <td>
              <input type="text" name='pid' value="<?php echo $_POST['list']; ?>" disabled=true>
            </td>
          </tr>
          <tr>
            <tr>
              <td>
                <label><b>amount</b></label></td>
                <td>
                  <input type="text" name='amount'>
                </td>
              </tr>
              <tr>
                <td colspan="2" align="center">
                  <input type="submit" name='submit' value="submit">
                </td>
              </tr>
            </table>
          </form>
          </center>
        </body>
      </html>
      <?php
      if(isset($_POST['submit']))
      {
      $id=$_POST['id1'];
      $pid=$_POST['pid'];
      $amount=$_POST['amount'];
      $sql= mysql_query("insert into bidding values('$id','$pid','$amount')");
      echo $sql;
      }
      ?>